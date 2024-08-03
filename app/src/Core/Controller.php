<?php
namespace Iesa\App\Core;

    class Controller {

        public function request(string $data): string {
            try {
                $data = file_get_contents("php://input");
                return $data;
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        public function json(string $data): string {
            try {
                return print json_encode($data);
            } catch (\Throwable $th) {
                throw $th;
            }
        }
    }