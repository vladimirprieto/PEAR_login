<?php

$options = array(
  'dsn'           => "mysql://user:password@localhost/databasename",
  "table"         => "tablename",
  "usernamecol"   => "usernameontable",
  "passwordcol"   => "passwordnameontable",
  "cryptType"     => "", //whatever security you want (see docs on PEAR)
  'enableLogging' => true,
);