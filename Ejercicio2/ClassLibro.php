<?php
    class Libro
    {
        private $Autor;
        private $Titulo, $NumEdicion;
        private $LugarPublicacion, $Editorial;
        private $AñoEdicion, $NumeroPaginas,$notas,$isbn;

        
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

   
        }
    }
?>