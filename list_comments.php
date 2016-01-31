<?php
define ('DB_NAME', 'comments') ;
define ('DB_USER', 'root' ) ;
define ('DB_PASSWORD', '' ) ;
define ('DB_HOST', 'localhost' ) ;

$link = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD);


if (!$link)  {
    die ('could not connect : ' . mysql_error ()) ;
}

mysql_select_db ('DB_NAME');

if(!'database_selected') {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully to the database';

$sqlquery = mysql_query ("SELECT * FROM  comments.commentform ORDER BY id DESC");

while ($rows = mysql_fetch_assoc($sqlquery));
{
    $id=$rows ['id'];
    $name=$rows ['name'];
    $comment=$rows ['comment'];

    echo $name . '<br/>' . $comment . '<br/>';
}

mysql_close();
?>