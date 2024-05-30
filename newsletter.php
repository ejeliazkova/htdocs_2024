<?php
    // The $_REQUEST array stores info about the type of request we are making to the server:
    // Getting (reading) data vs Posting (creating/updating) data. 
    // Up until now we have been making $_GET requests (passing url parameters) to ~get~ specific blog posts.
    // Now, since we want to ~create~ new content i.e. add comments, we want to use the $_POST request which is
    // most suitable for creating/updating data.
    include('include/init.php');
    echoHeader('Newsletter');
        // debugOutput($_REQUEST); //hold all of the request info whether it is post or get
        // debugOutput($_GET); //url for everyone to see --> reading
        // debugOutput($_POST); //sneaky & hidden --> writing
?>

    <!-- I can edit the request by updating the URL params manually so everytime I load the page with the URL params I entered, I am sending a new request via get.
    That's cool, but what if I want to create stuff as opposed to just getting stuff?
    Let's use a form! -->
    <div class='BlogComments'>
        <form action='' method='post'>
            <label for="commentName">Username or email:</label><input type='text' name='commentName' id='commentName'/>
            Add a comment:<input type='text' name='commentContent' height='50px' width='30px'/>
            <input type='submit' class='Button'/>
        </form>
<?php

    // Every time you submit the form, you send a $_POST request (defined by the method attribute)
    // to a specific file defined by the action attribute
    // We've updated the global var but our comment still isn't saved in our DB. Let's change that.
    // If we read directly from the request instead of passing in variables we make this function dependent on a form submission
    function saveThisComment($contentEntered, $nameEntered, $postIdEntered){
        $now = date_create('now');
        $dateTimeStringCreated = date_format($now, 'Y-m-d H:i:s');

        dbQuery(
            "
                INSERT INTO comments(content, datePosted, name, postId)
                VALUES(:content, :dateTimeString, :name, :postId)
            ", 
            [
                "content" => $contentEntered,
                "dateTimeString" => $dateTimeStringCreated,
                "name" => $nameEntered,
                "postId"=> $postIdEntered
            ]
        );
    }

    // We'll talk about validating your form input later, but for rigth now we'll
    // do a simple check to make sure the inputs aren't left blank.
    if(isset($_REQUEST['commentName']) && isset($_REQUEST['commentContent'])){
        if(empty($_REQUEST['commentName'])){
            echo "<p style='color: red;'>Please enter your name</p>";
            exit;
        }elseif(empty($_REQUEST['commentContent'])){
            echo "<p style='color: red;'>Please write a comment</p>";
            exit;
        }else{
            saveThisComment($_REQUEST['commentContent'], $_REQUEST['commentName'], $_REQUEST['postId']);
            
            // Our form doesn't clear out once we submit it so if we hit refresh,
            // the form will resubmit the same $_REQUEST data. To avoid this, we
            // can redirect to this same file (clear out $_POST) once the form is submitted.
            header("Location: newsletter.php?postId=4");
	        exit;
        }
    }

    // Let's output the comments we've saved to the DB
    echo "<h3 style='color: #424874;'>Comments:</h3>";
    debugOutput(getCommentsForPost(4));