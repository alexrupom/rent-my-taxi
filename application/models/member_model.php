<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class member_model extends CI_Model {
                

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }


        public function get_profile_row($id)
        {
            $this->db->where('member_id',$id);
            $query = $this->db->get('members');
            return $query->row();
        }


        public function get_profile_info($id)
        {
            $this->db->where('member_id',$id);
            $query = $this->db->get('members');
            return $query->row();
        }

        
       public function get_all_notice()
       {
            $query = $this->db->get('notice');
            return $query->result();
       }

       public function get_my_log($id)
       {
            $this->db->where('member_id',$id);
            $this->db->order_by("key_id","desc");
            $query = $this->db->get('member_log');
            return $query->result();
       }


     
       public function get_my_car_log($id)
       {
            $this->db->where('member_id',$id);
            $this->db->order_by("key_id","desc");
            $query = $this->db->get('member_rent_car_log');
            return $query->result();
       }



}