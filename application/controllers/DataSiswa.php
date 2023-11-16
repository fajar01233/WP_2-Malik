<?php
class DataSiswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-mahasiswa');
    }

    public function cetak()
    {
        $this->form_validation->set_rules ('nama', 'Nama mahasiswa', 'required|min_length[0]', ['required' => 'Nama Mahasiswa Harus Diisi', 'min_length' => 'Nama tidak boleh kososng']);
        $this->form_validation->set_rules ('nis', 'NIS mahasiswa', 'required|min_length[8]', ['required' => 'NIS Mahasiswa Kurang Dari 8 Angka', 'min_length' => 'NIS mahasiswa lebih Dari 8']);
        $this->form_validation->set_rules ('kelas', 'Kelas mahasiswa', 'required|min_length[8]', ['required' => 'Kelas Mahasiswa Harus Diisi Menggunakan Tanda (.)', 'min_length' => 'Kelas tidak boleh kososng']);
        $this->form_validation->set_rules ('tanggal', 'Tanggal lahir mahasiswa', 'required|min_length[10]', ['required' => 'Harus Menggunakan Tanda (-)', 'min_length' => 'Tanggal Lahir tidak boleh kososng']);
        $this->form_validation->set_rules ('tempat', 'Tempat lahir mahasiswa', 'required|min_length[0]', ['required' => 'Tempat Lahir Mahasiswa Harus diisi', 'min_length' => 'Tempat Lahir tidak boleh kososng']);
        $this->form_validation->set_rules ('alamat', 'Alamat mahasiswa', 'required|min_length[5]', ['required' => 'alamat Mahasiswa Harus Diisi', 'min_length' => 'alamat tidak boleh kososng']);
        $this->form_validation->set_rules ('kelamin', 'Jenis kelamin mahasiswa', 'required|min_length[5]', ['required' => 'Jenis Kelamin Mahasiswa Harus Diisi', 'min_length' => 'Jenis Kelamin tidak boleh kososng']);
        $this->form_validation->set_rules ('agama', 'Agama mahasiswa', 'required|max_length[10]', ['required' => 'Agama Mahasiswa Harus Diisi', 'max_length' => 'Agama tidak boleh kososng']);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-mahasiswa');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tanggal' => $this->input->post('tanggal'),
                'tempat' => $this->input->post('tempat'),
                'alamat' => $this->input->post('alamat'),
                'kelamin' => $this->input->post('kelamin'),
                'agama' => $this->input->post('agama')
            ];
            $this->load->view('view-data-mahasiswa', $data);
        }
    }
}