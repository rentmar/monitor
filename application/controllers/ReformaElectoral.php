<?php

class ReformaElectoral extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
		$this->load->model('Otrotema_model');
		$this->load->model('ReformaElectoral_modelo');
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
}