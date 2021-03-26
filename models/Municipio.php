<?php
    require_once "connection/Connection.php";

    class Municipio {

        public function obtener_municipios_select($id_estado) {
            $db = new Connection();
            $query = "SELECT id, nombre FROM municipios WHERE estado_id = $id_estado";
            $resultado = $db->query($query);
            $datos = [];
            if($resultado->num_rows) {
                while ($row = $resultado->fetch_assoc()) {
                    $datos[] = [
                        'id' => $row['id'],
                        'nombre' => $row['nombre'],
                    ];
                }//end while
            }//end if
            return $datos;
        }//end obtener_municipios_select

    }//end class Municipio