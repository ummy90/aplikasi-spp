<?php
class Siswa extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Siswa');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Siswa";
        $data['siswa'] = $this->M_Siswa->data_siswa();
        $this->template->load_admin('index','siswa',$data);
    }

    public function tambah(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Siswa";
        $data['subtitle'] = "Tambah Data Siswa";
        $this->template->load_admin('index','siswa_tambah',$data);
    }

    public function simpan(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $this->M_Siswa->simpan();
        redirect('siswa');
    }

    public function ubah(){
        if($this->session->userdata('login')!=TRUE){
            redirect('login');
        }

        $data['title'] = "Data Siswa";
        $data['subtitle'] = "Edit Data Siswa";

        $id = $this->uri->segment(3);
        $data['siswa'] = $this->M_Siswa->data_siswa_by_id($id);
        $this->template->load_admin('index','siswa_ubah',$data);
    }

    public function update(){
        if ($this->session->userdata('login') !=true){
            redirect('login');
        }

        $this->M_Siswa->update();
        redirect('siswa');
    }

    public function hapus(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $id = $this->uri->segment(3);
        $this->M_Siswa->hapus_data_siswa($id);
        redirect('siswa');
    }

    public function pdf(){
        $this->load->library('dompdf_gen');
        $data['siswa'] = $this->M_Siswa->data_siswa('siswa')->result();

        $this->load->view('laporan_pdf',$data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_siswa.pdf", array('Attachment' =>0));


    }
}