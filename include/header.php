<?php 
function headerFunction()
{
 ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <img class="navbar-logo" href="#" src="images/Logo.png">
      <a class="navbar-brand" href="#">Thijs van Kessel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              More
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="Contact.php">Contact</a>
              <a class="dropdown-item" href="https://github.com/ThijsvanKessel/">Git</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">curriculum vitae</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  <?php
}
?>