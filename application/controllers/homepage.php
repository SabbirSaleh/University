<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of homepage
 *
 * @author 6662666
 */
class  HomePage  extends CI_Controller
{
    
    //put your code here
    public function HomePage() 
    {
        parent:: __construct();
       
        
        //loading model and getting header and navigation
        $item = $this->load->model('item_model');
        $data["item"]["header"]= $this->item_model->getItem("header","Home");
        $data["item"]["navigation"]= $this->item_model->getItem("navigation","Home");
        
        //notice information
       $notice = $this->load->model('notice_model');
       $data["notice"]=$this->notice_model->getNotice();
      
       //end of Controller notice information
       
       //event information
        $event = $this->load->model('event_model');
        $data["event"]= $this->event_model->getEvent();
        
       //end of Controller of event information 
        
        
        //getting footers
        $data["item"]["footer"]= $this->item_model->getItem("footer","Home");
        
        //loading views
        $data["event"]=$this->load->view('event',$data,true);
        $data["notice"]=$this->load->view('notice',$data,TRUE);
        
        $this->load->view('item',$data);

        
        
       //end of Controller of itemBar information 
        
        
        
    }//end of cosnstruct
    
    public function index()
    {
        
    }
}//end of class

?>
