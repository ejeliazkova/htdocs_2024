<?php
    // Again, this file has three main parts after we include our initializer file and echo the header:
    // (1): a check to see if we should query the DB based on the new request info
    // (2): a form
    // (3): a function -> can be pulled out into a separate file

    // (4): except this time we are going to do some malicious shtuff

    include('include/init.php');
    echoHeader('Security');
    debugOutput($_REQUEST);

    // (1) We want to check if the form has been submitted at the top of the file
    if(isset($_REQUEST['saveComment'])){
        saveThisComment($_REQUEST['name'], $_REQUEST['comment']);
        header('location:?'); //take me back to a fresh version of this same page
        exit;
    }


?>
    <!-- (2) create another form -->
    <form action='' method='post'>
        <h2>Leave a comment</h2>
        Name: <input type='text' name='name' /> <br/><br/>
        Comment: <textarea name='comment' style='width: 400px; height: 300px;'></textarea> <br/><br>

        <input type='submit' name='saveComment' />
    </form>

<?php
    // (3) This is an example, but it applies to your original saveComment function
    function saveThisComment($name, $comment){
        dbQuery("
            INSERT INTO injection_test(name, comment)
            VALUES('$name', '$comment')
        ");
    }



    // (4a) First order of malicious business is executing a SQL injection
    // What we inject:            test'), ('1','1'), ('2','2'), ('3','3'), ('4','4
    // To see how the query changed we can just echo the query instead of running it but here is an explanation:
    // so the query will actually looked like:        INSERT INTO injection_test(name, comment), VALUES('mia', 'test') ('1','1'), ('2','2'), ('3','3'), ('4','4)
    // instead of:         INSERT INTO injection_test(name, comment), VALUES('mia', " 'test') ('1','1'), ('2','2'), ('3','3'), ('4','4)")


        // How to prevent this? Edit your query so it escapes the values entered into the form...we can't trust data that has been input by users
        function saveThisCommentCorrectly($nameEnteredInTheForm, $commentEnteredInTheForm){
            dbQuery("
                INSERT INTO injection_test(name, comment)
                VALUES(:name, :comment)",
                [
                    "name" => $nameEnteredInTheForm,
                    "comment" => $commentEnteredInTheForm
                ]
            );
        }




    // Now let's display the comments we've submitted so far

    $comments = dbQuery("SELECT * FROM injection_test")->fetchAll();

    // echo "<h1>View all comments</h1>";
    // foreach($comments as $comment){
    //     echo "
    //         <div><strong>($comment[name])</strong> $comment[comment]</div>
    //     ";
    // }

    // (4b) More malicious activity: Let's run an XSS (Cross Site Scripting) attack by submitting code as a comment
    // <style>body{background-color: black;}</style>

        // How to prevent this? We'll use a function
        // we've already encountered called htmlspecialchars()!
        
        echo "<h1>View all comments</h1>";
        foreach($comments as $comment){
            echo "
                <div><strong>(".htmlspecialchars($comment['name']).")</strong> ".htmlspecialchars($comment['comment'])."</div>
            ";
        }