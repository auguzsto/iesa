<?php
namespace Iesa\App\Adapters;
use Iesa\App\Core\Database;

    abstract class Repository extends Database {

        private string $table = null;

        public function create(object $object): string {
            try {
                //
            } catch (\Throwable $th) {
                throw $th;
            }
        }
    }