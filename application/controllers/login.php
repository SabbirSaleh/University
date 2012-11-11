<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author 6662666
 * @param login_model $login_model
 */
class Login extends CI_Controller{
    //put your code here
    
    public function index ()
    {
                
                if($this->session->userdata('loggedIn')&& $this->session->userdata('type')=="student")
                {
                    //this conditon means user is already loggend in
                    //so we will redirect him to his homepage
                            
                            redirect('student');
                }
                
                    elseif($this->session->userdata('loggedIn')) redirect('teacher');
                $this->load->helper('form_helper');
                 
                $this->load->view('login_form');
                
                
    }
    
    public function validate()
    {
        $this->load->model('login_model');
        $result= $this->login_model->checkLogin();
        $this->load->helper('url_helper');
        
        if($result)
        {
                    
                    if($this->session->userdata('type')=="student")
                        redirect('student');
                    else redirect ('teacher');
        }
        
        
           else redirect('login');
        
                  
        
   }//end of validate
    
}

?>
