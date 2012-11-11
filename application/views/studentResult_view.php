<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


echo "<center>" . "<h3>"."Your Result Information"."</h3>" ."</center>";
            
            $table=new create_table();
            $headers=array
                    (
                         
                       " Subject",
                        "Grade",
                        "GP"
                    );
            $table->createTable($studentResult, $headers);
            echo "</br> </br> </br>";
?>
