<?php
namespace Iesa\App\Models;

    class Domain {

        public string $fqdn;
        public string $ip;
        public string $servername;
        public string $ldap_port;

        public function __construct(string $fqdn, string $ip, string $servername, string $ldap_port) {
            $this->fqdn = $fqdn;
            $this->ip = $ip;
            $this->servername = $servername;
            $this->ldap_port = $ldap_port;
        }
    }