<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth {

    public function __construct() {
        $this->load->model('auth_model');
    }

    public function get_userdata() {
        if (!$this->logged_in()) {
            return false;
        } else {
            $query = $this->db->get_where("users", array("id" => $this->session->userdata("user_id")));
            return $query->row();
        }
    }

    public function logged_in() {
        return ($this->session->userdata("user_id")) ? true : false;
    }

    public function login($username, $password) {
        $data = array(
            "username" => $username,
            "password" => $password,
        );

        $query = $this->db->get_where("users", $data);

        if ($query->num_row() !== 1) {
            return false;
        } else {
            // update the last login time
            $last_login = date("Y-m-d H-i-s");

            $data = array(
                "last_login" => $last_login
            );

            $this->db->update("users", $data);

            // store user id in the session
            $this->session->set_userdata("user_id", $query->row()->id);

            return true;
        }
    }

    public function logout() {
        $this->session->unset_userdata("user_id");
    }

    public function register() {
        if ($this->can_register($username)) {
            $data = array(
                'username' => $username,
                'password' => md5($password)
            );
            
            $this->db->insert("users", $data);
        }
        
        return false;
    }
    
    public function can_register() {
        $query = $this->db->get_where("users", array('username' => $username));
        
        return ($query->num_row() < 1) ? true : false;
    }

}
