<?php
class Kelas extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Kelas');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Kelas";
        $data['kelas'] = $this->M_Kelas->data_kelas();
        $this->template->load_admin('index','kelas',$data);
    }

    public function tambah(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Kelas";
        $data['subtitle'] = "Tambah Data Kelas";
        $this->template->load_admin('index','kelas_tambah',$data);
    }

    public function simpan(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $this->M_Kelas->simpan();
        redirect('kelas');
    }

    public function ubah(){
        if($this->session->userdata('login')!=TRUE){
            redirect('login');
        }

        $data['title'] = "Data Kelas";
        $data['subtitle'] = "Edit Data kelas";

        $id = $this->uri->segment(3);
        $data['kelas'] = $this->M_Kelas->data_kelas_by_id($id);
        $this->template->load_admin('index','kelas_ubah',$data);
    }

    public function update(){
        if ($this->session->userdata('login') !=true){
            redirect('login');
        }

        $this->M_Kelas->update();
        redirect('kelas');
    }

    public function hapus(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $id = $this->uri->segment(3);
        $this->M_Kelas->hapus_data_kelas($id);
        redirect('kelas');
    }

    public function pdf(){
        $this->load->library('dompdf_gen');
        $data['kelas'] = $this->M_Kelas->data_kelas('kelas')->result();

        $this->load->view('laporan_pdf_kelas',$data);

        $paper_size = 'A4';
        $orientation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_kelas.pdf", array('Attachment' =>0));


    }
}