<?php

class Mahasiswa extends Controller
{
    public function index()
    {
        $this->views('templates/header');
        $this->views('master/pelanggan');
        $this->views('templates/footer');
    }
}
