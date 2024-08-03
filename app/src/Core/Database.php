<?php
namespace Iesa\App\Core;

use mysqli;

    class Database {
        
        private function __construct() {
            $this->connection();
        }

        private function connection(): mysqli {
            try {
                $host = $_ENV['DB_HOST'];
                $user = $_ENV['DB_USER'];
                $pass = $_ENV['DB_PASS'];
                $port = $_ENV['DB_PORT'];
                
                $mysqli = mysqli_connect($host, $user, $pass, "iesa", $port);
                return $mysqli;
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        public function mysqli(): mysqli {
            return $this->connection();
        }


    }