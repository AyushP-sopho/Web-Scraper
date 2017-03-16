<?php 
    
    require("../includes/config.php");
    
    render("loadpage_form.php", ["loadjs" => true,"city" => $_POST["city"]]);
    
?>