<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class User extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->model('User_model');
    }
 
    public function index()
    {
        redirect('admin', 'refresh');
    }
 
    public function login()
    {
        $this->data['page_title'] = 'RTRShopp | Admin Login';
        if($this->input->post())
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('identity', 'Identity', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('remember','Remember me','integer');
            if($this->form_validation->run()===TRUE)
            {
                $remember = (bool) $this->input->post('remember');
                if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
                {
                    $this->session->set_flashdata('message', 'Welcome to Admin area');
                    redirect('admin', 'refresh');
                }
                else
                {
                    $this->session->set_flashdata('message',$this->ion_auth->errors());
                    redirect('admin/user/login', 'refresh');
                }
            }
        }
        $this->load->helper('form');
        $this->load->view('admin/login_view');
    }
  
    public function logout()
    {
        $this->ion_auth->logout();
        redirect('admin/user/login', 'refresh');
    }

    public function profile()
    {
        $this->data['page_title'] = 'User Profile';

        $this->breadcrumbs->push('<i class="fa fa-dashboard"></i> Dashboard', '/admin');
        $this->breadcrumbs->push('Profile Page', '/admin/user/profile');

        $user = $this->ion_auth->user()->row();
        $this->data['user'] = $user;
        $this->data['current_user_menu'] = '';
        if($this->ion_auth->in_group('admin'))
        {
            $this->data['current_user_menu'] = $this->load->view('templates/_parts/user_menu_admin_view.php', NULL, TRUE);
        }
     
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name','First Name','trim');
        $this->form_validation->set_rules('last_name','Last Name','trim');
        $this->form_validation->set_rules('company','Company','trim');
        $this->form_validation->set_rules('phone','Phone','trim');
     
        if($this->form_validation->run()===FALSE)
        {
            $this->render('admin/user/profile_view', 'admin_master');
        }
        else
        {
            $new_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'company' => $this->input->post('company'),
                'phone' => $this->input->post('phone')
            );
            if(strlen($this->input->post('password'))>=6) $new_data['password'] = $this->input->post('password');
            $this->ion_auth->update($user->id, $new_data);
     
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect('admin/user/profile', 'refresh');
        }
    }

    public function eloquent()
    {
        $users = User_model::all();
        foreach ($users as $key => $value) {
            echo "ID : ".$value->id."<br>";
            echo "First Name : ".$value->first_name."<br>";
            echo "Last Name : ".$value->last_name."<br>";
            echo "Email : ".$value->email."<br><br>";
        }
    }
}