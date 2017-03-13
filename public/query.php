<?php
    
    require("../includes/config.php");
    
    print_r($_POST);
    
    echo $url = "http://www.shiksha.com/b-tech/colleges/b-tech-colleges-{$_POST['city']}";
    
    $source = file_get_contents($url);
    
    //print(htmlspecialchars($source));
    
    $regex_1 = "@<h2 class=\"tuple-clg-heading\"><[^>]+>([^<]+)<\/a>\s*<p>\|\s*([^<]+)@";
    preg_match_all($regex_1, $source, $matches);
    
    $name = $matches[1];
    $location = $matches[2];
    //var_dump(htmlspecialchars($matches[1][1]));
    
    //Yet to divide different facilities
    $regex_2 = "@<div class=\"srpHoverCntnt2\">\s*<h3>\s*([^<]+)@";
    preg_match_all($regex_2, $source, $matches);
    $facilites = $matches[1];
    
    //$ =CS50::query("")
?>