<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DanhMuc extends Admin_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('ModelChung');
        $this->ModelChung->set_table('DanhMuc');
    }

    public function  index() {

        // Get list từ modelchung
        $tempDanhMuc = $this->ModelChung->get_list();
        $dsDanhMucNe = array();
        $dsDanhMuc[-1] = "Không có";
        foreach ($tempDanhMuc as $key => $value) {
            $dsDanhMuc[$value->id] = $value->TenDanhMuc;
        }
        foreach ($tempDanhMuc as $key => $value) {
            if($tempDanhMuc[$key]->MaDanhMucCha == -1) {
                $tempDanhMuc[$key]->TenDanhMucCha = 'Không có';
            }
            else {
                $tempDanhMuc[$key]->TenDanhMucCha = $dsDanhMuc[$value->MaDanhMucCha];
            }
        }
        $this->smartyci->assign('danhsach', $tempDanhMuc);

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
        $this->smartyci->assign('body', 'quanly/contents/DanhMuc/DanhSach.html');

        // Set active menu
        $this->smartyci->assign('active_tables', 'active');
        $this->smartyci->assign('active_table_datatable', 'active');

        // Render view on main layout
        $this->smartyci->display('quanly/contents/layout.html');
    }

    public function TaoMoi() {
        // Thư vien form validation
        $this->load->library('form_validation');
        // Load helper form hỗ trợ cho việc xử lý form kết hợp với form validation

        // Set rules đã được tự động load ở application/config
        if($this->form_validation->run('DanhMuc') == TRUE) {
        	//echo "OK";
            $data = array(
                'TenDanhMuc' => $this->input->post('TenDanhMuc'),
                'MaDanhMucCha' => $this->input->post('MaDanhMucCha'),
                'Slug' => url_title($this->ModelChung->toASCII($this->input->post('TenDanhMuc')), 'dash', true)
                );
            $this->ModelChung->TaoMoi($data);
            redirect(base_url('quanly/DanhMuc/'));
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
                $('#TenDanhMuc').on('keydown keyup blur focusout change keypress',function(){
                    $('#slug').val(generateAlias($('#TenDanhMuc').val()));
                });
            });
        ");

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
    
    public function ChinhSua($id) {
        // Thư vien form validation
        $this->load->library('form_validation');
        // Load helper form hỗ trợ cho việc xử lý form kết hợp với form validation
        $this->load->helper();

        $DanhMuc = $this->ModelChung->get_info($id);
        if($DanhMuc !== FALSE) {
            //
            $this->smartyci->assign('DanhMuc', $DanhMuc);

            // Set rules đã được tự động load ở application/config
            if($this->form_validation->run('DanhMuc') == TRUE) {
                $data = array(
                    'TenDanhMuc' => $this->input->post('TenDanhMuc'),
                    'MaDanhMucCha' => $this->input->post('MaDanhMucCha'),
                    'Slug' => url_title($this->ModelChung->toASCII($this->input->post('TenDanhMuc')), 'dash', true)
                    );
                $this->ModelChung->CapNhat($id,$data);
                redirect(base_url('quanly/DanhMuc/'));
            }
            
            $dsDanhMuc = array();

            // Model Load Danh sách danh mục
            $dsDanhMuc[-1] = "Không có";
            foreach ($this->ModelChung->get_list() as $key => $value) {
                // Loai
                if($value->id != $id)
                    $dsDanhMuc[$value->id] = $value->TenDanhMuc;
            }
            // Tạo 1 biến cho View dựa vào giá trị của biến $dsDanhMuc
            $this->smartyci->assign('dsDanhMuc',$dsDanhMuc);

            // Set title page
            $this->smartyci->assign('title', 'Chỉnh sửa danh mục');

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
                    $('#TenDanhMuc').on('keydown keyup blur focusout change keypress',function(){
                        $('#slug').val(generateAlias($('#TenDanhMuc').val()));
                    });
                });
            ");

            // Set JS page
            $js_page = array(
                'blankon.form.element.js'
            );
            $this->smartyci->assign('list_js_page',$js_page);
            // Set content page
            $this->smartyci->assign('body', 'quanly/contents/DanhMuc/ChinhSua.html');

            // Set active menu
            $this->smartyci->assign('active_forms', 'active');
            $this->smartyci->assign('active_form_element', 'active');

            // Render view on main layout
            $this->smartyci->display('quanly/contents/layout.html');
        }
        else {
            redirect('quanly/Danhmuc');
        }
    }

    public function Xoa($id) {
        $DanhMuc = $this->ModelChung->get_info($id);
        if($DanhMuc !== FALSE) {
            // Khi xóa danh mục cha sẽ sửa các danh mục con thành danh mục cha của danh mục cha của nó
            $this->ModelChung->update_rule(array('MaDanhMucCha' => $id), array('MaDanhMucCha' => $DanhMuc->MaDanhMucCha));
            $this->ModelChung->delete($id);
        }
        else {
            redirect('quanly/Danhmuc');
        }
    }
}