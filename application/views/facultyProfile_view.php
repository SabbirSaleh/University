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
        <center> <h1> Faculty Information</h1> </center>
        <?php
        // put your code here
            $table = new create_table();
            
            $headers=array
                     (
                        "Faculty ID",
                         "User Name",
                         "Address"
                     );
            $hide = array("UserID");
            
            $table->createTable($facultyProfile, $headers ,$hide);
            
        ?>
                <center> <h1> Course Taken</h1> </center>
        <?php
        
            
            $headers=array
                    (
                         
                       " Subject",
                        "Section",
                        "Classroom",
                        "Starting Time",
                        "Duration"
                
                    );
            $table->createTable($courseTaken, $headers);
            
        ?>
        
        
        
    </body>
</html>
