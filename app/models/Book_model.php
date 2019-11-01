<?php

class Book_model
{
    private $dbh; //database handler ->menampung koneksi ke database
    private $stmt; //statement ->untuk query

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=booku_db'; // data source name

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllBooks()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM books');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
