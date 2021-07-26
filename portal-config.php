<?php
//prevents data from being sent early
ob_start();
date_default_timezone_set('America/Los_Angeles');
//echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
//echo THIS_PAGE;
//die;
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['Kate/template.php'] = "Final Project";
$nav1['contact.php'] = "Contact Veronika";

switch (THIS_PAGE) {

    case 'index.php':
        $title = "Veronika's Title Page";
        $logo = 'fa-home';
        $logo_color = 'style="color:#00f"';
        $PageID = 'pshenytskacodes.com';
        break;

    case 'contact.php':
        $title = "Veronika's Contact Page";
        $logo = "fas fa-arrow-circle-left";
        $logo_color = 'style="color:#00f"';
        $PageID = "Contact Veronika";
        break;


    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome to my page!';
}



/*<a href="../index.php" class="active"></i>Welcome</a>
<a href="elements.html">HTML Elements</a>
<a href="aia.html">AIA</a>
<a href="big/index.html">BIG</a>
<a href="http://w3schools.com" target="_blank">W3 Schools</a>
<a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
<a href="flowchart.html">Flowchart</a>
<a href="http://web-students.net/site90/it161/Kate/template.html">Final Project</a>
<a href="https://pshenytskacodes.com/it161/includes/contact.php">Contact Veronika</a>*/

// function makeLinks($linkArray)
// {
//     $myReturn = '';
//     foreach ($nav1 as $url => $text) {

//         if ($url == THIS_PAGE) {
//             $myReturn .= "<a class=\"active'\" href=\"url\">$text</a>";
//         } else {
//             $myReturn .= "<a href=\"url\">$text</a>";
//         }
//     }
//     return $myReturn;
// }

function makeLinks($linkArray)
{
    $myReturn = '';

    foreach ($linkArray as $url => $text) {
        if ($url == THIS_PAGE) { //selected page - add class reference
            $myReturn .= '<a class="active" href="' . $url . '">' . $text . '</a>' . PHP_EOL;
        } else {
            $myReturn .= '<a href="' . $url . '">' . $text . '</a>'  . PHP_EOL;
        }
    }

    return $myReturn;
}
