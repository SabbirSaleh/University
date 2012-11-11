<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of facultyProfile_model
 *
 * @author 6662666
 */
class facultyProfile_model extends CI_Model{
    //put your code here
    private $key;
    public function index()
    {
        
    }//end of index
    
    public  function profile($key)
    {

        
        $sql =  "
                    SELECT UserID , useruserid AS 'Faculty ID', UserName AS 'User Name' ,  
                    useraddress AS 'Address'
                    FROM `faculty` NATURAL JOIN user
                    Where userid = '" . $key.
                "'";
        
        $result=$this->db->query($sql);
        
        return $result->result_array();
        
        
    }//end of profile
    
    
        public  function courseTaken($key)
    {
        $sql =  "
                    SELECT subject.subject, section.section,  classroom.classroom, classroomtime.startingtime, 
                    classroomtime.duration 
                    FROM coursefaculty
                    NATURAL JOIN course
                    NATURAL JOIN subject
                    NATURAL JOIN section
                    NATURAL JOIN classroomwithcourse
                    NATURAL JOIN classroomtime
                    NATURAL JOIN classroom
                    WHERE coursefaculty.userID='".$key.
               "' ";
        
        $result=$this->db->query($sql);
        
        return $result->result_array();
        
        
    }//end of courseTaken
}

?>
