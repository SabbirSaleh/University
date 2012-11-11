<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login_model
 *
 * @author 6662666
 * @param CI_DB_mysql_result $result
 */
class Login_model extends CI_Model{
    //put your code here
    
    public function __construct() 
    {
        parent::__construct();
        
        
    }//end of construct
    
    public function checkLogin()
    {
        
                $this->load->database();
                $sql="
                        SELECT user.userid , user.username , usertype.usertype ,user.useruserid
                        FROM USER
                        NATURAL JOIN USERTYPE
                        WHERE UserUserID =  " . $this->db->escape($this->input->post('userId')).
                        " AND PASSWORD = MD5(  ".$this->db->escape($this->input->post('password'))." )
                      ";
                

                $result=$this->db->query($sql);
                
               
               
                if($result->num_rows == 1 )
                {
                    //
                    $q=$result->result_array();
                    $data=array
                            (
                                "userName"=>$q[0]['username'],
                                "userID"=>$q[0]['useruserid'],
                                "type"=>$q[0]['usertype'],
                                'Id'=>$q[0]['userid'],
                                'loggedIn'=>true
                            );
                    $this->session->set_userdata($data);
                    
                    
                   
                    return true;
                }  
                   
                    else return FALSE;
                    
       
    }//end of check login
    
}//end of class

?>
