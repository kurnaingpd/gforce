<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    Class Auth extends CI_Controller
    {
        // public function __construct()
        // {
            
        // }

        public function index()
        {
            $datas['js'] = [
                base_url("assets/enlink/vendors/jquery-validation/jquery.validate.min.js"),
                base_url("assets/js/uac/auth/login.js"),
            ];
            $datas['title'] = 'Sign In';
            $this->load->view('auth/index', $datas);
        }
    }
?>