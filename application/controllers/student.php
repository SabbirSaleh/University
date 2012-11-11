<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of student
 *
 * @author 6662666
 */
class student extends CI_Controller{
    //put your code here
    public function index()
    {

                $this->checkLogin();
               
        
        
    }//end of index
    
    
    public function checkLogin()
    {
        if($this->session->userdata('loggedIn') && $this->session->userdata('type')=="student")//After validation sucsessfull 
        {
            
            
            $this->load->model('student_model');                   //load student model
            
            
            //Student Course information
            $data['studentCourse']=$this->student_model->returnCourses();//returned StudentCoureses
            $data["name"]=$this->session->userdata('userName');
            
            
            
            
            //Student Todays Class information
            $data['studentTodaysClass']= $this->student_model->returnTodaysClass();

            
            $this->load->view('student',$data); //Passing data of todays class to studnt VIEW
           
        }//End of if condition
        
        else
        {
            //user is not looged in
            //so redirect hime to the login page
            $this->load->helper('url_helper');
            redirect('login');
            exit();
        }
        
        
        
    }//end of checkLogIn
    
}//end of class

?>
