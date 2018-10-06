<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {
                

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }


       public function get_all_ordered_cab()
       {
            $query = $this->db->get('ordered_cab');
            return $query->result();
       }

       public function get_all_ordered_car()
       {
            return $this->db->select('o.member_id,o.f_name,o.l_name,o.car_id,
                                        o.starting_point,o.start_date,o.duration,o.email,o.phone,
                                        c.car_id,c.model,c.license,c.status')
                                      ->from ('ordered_cars AS o')
                                      ->join('cars AS c','o.car_id=c.car_id')
                                      ->get()->result();
       }


       public function get_feedback()
       {
          return $this->db->select('f.key_id,m.member_id,m.f_name,m.l_name,f.comment,f.visibility')
                          ->from('members AS m')
                          ->join('feedback AS f','m.member_id=f.member_id')
                          ->get()->result();
       }

      
       public function get_displayed_feedbacks()
       {  

            return $this->db->select('*')
                            ->from ('feedback')
                            ->where('visibility','Yes')
                              ->get()->result();
        
       }


       public function get_all_drivers()
       {
            $query = $this->db->get('drivers');
            return $query->result();
       }



       public function get_all_cabs()
       {
            $query = $this->db->get('cabs');
            return $query->result();
       }


       public function get_all_cars()
       {
            $query = $this->db->get('cars');
            return $query->result();
       }


       public function get_all_notice()
       {
            $query = $this->db->get('notice');
            return $query->result();
       }


       public function edit_notice_content($id)
       {
            $this->db->where('key_id',$id);
            $query = $this->db->get('notice');
            return $query->row();

       }





}