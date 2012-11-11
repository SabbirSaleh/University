<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Teacher_model extends CI_Model

{   
    public function __construct() 
    {
                parent::__construct();
                $this->load->database();
    }
    //model function of teacherCourse
    
    public function returnCourses($id)
    {
                //print_r($this->session->all_userdata());
        
        $sql = "
                    SELECT subject.subject, 
                    section.section, 
                    classroom.classroom, 
                    classroomtime.days,
                    classroomtime.startingtime,
                    classroomtime.duration

                    FROM `coursefaculty`

                    NATURAL JOIN course
                    NATURAL JOIN subject
                    NATURAL JOIN section
                    NATURAL JOIN classroomwithcourse
                    NATURAL JOIN classroom
                    NATURAL JOIN classroomtime
                    
                    WHERE coursefaculty.userID='". $id .
                "'";
                $result = $this->db->query($sql);
                        
               
               // print_r($result->result_array());
               return $result->result_array();            
    }// end model function of TeacherCourse
    
    public function returnTodaysClass($id)
    {
        $this->load->helper('date');//for getting todays
        $this->load->helper('text');//for trucate day from the date
        
        $tz = "Asia/Dhaka";
        date_default_timezone_set($tz);
         
        $today = standard_date('DATE_RFC1123', time());
        $dayw = word_limiter($today,1);
        //$day = strip_quotes("$dayw");//for strip any string
        $day = substr($dayw,0,3);
        //end of getting todate();
        
        $todaysClass = "
                    SELECT subject.subject, 
                    section.section, 
                    classroom.classroom, 
                    classroomtime.startingtime,
                    classroomtime.duration

                    FROM `coursefaculty`

                    NATURAL JOIN course
                    NATURAL JOIN subject
                    NATURAL JOIN section
                    NATURAL JOIN classroomwithcourse
                    NATURAL JOIN classroom
                    NATURAL JOIN classroomtime
                    
                    WHERE coursefaculty.userID='".$id.
                    "' AND classroomtime.days ='".$day."' " ;
     
     
                  $resultTodayClass = $this->db->query($todaysClass);
                  //print_r($resultTodayClass->result_array());
                  return $resultTodayClass->result_array();
       // echo timezone_menu('UM6');
        
    }//End of getting todays function   
  
}//end of main class 

?>
