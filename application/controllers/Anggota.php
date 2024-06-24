<?php
class Anggota extends CI_Controller
{
    public function index()
    {
    
        
        $this->form_validation->set_rules('nim', 'Nim Anggota', 'required|min_length[3]', [
            'required' => 'Nim Matakuliah Harus diisi',
        ]);

        $this->form_validation->set_rules('nama', 'Nama Anggota', 'required|min_length[3]', [
            'required' => 'Nama Anggota Harus diisi',
        ]);

        $this->form_validation->set_rules('tanggal', 'Tanggal Lahir Anggota', 'required|min_length[2]', [
            'required' => 'Tanggal Lahir Anggota Harus diisi',
        ]);
        
        $this->form_validation->set_rules('tempat', 'Tempat Lahir Anggota', 'required|min_length[3]', [
            'required' => 'Tempat Lahir Anggota Harus diisi',
        ]);

        $this->form_validation->set_rules('jeniskel', 'Jenis Kelamin Anggota', 'required', [
            'required' => 'Jenis Kelamin Anggota Harus diisi',
        ]);

        $this->form_validation->set_rules('prodi', 'Program Studi Anggota', 'required|min_length[3]', [
            'required' => 'Program Studi Anggota Harus diisi',
        ]);

        $this->form_validation->set_rules('angkatan', 'Angkatan Anggota', 'required|min_length[2]', [
            'required' => 'Angkatan Anggota Harus diisi',
        ]);

        $this->form_validation->set_rules('kampus', 'Kampus Anggota', 'required|min_length[3]', [
            'required' => 'Kampus Anggota Harus diisi',
        ]);

        $this->form_validation->set_rules('email', 'Email Anggota', 'required|min_length[3]', [
            'required' => 'Email Anggota Harus diisi',
        ]);

        $this->form_validation->set_rules('alamat', 'Alamat Anggota', 'required|min_length[3]', [
            'required' => 'Alamat Anggota Harus diisi',
        ]);

        $this->form_validation->set_rules('hobi', 'Hobi Anggota', 'required|min_length[3]', [
            'required' => 'Hobi Anggota Harus diisi',
        ]);
        
        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-anggota');
        } 
        else {
            $data = [
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'tanggal' => $this->input->post('tanggal'),
                'tempat' => $this->input->post('tempat'),
                'jeniskel' => $this->input->post('jeniskel'),
                'prodi' => $this->input->post('prodi'),
                'angkatan' => $this->input->post('angkatan'),
                'kampus' => $this->input->post('kampus'),
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat'),
                'hobi' => $this->input->post('hobi')
            ];
            
            $this->load->view('view-data-anggota', $data);
        }
    }
}