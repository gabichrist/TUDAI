{include 'templates/header.tpl'}

<h1>{$title}</h1>

<div>
    <ul>
        <li>
            {$book->titulo}  {$book->sinopsis}  {$book->genero}  {$book->anio}
        </li>
    </ul>
</div>



{include 'templates/footer.tpl'}