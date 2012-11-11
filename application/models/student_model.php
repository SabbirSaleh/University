<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of student_model
 *
 * @author 6662666
 */
class Student_model extends CI_Model{
    //put your code here
    public function __construct() 
    {
                parent::__construct();
                $this->load->database();
    }
    
    
    //returnig the courses student taken
    //and construct an array with hyperlink to 
    //faculty profile by another function call
    
    public function returnCourses()
    {
              
        
        $sql = "
                    SELECT subject.subject, section.section,
                    user.username AS 'Faculty Name',  classroom.classroom, 
                    classroomtime.startingtime, classroomtime.duration ,
                    coursefaculty.userid AS 'Faculty ID'
                    FROM studentcourse
                    NATURAL JOIN course
                    NATURAL JOIN subject
                    NATURAL JOIN section
                    JOIN coursefaculty
                    USING ( COURSEID ) 
                    JOIN user ON user.userid = coursefaculty.userid
                    NATURAL JOIN classroomwithcourse
                    NATURAL JOIN classroomtime
                    NATURAL JOIN classroom
                    
                    WHERE studentcourse.userID='" . $this->session->userdata('Id').
            
                "'";
                $result = $this->db->query($sql);  
                        
               return $this->constructArray($result->result_array());
               
               //return $result->result_array();            
    }// end model function of StudentCourse
    
    //take an array and construct hyperlink to 
    //faculty's profile   
    public function constructArray($result)
    {
        //storing the sessionKeys for 
        $sessionKeys=array();
        $newResult=array(array());
        
        $index=0;//sotring the current index for the $newResult array
        
         foreach ($result as $rows)
         {
             foreach ($rows as  $key=>$val)
             {
                 
                 if( $key=="Faculty Name")
                 {
                     //yup..its sir's  name
                     //so replace it with an anchor
                     //to this sir's  profile and create an array contaning
                     //faculty's  name for future use
                     
                     $sessionKeys[$val]=$rows["Faculty ID"];
                     //replacing name with hyperlink
                     $newResult[$index][$key]=anchor("facultyprofile/profile/$val","$val");
                                   
                     
                 }//end of if
                 
                 else
                 {
                     //leave the element as it is
                     $newResult[$index][$key]=$val;
                 }//end of first else if
                 
                 
             }//end of inner foreach
             
             $index++;
         }//end of outer foreach
         
         $this->session->set_userdata("key",$sessionKeys);
                
         
         return $newResult;
        
    }//end of constructArray
    
    //returnig the courses student taken
    //and those which have a class in this day
    public function returnTodaysClass()
    {
         $this->load->helper('date');//for getting todays
         $this->load->helper('text');//for trucate day from the date

         $timezone = "Asia/Dhaka";
         if(function_exists('date_default_timezone_set')) 
             date_default_timezone_set($timezone);

        $today = standard_date('DATE_RFC1123', time());
        $dayw = word_limiter($today,1);
        //$day = strip_quotes("$dayw");//for strip any string
        $day = substr($dayw,0,3);
        //end of getting todate();
        
        $todaysClass = "
                    SELECT subject.subject, section.section,
                    user.username AS 'Faculty Name',classroom.classroom, 
                    classroomtime.startingtime, classroomtime.duration
                    FROM studentcourse
                    NATURAL JOIN course
                    NATURAL JOIN subject
                    NATURAL JOIN section
                    JOIN coursefaculty
                    USING ( COURSEID ) 
                    JOIN user ON user.userid = coursefaculty.userid
                    NATURAL JOIN classroomwithcourse
                    NATURAL JOIN classroomtime
                    NATURAL JOIN classroom
                    
                    WHERE studentcourse.userID='" . $this->session->userdata('Id')."'
                    AND classroomtime.days like '%".$day."%' " ;
     
     
                  $resultTodayClass = $this->db->query($todaysClass);
                  //print_r($resultTodayClass->result_array());
                      //    echo $this->db->last_query();
                  return $resultTodayClass->result_array();
       // echo timezone_menu('UM6');
        
    }//End of getting todays function
    
    
    
    
}//end of main class

?>
