<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/**
* @property CI_Loader $load

* @property CI_Form_validation $form_validation

* @property CI_Input $input

* @property CI_Email $email

* @property CI_DB_active_record $db

* @property CI_DB_forge $dbforge

* @property CI_Table $table

* @property CI_Session $session

* @property CI_FTP $ftp
 * 

*/

    class Teacher extends CI_Controller
    {
        public function index()
        {
            $this->checkLogin();
        }//
        
        public function checkLogin()
        {
             if($this->session->userdata('loggedIn') && $this->session->userdata('type')=="faculty")//After validation sucsessfull 
                {
                 $this->load->model('teacher_model');
                 $this->load->model('facultyprofile_model');
                 
                 $data['teacherCoures'] = $this->teacher_model->returnCourses($this->session->userdata('Id'));
                 $data['teacherTodaysClass'] = $this->teacher_model->returnTodaysClass($this->session->userdata('Id'));
                 $data['profile'] = $this->facultyprofile_model->profile($this->session->userdata('Id'));
                 
                 $this->load->view('teacher_view',$data);
                }//end of if condition
              
             else
                  {
                    $this->load->helper('url_helper');
                    redirect('login');
                    exit ();
                  }
                
        }//end of checkLogin()
        
    }//end of main class
    
?>
