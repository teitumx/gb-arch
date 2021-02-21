<?php

class PostgreSQLFactory extends Factory
{
    protected function createDBConnection(): DBConnection
    {
        return new PostgresConnection();
    }

    protected function createDBRecrord(): DBRecord
    {
        return new PostgresRecord();
    }

    protected function createDBQueryBuilder(): DBBuilder
    {
        return new PostgresBuilder();
    }

}