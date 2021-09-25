<?php

require_once('libs/Smarty.class.php');

class writerView
{

    public function showWriters($writers)
    {
        $smarty = new Smarty();
        $smarty->assign('title', 'Lista de Escritores');
        $smarty->assign('writers', $writers);

        $smarty->display('templates/bookList.tpl');
    }
}
