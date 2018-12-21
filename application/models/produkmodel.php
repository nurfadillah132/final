<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ProdukModel extends CI_Model {
  // Fungsi untuk menampilkan semua data Produk
  public function view(){
    return $this->db->get('produk')->result();
  }
  
  // Fungsi untuk menampilkan data Produk berdasarkan jenis_paket nya
  public function view_by($jenis_paket){
    $this->db->where('jenis_paket', $jenis_paket);
    return $this->db->get('produk')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, jenis_paket tidak harus divalidasi
    // Jadi jenis_paket di validasi hanya ketika menambah data Produk saja
    if($mode == "save")
      $this->form_validation->set_rules('input_jenis_paket', 'jenis_paket', 'required|numeric|max_length[11]');
    
    $this->form_validation->set_rules('input_nama_paket', 'nama_paket', 'required|max_length[50]');
    $this->form_validation->set_rules('input_fasilitas_fitur', 'fasilitas_fitur', 'required');
    $this->form_validation->set_rules('input_jenis_kerjasama', 'telp', 'required|numeric|max_length[15]');
    $this->form_validation->set_rules('input_harga_per_bulan', 'harga_per_bulan', 'required');
    $this->form_validation->set_rules('input_harga_per_tahun', 'harga_per_tahun', 'required');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel Produk
  public function save(){
    $data = array(
      "jenis_paket" => $this->input->post('input_jenis_paket'),
      "nama_paket" => $this->input->post('input_nama_paket'),
      "fasilitas_fitur" => $this->input->post('input_fasilitas_fitur'),
      "jenis_kerjasama" => $this->input->post('input_jenis_kerjasama'),
      "harga_per_bulan" => $this->input->post('input_harga_per_bulan')
      "harga_per_tahun" => $this->input->post('input_harga_per_tahun')
    );
    
    $this->db->insert('Produk', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data Produk berdasarkan jenis_paket Produk
  public function edit($jenis_paket){
    $data = array(
      "jenis_paket" => $this->input->post('input_jenis_paket'),
      "nama_paket" => $this->input->post('input_nama_paket'),
      "fasilitas_fitur" => $this->input->post('input_fasilitas_fitur'),
      "jenis_kerjasama" => $this->input->post('input_jenis_kerjasama'),
      "harga_per_bulan" => $this->input->post('input_harga_per_bulan')
      "harga_per_tahun" => $this->input->post('input_harga_per_tahun')
    );
    
    $this->db->where('jenis_paket', $jenis_paket);
    $this->db->update('produk', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data Produk berdasarkan jenis_paket Produk
  public function delete($jenis_paket){
    $this->db->where('jenis_paket', $jenis_paket);
    $this->db->delete('produk'); // Untuk mengeksekusi perintah delete data
  }
}