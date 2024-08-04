<?php
namespace Iesa\App\Core;

    class Model {
        
        public object $object;

        private function __construct($object) {
            $this->object = $object;
        }

        static public function fromMap(array $array): self {
            $instance = new self((object) $array);

            foreach(get_object_vars($instance) as $key => $name) {
                $instance->$key = $name;
            }
            
            return $instance;
        }

        public function toJson(): string {
            return print json_encode($this->object);
        }

    }