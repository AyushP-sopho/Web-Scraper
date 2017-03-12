<?php
    /**
     * helpers.php
     * 
     * Helper functions
     * 
     */
     
     require_once("config.php");
     
     function render($view, $values = [])
     {
         extract($values);
         if(file_exists("../views/{$view}"))
         {
             
             require("../views/header.php");
             require("../views/{$view}");
             require("../views/footer.php");
             exit;
         }
         else 
            trigger_error("Invalid view: {$view}", E_USER_ERROR);
     }
     
     
?>