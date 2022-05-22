<?php 
     $page = (isset ($_GET['page']) && $_GET['page'] !='') ? $_GET['page'] : ''; ?>
<html>
<head>
    <link rel="stylesheet" 
          href="style2.css">
    </head>
<body>
    <div id="wrapper">
<script type="text/javascript" src="script.js"></script>
  <div class="navbar">
        <a href="home.php">Home</a>
        <a href="projects.php" >My works</a>
      <a href="about.php">About Me</a>
      </div>
     <?php 
            switch($page){
                case 'home':
                    include_once 'home.php';
                    break;
                case'about':
                    include'about.php';
                    break;
                case 'projects':
                    include_once 'project.php';
                    break;
            }
        ?>
</div>
    </body>
</html>