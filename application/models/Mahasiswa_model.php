<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class mahasiswa_model extends CI_Model {
  
      public function getAllMahasiswa(){
        return $this->db->get('mahasiswa') -> result_array();
      }

      public function tambaDataMhs(){
        $data =
        array(
          "nama" => $this->input->post("nama",true),
          "nim" => $this->input->post("nim",true),
          "email" => $this->input->post("email",true),
          "jurusan" => $this->input->post("jurusan",true),
        );
        $this->db->insert('mahasiswa',$data);
      }

      public function hapusDataMhs($id){
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');       
      }
  
      public function getMahasiswaById($id){
        return $this->db->get_where('mahasiswa',array('id'=>$id))->row_array();
      }

      public function ubahDataMhs(){
        $data =
        array(
          "nama" => $this->input->post("nama",true),
          "nim" => $this->input->post("nim",true),
          "email" => $this->input->post("email",true),
          "jurusan" => $this->input->post("jurusanValue",true),
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
      }

      public function cariDatamahasiswa(){
        $keyword = $this->input->post("keyword");
        $this->db->like('nama',$keyword);
        $this->db->or_like('nim',$keyword);
        return $this->db->get('mahasiswa') -> result_array();
      }

  }
  
  /* End of file mahasiswa_model.php */
  
?>