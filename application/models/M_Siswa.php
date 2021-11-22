<?php
class M_Siswa extends CI_Model {
    function data_siswa(){
        $query = $this->db->query("select * from siswa");
        return $query;
    }

    function simpan(){
        $data = array('nisn' => $this->input->post('nisn'),
                'nis' => ($this->input->post('nis')),
                'nama' => ($this->input->post('nama')),
                'id_kelas' => ($this->input->post('id_kelas')),
                'alamat' => ($this->input->post('alamat')),
                'no_telp' => $this->input->post('no_telp'));
        $insert = $this->db->insert('siswa',$data);
    }

    function data_siswa_by_id($id){
        $query = $this->db->query("select * from siswa where nisn = '$id'");
        return $query;
    }

    function update(){
        $where = array('nisn'=> $this->input->post('nisn'));
        $data1 = array('nis'=> ($this->input->post('nis')),
        'nama' => $this->input->post('nama'),
        'id_kelas' => $this->input->post('id_kelas'),
        'alamat' => $this->input->post('alamat'),
        'no_telp' => $this->input->post('no_telp'));


        $data2 = array('nama'=> $this->input->post('nama'));



        if (empty($this->input->post('nis'))){
            $this->db->where($where);
            $query = $this->db->update('siswa',$data2);
        }else{
            $this->db->where($where);
            $query = $this->db->update('siswa',$data1);
        }

        if($query > 0){
            $this->session->set_flashdata('suksessimpan','Data Siswa Berhasil Diperbaharui');
        }
    }

    function hapus_data_siswa($id){
        $query = $this->db->query("delete from Siswa where nisn = '$id'");
        if($query > 0){
            $this->session->set_flashdata('suksessimpan','Data Siswa Berhasil Dihapus');
        }else{
            $this->session->set_flashdata('gagalsimpan','Data Siswa Gagal Dihapus');
        }
    }
}