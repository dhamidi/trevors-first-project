<html>


<body>

   

 
<div class="comment-form">
            <h2 class="comments-wrapper-heading"> Leave a comment </h2>
            <form id="comment_form.php" action="comment_form.php" method="POST" id="comment_form.php">
              <div class="commentform-element">
                <label class="hide" for="name">Full Name</label><br>
                <input class="input-fields" id="name" name="name" type="text" placeholder="What's up?" value=""/>
              </div>
              <div class="commentform-element">
                <label class="hide" for="author">Email</label><br>
                <input class="input-fields" id="email" name="email" type="text" placeholder="Email" value=""/>
              </div>
              <div class="commentform-element">
                <label class="hide" for="comment">Message</label><br>
                <textarea id="comment" class="input-fields" placeholder="Message" name="comment" cols="40" rows="4"></textarea>
              </div>
              <input name="submit" class="form-submit-button"  type="submit" id="submit-comment" value="Post comment">
              <input type="hidden" name="comment_post_ID" value="22" id="comment_post_ID">
            <input type="hidden" name="comment_parent" id="comment_parent" value="0">
            </form>
 </div>
 </body>
 
 <!--- My latest work begins here! Trying to retrieve data from the mysql table. RESULT: Everything connects, comment records 
 to database. PROBLEM: In some of the tutorials comments would post directly under the comment box without directing to 
 comment_form.php seemingly with no extra code. I thought putting php code on this page would retrieve the comments here. 
 My code is a mish mash of various tutorials. If I can Avoid learning another language until I have created a search and a 
 submit content functions, cause Ill be up to speed with mysql and php.Perhaps I can do just that and then iron out the problems
 that involve other languages.--->

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

mysql_close()
?>

</body>
</html>