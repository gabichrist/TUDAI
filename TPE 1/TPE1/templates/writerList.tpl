{include 'templates/header.tpl'}

<h1>{$title}</h1>

<div>
    <ul>
        {foreach $writers as $writer}
        <li>
            <a href="escritores/libros">Ver Libros</a>;
        </li>
        {/foreach}
    </ul>
</div>


{include 'templates/footer.tpl'}