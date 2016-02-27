<?php

class addadmin extends CI_Controller
{
    function __construct()
    {
        parent::_construct();
        $this->load->model('adduser');
    }

    function index()
    {
        //including validating library
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">','<div>');

        //validating name field
        $this->form_validation->set_rules('name','Name','required|min_length[5]|max_length[15]');

        //validating email field
        $this->form_validation->set_rules('email','Email','required|valid_email');

        //validating contact field
        $this->form_validation->set_rules('contact','Contact','required|regex_match[/^[0-9]{10}$/]');

        //validating password field
        $this->form_validation->set_rules('password','Password','required|min_length[5]|max_length[15]');

        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('my');
        }
        else
        {
            //setting values for table columns
            $name=$this->input->post('name');
            echo $name;

            $data=array(
              'Firstname'=>$this->input->post('name'),
                'Email'=>$this->input->post('email'),
                'Contact'=>$this->input->post('contact'),
                'Password'=>$this->input->post('password'),
            );

            //tranfering data to model
            $this->adduser->form_insert($data);
            $data['message']='data inserted successfully';

            //loading view
             $this->load->view('my',$data);

        }
    }
}