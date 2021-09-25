<?php

class bookModel
{

    function getBooks($books)
    {
        $db = new PDO('mysql:host=localhost;' . 'dbname=libreria;charset=utf8', 'root', '');
        $query = $db->prepare('SELECT * FROM libros');
        $query->execute([$books]);
        $books = $query->fetchAll(PDO::FETCH_OBJ);
        return $books;
    }
}
