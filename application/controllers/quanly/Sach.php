<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sach extends Admin_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->database();
		$this->load->model('ModelChung','ModelTacGia');
		$this->load->model('ModelChung','ModelSach');
		$this->load->model('ModelChung','ModelDanhMuc');
		$this->ModelTacGia->set_table('TacGia');
		$this->ModelSach->set_table('Sach');
		$this->ModelDanhMuc->set_table('DanhMuc');
	}
	public function index(){

		$dsSach = $this->ModelSach->get_list();
        $this->smartyci->assign('DanhSach', $dsSach);

       // Get list từ modelchung
        $tempTacGia = $this->ModelTacGia->get_list();
        $dsTacGia = array();
        $dsTacGiac[-1] = "Không có";

        foreach ($tempTacGia as $key => $value) {
        $dsTacGiac[$value->id] = $value->TenTacGia;
        }
        // var_dump($dsTacGiac);exit();
        $this->smartyci->assign('DanhSachTacGia', $dsTacGiac);

        $tempDanhMuc = $this->ModelDanhMuc->get_list();
        $dsDanhMucNe = array();
        $dsDanhMuc[-1] = "Không có";

        foreach ($tempDanhMuc as $key => $value) {
        $dsDanhMuc[$value->id] = $value->TenDanhMuc;
        }
        $this->smartyci->assign('DanhSachDanhMuc', $dsDanhMuc);

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
        $this->smartyci->assign('body', 'quanly/contents/Sach/DanhSach.html');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');
        $this->smartyci->assign('active_table_datatable', 'active');

        // Render view on main layout
        $this->smartyci->display('quanly/contents/layout.html');
	}

	public function TaoMoi() {
		// load tới thư viện
		$this->load->library('form_validation');

		if($this->form_validation->run('Sach') == true){

			// 
		
			$config['upload_path']          = './uploads/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 2048;
	        $config['max_width']            = 1024;
	        $config['max_height']           = 768;

	        $this->load->library('upload', $config);

	        if ( ! $this->upload->do_upload('HinhAnhSach'))
	        {
	                $error = array('error' => $this->upload->display_errors());

	                var_dump($error);
					exit();
	        }
	        else
	        {
	                $sach = $this->upload->data();

	                $data = array(
						'TenSach' => $this->input->post('TenSach'),
						'MaTacGia' => $this->input->post('MaTacGia'),
						'MaDanhMuc' =>$this->input->post('MaDanhMuc'),
						'MieuTaNgan' => $this->input->post('MieuTaNgan'),
						'MieuTaDai' => $this->input->post('MieuTaDai'),
						'ThoiGianDang' => date("Y-m-d H:i:s"),
						'ThoiGianPhatHanh' => $this->input->post('ThoiGianPhatHanh'),
						'Slug' => url_title($this->ModelSach->toASCII($this->input->post('TenSach')), 'dash', true),
						'HinhAnhSach' => $sach['file_name']
					);
					$this->ModelSach->TaoMoi($data);
	        }
	        redirect('quanly/Sach');
			// 
		}


		$dsSach = array();
        // Model Load Danh sách danh mục
        foreach ($this->ModelTacGia->get_list() as $key => $value) {
        	$dsSach [$value->id] = $value->TenTacGia;
        }
        //tạo dsSach
        $this->smartyci->assign('dsSach',$dsSach);

        $dsDanhMuc = array();
        foreach ($this->ModelDanhMuc->get_list() as $key => $value) {
        	$dsDanhMuc [$value->id] = $value->TenDanhMuc;
        }
        $this->smartyci->assign('dsDanhMuc',$dsDanhMuc);


		// Set title page
        $this->smartyci->assign('title', 'Tạo Mới Sách');

         // Set Custom Script // tạo ngày giờ cho thời gian đăng
        $this->smartyci->assign('custom_script', "
            $(document).ready(function(){
                function generateAlias(text) {
                    text = text.toLowerCase();
                    text = text.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, \"a\");
                    text = text.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, \"e\");
                    text = text.replace(/ì|í|ị|ỉ|ĩ/g, \"i\");
                    text = text.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, \"o\");
                    text = text.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, \"u\");
                    text = text.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, \"y\");
                    text = text.replace(/đ/g, \"d\");
                    text = text.replace(/'|\\\"|\\(|\\)|\\[|\\]/g, \"\");
                    text = text.replace(/\W+/g, \"-\");
                    if (text.slice(-1) === \"-\")
                        text = text.replace(/-+$/, \"\");

                    if (text.slice(0, 1) === \"-\")
                        text = text.replace(/^-+/, \"\");

                    return text;
                }
                $('#TenSach').on('keydown keyup blur focusout change keypress',function(){
                    $('#slug').val(generateAlias($('#TenSach').val()));
                });
                $('#slug').val(generateAlias($('#TenSach').val()));
            });

            $('#ThoiGianPhatHanh').datepicker({
                format: 'yyyy',
                todayBtn: 'linked'
            });
            
			function readURL(input) {
				if (input.files && input.files[0]) {
				        var reader = new FileReader();

				        reader.onload = function (e) {
				            $('#Hinh').attr('src', e.target.result);
				        }

				        reader.readAsDataURL(input.files[0]);
				    }
				}

				$(\"#HinhAnhSach\").change(function(){
				    readURL(this);
			});
        ");

        // Set CSS plugins
        $css_plugin = array(
            'bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
            'jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css',
            'chosen_v1.2.0/chosen.min.css',
            'bootstrap-datepicker-vitalets/css/datepicker.css'
        );
        $this->smartyci->assign('list_css_plugin',$css_plugin);

        // Set JS plugins
        $js_plugin = array(
            'bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js',
            'jasny-bootstrap-fileinput/js/jasny-bootstrap.fileinput.min.js',
            'holderjs/holder.js',
            'bootstrap-maxlength/bootstrap-maxlength.min.js',
            'jquery-autosize/jquery.autosize.min.js',
            'chosen_v1.2.0/chosen.jquery.min.js',
            'bootstrap-datepicker-vitalets/js/bootstrap-datepicker.js'
        );
        $this->smartyci->assign('list_js_plugin',$js_plugin);

        

        // Set JS page

        $js_page = array(
            'blankon.form.element.js'
        );
        $this->smartyci->assign('list_js_page',$js_page);

        // Set content page
        $this->smartyci->assign('body', 'quanly/contents/Sach/TaoMoi.html');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');
        $this->smartyci->assign('active_form_element', 'active');

        // Render view on main layout
        $this->smartyci->display('quanly/contents/layout.html');
	}
	public function Xoa($id){
		$Sach = $this->ModelSach->get_info($id);
		if($Sach !== False) {
			$this->ModelSach->delete($id);
		}
		redirect('quanly/Sach');
	}
	public function ChinhSua($id){
		$this->load->library('form_validation');
		$Sach = $this->ModelSach->get_info($id);
		if($Sach !==False){
			$this->smartyci->assign('Sach',$Sach);

			if($this->form_validation->run('Sach') == true){

			$data = array(
				'TenSach' => $this->input->post('TenSach'),
				'MaTacGia' => $this->input->post('MaTacGia'),
				'MaDanhMuc' =>$this->input->post('MaDanhMuc'),
				'MieuTaNgan' => $this->input->post('MieuTaNgan'),
				'MieuTaDai' => $this->input->post('MieuTaDai'),
				'ThoiGianDang' => date("Y-m-d H:i:s"),
				'ThoiGianPhatHanh' => $this->input->post('ThoiGianPhatHanh'),
				'Slug' => url_title($this->ModelSach->toASCII($this->input->post('TenSach')), 'dash', true)
			);

			
			$config['upload_path']          = './uploads/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 2048;
	        $config['max_width']            = 1024;
	        $config['max_height']           = 768;

	        $this->load->library('upload', $config);
	        if (!empty($_FILES['HinhAnhSach']['name'])) {
		        if ( ! $this->upload->do_upload('HinhAnhSach'))
		        {
		                $error = array('error' => $this->upload->display_errors());

		                var_dump($error);
						exit();
		        }
		        else
		        {
		                $sach = $this->upload->data();
		                $data['HinhAnhSach'] = $sach['file_name'];
						
		        }
		    }
	        $this->ModelSach->CapNhat($id,$data);
	        redirect(current_url());

			// 
			}
			$dsSach = array();
	        // Model Load Danh sách danh mục
	        foreach ($this->ModelTacGia->get_list() as $key => $value) {
	        	$dsSach [$value->id] = $value->TenTacGia;
	        }
	        //tạo dsSach
	        $this->smartyci->assign('dsSach',$dsSach);

	         $dsDanhMuc = array();
        	// Model Load Danh sách danh mục
        	foreach ($this->ModelDanhMuc->get_list() as $key => $value) {
        		$dsDanhMuc [$value->id] = $value->TenDanhMuc;
        	}
        	//tạo dsSach
        	$this->smartyci->assign('dsDanhMuc',$dsDanhMuc);

			// Set title page
	        $this->smartyci->assign('title', 'Tạo Mới Sách');

	         // Set Custom Script // tạo ngày giờ cho thời gian đăng
	        $this->smartyci->assign('custom_script', "
	            $(document).ready(function(){
	                function generateAlias(text) {
	                    text = text.toLowerCase();
	                    text = text.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, \"a\");
	                    text = text.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, \"e\");
	                    text = text.replace(/ì|í|ị|ỉ|ĩ/g, \"i\");
	                    text = text.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, \"o\");
	                    text = text.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, \"u\");
	                    text = text.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, \"y\");
	                    text = text.replace(/đ/g, \"d\");
	                    text = text.replace(/'|\\\"|\\(|\\)|\\[|\\]/g, \"\");
	                    text = text.replace(/\W+/g, \"-\");
	                    if (text.slice(-1) === \"-\")
	                        text = text.replace(/-+$/, \"\");

	                    if (text.slice(0, 1) === \"-\")
	                        text = text.replace(/^-+/, \"\");

	                    return text;
	                }
	                $('#TenSach').on('keydown keyup blur focusout change keypress',function(){
	                    $('#slug').val(generateAlias($('#TenSach').val()));
	                });
	                $('#slug').val(generateAlias($('#TenSach').val()));
	            });

	            $('#ThoiGianPhatHanh').datepicker({
	                format: 'yyyy',
	                todayBtn: 'linked'
	            });
	            // hiện thị lại hình ảnh, #hinh truyền qua id bên chinh sua, #HinhAnhSach bên chỉnh sửa

	            function readURL(input) {
				 	if (input.files && input.files[0]) {
				        var reader = new FileReader();

				        reader.onload = function (e) {
				            $('#Hinh').attr('src', e.target.result);
				        }

				        reader.readAsDataURL(input.files[0]);
				    }
				}

				$(\"#HinhAnhSach\").change(function(){
				    readURL(this);
				});
	        ");

	        // Set CSS plugins
	        $css_plugin = array(
	            'bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
	            'jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css',
	            'chosen_v1.2.0/chosen.min.css',
	            'bootstrap-datepicker-vitalets/css/datepicker.css'
	        );
	        $this->smartyci->assign('list_css_plugin',$css_plugin);

	        // Set JS plugins
	        $js_plugin = array(
	            'bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js',
	            'jasny-bootstrap-fileinput/js/jasny-bootstrap.fileinput.min.js',
	            'holderjs/holder.js',
	            'bootstrap-maxlength/bootstrap-maxlength.min.js',
	            'jquery-autosize/jquery.autosize.min.js',
	            'chosen_v1.2.0/chosen.jquery.min.js',
	            'bootstrap-datepicker-vitalets/js/bootstrap-datepicker.js'
	        );
	        $this->smartyci->assign('list_js_plugin',$js_plugin);

        

	        // Set JS page

	        $js_page = array(
	            'blankon.form.element.js'
	        );
	        $this->smartyci->assign('list_js_page',$js_page);

	        // Set content page
	        $this->smartyci->assign('body', 'quanly/contents/Sach/ChinhSua.html');

	        // Set active menu
	        $this->smartyci->assign('active_forms', 'active');
	        $this->smartyci->assign('active_form_element', 'active');

	        // Render view on main layout
	        $this->smartyci->display('quanly/contents/layout.html');
		}
		else {
            redirect('quanly/Sach');
        }

    }
}