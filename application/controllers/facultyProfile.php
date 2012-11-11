<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of facultyProfile
 *
 * @author 6662666
 */
class FacultyProfile extends CI_Controller{
    //put your code here
    
    public function index ()
    {
            $this->profile();
        
    }//end of index
    
    public function profile ($param="")
    {
        if($this->checkLogin())
        {
                $this->load->model('facultyProfile_model');
                $key=false;
                
               $session=$this->session->userdata("key");
               if(isset($session[$param])) 
                    $key=$session[$param];
                
                if($key)
                {
 
                    
                    $data['facultyProfile']=$this->facultyProfile_model->profile($key);
                    $data['courseTaken']=$this->facultyProfile_model->courseTaken($key);
                
                    $this->load->view('facultyProfile_view',$data);
                }
                else echo "<center><h1>". "No such Course Teacher" . "</center></h1>";

            
        }//end of if
        
    }//end of profile 
    
    
    public function checkLogin()
    {
        if($this->session->userdata('loggedIn'))
        {
            //user is logged in
            return true;
        }//end of if
        
        else 
        {
            //redirect user to login page
            redirect("login");
        }//end of else
        
    }//end of check login
}

?>
