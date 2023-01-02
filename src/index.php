<!DOCTYPE html>
<html>

<head>
  <title>Server Directory</title>
  <link rel="stylesheet" href="./libs/bootstrap.min.css" />
  <script src="./libs/bootstrap.min.js"></script>
</head>

<body class="container">
  <header>
    <h1>Directory List</h1>
    <?php print "<p>This is a sample output. My IP is $_SERVER[SERVER_ADDR] and name is $_SERVER[SERVER_NAME]</p>"  ?>
  </header>
  <main>
    <p class="text-success">Your home directory is "<?php print getcwd(); ?>"</p>

    <div class="row">

      <ul class="list-group list-group-flush col-6" role="group">
        <?php
        $child_directories = scandir(getcwd());

        foreach ($child_directories as $child) {
          print "<li class='list-group-item'><a href='./$child'>$child</a></li>";
        }
        ?>
      </ul>
    </div>


  </main>
  <footer>

  </footer>
</body>

</html>