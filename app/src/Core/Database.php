<?php
namespace Iesa\App\Core;

use mysqli;

    class Database {

        public function mysqli(): mysqli {
            return $this->connection();
        }

        private function connection(): mysqli {
            try {
                $host = $_ENV['DB_HOST'];
                $user = $_ENV['DB_USER'];
                $pass = $_ENV['DB_PASS'];
                $port = $_ENV['DB_PORT'];
                
                $mysqli = new mysqli($host, $user, $pass, "iesa", $port);
                return $mysqli;
            } catch (\Throwable $th) {
                throw $th;
            }
        }
    }