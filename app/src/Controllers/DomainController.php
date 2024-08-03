<?php
namespace Iesa\App\Controllers;
use Iesa\App\Core\Controller;
use Iesa\App\Models\Domain;

    class DomainController extends Controller {
        
        private Domain $domain;

        public function __construct() {
            $this->domain = new Domain();
        }

        
    }