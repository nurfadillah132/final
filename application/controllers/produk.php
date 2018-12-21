<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class produk extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('produk'); // Load Produk ke controller ini
  }
  
  public function index(){
    $data['produk'] = $this->Produk->view();
    $this->load->view('produk/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->Produk->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Produk->save(); // Panggil fungsi save() yang ada di Produk.php
        redirect('produk');
      }
    }
    
    $this->load->view('produk/productForm');
  }
  
  public function ubah($jenis_paket){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->Produk->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Produk->edit($jenis_paket); // Panggil fungsi edit() yang ada di Produk.php
        redirect('produk');
      }
    }
    
    $data['produk'] = $this->Produk->view_by($jenis_paket);
    $this->load->view('produk/productForm', $data);
  }
  
  public function hapus($jenis_paket){
    $this->Produk->delete($jenis_paket); // Panggil fungsi delete() yang ada di Produk.php
    redirect('produk');
  }
}