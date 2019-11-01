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
}
