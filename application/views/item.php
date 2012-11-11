<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of item
 *
 * @author 6662666
 */
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> HomePage </title>
    </head>
    <body>
    
        <div>
        
            <?php
              echo  "<h1>" .anchor("homepage","Demo University"). "</h1>";
                            //this part is generating header bar                           
                            foreach($item["header"] as $row)
                            {
                               ?>
                                 <a href="<?php echo $row['Link'] ?>"><?php  echo $row['Item']; ?> </a> &nbsp

              <?php         } //end of inner foreach

              ?>
         </div> 
        
        <div>
            <h1>Navigation</h1>
            <?php
                            //this part is generating navigation bar
                            foreach($item["navigation"] as $row)
                            {
                               ?>
                                 <a href=" <?php echo $row['Link']; ?>"><?php  echo $row['Item']; ?> </a> &nbsp

              <?php         } //end of inner foreach

              ?>
         
        
        
        </div>
        
        
            <?php 
                //this part is generating notice and event whic
                //is previously generated from notice and event view file
                echo $notice;
                echo $event;
            ?>
                
        
        <div>
        
            <?php
                            //this part is generating footer bar
                            foreach($item["footer"] as $row)
                            {
                               ?>
                                 <a href=" <?php echo $row['Link']; ?>"><?php  echo $row['Item']; ?> </a> &nbsp

              <?php         } //end of inner foreach

              ?>
         </div>
             
       
        
        
        
    </body>
</html>
