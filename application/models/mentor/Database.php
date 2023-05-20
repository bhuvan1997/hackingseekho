<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Database extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insertMentor($data)
    {
        return $this->db->insert('tbl_user', $data);
    }

    public function checkPassword($email, $password, $usertype)
    {
        $query = $this->db->query("SELECT * FROM tbl_user WHERE email = '" . $email . "' AND password = '" . $password . "' AND user_type = '" . $usertype . "'");
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return FALSE;
        }
    }

    public function insertMentorQues($data)
    {
        return $this->db->insert('tbl_qna', $data);
    }

    public function getQna($session)
    {
        $sql = "SELECT * FROM tbl_user LEFT JOIN tbl_qna ON tbl_qna.mentor_id = tbl_user.id WHERE tbl_user.id = '" . $session['loggedId'] . "'";
        $query = $this->db->query($sql);
        return $query->result();
    }


    public function get_user($session)
    {
        $sql = "SELECT * FROM tbl_user WHERE id = '" . $session['loggedId'] . "'";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function get_city()
    {
        $sql = "SELECT * FROM m_district_state ORDER BY district_name ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function get_state()
    {
        $sql = "SELECT * FROM m_state_country ORDER BY state_name ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function update_user($data, $session)
    {
        return $this->db->where('id', $session['loggedId'])->update('tbl_user', $data);
    }

    public function update_user_status($data2, $session)
    {
        return $this->db->where('id', $session['loggedId'])->update('tbl_user', $data2);
    }

    public function addBatch($data)
    {
        return $this->db->insert('tbl_batch', $data);
    }

    public function get_batch($session)
    {
        $sql = "SELECT * FROM tbl_batch WHERE mentor_id = '" . $session['loggedId'] . "'";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function update_MentorQues($data, $session)
    {
        return $this->db->where('mentor_id', $session['loggedId'])->update('tbl_qna', $data);
    }

    public function qna_count($session)
    {
        $sql = "SELECT * FROM tbl_qna WHERE mentor_id = '" . $session['loggedId'] . "'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

    public function user_status($session)
    {
        $sql = "SELECT * FROM tbl_user WHERE id = '" . $session['loggedId'] . "' AND status = 1";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function get_enrolled_student($session)
    {
        $sql = "SELECT tbl_batch_enroll.*, tbl_user.name, tbl_user.father_name, tbl_user.gender, tbl_user.city, tbl_user.state, tbl_user.highest_degree, tbl_user.year_passing, tbl_batch.mentor_id, tbl_batch.batch_name, tbl_batch.batch_type, tbl_batch.batch_topic, tbl_batch.start_date, tbl_batch.end_date, tbl_batch.duration FROM tbl_batch_enroll LEFT JOIN tbl_batch ON tbl_batch.id = tbl_batch_enroll.batch_id LEFT JOIN tbl_user ON tbl_user.id = tbl_batch_enroll.user_id WHERE tbl_batch.mentor_id = '" . $session['loggedId'] . "'";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function get_btch_name($session)
    {
        $sql = "SELECT * FROM tbl_batch WHERE mentor_id = '" . $session['loggedId'] . "'";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function update_attachment($data, $enid)
    {
        return $this->db->where('enroll_id', $enid)->update('tbl_attachment', $data);
    }

    public function insert_attachment($data)
    {
        return $this->db->insert('tbl_attachment', $data);
    }

    public function get_btch_dtl($session)
    {
        $sql = "SELECT tbl_attachment.*, tbl_batch.batch_name AS btch_n  FROM tbl_attachment LEFT JOIN tbl_batch ON tbl_batch.id = tbl_attachment.enroll_id WHERE tbl_batch.mentor_id = '" . $session['loggedId'] . "'";
        $query = $this->db->query($sql);
        return $query->result();
    }

    
}
