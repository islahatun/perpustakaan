<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('Templates/a_header');
        $this->load->view('Auth/login');
        $this->load->view('Templates/a_footer');
    }
}
