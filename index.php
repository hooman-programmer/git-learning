<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
this is wirten by hooman
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>This is for learning and practice git with github : git server!</title>
    </head>
    <body>
        <?php
        function sumer($x,$y){
            return $x+$y;
        }
        function multi($x,$y){
            return $x*$y;
        }
        //test for multi function
         echo multi(3, 4);
        //test function sumer
        echo sumer(5, 7);
        if(isset($_GET['msg'])){
            echo 'message is: '.$_GET['msg'];
        }
        ?>
    </body>
</html>
