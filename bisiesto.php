<?php include("header.php") ?>

<script src="scripts/bisiesto.js"></script>
<div class="container">
    <h1>Registro de Javascript</h1>
    <h2>Años Bisiestos</h2>

    <input type="number" id="año1">
    <input type="number" id="año2">

    <button onclick="ejecutar()">Ejecutar</button>
    <button onclick="sumar()">Sumar</button>

   
    <div id="elementos"></div>

    
    <div id="dic_elementos"></div>
</div>

<?php include("footer.php") ?>
