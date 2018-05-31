<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {


	public function index(){
		//validate database
		$this->form_validation->set_rules('sender_name', 'Full Name', 'required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'required');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');

		//save email in database
		if($this->form_validation->run()){
			$data = $this->input->post();

			if ($this->emails_model->save_mail($data)) {
				$to = $this->input->post('email_address');
				$from = 'njaumn.mn@gmail.com';
				$subject = $this->input->post('subject');
				$message = $this->input->post('message');
				$headers[] = 'To:'.$to;
				$headers[] ='From:'.$from;

				if (mail($to, $from, $subject, implode('\r\n', $headers))) {
					$this->session->set_flashdata('success', "Email Sent Successfully!");
				}else{
					$this->session->set_flashdata('error', "Sending Failed!");
				}

			} else {
				$this->session->set_flashdata('error', "Check your Entries!");
			}
		}
		return redirect('welcome');
	}
}
