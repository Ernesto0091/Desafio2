<?php
    if(isset($_POST['enviar'])){
        
        $Autor = $_POST['Autor'];
        $Titulo = $_POST['Titulo'];
        $NumEdicion = $_POST['Nedicion'];
        $LugarPubli = $_POST['LugarP'];
        $Editorial = $_POST['Editorial'];
        $AñoEdicion = $_POST['Aedicion'];
        $NumerosPaginas = $_POST['Npaginas'];
        $isbn = $_POST['isbn'];
        $notas = $_POST['notas'];

        function GuardarLibros($Autor,$Titulo,$NumEdicion,$LugarPubli,$Editorial,$AñoEdicion,$NumerosPaginas,$isbn,$notas)
        {
         
            $Libros = array(
                $Titulo => array(
                    "Autor"=> $Autor,
                    "Numero de edición" => $NumEdicion,
                    "Lugar de Publicacion" => $LugarPubli,
                    "Editorial" => $Editorial,
                    "Año de Edición" => $AñoEdicion,
                    "Numero de paginas" => $NumerosPaginas,
                    "ISBN" => $isbn,
                    "Notas" => $notas

                )
            );

            foreach ($Libros as $libro => $informacion) {
                echo "<div class=\"tabla\">";
                echo "<table class='table ";
                echo "<thead>";
                echo " <tr class='bg-secondary'>";
                echo " <th scope='col' colspan='2' class='text-center'>". $libro."</th>";
                echo " </tr>";
            
                echo "</thead>";
                echo "<tbody>";
                foreach ($informacion as $info => $detalles) {
                    echo " <tr>";
                    echo " <td>$info</td>";
                    echo " <td> ".$detalles."</td>";
                    echo " </tr>";
                }
                echo "</tbody>";
                echo "</table>";
                echo "</div>";
            }  
        }

        GuardarLibros($Autor,$Titulo,$NumEdicion,$LugarPubli,$Editorial,$AñoEdicion,$NumerosPaginas,$isbn,$notas);

       
    }
    else{
        echo "nel";
    }
?>
