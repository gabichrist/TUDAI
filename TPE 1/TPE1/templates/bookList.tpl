{include 'templates/header.tpl'}

<h1>{$title}</h1>

<div>
    <ul>
        {foreach $books as $book}
        <li>
            <a href="libro/detalle">Ver más</a>;
        </li>
        {/foreach}
    </ul>
</div>

{include 'templates/footer.tpl'}