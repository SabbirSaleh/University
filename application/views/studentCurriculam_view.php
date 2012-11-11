<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    echo "<center>" . "<h3>"."Your Curriculam Information"."</h3>" ."</center>";
            
            $table=new create_table();
            $headers=array
                    ( 
                       " Subject",
                        "Subject Type",
                        "Credit"
                    );
            $table->createTable($studentCurriculam, $headers);
            echo "</br> </br> </br>";

?>
