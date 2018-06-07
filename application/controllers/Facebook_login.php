<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facebook_login extends CI_Controller
{
    /**
     * Index Page for this controller.
     * You will be redirected to the facebook login page
     */
    function index()
    {
        $this->facebook_ion_auth->login();
    }

    /**
     * Controller that is redirected back from facebook after login
     */
    public function action()
    {
        $code = $this->input->get('code');
        if ($code) {
            $this->facebook_ion_auth->login();
            redirect('/');
        } else {
            redirect('auth/login');
        }
    }
}