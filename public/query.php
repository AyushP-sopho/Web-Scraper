<?php
    
    require("../includes/config.php");
    
    //if(!empty($_GET["url1"]))
    {
        $url = $_GET["q"];
        //print(htmlspecialchars($source));
        $headers = @get_headers($url);
        //print_r($headers);
        if(strpos($headers[0], "200") === false)
        {
            header("HTTP/1.1 404 Not Found");
        }
        else
        {
            $source = file_get_contents($url);
            $regex_1 = "@<h2 class=\"tuple-clg-heading\"><[^>]+>([^<]+)<\/a>\s*<p>\|\s*([^<]+)@";
            preg_match_all($regex_1, $source, $matches);
            $name = $matches[1];
            $location = $matches[2];
            header("Content-type: application/json");
            print(json_encode($name, JSON_PRETTY_PRINT));
        }
        
        //Yet to divide different facilities
        //$regex_2 = "@<div class=\"srpHoverCntnt2\">\s*<h3>\s*([^<]+)@";
        //preg_match_all($regex_2, $source, $matches);
        //$facilites = $matches[1];
    }
    
        //echo $url = $url_base.$i;
//$ =CS50::query("")
?>    