<?php

class Mahasiswa extends Controller
{
    protected $mahasiswaModel;
    public function __construct()
    {
        $this->mahasiswaModel = $this->models('mahasiswaModel');
    }
    public function index()
    {
        $data = [
            'title' => 'Data Mahasiswa',
            'dt_mahasiswa' => $this->mahasiswaModel->getAllmahasiswa()
        ];

        $this->views('templates/header', $data);
        $this->views('master/mahasiswa/index', $data);
        $this->views('templates/footer');
    }
}
