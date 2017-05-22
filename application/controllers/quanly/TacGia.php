<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TacGia extends Admin_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->database();
		$this->load->model('ModelChung');
        $this->ModelChung->set_table('TacGia');
	}
	public function index(){

 		// Get list từ modelchung
        $dsTacGia = $this->ModelChung->get_list();
        $this->smartyci->assign('danhsach', $dsTacGia);

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
        $this->smartyci->assign('body', 'quanly/contents/TacGia/DanhSach.html');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');
        $this->smartyci->assign('active_table_datatable', 'active');

        // Render view on main layout
        $this->smartyci->display('quanly/contents/layout.html');
	}

	public function TaoMoi() {
		// load tới thư viện
		$this->load->library('form_validation');

		if($this->form_validation->run('TacGia') == true){
			$data = array(
				'TenTacGia' => $this->input->post('TenTacGia'),
				'Slug' => url_title($this->ModelChung->toASCII($this->input->post('TenTacGia')),'dash',true)
			);
			$this->ModelChung->TaoMoi($data);
			redirect('quanly/TacGia');
		}
		// Set title page
        $this->smartyci->assign('title', 'Tạo Mới Tác Giả');

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

        // Set Custom Script
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
                $('#TenTacGia').on('keydown keyup blur focusout change keypress',function(){
                    $('#slug').val(generateAlias($('#TenTacGia').val()));
                });
            });
        ");

        // Set content page
        $this->smartyci->assign('body', 'quanly/contents/TacGia/TaoMoi.html');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');
        $this->smartyci->assign('active_form_element', 'active');

        // Render view on main layout
        $this->smartyci->display('quanly/contents/layout.html');
	}

	public function Xoa($id){
		$DanhSach = $this->ModelChung->get_info($id);
		if($danhsach !==FALSE){
			$this->ModelChung->delete($id);
		} 
		redirect('quanly/tacgia');
	}

	public function ChinhSua($id){
		 // Thư vien form validation
        $this->load->library('form_validation');

        $TacGia = $this->ModelChung->get_info($id);
        if($TacGia !== FALSE) {
            //
            $this->smartyci->assign('TacGia', $TacGia);

            // Set rules đã được tự động load ở application/config
            if($this->form_validation->run('TacGia') == TRUE) {
                $data = array(
                    'TenTacGia' => $this->input->post('TenTacGia'),
                    'Slug' => url_title($this->ModelChung->toASCII($this->input->post('TenTacGia')), 'dash', true)
                    );
                $this->ModelChung->CapNhat($id,$data);
                redirect(base_url('quanly/tacgia/'));
            }

            // Set title page
            $this->smartyci->assign('title', 'Chỉnh sửa tác giả');

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

            // Set Custom Script
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
                    $('#TenTacGia').on('keydown keyup blur focusout change keypress',function(){
                        $('#slug').val(generateAlias($('#TenTacGia').val()));
                    });
                });
            ");

            // Set JS page
            $js_page = array(
                'blankon.form.element.js'
            );
            $this->smartyci->assign('list_js_page',$js_page);
            // Set content page
            $this->smartyci->assign('body', 'quanly/contents/TacGia/ChinhSua.html');

            // Set active menu
            $this->smartyci->assign('active_forms', 'active');
            $this->smartyci->assign('active_form_element', 'active');

            // Render view on main layout
            $this->smartyci->display('quanly/contents/layout.html');
        }
        else {
            redirect('quanly/TacGia');
        }
	}
}