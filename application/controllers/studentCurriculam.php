<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class StudentCurriculam extends CI_Controller
{
    public function index()
            {

                        $this->checkLogin(); 

            }//end of index


            public function checkLogin()
            {
                
                 if($this->session->userdata('loggedIn') && $this->session->userdata('type')=="student")//After validation sucsessfull 
                {   
                    $this->load->model('studentCurriculam_model');              //load studentResult model                    
                   
                    $data["name"]=$this->session->userdata('userName');

                   $data['studentCurriculam']= $this->studentCurriculam_model->returnResult();
                   $this->load->view('studentCurriculam_view',$data); //Passing data of todays class to student curriculam VIEW
                    
                }//End of if condition

                else
                {
                    $this->load->helper('url_helper');
                    redirect('login');
                    exit();
                }

            }//end of checkLogIn
    
    
    
}//end of main class 

?>
