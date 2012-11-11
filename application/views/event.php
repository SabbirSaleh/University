<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of event
 *
 * @author 6662666
 */
?>
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
            <h1>Recently Added Event</h1>
        <ul>
            <?php    foreach($event as $row)
                {
                   ?><li>
                          <?php  echo $row['Event']; ?>
                     </li>
          <?php  } ?>
        </ul>
        <?php
            
        ?>
    </body>
</html>

