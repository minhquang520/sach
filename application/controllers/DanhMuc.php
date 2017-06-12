<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DanhMuc extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('ModelChung');
        $this->ModelChung->set_table('DanhMuc');
    }
    
    public function index($id){

        $DanhMuc = $this->ModelChung->get_info($id);
        if($DanhMuc !== FALSE) {
        }
        $this->smartyci->assign('title', 'DanhMuc');
        // Set content page
        $this->smartyci->assign('body', 'front-side/contents/ChiTietDanhMuc.html');

        // Set active menu
        $this->smartyci->assign('active_dashboard', 'active');

        // Render view on main layout
        $this->smartyci->display('front-side/contents/layout.html');
    }
}
