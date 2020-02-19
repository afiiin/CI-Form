<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index(){

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[form.email]', [
            'is_unique' => 'This Email has already registered!'
        ]);
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        if($this->form_validation->run()==false){
            $this->load->view('Auth/form');
            
        }else{
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'gender' => $this->input->post('gender'),
                'kota' => $this->input->post('kota'),
                'status' => $this->input->post('status'),
                'date_created' => time()
            ];

            $this->db->insert('form', $data);
        }
    }
}