<?php
define ('DB_NAME', 'comments') ;
define ('DB_USER', 'root' ) ;
define ('DB_PASSWORD', '' ) ;
define ('DB_HOST', 'localhost' ) ;

$link = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD);


if (!$link)  {

  die ('could not connect : ' . mysql_error ()) ;
}

  $database_selected = mysql_select_db ('DB_NAME', $link) ;


  if(!'database_selected') {

  die('Could not connect: ' . mysql_error());
}

echo 'Connected successfully database';


  $name = $_POST ["name"];
  $message = $_POST ["comment"];
  $email = $_POST ["email"];

  /* Latest work! All seems fine no error messages. Open to improvements, comments and suggestions */

  $sql = "INSERT INTO comments.commentform (`name`, `email`, `comment`) VALUES ('$name','$email', '$message');";

  echo "$name","<br>", "$message";


if (!mysql_query($sql)) {

  die('Error: ' . mysql_error());
}




mysql_close()
?>
