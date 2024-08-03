<?php
namespace Iesa\App\Repositories;
use Iesa\App\Adapters\Repository;
use Iesa\App\Models\Domain;

    class DomainRepository extends Repository {
        
        public function __construct() {
            $this->table = "domain";
        }
    }