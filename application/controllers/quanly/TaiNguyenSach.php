<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TaiNguyenSach extends Admin_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->database();
		$this->load->model('ModelChung','ModelTaiNguyen');
		$this->load->model('ModelChung','ModelSach');
		$this->load->model('ModelChung','ModelLoaiTaiNguyen');
        $this->ModelTaiNguyen->set_table('TaiNguyenSach');
        $this->ModelSach->set_table('Sach');
        $this->ModelLoaiTaiNguyen->set_table('LoaiTaiNguyen');
	}
	public function index($id = null){
		if($id == null) {
			$dsTaiNguyenSach = $this->ModelTaiNguyen->get_list();
		}
		else {
			$dsTaiNguyenSach = $this->ModelTaiNguyen->get_list(array('where' => 'MaSach='.$id));
		}
		$this->smartyci->assign('DanhSach',$dsTaiNguyenSach);

		// Sách
		$tempMaSach = $this->ModelSach->get_list();
        $dsMaSachNe = array();
        $dsMaSach[-1] = "Không có";
        foreach ($tempMaSach as $key => $value) {
            $dsMaSach[$value->id] = $value->TenSach;
        }
        $this->smartyci->assign('dsTenSach',$dsMaSach);

        // Loai Tài Nguyên
        $tempMaLoaiTaiNguyen = $this->ModelLoaiTaiNguyen->get_list();
        $dsMaLoaiTaiNguyenNe = array();
        $MaLoaiTaiNguyen[-1] = "Không có";
        foreach ($tempMaLoaiTaiNguyen as $key => $value) {
            $MaLoaiTaiNguyen[$value->id] = $value->TenTaiNguyen;
        }
        $this->smartyci->assign('dsLoaiTaiNguyen',$MaLoaiTaiNguyen);

		 // Set title page
        $this->smartyci->assign('title', 'DATATABLE');

        // Set CSS plugins
        $css_plugin = array(
            'datatables/css/dataTables.bootstrap.css',
            'datatables/css/datatables.responsive.css',
            'fuelux/dist/css/fuelux.min.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set JS plugins
        $js_plugin = array(
            'datatables/js/jquery.dataTables.min.js',
            'datatables/js/dataTables.bootstrap.js',
            'datatables/js/datatables.responsive.js',
            'fuelux/dist/js/fuelux.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.table.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'quanly/contents/tainguyensach/DanhSach.html');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');
        $this->smartyci->assign('active_table_datatable', 'active');

        // Render view on main layout
        $this->smartyci->display('quanly/contents/layout.html');
	}
	public function TaoMoi(){
		// load tới thư viện
		$this->load->library('form_validation');
		if($this->form_validation->run('TaiNguyenSach') ==True){
			$data = array(
				'MaSach' =>$this->input->post('MaSach'),
				'MaLoaiTaiNguyen' =>$this->input->post('MaLoaiTaiNguyen'),
				'TenTaiNguyen' =>$this->input->post('TenTaiNguyen'),
				'DuongDan' => $this->input->post('DuongDan')
			);
			$this->ModelTaiNguyen->TaoMoi($data);
			redirect('quanly/tainguyensach');
		}

		$dsSach = array();
        // Model Load Danh sách 
        foreach ($this->ModelSach->get_list() as $key => $value) {
        	$dsSach[$value->id] = $value->TenSach;
        }
        // Tạo 1 biến cho View dựa vào giá trị của biến $dsTaiNguyenSach
        $this->smartyci->assign('dsSach',$dsSach);

		$dsLoaiTaiNguyen = array();
        foreach ($this->ModelLoaiTaiNguyen->get_list() as $key => $value) {
        	$dsLoaiTaiNguyen[$value->id] = $value->TenTaiNguyen;
        }
        $this->smartyci->assign('dsLoaiTaiNguyen',$dsLoaiTaiNguyen);

		// Set title page
        $this->smartyci->assign('title', 'Tạo Mới Tài Nguyên Sách');

        // Set CSS plugins
        $css_plugin = array(
            'bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
            'jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css',
            'chosen_v1.2.0/chosen.min.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set JS plugins
        $js_plugin = array(
            'bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js',
            'jasny-bootstrap-fileinput/js/jasny-bootstrap.fileinput.min.js',
            'holderjs/holder.js',
            'bootstrap-maxlength/bootstrap-maxlength.min.js',
            'jquery-autosize/jquery.autosize.min.js',
            'chosen_v1.2.0/chosen.jquery.min.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        // Set JS page
        $js_page = array(
            'blankon.form.element.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'quanly/contents/TaiNguyenSach/TaoMoi.html');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');
        $this->smartyci->assign('active_form_element', 'active');

        // Render view on main layout
        $this->smartyci->display('quanly/contents/layout.html');
	}

	public function Xoa($id){
		$TaiNguyenSach = $this->ModelTaiNguyen->get_info($id);
		if($TaiNguyenSach!==False){
			$this->ModelTaiNguyen->delete($id);
		}
		redirect('quanly/tainguyensach');
	}

	public function ChinhSua($id){
		$this->load->library('form_validation');
		$TaiNguyenSach = $this->ModelTaiNguyen->get_info($id);
		if($TaiNguyenSach !== false){
			$this->smartyci->assign('TaiNguyenSach',$TaiNguyenSach);
			if($this->form_validation->run('TaiNguyenSach') == TRUE) {
                $data = array(
				'MaSach' =>$this->input->post('MaSach'),
				'MaLoaiTaiNguyen' =>$this->input->post('MaLoaiTaiNguyen'),
				'TenTaiNguyen' =>$this->input->post('TenTaiNguyen'),
				'DuongDan' => $this->input->post('DuongDan')   
                    );
                $this->ModelTaiNguyen->CapNhat($id,$data);
                redirect(current_url());
            }

            $dsSach = array();
	        // Model Load Danh sách 
	        foreach ($this->ModelSach->get_list() as $key => $value) {
	        	$dsSach[$value->id] = $value->TenSach;
	        }
	        // Tạo 1 biến cho View dựa vào giá trị của biến $dsTaiNguyenSach
	        $this->smartyci->assign('dsSach',$dsSach);

			$dsLoaiTaiNguyen = array();
	        foreach ($this->ModelLoaiTaiNguyen->get_list() as $key => $value) {
	        	$dsLoaiTaiNguyen[$value->id] = $value->TenTaiNguyen;
	        }
	        $this->smartyci->assign('dsLoaiTaiNguyen',$dsLoaiTaiNguyen);

            // Set title page
            $this->smartyci->assign('title', 'Chỉnh sửa tài nguyên sách');

            // Set CSS plugins
            $css_plugin = array(
                'bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
                'jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css',
                'chosen_v1.2.0/chosen.min.css'
            );
            $this->smartyci->assign('list_css_plugin',$css_plugin);

            // Set JS plugins
            $js_plugin = array(
                'bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js',
                'jasny-bootstrap-fileinput/js/jasny-bootstrap.fileinput.min.js',
                'holderjs/holder.js',
                'bootstrap-maxlength/bootstrap-maxlength.min.js',
                'jquery-autosize/jquery.autosize.min.js',
                'chosen_v1.2.0/chosen.jquery.min.js'
            );
            $this->smartyci->assign('list_js_plugin',$js_plugin);


            // Set JS page
            $js_page = array(
                'blankon.form.element.js'
            );
            $this->smartyci->assign('list_js_page',$js_page);
            // Set content page
            $this->smartyci->assign('body', 'quanly/contents/TaiNguyenSach/ChinhSua.html');

            // Set active menu
            $this->smartyci->assign('active_forms', 'active');
            $this->smartyci->assign('active_form_element', 'active');

            // Render view on main layout
            $this->smartyci->display('quanly/contents/layout.html');
        }
        else {
            redirect('quanly/TaiNguyenSach/ChinhSua.html');
		}
	}
}