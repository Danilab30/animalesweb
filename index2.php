<?php include("header.php") ?>
        <div class="container">
            <h1>Registro de carros</h1>
            <h2>Consulte e ingrese los registros de carros existentes</h2>

            <table class="table">
                <thead>
                    <tr>
                        <th>Modelo</th>
                        <th>Marca</th>
                        <th>Color</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                       include("php/entities/Carro.php");
                       $registros = getAll();
                       if(count($registros) >0){
                        foreach($registros as $row){
                            echo "<tr>".
                            "<td>". $row->modelo . "</td>".
                            "<td>". $row->marca. "</td>".
                            "<td>". $row->color. "</td>".
                            "</tr>";
                        }
                       }

                   ?>
                </tbody>
            </table>
        </div>
        <?php include("footer.php") ?>
 