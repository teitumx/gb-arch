<?php

class OracleFactory extends Factory
{
    protected function createDBConnection(): DBConnection
    {
        return new OracleConnection();
    }

    protected function createDBRecrord(): DBRecord
    {
        return new OracleRecord();
    }

    protected function createDBQueryBuilder(): DBBuilder
    {
        return new OracleBuilder();
    }

}