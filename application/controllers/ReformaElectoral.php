<?php

class ReformaElectoral extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Interfaz_model');
    }

    public function index()
    {


        $datos['tipo_medio'] = $this->Interfaz_model->getAlltipos();



        $this->load->view("html/encabezado.php");
        $this->load->view('html/navbar');

        $this->load->view('formularios/vreforma_electoral', $datos);

        /**** PIE ****/
        $this->load->view('html/pie.php');
    }

    public function capturarDatos()
    {

    }

    public function getmedios() {
        $json = array();
        $this->Interfaz_model->setTipoMedioID($this->input->post('tipomedioID'));
        $json = $this->Interfaz_model->leerMedios();
        header('Content-Type: application/json');
        echo json_encode($json);
    }




}