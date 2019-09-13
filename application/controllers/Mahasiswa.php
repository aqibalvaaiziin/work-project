<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Mahasiswa extends CI_Controller {
  
    
    public function __construct()
    {
      parent::__construct();
      $this->load->model('mahasiswa_model');
    }
    

    public function index(){
      $data ['mahasiswa'] = $this->mahasiswa_model->getAllMahasiswa();
      $this->load->view('template/header',$data);
      $this->load->view('mahasiswa/index',$data);
      $this->load->view('template/footer');
    }

    public function tambah(){
      $this->form_validation->set_rules('nama', 'Nama', array('required', 'min_length[4]'));
      $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      if ($this->form_validation->run() == FALSE) {
        # code...
        $this->load->view('template/header');
        $this->load->view('mahasiswa/tambah');
        $this->load->view('template/footer');
      } else {
        # code...
        $this->mahasiswa_model->tambaDataMhs();
        redirect('mahasiswa','refresh');
      }
    }

    public function hapus($id){
      $this->mahasiswa_model->hapusDataMhs($id);
      $this->session->set_flashdata('flash-data', 'dihapus');
      redirect('mahasiswa','refresh');     
    }

    public function detail($id){
      $data['mahasiswa'] = $this->mahasiswa_model->detailMhs($id);
      $this->load->view('template/header',$data);
      $this->load->view('mahasiswa/detail',$data);
      $this->load->view('template/footer');
    }

    public function edit($id){
      $data['jurusan'] = ['Informatika','Kimia','Industri'];
      $this->form_validation->set_rules('nama', 'Nama', array('required', 'min_length[4]'));
      $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      if ($this->form_validation->run() == FALSE) {
        # code...
        $this->load->view('template/header');
        $this->load->view('mahasiswa/edit');
        $this->load->view('template/footer');
      } else {
        # code...
        $this->mahasiswa_model->ubahDataMhs();
        redirect('mahasiswa','refresh');
      }
    }
  
  }
  /* End of file Mahasiswa.php */
  ?>