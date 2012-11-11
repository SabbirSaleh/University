<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */


class create_table
{
    
    
    public function __construct($result=0, $headers=0)
   {
        
        
        //$this->createTable($result, $headers);
    }//end of constructor
    
    public function createTable ($result, $headers =array(), $hide=array())
    {
        echo "<center>";
        echo "<table border='0'>";
        
        $this->createHeader($headers);
        
        //create table 
        foreach ($result as $rows)
        {

            
                
                
            echo "<tr>";
            
            foreach ($rows as $key=>$var)
            {
                foreach ($hide as $val)
                {

                    if($val==$key)
                    {
                        
                        continue 2; 
                    }
                }
                echo "<td>" . "<center>". $var . "</center>"."</td>" ;   
            }
            echo "</tr>";
            
            
           
        }//end of foreach
        
        
        echo "</center>";
        
        echo "</table>";
        
        
    }//end of headaer
    
    
    public function createHeader($headers)
    {
                
        echo "<tr>";        
        
        foreach ($headers as $value) 
        {
           echo "<th>$value ". "&nbsp" ."</th>";

        }
        echo  "</tr>";
        
    }//end of createHeader
}


?>
