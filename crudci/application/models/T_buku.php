<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class T_buku extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->db->select('b.id as buku_id, b.isbn, b.judul, b.idpengarang, b.stok, b.gambar, p.id as pengarang_id, p.nama, p.email', false);
        $this->db->from('buku b');
        $this->db->join('pengarang p', 'p.id = b.idpengarang', 'inner');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        else {
            return false;
        }
    }
    function get($id){
        $this->db->select('b.id as buku_id, b.isbn, b.judul, b.idpengarang, b.stok, b.gambar, p.id as pengarang_id, p.nama, p.email', false);
        $this->db->from('buku b');
        $this->db->join('pengarang p', 'p.id = b.idpengarang', 'inner');
        $this->db->where('b.id',$id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        else {
            return false;
        }
    }
    function post($gambar){
        $data = array(
            'isbn' => $this->input->post('isbn'),
            'judul' => $this->input->post('judul'),
            'idpengarang' => $this->input->post('idpengarang'),
            'stok'=> $this->input->post('stok'),
            'gambar' => $gambar
        );
        $query = $this->db->insert('buku', $data);
        if ($query->affected_rows == 1) {
           return TRUE;
       }
       else {
           return FALSE;
       }
    }
    function delete($id){
        $this->db->where('id', $id);
        $query = $this->db->delete('buku');
        $result = ($this->db->affected_rows() > 0)?TRUE:FALSE;
        return $result;
    }
    function put($id,$gambar){
        $data = array (
            'isbn' => $this->input->post('isbn'),
            'judul' => $this->input->post('judul'),
            'idpengarang' => $this->input->post('idpengarang'),
            'stok' => $this->input->post('stok'),
            'gambar' => $gambar
            );
        $this->db->where('id', $id);
        $query = $this->db->update('buku', $data);
        $result = ($this->db->affected_rows() > 0)?TRUE:FALSE;
        return $result;
    }
    /* $this->db->join('pengarang','pengarang.id=buku.idpengarang','inner');
    $query = $this->db->get('buku');
    return $query->result();
    $query = $this->db->query("SELECT buku.*,pengarang.nama FROM buku INNER JOIN pengarang ON pengarang.id=buku.idpengarang");
    return $query->result(); */
}