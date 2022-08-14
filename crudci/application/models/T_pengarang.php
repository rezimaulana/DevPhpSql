<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class T_pengarang extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $query = $this->db->query("SELECT * FROM pengarang");
        return $query->result();
    } 
    function get($id){
        $query = $this->db->query("SELECT * FROM pengarang WHERE id='$id'");
        return $query->result();
    }
    function post(){
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $query = $this->db->query("INSERT INTO pengarang (nama,email) VALUES ('$nama','$email')");
        return true;
    }
    function delete($id){
        // $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        //if ($this->db->affected_rows() > 0) {}
        $query = $this->db->query("DELETE FROM pengarang WHERE id='$id'");
        $result = ($this->db->affected_rows() > 0)?TRUE:FALSE;
        return $result;
    }
    function put($id){
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $query = $this->db->query("UPDATE pengarang SET nama='$nama',email='$email' WHERE id='$id'");
        return true;
    }
    function indexArray(){
        $query = $this->db->get('pengarang');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
}