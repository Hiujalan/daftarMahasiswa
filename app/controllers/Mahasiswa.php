<?php

class Mahasiswa extends Controller
{
    protected $mahasiswaModel;
    
    public function __construct()
    {
        $this->mahasiswaModel = $this->models('MahasiswaModel');
    }
    public function index()
    {
        $data = [
            'title' => 'Data Mahasiswa',
            'active_mahasiswa' => 'active',
            'dt_mahasiswa' => $this->mahasiswaModel->getAllmahasiswa()
        ];

        $this->views('templates/header', $data);
        $this->views('master/mahasiswa/index', $data);
        $this->views('templates/footer');
    }

    // === INSERT ===
    public function simpan()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nim'       => $_POST['nim'],
                'nama'      => $_POST['nama'],
                'semester'  => $_POST['semester'],
                'status'    => $_POST['status']
            ];

            if ($this->mahasiswaModel->tambahDataMahasiswa($data)) {
                header('Location: ' . BASEURL . '/mahasiswa');
                exit;
            } else {
                echo "Gagal menambah data mahasiswa.";
            }
        }
    }

    // update
    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'id'        => $id,
                'nim'       => $_POST['nim'],
                'nama'      => $_POST['nama'],
                'semester'  => $_POST['semester'],
                'status'    => $_POST['status']
            ];

            if ($this->mahasiswaModel->updateDataMahasiswa($data)) {
                header('Location: ' . BASEURL . '/mahasiswa');
                exit;
            } else {
                echo "Gagal memperbarui data mahasiswa.";
            }
        }
    }


    // === DELETE ===
    public function delete($id) {
        if ($this->mahasiswaModel->deleteDataMahasiswa($id)) {
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            echo "Gagal menghapus data!";
        }
    }
}
