<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Buku extends MY_Controller {
	function __construct(){
        parent::__construct();
		$this->load->model('T_buku');
        $this->load->model('T_pengarang');
    }
    function index(){
        $data['title']="Daftar Buku";
        $data['result'] = $this->T_buku->index();
		$this->load->view('fragment/header',$data);
		$this->load->view('fragment/nav');
		$this->load->view('buku/index',$data);
		$this->load->view('fragment/footerTable1');
    }
    function get($id){
        $data['title']="Detail Buku";
        $data['result'] = $this->T_buku->get($id);
		$this->load->view('fragment/header',$data);
		$this->load->view('fragment/nav');
		$this->load->view('buku/get',$data);
		$this->load->view('fragment/footer');
    }
    function post(){
        $data['title']="Tambah Buku";
        $data['dataPengarang'] = $this->T_pengarang->indexArray();
		$this->load->view('fragment/header',$data);
		$this->load->view('fragment/nav');
		$this->load->view('buku/post',$data);
		$this->load->view('fragment/footer');
    }
    function postData(){
        $nid = 'FILE-';
        $nunix = now();
        $nsplit = '-';
        $chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        $max = count($chars)-1;
        $serial = '';
        for($i=0;$i<10;$i++){
            $serial .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
        }
        $file_name = $nid.$nunix.$nsplit.$serial;
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $file_name.'-PIC';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['max_size '] = 2048;
        $config['max_width'] = '';
        $config['max_height'] = '';
        $config['min_width'] = '';
        $config['min_height'] = '';
        $this->load->library('upload',$config);
        if( $this->upload->do_upload('gambar') ){
            $gambar = $this->upload->data("file_name");
            $this->T_buku->post($gambar);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
            redirect(base_url('buku'));  
        }
        elseif( !$this->upload->do_upload('gambar') ){
            $gambar;
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error',$error['error']); 
            redirect(base_url('buku')); 
        }
    }
    function delete($id){
        $data['result'] = $this->T_buku->get($id);
        foreach($data['result'] as $res);
        $path='./assets/upload/'.$res['gambar'];
        if(unlink($path)) {
            if($this->T_buku->delete($id)){
                $this->session->set_flashdata('success', 'Deleted file');
            }
            else {
                $this->session->set_flashdata('error', 'Data can\'t be deleted');
            }
        }
        else {
            $this->session->set_flashdata('error', 'File can\'t be deleted');
        }
        $data['title']="Hapus Buku";
		$this->load->view('fragment/header',$data);
		$this->load->view('fragment/nav');
		$this->load->view('buku/delete',$data);
		$this->load->view('fragment/footer');
        /* redirect(base_url('buku'));
        var_dump($res['gambar']);
        var_dump($path);
        var_dump($data['result']); */
    }
    function put($id){
        $data['title']="Update Buku";
        $data['result'] = $this->T_buku->get($id);
        $data['pengarang'] = $this->T_pengarang->indexArray();
        $this->load->view('fragment/header',$data);
		$this->load->view('fragment/nav');
		$this->load->view('buku/put',$data);
		$this->load->view('fragment/footer');
    }
    function putData(){
        $id = $this->input->post('id');
        $gambar_lama = $this->input->post('gambar_lama');
        $nid = 'FILE-';
        $nunix = now();
        $nsplit = '-';
        $chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        $max = count($chars)-1;
        $serial = '';
        for($i=0;$i<10;$i++){
            $serial .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
        }
        $file_name = $nid.$nunix.$nsplit.$serial;
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['file_name'] = $file_name.'-PIC';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['max_size '] = 2048;
        $config['max_width'] = '';
        $config['max_height'] = '';
        $config['min_width'] = '';
        $config['min_height'] = '';
        $this->load->library('upload',$config);
        if( $this->upload->do_upload('gambar') ){
            $path='./assets/upload/'.$gambar_lama;
            unlink($path);
            $gambar = $this->upload->data("file_name");
            $this->T_buku->put($id,$gambar);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!'); 
        }
        elseif( !$this->upload->do_upload('gambar') ){
            $gambar=$gambar_lama;
            $this->T_buku->put($id,$gambar);
            $this->session->set_flashdata('success', 'Operation Complete Successfully!');
        }
        redirect(base_url("buku"));
    }
}