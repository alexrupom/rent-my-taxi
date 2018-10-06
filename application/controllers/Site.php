<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('member_model',"member_m");
		$this->load->model('cms_model',"cms_m");
		$this->load->model('admin_model',"admin_m");
	}


	public function index()
	{	
		$rows = $this->admin_m->get_displayed_feedbacks();
		$data['feedbacks'] = $rows;
		
		$data['public_content_view_name']='index';		
		$this->load->view('structure',$data);
	}

	public function contact()
	{
		$data['public_content_view_name']='contact';
		$this->load->view('structure', $data);
	}


	public function sign_in()
	{
		$data['public_content_view_name']='sign-up-in';
		$this->load->view('structure', $data);
	}


	public function new_member()
	{
		$data = array(

				'f_name'	=>	$this->input->post('f_name'),
				'l_name'	=>	$this->input->post('l_name'),
				'address'	=>	$this->input->post('address'),
				'email'		=>	$this->input->post('email'),
				'phone'		=>	$this->input->post('phone')

			);


		$sign_in_data = array(

				'email'		=>	$this->input->post('email'),
				'password'	=>	$this->input->post('password')

			);

		$this->db->insert('members',$data);
		$this->db->insert('member_account',$sign_in_data);

		redirect('Members/index');
	}


	public function go_to_member_profile()
	{
		$id = $this->input->post('member_id');
		redirect('members/index/'.$id);

	}


}
