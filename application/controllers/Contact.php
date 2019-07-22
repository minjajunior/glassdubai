<?php


class Contact extends CI_Controller
{
 public function index(){

     $this->form_validation->set_rules('name', 'Your Name', 'required');
     $this->form_validation->set_rules('email', 'Email address', 'required|valid_email');
     $this->form_validation->set_rules('phone', 'Phone Number', 'required');
     $this->form_validation->set_rules('message', 'Message', 'required');

     if ($this->form_validation->run() == FALSE) {
         $this->load->view('contact_view');
     } else {
         //Email to Info
         $this->email->from($this->input->post('email'), $this->input->post('name').' - '.$this->input->post('phone'));
         $this->email->to('info@glassdubaialuminium.co.tz');
         $this->email->subject('Contact form');
         $this->email->message($this->input->post('message'));
         $this->email->send();

         redirect('home');

     }
 }
}