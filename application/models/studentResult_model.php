<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class studentResult_model extends CI_Model
    {
            public function __construct() 
            {
                        parent::__construct();
                        $this->load->database();
            }//end of constructor

              public function returnResult()
            {
                $studentResult = "
                                     SELECT subject.subject,grade.grade,grade.gp
                                        FROM studentresult
                                        NATURAL JOIN course
                                        NATURAL JOIN subject
                                        NATURAL JOIN grade
                                        WHERE studentresult.userID ='" . $this->session->userdata('Id')."'
                                        LIMIT 0 , 30
                                 "   ;
                 $resultStudentResult = $this->db->query($studentResult);
                // print_r($resultStudentResult->result_array());
                 return $resultStudentResult->result_array();
           }//end of returnResult()
    

    
    
    }//end of main class
?>
