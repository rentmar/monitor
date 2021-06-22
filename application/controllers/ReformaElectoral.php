<?php

class ReformaElectoral extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Interfaz_model');
		$this->load->model('Otrotema_model');

    }

    public function index()
    {


        $datos['tipo_medio'] = $this->Interfaz_model->getAlltipos();
        $datos['actor'] = $this->Interfaz_model->leerActor();
        $datos['tema'] = $this->Interfaz_model->leerTema();



        $this->load->view("html/encabezado.php");
        $this->load->view('html/navbar');

        $this->load->view('formularios/vreforma_electoral', $datos);

        /**** PIE ****/
        $this->load->view('html/pie.php');
    }

    public function capturarDatos()
    {

		$dtotrotema=array(
					'otro_tema'=>'aqui los datos otro tema',
					'rel_idtema'=>11);
		$idotrotema=$this->Otrotema_model->insertaOtroTema($dtotrotema);
		$dtotrosubtema=array(
					'otro_subtema'=>'aqui los datos otro subtema',
					'rel_idsubtema'=>22);
		$idotrosubtema=$this->Otrotema_model->insertaOtroSubTema($dtotrosubtema);
		

        $fechaMesDiaAno=$this->input->post('fecha');
        $fechaDeNoticia=$this->fecha_unix($fechaMesDiaAno);
        $titularDeNoticia=$this->input->post('titular');
        $resumenDeNoticia=$this->input->post('resumen');
        $urlDeNoticia=$this->input->post('url');
        $relacionIdActor=$this->input->post('relIdActor');
        $relacionDeSubtema=$this->input->post('relDeSubtema');
        $relacionIdmedio = $this->input->post('medio');
        
        $DatosDeNoticia['fecha']=$fechaDeNoticia;
        $DatosDeNoticia['titular']=$titularDeNoticia;
        $DatosDeNoticia['resumen']=$resumenDeNoticia;
        $DatosDeNoticia['url']=$urlDeNoticia;
        $DatosDeNoticia['rel_idactor']=$relacionIdActor;
        $DatosDeNoticia['rel_subtema']=$relacionDeSubtema;
        
        $idinv=$this->ReformaElectoral_modelo->insertarDatosNoticia($DatosDeNoticia);
    }
    
    //Cambiar el formato MM/DD/YY a unix timestamp
    private function fecha_unix($fecha) {
        list($anio, $mes, $dia) = explode('-', $fecha);
        $fecha_unix = mktime(0, 0, 0, $mes, $dia, $anio);
        return $fecha_unix;
    }


    public function getmedios() {
        $json = array();
        $this->Interfaz_model->setTipoMedioID($this->input->post('tipomedioID'));
        $json = $this->Interfaz_model->leerMedios();
        header('Content-Type: application/json');
        echo json_encode($json);
    }

    public function getsubtema()
    {
        $json = array();
        $this->Interfaz_model->setTemaID($this->input->post('temaID'));
        $json = $this->Interfaz_model->leerSubtema();
        header('Content-Type: application/json');
        echo json_encode($json);
    }


}