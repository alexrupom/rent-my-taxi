<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cms_model extends CI_Model {
                

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }



        public function get_about_us_table()
        {
            $query = $this->db->get('about');
            return $query->result();
        }


        public function get_cabs_provide_content_table()
        {
            $query = $this->db->get('cabs_provide_content');
            return $query->result();
        }


        public function get_cms_sct_content_table()
        {
            $query = $this->db->get('cms_sct_content');
            return $query->result();
        }


        public function get_fare_table()
        {
            $query = $this->db->get('fare_cost');
            return $query->result();
        }


        public function get_one_cost_row($id)
        {
            $this->db->where('key_id',$id);
            $query = $this->db->get('fare_cost');
            return $query->row();
        }


        public function get_faqs_table()
        {
            $query = $this->db->get('faq');
            return $query->result();
        }


        public function get_slider_table()
        {
            $query = $this->db->get('slider');
            return $query->result();
        }











}