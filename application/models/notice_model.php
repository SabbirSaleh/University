<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of notice_model
 *
 * @author 6662666
 */
class Notice_Model extends CI_Model
{
    //put your code here
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        //$var=$this->getNotice();
    }//end of construct
    
    public function getNotice()
    {
        $sql="
                SELECT Notice 
                FROM  `notice` 
                ORDER BY PRIORITY DESC,TimeStamp DESC
                LIMIT 0 , 10
                
            "
                ;
        
        $result=$this->db->query($sql);
        
        
        return $result->result_array();
       
        
    }//end of getNotice()
    
}//end of notice_model

?>
