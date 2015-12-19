<?php
class users extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('users_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
            $data['users'] = $this->users_model->get_users();

            $data['title'] = 'All users';

        	$this->load->view('templates/header', $data);
       		$this->load->view('users/index', $data);
        	$this->load->view('templates/footer');
        }
}