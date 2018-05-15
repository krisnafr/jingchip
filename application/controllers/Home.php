<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    
    public function index() {
        $data['title'] = 'Home - JING, jagung emping aneka rasa';
        $data['description'] = 'Home - JING, emping jagung aneka rasa dengan harga terjangkau';
        $this->load->view('header',$data);
        $this->load->view('home');
        $this->load->view('footer');
//        var_dump($data);
    }
}

