<html>


<body>

  <?php  

   echo "hello world";
?>
 
<div class="comment-form">
            <h2 class="comments-wrapper-heading"> Leave a comment </h2>
            <form id="comment_form.php" action="comment_form.php" method="post" id="comment_form.php">
              <div class="commentform-element">
                <label class="hide" for="author">Full Name</label><br>
                <input class="input-fields" id="author" name="author" type="text" placeholder="Full Name" value=""/>
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


</html>