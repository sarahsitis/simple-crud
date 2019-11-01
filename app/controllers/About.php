<?php

class About extends Controller
{
    public function index($nama = 'Sarah')
    {
        $data['judul'] = 'About Me';
        $data['nama'] = $nama;
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {

        $this->view('about/page');
    }
}
