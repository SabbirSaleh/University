<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
            echo "<div align=\"right\">";
            echo anchor("logout",'logout');
            echo "</div>";
            echo "<center>" ."<h1>"."Welcome ". $name . "</br>" ."</h1>" ."</center>" ;
            
            //start of printing todays class
            echo "<center>" . "<h3>"."Todays Class"."</h3>" ."</center>";
            
            $table=new create_table();
            
            $headers=array
                    (
                         
                       " Subject",
                        "Section",
                        "Faculty Name",
                        "Classroom",
                        "Starting Time",
                        "Duration"
                
                    );
            $table->createTable($studentTodaysClass, $headers);
            
            
            
            
            echo "</br> </br> </br>";
            
            //start of semester info
            
            echo "<center>"."<h3>"."Information of this semister"."</h3>" . "</center>";
            
            $hide=array ("Faculty ID");
            $table->createTable($studentCourse, $headers , $hide);
            
                  
            
        ?>
        
    </body>
</html>
