<?php
    ini_set('display_errors', 'on');
    ini_set("auto_detect_line_endings", true);

    session_start();
    require('../actions/questions/publishQuestionAction.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php'; ?>
<body>
    <?php include '../includes/navbar.php'; ?>

    <br></br>

    <!-- PUBLISH-QUESTION FORM -->
    <form class="container" method="POST">
        <!--  -->
        <?php 
            if(isset($errorMsg)){
                echo '<p>'.$errorMsg.'</p>'; 
            }elseif(isset($successMsg)){
                echo '<p>'.$successMsg.'</p>';
            }
        ?>
        <!--  -->
        <div class="mb-3">
            <label for="exampleInputQuestionObject" class="form-label"><p>Title or object</p></label>
            <input type="text" class="form-control" name="title">
        </div>
        <!--  -->
        <div class="mb-3">
            <label for="exampleInputQuestionDescription" class="form-label"><p>Description</p></label>
            <textarea type="text" class="form-control" name="explanation"></textarea>
        </div>
        <!--  -->
        <div class="mb-3">
            <label for="exampleInputQuestionContent" class="form-label"><p>Content</p></label>
            <textarea type="text" class="form-control" name="content"></textarea>
        </div>  
    <!-- Button to confirm entered entries and register them in the database -->
    <button type="submit" class="btn btn-primary" name="validate">Publish the question</button><br></br>

	</form>

</body>
<?php include '../includes/footer.php'; ?>

</html>