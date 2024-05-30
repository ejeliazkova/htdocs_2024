<?php
    include('include/init.php');
    
    $postInformation = getPost($_REQUEST['postId']);
    $title = !empty($postInformation) ? $postInformation['title'] : '';
    
    echoHeader($title);
    
    if (empty($postInformation)) {
        die('Sorry, the post you are looking or has been removed :(');
    }

    $postContent = $postInformation['content'];
    $commentInformation = getCommentsForPost($postInformation['postId']);
    
    $commentDisplay = "";
    foreach($commentInformation as $comment){
        $commentText = $comment['content'];
        $commentAuthor = $comment['name'];
        $commentDisplay .= "
            <div class='CommentRow'>
                <span>$commentText</span><span>$commentAuthor</span>
            </div>";
    }

    if (isset($_REQUEST['commentName'])){
        saveComment($_REQUEST['commentContent'], $_REQUEST['commentName'], $postInformation['postId']);
        header("Location: view_post.php?postId=".$postInformation['postId']."");
	    exit;
    }
    
?>
<div class='ViewPostTitle'><?php echo $title; ?></div>
<div class='BlogContentWrapper'>
    <div class='BlogText'><?php echo $postContent; ?></div>
    <div class='BlogComments'>
        <form action='' method='post'>
            Username or email:<input type='text' name='commentName'></input>
            Add a comment:<input type='text' name='commentContent' height='50px' width='30px'></input>
            <input type='submit' class='Button'/>
        </form>
        <div class='CommentThread'>
            <?php
                if(!empty($commentDisplay)){
                    echo $commentDisplay;
                }else{
                    echo "<div class='CommentRow' style='color: #FFF'>no comments yet</div>";
                }
            ?>
        </div>
    </div>
</div>
<?php
    echoFooter();