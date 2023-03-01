<!-- Navbar's part's code -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">WELCOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="pages/publish-question.php">Published questions</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="../pages/login.php">Forum Dashboard</a>
        </li>

        <?php
          if(isset($_SESSION['auth'])){
            ?><li class="nav-item">
                <a class="nav-link active" href="pages/profile.php?id=<?= $_SESSION['id'] ; ?>">My Profile</a>
              </li><?php
          }
        ?>

        <?php
          if(isset($_SESSION['auth'])){
            ?><li class="nav-item">
                <a class="nav-link active" href="pages/publish-question.php?id=<?= $_SESSION['id'] ; ?>">Add a question</a>
              </li><?php
          }
        ?>

        <?php
          if(isset($_SESSION['auth'])){
            ?><li class="nav-item">
                <a class="nav-link active" href="pages/myQuestions.php?id=<?= $_SESSION['id'] ; ?>">My questions</a>
              </li><?php
          }
        ?>

        <?php
          if(isset($_SESSION['auth'])){
            ?><li class="nav-item">
                <a class="nav-link active" href="../actions/users/logoutAction.php">Log out</a>
              </li><?php
          }
        ?>
      </ul>
    </div>
  </div>
</nav>

