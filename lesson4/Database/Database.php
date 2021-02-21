<?php

abstract Class Factory
{
    public $connection;
    private $record;
    private $builder;

    public function __construct()
    {
        $this->connection = $this->createDBConnection();
        $this->record = $this->createDBRecrord();
        $this->builder= $this->createDBQueryBuilder();
    }


    abstract protected function createDBConnection(): DBConnection;
    abstract protected function createDBRecrord(): DBRecord;
    abstract protected function createDBQueryBuilder(): DBBuilder;


}

