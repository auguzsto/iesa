<?php
namespace Iesa\App\Adapters;
use Iesa\App\Core\Database;

    abstract class Repository extends Database {

        public string $table;

        public function create(object $model): void {
            try {
                $modelArray = (array) $model->object;
                $keys = array_keys($modelArray);
                $values = array_values($modelArray);

                $columns = implode(",", $keys);
                $datas = '"'.implode('","', $values).'"';
                
                $this->mysqli()->query("INSERT INTO $this->table ($columns) VALUES ($datas)");
            } catch (\Throwable $th) {
                throw $th;
            }
        }
    }