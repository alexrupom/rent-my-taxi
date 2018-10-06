<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('cms_model',"cms_m");
		$this->load->model('admin_model',"admin_m");
	}


	public function index()
	{
		$data['admin_content_view_name']='admin/index';		
		$this->load->view('admin/admin_structure',$data);
	}

	public function about()
	{
		$data['admin_content_view_name']='admin/cms/about-us';
		$this->load->view('admin/cms/admin_structure', $data);
	}


	public function cabs_we_provide()
	{
		$data['admin_content_view_name']='admin/cms/cabs-we-provide';
		$this->load->view('admin/cms/admin_structure', $data);
	}

	public function costs()
	{
		$data['admin_content_view_name']='admin/cms/cost';
		$this->load->view('admin/cms/admin_structure', $data);
	}



	public function faqs()
	{
		$data['admin_content_view_name']='admin/cms/faqs';
		$this->load->view('admin/cms/admin_structure', $data);
	}


	public function safety_certainty_timing()
	{
		$data['admin_content_view_name']='admin/cms/safety-certainty-timing';
		$this->load->view('admin/cms/admin_structure', $data);
	}


	public function slider()
	{
		$data['admin_content_view_name']='admin/cms/slider';
		$this->load->view('admin/cms/admin_structure', $data);
	}


	public function notice()
	{
		$data['admin_content_view_name']='admin/notice';
		$this->load->view('admin/admin_structure', $data);
	}


	public function cabs()
	{
		$data['admin_content_view_name']='admin/lists/cabs';
		$this->load->view('admin/lists/admin_structure', $data);
	}



	public function cars()
	{
		$data['admin_content_view_name']='admin/lists/cars';
		$this->load->view('admin/lists/admin_structure', $data);
	}



	public function drivers()
	{
		$data['admin_content_view_name']='admin/lists/drivers';
		$this->load->view('admin/lists/admin_structure', $data);
	}


	public function ordered_car()
	{	
		$row = $this->admin_m->get_all_ordered_car();
		$data['cars_log']=$row;

		$data['admin_content_view_name']='admin/lists/ordered-car';
		$this->load->view('admin/lists/admin_structure', $data);
	}



	public function ordered_taxi()
	{
		$data['admin_content_view_name']='admin/lists/ordered-taxi';
		$this->load->view('admin/lists/admin_structure', $data);
	}




	public function feedbacks()
	{	

		$feedbacks = $this->admin_m->get_feedback();
		$data['feedback_array'] = $feedbacks;

		$data['admin_content_view_name']='admin/feedbacks/feedbacks';
		$this->load->view('admin/feedbacks/admin_structure', $data);
	}


	public function change_view_to_yes($id)
	{
		$data = array(

				'visibility' => 'Yes'
			);


		$this->db->where('key_id',$id);
		$this->db->update('feedback',$data);
		redirect("admin/feedbacks");

	}



	public function change_view_to_no($id)
	{
		$data = array(

				'visibility' => 'No'
			);

		$this->db->update('feedback',$data);
		redirect("admin/feedbacks");

	}

	public function add_new_driver()
	{
		$data['admin_content_view_name']='admin/lists/add-new-driver';
		$this->load->view('admin/feedbacks/admin_structure', $data);
	}


	public function add_new_cab()
	{
		$data['admin_content_view_name']='admin/lists/add-new-cab';
		$this->load->view('admin/feedbacks/admin_structure', $data);
	}


	public function add_new_car()
	{
		$data['admin_content_view_name']='admin/lists/add-new-car';
		$this->load->view('admin/feedbacks/admin_structure', $data);
	}



	public function update_about($id)
	{
		$this->db->where('key_id',$id);
		$data = array(

				'top_paragraph'		=>	$this->input->post('top_para'),
				'bottom_paragraph'	=>	$this->input->post('bottom_para'),
				'safety'			=>	$this->input->post('safety_per'),
				'certainty'			=>	$this->input->post('certainty_per'),
				'timing'			=>	$this->input->post('timing_per')

			);

		$this->db->update('about',$data);
		redirect('Admin/about');

	}


	public function update_safety_certainty_timing($id)
	{

		$this->db->where('key_id',$id);
		$data = array(

				'title1'		=>	$this->input->post('title1'),
				'content1'		=>	$this->input->post('content1'),
				'title2'		=>	$this->input->post('title2'),
				'content2'		=>	$this->input->post('content2'),
				'title3'		=>	$this->input->post('title3'),
				'content3'		=>	$this->input->post('content3'),

			);

		$this->db->update('cms_sct_content',$data);
		redirect('Admin/safety_certainty_timing');

	}





	public function update_cabs_content($id)
	{

		$this->db->where('key_id',$id);
		$data = array(

				'first_para'		=>	$this->input->post('paragraph1'),
				'second_para'		=>	$this->input->post('paragraph2'),
				'third_para'		=>	$this->input->post('paragraph3')

			);

		$this->db->update('cabs_provide_content',$data);
		redirect('Admin/cabs_we_provide');

	}



	public function cost_new_row()
	{

		$data = array(

				'feature'		=>	$this->input->post('new-feature'),
				'peak'			=>	$this->input->post('new-peak'),
				'off_peak'		=>	$this->input->post('new-off-peak')

			);

		
		$this->db->insert('fare_cost',$data);
		redirect('Admin/costs');

	}



	public function edit_cost($id)
	{
		$row = $this->cms_m->get_one_cost_row($id);
		$data['r'] = $row;

		$data['admin_content_view_name']='admin/cms/edit-cost';
		$this->load->view('admin/cms/admin_structure',$data);

	}



	public function update_cost($id)
	{

		$data = array(

				'feature'		=>	$this->input->post('feature'),
				'peak'			=>	$this->input->post('peak'),
				'off_peak'		=>	$this->input->post('off-peak')

			);


		$this->db->where('key_id',$id);
		$this->db->update('fare_cost',$data);
		redirect('Admin/costs');

	}


	public function delete_cost_row($id)
	{
		$this->db->where('key_id',$id);
		$this->db->delete('fare_cost');
		redirect('Admin/costs');
	}




	public function update_faqs_row($id)
	{
		$data = array(

				'question'	=>	$this->input->post('question'),
				'answer'	=>	$this->input->post('answer'),

			);

		$this->db->where('key_id',$id);
		$this->db->update('faq',$data);
		redirect('Admin/faqs');
	}




	public function update_slider($id)
	{

		$data = array(

				'title'			=>	$this->input->post('title'),
				'small'			=>	$this->input->post('small')

			);


		$this->db->where('key_id',$id);
		$this->db->update('slider',$data);
		redirect('Admin/slider');

	}



	public function new_driver()
	{
		$data = array(

				'name'			=>	$this->input->post('name'),			
				'driver_id'		=>	$this->input->post('driver_id'),	
				'address'		=>	$this->input->post('address'),
				'phone'			=>	$this->input->post('phone'),
				'status'		=>	$this->input->post('available'),
				'areas'			=>	$this->input->post('areas')
			
			);

		$this->db->insert('drivers',$data);
		redirect('Admin/drivers');
	}






	public function new_cab()
	{
		$data = array(

				'model'			=>	$this->input->post('model'),	
				'license'		=>	$this->input->post('license'),	
				'image_name'	=>	' ',	
				'image'			=>	' ',
				'status'		=>	'yes',
				'driven_by'		=>	'0'
			
			);

		$this->db->insert('cabs',$data);
		redirect('Admin/cabs');
	}






	public function new_car()
	{
		$data = array(

				'model'			=>	$this->input->post('model'),	
				'license'		=>	$this->input->post('license'),	
				'capacity'		=>	$this->input->post('capacity'),	
				'cpd'			=>	$this->input->post('cpd'),
				'cpkm'			=>	$this->input->post('cpkm'),
				'milage'		=>	$this->input->post('milage'),
				'status'		=>	'Yes',
				'image'			=>	' '
			
			);

		$this->db->insert('cars',$data);
		redirect('Admin/cars');
	}





	public function update_drivers($id)
	{

		$data = array(

				'driver_id'			=>	$this->input->post('driver_id'),
				'name'				=>	$this->input->post('name'),
				'address'			=>	$this->input->post('address'),
				'phone'				=>	$this->input->post('phone'),				
				'status'			=>	$this->input->post('status'),
				'areas'				=>	$this->input->post('areas'),
				'trip_no'			=>	$this->input->post('trip_no')


			);


		$this->db->where('key_id',$id);
		$this->db->update('drivers',$data);
		redirect('Admin/drivers');

	}




	public function update_cabs($id)
	{

		$data = array(

				'model'				=>	$this->input->post('model'),
				'driven_by'			=>	$this->input->post('driven_by'),
				'license'			=>	$this->input->post('license'),				
				'status'			=>	$this->input->post('status')


			);


		$this->db->where('cab_id',$id);
		$this->db->update('cabs',$data);
		redirect('Admin/cabs');

	}


	public function update_cars($id)
	{

		$data = array(

				'model'				=>	$this->input->post('model'),
				'license'			=>	$this->input->post('license'),
				'capacity'			=>	$this->input->post('capacity'),		
				'milage'			=>	$this->input->post('milage'),		
				'cpkm'				=>	$this->input->post('cpkm'),				
				'cpd'				=>	$this->input->post('cpd'),				
				'status'			=>	$this->input->post('status')


			);


		$this->db->where('car_id',$id);
		$this->db->update('cars',$data);
		redirect('Admin/cars');

	}


	public function delete_driver($id)
	{
		$this->db->where('key_id',$id);
		$this->db->delete('drivers');
		redirect('Admin/drivers');
	}


	public function delete_cab($id)
	{
		$this->db->where('cab_id',$id);
		$this->db->delete('cabs');
		redirect('Admin/cabs');
	}


	public function delete_car($id)
	{
		$this->db->where('car_id',$id);
		$this->db->delete('cars');
		redirect('Admin/cars');
	}


	public function edit_notice($id)
	{
		$row = $this->admin_m->edit_notice_content($id);
		$data['r'] = $row;

		$data['admin_content_view_name']='admin/edit-notice';
		$this->load->view('admin/admin_structure',$data);


	}



	public function update_notice($id)
	{
		$data = array(

				'title'				=>	$this->input->post('title'),
				'notice'			=>	$this->input->post('notice')

			);


		$this->db->where('key_id',$id);
		$this->db->update('notice',$data);
		redirect('Admin/notice');

	}



	
	public function delete_notice($id)
	{
		$this->db->where('key_id',$id);
		$this->db->delete('notice');
		redirect('Admin/notice');

	}


	public function approve_cab($id)
	{
		$data = array(

			'status'	=>	'Approved'
			);

		$this->db->where('key_id',$id);
		$this->db->update('ordered_cab',$data);
		redirect("Admin/ordered_taxi");

	}


	public function approve_car($id)
	{
		$data = array(

			'status'	=>	'No'
			);

		$this->db->where('car_id',$id);
		$this->db->update('cars',$data);
		redirect("Admin/ordered_car");

	}

	public function add_feedback()
	{	

		$back_id = $this->input->post('feeback_member_id');
		$data = array(

			'member_id'		=>	$this->input->post('feeback_member_id'),
			'comment'		=>	$this->input->post('my_comment'),
			'visibility'	=>	'No'

			);

		$this->db->insert('feedback',$data);
		redirect("members/index/".$back_id);

	}



}
