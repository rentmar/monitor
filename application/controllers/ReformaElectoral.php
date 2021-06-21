<?php

class ReformaElectoral extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index()
    {
        $this->load->view("html/encabezado.php");
        $this->load->view('html/navbar');

        $this->load->view('formularios/vreforma_electoral');

        /**** PIE ****/
        $this->load->view('html/pie.php');
    }

    public function capturarDatos()
    {

    }


}