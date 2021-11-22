<?php
class Petugas extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Petugas');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Petugas";
        $data['petugas'] = $this->M_Petugas->data_petugas();
        $this->template->load_admin('index','petugas',$data);
    }

    public function tambah(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Petugas";
        $data['subtitle'] = "Tambah Data Petugas";
        $this->template->load_admin('index','petugas_tambah',$data);
    }

    public function ubah(){
        if($this->session->userdata('login')!=TRUE){
            redirect('login');
        }

        $data['title'] = "Data Petugas";
        $data['subtitle'] = "Ubah Data Petugas";

        $id = $this->uri->segment(3);
        $data['petugas'] = $this->M_Petugas->data_petugas_by_id($id);
        $this->template->load_admin('index','petugas_ubah',$data);
    }

    public function update(){
        if ($this->session->userdata('login') !=true){
            redirect('login');
        }

        $this->M_Petugas->update();
        redirect('petugas');
    }

    public function hapus(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $id = $this->uri->segment(3);
        $this->M_Petugas->hapus_data_petugas($id);
        redirect('petugas');
    }

    public function simpan(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $this->M_Petugas->simpan();
        redirect('petugas');
    }    

    public function pdf(){
        $this->load->library('dompdf_gen');
        $data['petugas'] = $this->M_Petugas->data_petugas('petugas')->result();

        $this->load->view('laporan_pdf_petugas',$data);

        $paper_size = 'A4';
        $orientation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_petugas.pdf", array('Attachment' =>0));


    }
}