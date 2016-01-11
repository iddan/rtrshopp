<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index() {
        $users = Auth_model::all();
        foreach ($users as $key => $value) {
            echo "ID : " . $value->id . "<br>";
            echo "Username : " . $value->username . "<br>";
            echo "Email : " . $value->email . "<br><br>";
        }
    }

}
