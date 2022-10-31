<?php

＄server     = "eu-cdbr-west-03.cleardb.net";
＄user  = "b3ba1f2e8015b8";
＄mdp  = "e2250b51";
＄db     = "heroku_345c439606a8e71";

if (＄_SERVER['HTTP_HOST'] == 'localhost') {
  ＄server   = "localhost";
  ＄user  = "root";
  ＄mdp   = "";
  ＄db    = "project1";
}

＄dsn        = "mysql:server=＄server;db=＄db";
＄options    = array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

?>