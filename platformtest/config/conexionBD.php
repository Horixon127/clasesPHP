<?php

    class Database {

        public $db;
            private static $dns = "mysql:host=localhost;dbname=platformtest"; 
            private static $user = "root";  
            private static $pass = "";      
            private static $instance;      

        public function __construct() {
            $this->db = new PDO(self::$dns, self::$user, self::$pass);         
        }

        public static function getInstance() {
            if(!isset(self::$instance)) {
                $object = __CLASS__;
                self::$instance = new $object;
            }

                return self::$instance;
        }

        public function insertar($nombre, $apellido, $edad, $categoria, $marcacoche, $modelo, $numcomp) {


            try {
                $conexion = Database::getInstance(); 
                $query = $conexion->db->prepare("INSERT INTO testbyid (nombre, apellido, edad, categoria, marcacoche, modelo, numcomp) VALUES (:nombre, :apellido, :edad, :categoria, :marcacoche, :modelo, :numcomp)");
                $query->execute(
                    array(

                        ':nombre'     => $nombre,
                        ':apellido'   => $apellido,
                        ':edad'       => $edad,
                        ':categoria'  => $categoria,
                        ':marcacoche' => $marcacoche,
                        ':modelo'     => $modelo,
                        ':numcomp'    => $numcomp

                    )
                );

                return 1; 

            } catch(PDOException $error){

                return 0; 
            }
        }

        public function validarCorredor($numcomp) {
            $conexion = Database::getInstance();
            $query = $conexion->db->prepare("SELECT numcomp FROM testbyid WHERE numcomp=:numcomp");
            $query->execute(
                array(
                    ":numcomp" => $numcomp
                   )
                );
            return ($query);
        }

        public function datosCorredores() {
            $conexion = Database::getInstance();
            $query = $conexion->db->prepare("SELECT * from testbyid");
            $query->execute();
            return $query;
            
        }
    }
        
?>