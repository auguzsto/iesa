<?php
use Iesa\App\Models\Domain;
use Iesa\App\Repositories\DomainRepository;

    require_once __DIR__."/../vendor/autoload.php";
    
    $dotenv = Dotenv\Dotenv::createImmutable("/etc/iesa");
    $dotenv->load();
    
    $domainRepository = new DomainRepository();
    $domain = new Domain("exemplo", "exemplo", "exemplo", 498);
    $domainRepository->create($domain);