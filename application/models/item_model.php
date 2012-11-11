<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of item_model
 *
 * @author 6662666
 */

class item_model extends CI_Model
{
    //put your code here
    public function __construct() 
    {
        parent::__construct();
        $this->load->database();

    }//end of constructor
    
            public function getItem($itemType,$page)
    {
        $sql= "
                SELECT Item,Link
                FROM 
                item 
                NATURAL JOIN itemtype
                 JOIN page  ON page.pageid =item.page               
                WHERE itemtype.itemtype =  '".$itemType."'
                AND page.page ='".$page."'
                 ORDER BY ITEMSERIAL";
      
                $item_result = $this->db->query($sql);
                        //echo $this->db->last_query();
                            
                return $item_result->result_array();
    }//end of getItem()
    
    
}//End of main class

?>