<?php
    class DLemas extends CI_Controller
    {

        public function index()

        {
            $this->load->view('v-formD-Lemas');
        }

        public function cetak()
        {
            $this->form_validation->set_rules('nama', 'Nama Siswa', 'required', [
                'required' => 'Nama Tidak Boleh Kosong'
            ]);

            $this->form_validation->set_rules('nis', 'NIS', 'required|max_length[6]', [
                'required' => 'NIS Tidak Boleh Kosong',
                'max_length' => 'Format NIS 6 Digit'
            ]);

            $this->form_validation->set_rules('kelas', 'Kelas', 'required|max_length[2]', [
                'required' => 'Kelas Tidak Boleh Kosong',
                'max_length' => 'Format Kelas 2 Digit'
            ]);

            $this->form_validation->set_rules('tanggal', 'Tanggal Lahir', 'required|max_length[10]', [
                'required' => 'Tanggal Lahir Tidak Boleh Kosong',
                'max_length' => 'Format Tanggal Lahir thn-bln-tgl'
            ]);

            $this->form_validation->set_rules('tempat', 'Tempat Lahir', 'required', [
                'required' => 'Tempat Lahir Tidak Boleh Kosong'
            ]);

            $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
                'required' => 'Alamat Tidak Boleh Kosong'
            ]);

            if ($this->form_validation->run() != true) {
                $this->load->view('v-formD-Lemas');
            } else {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'nis' => $this->input->post('nis'),
                    'kelas' => $this->input->post('kelas'),
                    'tanggal' => $this->input->post('tanggal'),
                    'tempat' => $this->input->post('tempat'),
                    'alamat' => $this->input->post('alamat'),
                    'jeniskel' => $this->input->post('jeniskel'),
                    'agama' => $this->input->post('agama')
                ];

                $this->load->view('v-tampilD-Lemas', $data);
            }
        }
    }
?>