<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoaiTaiNguyen extends Admin_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->database();
		$this->load->model('ModelChung');
        $this->ModelChung->set_table('LoaiTaiNguyen');
	}


	public function index(){
		// Get list từ modelchung
        $dsLoaiTaiNguyen = $this->ModelChung->get_list();
        $this->smartyci->assign('danhsach', $dsLoaiTaiNguyen);

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
        $this->smartyci->assign('body', 'quanly/contents/LoaiTaiNguyen/DanhSach.html');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');
        $this->smartyci->assign('active_table_datatable', 'active');

        // Render view on main layout
        $this->smartyci->display('quanly/contents/layout.html');
	}

	public function TaoMoi(){

		$this->load->library('form_validation');

		if($this->form_validation->run('LoaiTaiNguyen') == true){
			$data = array(
				'TenTaiNguyen' => $this->input->post('TenTaiNguyen')
			);
			$this->ModelChung->TaoMoi($data);
			redirect('quanly/LoaiTaiNguyen');
		}
		// Set title page
        $this->smartyci->assign('title', 'Tạo Mới Loại Tài Nguyên');

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
        $this->smartyci->assign('body', 'quanly/contents/LoaiTaiNguyen/TaoMoi.html');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');
        $this->smartyci->assign('active_form_element', 'active');

        // Render view on main layout
        $this->smartyci->display('quanly/contents/layout.html');
	}

	public function Xoa($id){
		$LoaiTaiNguyen = $this->ModelChung->get_info($id);
		if($LoaiTaiNguyen!==false){
			$this->ModelChung->delete($id);
		}
		redirect('quanly/loaitainguyen');
	}

	public function ChinhSua($id){
		 // Thư vien form validation
        $this->load->library('form_validation');

        $LoaiTaiNguyen = $this->ModelChung->get_info($id);
        if($LoaiTaiNguyen !== FALSE) {
            //
            $this->smartyci->assign('LoaiTaiNguyen', $LoaiTaiNguyen);

            // Set rules đã được tự động load ở application/config
            if($this->form_validation->run('LoaiTaiNguyen') == TRUE) {
                $data = array(
                    'TenTaiNguyen' => $this->input->post('TenTaiNguyen')
                    );
                $this->ModelChung->CapNhat($id,$data);
                redirect(base_url('quanly/LoaiTaiNguyen/'));
            }

            // Set title page
            $this->smartyci->assign('title', 'Chỉnh sửa loại tài nguyên');

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
            $this->smartyci->assign('body', 'quanly/contents/LoaiTaiNguyen/ChinhSua.html');

            // Set active menu
            $this->smartyci->assign('active_forms', 'active');
            $this->smartyci->assign('active_form_element', 'active');

            // Render view on main layout
            $this->smartyci->display('quanly/contents/layout.html');
        }
        else {
            redirect('quanly/LoaiTaiNguyen');
        }
	}
}