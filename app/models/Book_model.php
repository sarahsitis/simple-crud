<?php

class Book_model
{
    public function getAllBooks()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM books');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
