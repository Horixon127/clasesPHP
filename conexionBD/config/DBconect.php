<?php

    class Database {

        public $db; // Controladores db
            private static $dns = "mysql:host=localhost;dbname=prueba";  // URL de la BD
            private static $user = "root";   // usuario de la conexion  //static solo se refiere a archivarlo 
            private static $pass = "";      // contraseña del usuario
            private static $instance;      // instancia de la conexion // la |instance| es un objeto que llama otro

        public function __construct() {
            $this->$db = new PDO(self::$dns, self::$user, self::$pass);         // |self| hace referencia a la instancia // Conecta Automaticamente Con PDO
        }

        public static function getInstance() {
            if(!isset(self::$instance)) {
                $object = __CLASS__;
                self::$instance = new $object;
            }

                return self::$instance;
        }

        public function insertar($nombre, $apellido, $edad, $email) {


            try {
                $conexion = Database::getInstance() //obtiene la instancia de la clase
                $query = $conexion->$db->prepare("INSERT INTO persona (nombre, apellido, email, edad) VALUES (:nombre, :apellido, :email, :edad,)");
                $query->execute(
                    array(
                        ':nombre'   => $nombre,
                        ':apellido' => $apellido,
                        ':email'    => $email,
                        ':edad'     => $edad
                    )
                );

                return 1; //retorna 1 si fue exitos

            } catch(PDOException $error){
                return 0; // retorna a 0 si falla
            }
        }

    }

?>