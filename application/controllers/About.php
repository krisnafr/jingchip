<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    function index() {
        $data['title'] = 'About - JING, jagung emping aneka rasa';
        $data['description'] = 'About - JING, emping jagung aneka rasa dengan harga terjangkau';
        $this->load->view('header', $data);
        $this->load->view('about');
        $this->load->view('footer');
    }


}
