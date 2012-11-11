
        <div align= 'justify' >
            <h2>Notice Board</h2>
        
            <?php    foreach($notice as $row)
                {
                   ?><li align= 'left'>
                          <?php  echo $row['Notice']; ?>
                     </li>
          <?php  } ?>
              
        </div>
