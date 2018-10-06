<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('member_model',"member_m");
	}


	public function index($id)
	{	
		$row = $this->member_m->get_profile_row($id);
		$data['r'] = $row;

		$data['member_content_view_name']='member/index';		
		$this->load->view('member/member_structure',$data);
	}


	public function notice($id)
	{	
		$row = $this->member_m->get_profile_row($id);
		$data['r'] = $row;

		$data['member_content_view_name']='member/notice';
		$this->load->view('member/member_structure',$data);
	}


	public function order_cab($id)
	{
		$row = $this->member_m->get_profile_row($id);
		$data['r'] = $row;

		$data['member_content_view_name']='member/order-cab';
		$this->load->view('member/member_structure',$data);
	}



	public function rent_car($id)
	{
		$row = $this->member_m->get_profile_row($id);
		$data['r'] = $row;

		$data['member_content_view_name']='member/rent-a-car';
		$this->load->view('member/member_structure',$data);
	}


	public function my_log($id)
	{	

		$row_log = $this->member_m->get_my_log($id);
		$data['order_log'] = $row_log;


		$row_cars = $this->member_m->get_my_car_log($id);
		$data['cars_log']=$row_cars;

		$row = $this->member_m->get_profile_row($id);
		$data['r'] = $row;

		
		$data['member_content_view_name']='member/order-list';
		$this->load->view('member/member_structure',$data);
	}

	public function change_password()
	{
		$data['member_content_view_name']='member/change-password';
		$this->load->view('member/member_structure', $data);
	}

	public function leave_membership()
	{
		$data['member_content_view_name']='member/leave-membership';
		$this->load->view('member/member_structure',$data);
	}

	
	public function edit_profile_info($id)
	{	
		$row = $this->member_m->get_profile_info($id);
		$data['r'] = $row;

		$data['member_content_view_name']='member/edit-profile';
		$this->load->view('member/member_structure',$data);
	}




	public function order_for_cab()
	{	
		$id = $this->input->post('member_id');
		
		$data = array(


				'member_id'			=>	$this->input->post('member_id'),
				'starting_point'	=>	$this->input->post('starting_point'),
				'destination'		=>	$this->input->post('destination'),
				'email'				=>	$this->input->post('email'),
				'f_name'			=>	$this->input->post('f_name'),
				'l_name'			=>	$this->input->post('l_name'),
				'phone'				=>	$this->input->post('phone')

			);


		$data_log = array(


				'member_id'			=>	$this->input->post('member_id'),
				'name'				=>	$this->input->post('f_name').' '.$this->input->post('l_name'),
				'starting_point'	=>	$this->input->post('starting_point'),
				'destination'		=>	$this->input->post('destination'),
				'email'				=>	$this->input->post('email'),
				'phone'				=>	$this->input->post('phone')

			);


		$this->db->insert('member_log',$data_log);
		$this->db->insert('ordered_cab',$data);

		redirect('Members/my_log/'.$id);

	}




	public function update_profile($id)
	{
		$id = $this->input->post('id');
		$data = array(

				'f_name'			=>	$this->input->post('f_name'),
				'l_name'			=>	$this->input->post('l_name'),
				'address'			=>	$this->input->post('address'),
				'email'				=>	$this->input->post('email'),
				'phone'				=>	$this->input->post('phone')

			);


		$this->db->where('member_id',$id);
		$this->db->update('Members',$data);
		redirect('Members/index/'.$id);

	}


	public function order_for_renting_car()
	{
		$id = $this->input->post('member_id');
		
		$data = array(


				'member_id'			=>	$this->input->post('member_id'),
				'f_name'			=>	$this->input->post('f_name'),
				'l_name'			=>	$this->input->post('l_name'),
				'car_id'			=>	$this->input->post('car_id'),
				'starting_point'	=>	$this->input->post('starting_point'),
				'start_date'		=>	$this->input->post('start_date'),
				'duration'			=>	$this->input->post('duration'),
				'email'				=>	$this->input->post('email'),
				'phone'				=>	$this->input->post('phone')

			);


		$data_log = array(


				'member_id'			=>	$this->input->post('member_id'),
				'name'				=>	$this->input->post('f_name').' '.$this->input->post('l_name'),
				'car_id'			=>	$this->input->post('car_id'),
				'email'				=>	$this->input->post('email'),
				'start_date'		=>	$this->input->post('start_date'),
				'starting_point'	=>	$this->input->post('starting_point'),
				'duration'			=>	$this->input->post('duration'),
				'phone'				=>	$this->input->post('phone')

			);


		$this->db->insert('member_rent_car_log',$data_log);
		$this->db->insert('ordered_cars',$data);

		redirect('Members/my_log/'.$id);

	}













}
