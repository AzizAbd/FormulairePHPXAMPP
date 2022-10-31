<?php

＄host       = "eu-cdbr-west-03.cleardb.net";
＄username   = "b3ba1f2e8015b8";
＄password   = "e2250b51";
＄dbname     = "heroku_345c439606a8e71";

if (＄_SERVER['HTTP_HOST'] == 'localhost') {
  ＄host       = "localhost";
  ＄username   = "root";
  ＄password   = "";
  ＄dbname     = "project1";
}

＄dsn        = "mysql:host=＄host;dbname=＄dbname";
＄options    = array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

?>