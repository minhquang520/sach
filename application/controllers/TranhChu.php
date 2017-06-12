<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TrangChu extends CI_Controller {
    public function index(){
               // Set title page
        $this->smartyci->assign('title', 'DASHBOARD');
        // Set content page
        $this->smartyci->assign('body', 'trangchinh/contents/TrangChu.html');

        // Set active menu
        $this->smartyci->assign('active_dashboard', 'active');

        // Render view on main layout
        $this->smartyci->display('trangchinh/contents/TrangChu.html');
    }
}