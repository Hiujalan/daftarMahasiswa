<?php

class Dashboard extends Controller
{
    protected $mahasiswaModel;
    public function __construct()
    {
        $this->mahasiswaModel = $this->models('mahasiswaModel');
    }
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'active_dashboard' => 'active',
            'count_mahasiswa' => $this->mahasiswaModel->getCountAllMahasiswa(),
        ];

        $this->views('templates/header', $data);
        $this->views('index', $data);
        $this->views('templates/footer');
    }
}
