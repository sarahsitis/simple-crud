<?php

class Book_model
{
    private $table = 'books';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBooks()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBookById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function addNewBook($data)
    {
        $query = "INSERT INTO books VALUES 
                ('',:title,:author,:publisher,:price)";

        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('author', $data['author']);
        $this->db->bind('publisher', $data['publisher']);
        $this->db->bind('price', $data['price']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
