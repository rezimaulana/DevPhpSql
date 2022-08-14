<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function getJudul($judul) {
       /* return $this->db->query("SELECT buku.*,pengarang.nama FROM buku INNER JOIN pengarang ON pengarang.id=buku.idpengarang "
        . "WHERE judul LIKE '%$judul%'")->result(); */
        if($judul==null) {
            return false;
        }
        else {
            $query = $this->db->query("SELECT buku.*,pengarang.nama FROM buku INNER JOIN pengarang ON pengarang.id=buku.idpengarang " . "WHERE judul LIKE '%$judul%'");
            return $query->result();
        }
    }
}