<?php

class Web extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        
    }

    function index(){
        $this->load->view('landingpage');
    }

    function bukaproduk()
    {
        $this->load->view('produk');
    }
    function bukakontak()
    {
        $this->load->view('kontak');
    }
    function bukamaps()
    {
        $this->load->view('maps');
    }
}