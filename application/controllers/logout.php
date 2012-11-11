<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of logout
 *
 * @author 6662666
 */
class logout extends CI_Controller{
    //put your code here
    public function index()
    {
        $this->session->sess_destroy();
        redirect('homepage');
    }
}

?>
