<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DanhMuc extends Admin_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('ModelChung');
        $this->ModelChung->set_table('DanhMuc');
    }

    public function  index() {

    }

    public function TaoMoi() {

        // Thư vien form validation
        $this->load->library('form_validation');
        // Load helper form hỗ trợ cho việc xử lý form kết hợp với form validation
        $this->load->helper();
        // Method trong thư viện form_validation cho View Tạo Mới 

        // Set rules đã được tự động load ở application/config
        if($this->form_validation->run('DanhMuc') == TRUE) {
        	echo "OK";
		}
		$dsDanhMuc = array();
        // Model Load Danh sách danh mục
        $dsDanhMuc[-1] = "Không có";
        foreach ($this->ModelChung->get_list() as $key => $value) {
        	$dsDanhMuc[$value->id] = $value->TenDanhMuc;
        }
        // Tạo 1 biến cho View dựa vào giá trị của biến $dsDanhMuc
        $this->smartyci->assign('dsDanhMuc',$dsDanhMuc);

    	// Set title page
        $this->smartyci->assign('title', 'Tạo mới danh mục');

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
        $this->smartyci->assign('body', 'quanly/contents/DanhMuc/TaoMoi.html');

        // Set active menu
        $this->smartyci->assign('active_forms', 'active');
        $this->smartyci->assign('active_form_element', 'active');

        // Render view on main layout
        $this->smartyci->display('quanly/contents/layout.html');
    }

    public function CapNhat($id) {
        // Thu vien form validation
        $this->load->library('form_validation');
    }

    public function Xoa($id) {

    }
}