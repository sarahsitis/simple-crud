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
            Flasher::setFlash('Succeed!', 'New Data Added', 'success');
            header('Location: ' . BASEURL . 'home');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Book_model')->deleteBook($id) > 0) {
            Flasher::setFlash('Deleted!', 'Your file has been deleted.', 'success');
            header('Location: ' . BASEURL . 'home');
            exit;
        }
    }
}
