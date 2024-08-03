<?php
namespace Iesa\App\Core;

    class Model {

        public int | null $id;
        public string $created_at;
        public string | null $updated_at;
        public string | null $deleted_at;
        public object $object;

        private function __construct($object) {
            $this->object = $object;
        }

        static public function fromMap(array $array): self {
            $instance = new self((object) $array);
            $attributes = array_keys((array) $instance);

            foreach($attributes as $attribute) {
                foreach(array_keys($array) as $key) {
                    if($key == $attribute) {
                        $instance->$attribute = $array[$attribute];
                    }
                }
            }

            return $instance;
        }

        public function toJson(): string {
            return print json_encode($this->object);
        }

    }