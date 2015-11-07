<?php
return array(
  'doctrine' => array(
    'connection' => array(
      'orm_default' => array(
        'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
        'params' => array(
          'host'     => 'localhost',
          'port'     => '3306',
          'user'     => 'dbadmin',
          'password' => 'p1029384756d',
          'dbname'   => 'db_zf_doctrine'
        )
      )
    )
  ),
);