<?php 
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

  <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php" style="text-align:left;font-family: Didot;font-size:2rem;">Kaffeefilter</a>
        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav mr-auto">
            <li class="<?php echo ($activePage == "index") ? "nav-item active" : "nav-item"; ?>">
              <a class="nav-link" href="index.php">Startseite</a>
            </li>
            <li class="<?php echo ($activePage == "produkte") ? "nav-item active" : "nav-item"; ?>">
              <a class="nav-link" href="../frage/1.html">Kaffeefinder</a>
            </li>
            <li class="<?php echo ($activePage == "blog" || $activePage == "blog-single") ? "nav-item active" : "nav-item"; ?>">
              <a class="nav-link" href="blog.php">Unser Blog</a>
            </li>
            <li class="<?php echo ($activePage == "kontakt") ? "nav-item active" : "nav-item"; ?>">
              <a class="nav-link" href="kontakt.php">Kontakt aufnehmen</a>
            </li>
            <!-- <li class="<?php echo ($activePage == "produkte") ? "nav-item active" : "nav-item"; ?>">
              <a class="nav-link" href="produkte.php">Produkte</a>
            </li> -->
          </ul>
          <!--<a href="../frage/1.html" class="btn btn-light" style="margin-right: 15px;">Lieblingskaffee finden</a>-->
          <a href="cms/blog/blog-add.php" class="btn btn-dark">System verwalten</a>
        </div>
      </div>
    </nav>