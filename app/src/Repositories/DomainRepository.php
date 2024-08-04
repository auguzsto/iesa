<?php
namespace Iesa\App\Repositories;
use Iesa\App\Adapters\Repository;

    class DomainRepository extends Repository {
        
        public function __construct() {
            $this->table = "domain";
        }
    }