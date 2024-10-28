<?php include("header.php") ?>
<div class="container">
    <h1>Planetas del Sistema Solar</h1>

    <?php
        include("php/entities/Planeta.php");
        $registros = getAll(); 
        
        if(count($registros) > 0){
            foreach($registros as $row){
                echo "<div>"; 
                echo "<p>" . $row->Nombre . "</p>";
                echo "<img src='" . $row->Imagen . "'>"; 
                echo "</div>";
            }
        } else {
            echo "<p>No hay planetas disponibles.</p>";
        }
    ?>
</div>
<?php include("footer.php") ?>
