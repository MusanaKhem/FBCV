<?php
    ini_set('display_errors', 'on');
    ini_set("auto_detect_line_endings", true);

    session_start();
    require('actions/questions/showAllQuestionAction.php');

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>

    <br></br>

    <!-- Create a search bar -->
    <div class="container">

        <!-- Search Forms with 2 inputs types -->
        <p></p>
        <form method="GET">
            <div class="form-group row">
                <div class="col-8">
                    <input type="search" name="search" class="form-control">
                </div>
                <div class="col-4">
                    <button class="btn btn-success" type="submit">Search</button>
                </div>
            </div>
        </form>

        <br>

    <section>
        <?php
            while($question = $getAllQuestions->fetch()){
                ?>
                <div class="card">
                    <div class="card-header"  style="color: blue">
                        <a href="pages/question.php?id=<?= $question['id']; ?>">
                        <?= $question['title']; ?>
                        </a>
                    </div>
                    <div class="card-body">
                        <?= $question['explanation']; ?>
                    </div>
                    <div class="card-footer"><span style="color: darkred">
                        Published by </span><a href="pages/profile.php?id=<?= $question['id_author']; ?>"><?= $question['pseudo']; ?></a>, <span style="color: darkred"> le </span><?= $question['publish_datetime']; ?>
                    </div>
                </div>
                <br>
                <?php
            }
        ?>
    </section>

    <p>Bonjour à tous</p>

    </div>
</body>
<br>
<?php include 'includes/footer.php'; ?>
</html>