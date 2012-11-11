<?php  


    class StudentResult extends CI_Controller
    {

        public function index()
            {

                        $this->checkLogin(); 

            }//end of index


            public function checkLogin()
            {
                
                 if($this->session->userdata('loggedIn') && $this->session->userdata('type')=="student")//After validation sucsessfull 
                {
                    echo "welcome " . $this->session->userdata('userName');//Pass the username to session
                    
                    $this->load->model('studentResult_model');              //load studentResult model                    
                   
                   // $data["name"]=$this->session->userdata('userName');

                    $data['studentResult']= $this->studentResult_model->returnResult();
                    $this->load->view('studentResult_view',$data); //Passing data of todays class to studnt VIEW
                    
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