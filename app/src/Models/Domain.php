<?php
namespace Iesa\App\Models;
use Iesa\App\Core\Model;

    class Domain extends Model {

        public string $fqdn = "";
        public string $ip = "";
        public string $servername = "";
        public string $ldap_port = "";

    }