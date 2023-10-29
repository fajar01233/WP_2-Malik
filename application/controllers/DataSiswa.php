<?php
class DataSiswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-mahasiswa');
    }

    public function cetak()
    {
        $this->form_validation->set_rules ('nama', 'Nama mahasiswa', 'required|min_length[0]', ['required' => 'Nama Mahasiswa Harus Diisi', 'min_lenght' => 'Nama tidak boleh kososng']);
        $this->form_validation->set_rules ('nis', 'NIS mahasiswa', 'required|min_length[0]', ['required' => 'NIS Mahasiswa Harus Diisi', 'min_lenght' => 'NIS tidak boleh kososng']);
        $this->form_validation->set_rules ('kelas', 'Kelas mahasiswa', 'required|min_length[0]', ['required' => 'Kelas Mahasiswa Harus Diisi', 'min_lenght' => 'Kelas tidak boleh kososng']);
        $this->form_validation->set_rules ('tanggal', 'Tanggal lahir mahasiswa', 'required|min_length[0]', ['required' => 'Tanggal Lahir Mahasiswa Harus Diisi', 'min_lenght' => 'Tanggal Lahir tidak boleh kososng']);
        $this->form_validation->set_rules ('tempat', 'Tempat lahir mahasiswa', 'required|min_length[0]', ['required' => 'Tempat Lahir Mahasiswa Harus Diisi', 'min_lenght' => 'Tempat Lahir tidak boleh kososng']);
        $this->form_validation->set_rules ('alamat', 'Alamat mahasiswa', 'required|min_length[0]', ['required' => 'alamat Mahasiswa Harus Diisi', 'min_lenght' => 'alamat tidak boleh kososng']);
        $this->form_validation->set_rules ('kelamin', 'Jenis kelamin mahasiswa', 'required|min_length[0]', ['required' => 'Jenis Kelamin Mahasiswa Harus Diisi', 'min_lenght' => 'Jenis Kelamin tidak boleh kososng']);
        $this->form_validation->set_rules ('agama', 'Agama mahasiswa', 'required|max_length[12]', ['required' => 'Agama Mahasiswa Harus Diisi', 'max_lenght' => 'Agama tidak boleh kososng']);

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