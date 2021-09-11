<?php 
function showHome() {
    include_once "templates/header.php";
    echo '<nav>
        <ul>
            <li><a href="tabla/5">limite 5</a></li>
            <li><a href="tabla/10">limite 10</a></li>
            <li><a href="tabla/20">limite 20</a></li>
        </ul>
    </nav>
    <form id="form-tabla" method="GET">
        <label>limite</label><input type="number" name="numero">
        <button type="submit">enviar</button>
        </form>
    <div id="resultado">
    </div>';
    include_once "templates/footer.php";
}

