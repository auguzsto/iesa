<?php
use Iesa\App\Models\Domain;
use Iesa\App\Repositories\DomainRepository;

    // ini_set('log_errors','On');
    // ini_set('display_errors','Off');
    // ini_set('error_reporting', E_ALL );
    
    require_once __DIR__."/../vendor/autoload.php";
    
    $dotenv = Dotenv\Dotenv::createImmutable("/etc/iesa");
    $dotenv->load();
    
    $domainRepository = new DomainRepository();
    $domain = Domain::fromMap([
        "fqdn" => "exemplo1",
        "ip" => "exemplo2",
        "servername" => "exemplo3",
        "ldap_port" => "ldap_t"
    ]);

    $domain->toJson();