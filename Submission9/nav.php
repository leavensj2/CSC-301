<div class="bg-dark navbar-dark text-white">
  <div class="container">
    <nav class="navbar px-0 navbar-expand-lg navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a href="index.php" class="pl-md-0 p-3 text-light">Home</a>
          <a href="app.php" class="p-3 text-decoration-none text-light">Find Pet</a>
          <?php
          if (isset($_SESSION['user'])) {
            echo '<a href="create.php" class="p-3 text-decoration-none text-light">Find Home</a>';
          }
           ?>

        </div>
      </div>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
          <?php
          if (!isset($_SESSION['user'])) {
            echo '<li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>';

          }


           ?>
            <?php
            if (isset($_SESSION['user'])) {
            echo '<li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>';
          }
            ?>
            <?php
            if (isset($_SESSION['user'])) {
              echo '
              <li class="nav-item">
                  <a class="nav-link" href="myPage.php">My Page</a>
              </li>
              ';
            }


            ?>

            <?php
            //Only allows admin users access to admin page
            require 'sql.php';
            //print_r($_SESSION['user']);
            if (isset($_SESSION['user'])) {

              $usrVar = $_SESSION['user'];

              //$statement = 'SELECT admin FROM user_table WHERE username = "'.$_SESSION['user'].'"';
              //$stmt = $pdo->prepare($statement);
              //$result = $stmt->execute();
              $res = $pdo -> prepare('SELECT manager FROM user_table WHERE username = :usrVar');
              $res -> execute([':usrVar' => $usrVar]);
              $result = $res -> fetchAll();
              //print_r($result);
              $numVal = $result[0]['manager'];
              //print_r($numVal);

              if ($numVal > 0)
              {
                echo'
                <li class="nav-item">
                    <a class="nav-link" href="manager.php">Manager Page</a>
                </li>
                ';
              }


            }
            ?>

            <?php
            //Only allows admin users access to admin page
            require 'sql.php';
            //print_r($_SESSION['user']);
            if (isset($_SESSION['user'])) {

              $usrVar = $_SESSION['user'];

              $res = $pdo -> prepare('SELECT admin FROM user_table WHERE username = :usrVar');
              $res -> execute([':usrVar' => $usrVar]);
              $result = $res -> fetchAll();
              $numVal = $result[0]['admin'];

              if ($numVal > 0)
              {
                echo'
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Admin Page</a>
                </li>
                ';
              }


            }
            ?>
        </ul>
    </div>
    </nav>

  </div>
</div>
