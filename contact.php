<?php include 'portal-config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= $title ?></title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/portal.css" />
  <link rel="stylesheet" href="../css/nav.css" />
  <link rel="stylesheet" href="../css/forms.css" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/1a3a8be5f0.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <h1 class="pageID"><a href="index.php" class="logo fa <?= $logo ?>" <?= $logo_color ?>></a><?= $PageID ?></h1>
    <nav class="topnav" id="myTopnav">
      <?= makeLinks($nav1) ?>
      <!-- <a href="index.php">Welcome</a>
      <a href="elements.html">HTML Elements</a>
      <a href="aia.html">AIA</a>
      <a href="big/index.html">BIG</a>
      <a href="http://w3schools.com" target="_blank">W3 Schools</a>
      <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
      <a href="flowchart.html">Flowchart</a>
      <a href="Kate/template.php">Final Project</a>
      <a href="contact.php" class="active">Contact Veronika</a> -->

      <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </nav>
  </header>

  <div class="wrapper">
    <h2 class="pageID"><?= $PageID ?></h2>
    <?php
    /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

    include 'contact_include.php'; #site keys & code here

    $toAddress = "veronika.pshenytska@seattlecolleges.edu";  //place your/your client's email address here
    $toName = "Veronika Pshenytska"; //place your client's name here
    $website = "Contact Form Test";  //place NAME of your client's websites

    //echo loadContact('simple.php');#demonstrates a simple contact form
    echo loadContact('multiple.php'); #demonstrates multiple form elements

    ?>
    <?php include 'footer.php'; ?>
  </div>

  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->

  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>

</body>

</html>