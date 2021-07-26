<?php include 'portal-config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <meta charset="utf-8" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/portal.css" />
    <link rel="stylesheet" href="../css/nav.css" />
    <link rel="stylesheet" href="../css/forms.css" />
    <script src="https://kit.fontawesome.com/1a3a8be5f0.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <h1 class="pageID"><a href="index.php" class="logo fa <?= $logo ?>" <?= $logo_color ?>></a><?= $PageID ?></h1>
        <nav class="topnav" id="myTopnav">
            <?= makeLinks($nav1) ?>
            <!--<a href="it161/index.php" class="active">Welcome</a>
            <a href="elements.html">HTML Elements</a>
            <a href="aia.html">AIA</a>
            <a href="big/index.html">BIG</a>
            <a href="http://w3schools.com" target="_blank">W3 Schools</a>
            <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
            <a href="flowchart.html">Flowchart</a>
            <a href="Kate/template.html">Final Project</a>
            <a href="includes/contact.php">Contact Veronika</a>
-->
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </nav>
    </header>