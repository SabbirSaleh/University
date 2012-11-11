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
        
            echo form_open('login/validate');
            echo form_input('userId','UserID');
            echo form_password('password', 'Password');
            echo form_submit('submit','Login');
            
        ?>
    </body>
</html>
