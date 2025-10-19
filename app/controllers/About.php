<?php

class About extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Tentang Kami',
            'active_about' => 'active',
        ];

        $this->views('templates/header', $data);
        $this->views('about', $data);
        $this->views('templates/footer');
    }
}
