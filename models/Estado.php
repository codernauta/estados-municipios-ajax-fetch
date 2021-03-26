<?php
    require_once "connection/Connection.php";

    class Estado {

        public function obtener_estados_select() {
            $db = new Connection();
            $query = "SELECT id, nombre FROM estados";
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
        }//end obtener_estados_select

    }//end class Estado