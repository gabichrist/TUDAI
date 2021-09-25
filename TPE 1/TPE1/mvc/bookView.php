<?php

require_once('libs/Smarty.class.php');

class bookView
{

    public function showBooks($books)
    {
        $smarty = new Smarty();
        $smarty->assign('title', 'Lista de Libros');
        $smarty->assign('books', $books);

        $smarty->display('templates/bookList.tpl');
    }

    public function showBook($book)
    {
        $smarty = new Smarty();
        $smarty->assign('title', 'Información Detallada del Libro');
        $smarty->assign('book', $book);
    }
}
