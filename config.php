<?php

＄host       = "us-cdbr-east-02.cleardb.com";
＄username   = "your remote db username";
＄password   = "your secrete";
＄dbname     = "your db name";

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