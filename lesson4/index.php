<?php

require 'Database/Database.php';
require 'Database/MySQLFactory.php';
require 'Database/PostgreSQLFactory.php';
require 'Database/OracleFactory.php';

require 'DBConnection/DBConnection.php';
require 'DBConnection/MySQLConnection.php';
require 'DBConnection/OracleConnection.php';
require 'DBConnection/PostgresConnection.php';

require 'DBRecord/DBRecord.php';
require 'DBRecord/MySQLRecord.php';
require 'DBRecord/OracleRecord.php';
require 'DBRecord/PostgresRecord.php';

require 'DBBuilder/DBBuilder.php';
require 'DBBuilder/MySQLBuilder.php';
require 'DBBuilder/OracleBuilder.php';
require 'DBBuilder/PostgresBuilder.php';


function test(Factory $factory)
{
    $factory->connection;
}

test(new MySQLFactory());
echo "-----------".PHP_EOL;
test(new OracleFactory());