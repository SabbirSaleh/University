<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor
 */
class StudentCurriculam_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function returnResult() 
    {
        $studentCurriculam = "
                                SELECT subject.subject,
                                subjecttype.subjecttype,
                                credit.credit
                                FROM `subject`
                                natural join subjecttype    
                                natural join credit 
                                natural join department 
                           
                                WHERE subject.departmentid=1
                             " ;
        $studentCurriculamResult = $this->db->query($studentCurriculam);
        
        //print_r($studentCurriculamResult->result_array());
        
        return $studentCurriculamResult->result_array();
    }//end of returnResult()
    
}//end of main class
    
    
    
?>
