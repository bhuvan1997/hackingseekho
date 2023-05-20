<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Database extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_class_detail()
    {
        $sql = "SELECT tbl_user.name AS name, tbl_batch.batch_name, tbl_batch.id, tbl_user.user_img, tbl_batch.batch_desc, tbl_batch.c_date FROM tbl_batch LEFT JOIN tbl_user ON tbl_user.id = tbl_batch.mentor_id";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function class_detail($id)
    {
        $sql = "SELECT tbl_user.name AS name, tbl_batch.batch_name, tbl_batch.id, tbl_batch.batch_desc, tbl_user.user_img, tbl_batch.c_date FROM tbl_batch LEFT JOIN tbl_user ON tbl_user.id = tbl_batch.mentor_id WHERE tbl_batch.id = '".$id."'";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function class_enroll($data)
    {
        return $this->db->insert('tbl_batch_enroll',$data);
    }

    public function get_class_detail_booked($session)
    {
        $sql = "SELECT * FROM tbl_batch_enroll WHERE user_id = '".$session['loggedId']."'";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function all_mentors()
    {
        $sql = "SELECT * FROM tbl_user WHERE user_type = 2";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function get_mentor_detail($id)
    {
        $sql = "SELECT * FROM tbl_user WHERE id = '".$id."'";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function get_all_mentor()
    {
        $sql = "SELECT * FROM tbl_user WHERE user_type = 2";
        $query = $this->db->query($sql);
        return $query->result();
    }

}
