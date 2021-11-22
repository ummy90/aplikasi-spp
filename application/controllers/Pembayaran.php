<?php
class Pembayaran extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Pembayaran');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Pembayaran";
        $data['pembayaran'] = $this->M_Pembayaran->data_pembayaran();
        $this->template->load_admin('index','pembayaran',$data);
    }

    public function tambah(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Pembayaran";
        $data['subtitle'] = "Pembayaran";
        $this->template->load_admin('index','pembayaran_tambah',$data);
    }

    public function simpan(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $this->M_Pembayaran->simpan();
        redirect('pembayaran');
    }

    public function ubah(){
        if($this->session->userdata('login')!=TRUE){
            redirect('login');
        }

        $data['title'] = "Pembayaran";
        $data['subtitle'] = "Pembayaran";

        $id = $this->uri->segment(3);
        $data['pembayaran'] = $this->M_Pembayaran->data_pembayaran_by_id($id);
        $this->template->load_admin('index','pembayaran_ubah',$data);
    }

    public function update(){
        if ($this->session->userdata('login')!=true){
            redirect('login');
        }

        $this->M_Pembayaran->update();
        redirect('pembayaran');
    }

    public function hapus(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $id = $this->uri->segment(3);
        $this->M_Pembayaran->hapus_data_pembayaran($id);
        redirect('pembayaran');
    }

    public function pdf(){
        $this->load->library('dompdf_gen');
        $data['pembayaran'] = $this->M_Pembayaran->data_pembayaran('pembayaran')->result();

        $this->load->view('laporan_pdf_pembayaran',$data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_pembayaran.pdf", array('Attachment' =>0));


    }
}