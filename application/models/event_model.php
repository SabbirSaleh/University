<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of event_model
 *
 * @author 6662666
 */
class event_model extends CI_Model
{
    //put your code here
    public function __construct() 
    {
        parent::__construct();
        $this->load->database();

    }//end of constructor
    
    public function getEvent()
    {
        $sql= "
                SELECT * 
                FROM  `event` 
                LIMIT 0 , 10
               ";
        
                $event_result= $this->db->query($sql);
                return $event_result->result_array();
    }//end of getEvent()
    
    
}//End of main class

?>
