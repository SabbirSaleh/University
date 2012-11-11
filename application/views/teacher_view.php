<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
            echo "<div align=\"right\">";
            echo anchor("logout",'logout');
            echo "</div>";
            echo "<center>"."<h3>"."Profile"."</h3>" . "</center>";
           
            $table=new create_table();
            
            

            $headers=array
                         (
                            "Faculty ID",
                             "User Name",
                             "Address"
                         );
            $hide = array("UserID");

        $table->createTable($profile, $headers ,$hide);
        
            echo "<center>"."<h3>"."Subjects of Today"."</h3>" . "</center>";
            $headers=array
                    ( 
                       " Subject",
                        "Section",
                        "Classroom",
                        "Days",
                        "Starting Time",
                        "Duration"
                    );
            
            $headerstoday=array
                    ( 
                       " Subject",
                        "Section",
                        "Classroom",
                        "Starting Time",
                        "Duration"
                    );
            
            $table->createTable($teacherTodaysClass, $headerstoday);
            
            
            echo "<center>"."<h3>"."Subjects of this semister"."</h3>" . "</center>";
            $hide=array ("Faculty ID");
            $table->createTable($teacherCoures, $headers,  $hide);
?>
