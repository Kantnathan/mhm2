<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * AuthController
 */
class MY_AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->config('ion_auth', true);

        if (uri_string() != 'auth/login') {
            $this->_is_login();
        }
    }

    private function _is_login()
    {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }
    }
}