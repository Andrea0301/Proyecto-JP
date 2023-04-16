<?php

    include_once('../config/config.php');
    include('../config/database.php');
    
    class cliente{
        public $conexion; /* LLAMO LA CONEXION DE MI BASE DE DATOS */

        function __construct(){
            $db= new Database(); /* LA CONEXION A LA BD SIEMPRE SE RENUEVE O ESTE EN LINEA */
            $this->conexion = $db->connectToDatabase();
        }

        function save($params){
            $Nombres = $params['Nombres'];
            $Apellidos = $params['Apellidos'];
            $Email = $params['Email'];
            $Celular = $params['Celular'];
            $Mensaje = $params['Mensaje'];
            
            $insert = " INSERT INTO clientesperfumes VALUES (NULL,'$Nombres', '$Apellidos', '$Email', '$Celular', '$Mensaje')";
            return mysqli_query($this->conexion, $insert);
        }

        function getAll(){
            $sql = "SELECT * FROM clientesperfumes";
            return mysqli_query($this->conexion, $sql);
        }

        function getOne($id)
        {
            $sql = "SELECT * FROM  clientesperfumes WHERE id = $id";
            return mysqli_query($this->conexion, $sql);
        }

        function update($params){
            $Nombres = $params['Nombres'];
            $Apellidos = $params['Apellidos'];
            $Email = $params['Email'];
            $Celular = $params['Celular'];
            $Mensaje = $params['Mensaje'];
            $id = $params['id'];

            $update = " UPDATE clientesperfumes SET Nombres='$Nombres', Apellidos='$Apellidos', Email='$Email', Celular='$Celular', Mensaje='$Mensaje' WHERE id = $id ";
            return mysqli_query($this->conexion, $update);
        }

        function delete($id){
            $delete = "DELETE FROM clientesperfumes  WHERE id = $id";
            return mysqli_query($this->conexion, $delete);
        }

    }
?>