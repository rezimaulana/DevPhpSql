<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pengarang extends MY_Controller {
	function __construct(){
        parent::__construct();
		$this->load->model('T_pengarang');
    }
	function index(){	
		$data['title']="Daftar Pengarang";
        $data['result'] = $this->T_pengarang->index();
		$this->load->view('fragment/header',$data);
		$this->load->view('fragment/nav');
		$this->load->view('pengarang/index',$data);
		$this->load->view('fragment/footerTable1');
	}
    function get($id){	
		$data['title']="Detail Pengarang";
        $data['result'] = $this->T_pengarang->get($id);
		$this->load->view('fragment/header',$data);
		$this->load->view('fragment/nav');
		$this->load->view('pengarang/get',$data);
		$this->load->view('fragment/footer');
	}
    function post(){
        $data['title']="Tambah Pengarang";
		$this->load->view('fragment/header',$data);
		$this->load->view('fragment/nav');
		$this->load->view('pengarang/post',$data);
		$this->load->view('fragment/footer');
    }
    function postData(){
        $this->T_pengarang->post();
        redirect(base_url("pengarang"));
    }
    function delete($id){
        if($this->T_pengarang->delete($id)){   
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }  
        else{  
            $this->session->set_flashdata('error', 'Data tidak berhasil dihapus');
        }
        $data['title']="Hapus Pengarang";
		$this->load->view('fragment/header',$data);
		$this->load->view('fragment/nav');
		$this->load->view('pengarang/delete',$data);
		$this->load->view('fragment/footer');
    }
    function put($id){
        $data['title']="Update Pengarang";
        $data['result'] = $this->T_pengarang->get($id);
        $this->load->view('fragment/header',$data);
		$this->load->view('fragment/nav');
		$this->load->view('pengarang/put',$data);
		$this->load->view('fragment/footer');
    }
    function putData(){
        $id = $this->input->post('id');
        $this->T_pengarang->put($id);
        redirect(base_url("pengarang"));
    }
}