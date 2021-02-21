<?php

class MySQLFactory extends Factory
{
    protected function createDBConnection(): DBConnection
    {
        return new MySQLConnection();
    }

    protected function createDBRecrord(): DBRecord
    {
        return new MySQLRecord();
    }

    protected function createDBQueryBuilder(): DBBuilder
    {
        return new MySQLBuilder();
    }

}