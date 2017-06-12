<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    //phải gọi lại hàm
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('ModelChung', 'ModelDanhMuc');
        $this->load->model('ModelChung','ModelSach');
        $this->ModelDanhMuc->set_table('DanhMuc');
        $this->ModelSach->set_table('Sach');
    }
    
    public function index(){
        // Set title page
        $this->smartyci->assign('title', 'DASHBOARD');

        $dsDanhMuc = $this->ModelDanhMuc->get_list_set_input(
            array(
            'where' => array('MaDanhMucCha' =>  '-1')
            ));
        foreach($dsDanhMuc as $key => $value) {
            $danhMucCon = $this->ModelDanhMuc->get_list_set_input(
            array(
            'where' => array('MaDanhMucCha' =>  $value->id)
            ));
            $value->dsDanhMuc = $danhMucCon;
        }

        $this->smartyci->assign('DanhMuc', $dsDanhMuc);

        //tạo biến Sách
        $dsSach = $this->ModelSach->get_list();
        $this->smartyci->assign('DanhSach',$dsSach);

        //Truyền Biến qua cho sản phẩm

        $this->smartyci->assign('title', 'DASHBOARD');
        // Set content page
        $this->smartyci->assign('body', 'front-side/contents/TrangChu.html');

        // Set active menu
        $this->smartyci->assign('active_dashboard', 'active');

        // Render view on main layout
        $this->smartyci->display('front-side/contents/layout.html');
    }
}
