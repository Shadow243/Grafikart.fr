<?php

namespace App\Infrastructure\Importer;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpKernel\KernelInterface;

abstract class MySQLImporter extends DataImporter
{
    use DatabaseImporterTools;

    protected \PDO $pdo;

    public function __construct(\PDO $pdo, EntityManagerInterface $em, KernelInterface $kernel)
    {
        $this->pdo = $pdo;
        parent::__construct($em, $kernel);
    }
}
