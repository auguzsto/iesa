<?php
namespace Iesa\App\Adapters;
use Iesa\App\Core\Database;

    abstract class Repository extends Database {

        public string $table;

        public function create(object $object): void {
            try {
                $keys = array_keys((array) $object);
                $values = array_values((array) $object);

                $columns = implode(",", $keys);
                $datas = '"'.implode('","', $values).'"';

                $this->mysqli()->query("INSERT INTO $this->table ($columns) VALUES ($datas)");
            } catch (\Throwable $th) {
                throw $th;
            }
        }
    }