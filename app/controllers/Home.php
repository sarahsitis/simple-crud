<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['book'] = $this->model('Book_model')->getAllBooks();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail';
        $data['book'] = $this->model('Book_model')->getBookById($id);
        $this->view('templates/header', $data);
        $this->view('home/detail', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        if ($this->model('Book_model')->addNewBook($_POST) > 0) {
            header('Location: ' . BASEURL . 'home');
            exit;
        }
    }
}
