<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 1 PHP</title>
</head>

<body>
    <?php
    echo "Hello PHP";
    echo "Bonjour , nous sommes le ".date("j/m/y")."<br>";
    echo "il est ".date("h:i:s");

    if(Date("h")<12){
        echo "<br> Bonne matin";
    } 
    else if(Date("h")<18){
        echo "<br> Bonne apres midi";
    }
    else {
        echo "<br> Bonne soire";
    }
    $MyIp ;
    echo " <br >MY ip adresse is :" .$_SERVER["SERVER_ADDR"];
    echo "<br> web server : ".$_SERVER["HTTP_HOST"];
    echo "<br> client IP  ".$_SERVER["REMOTE_ADDR"];
    // echo "<br> name of client machin : ".gethostbyaddr();
    echo "<br> client browser : ".getenv("HTTP_USER");
    echo "<br> ";
    phpinfo();





    class Table
    {

        // variables :
        var $border = "1";
        var $width = "500";
        var $class = "tabledefault";
        var $tabledata = array();
        var $rows = 0;
        var $firstrowstyle = "tablehead";
        var $cellpadding = "2";
        var $cellspacing = "0";
        var $bordercolor = "#666666";

        // methoeds :
        function set_value($key, $val)
        {
            $this->$val = $val;
        }
        function output_table(){

        }
        function add_row(){

        }
        function add_cell($val = false, $colspan = false, $width = false) {
            
        }
    }



    ?>
</body>

</html>