<?php

class ReformaElectoral extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Interfaz_model');
		$this->load->model('Otrotema_model');
		$this->load->model('Graficos_model');
		$this->load->model('ReformaElectoral_modelo');
		
		$this->load->library('phplot');
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

		/*$dtotrotema=array(
					'otro_tema'=>'aqui los datos otro tema',
					'rel_idtema'=>11);
		$idotrotema=$this->Otrotema_model->insertaOtroTema($dtotrotema);
		$dtotrosubtema=array(
					'otro_subtema'=>'aqui los datos otro subtema',
					'rel_idsubtema'=>22);

		$idotrosubtema=$this->Otrotema_model->insertaOtroSubTema($dtotrosubtema);*/
		
		$fechaMesDiaAno=$this->input->post('fecha');
        $fechaDeNoticia=$this->fecha_unix($fechaMesDiaAno);
        $titularDeNoticia=$this->input->post('titular');
        $resumenDeNoticia=$this->input->post('resumen');
        $urlDeNoticia=$this->input->post('url');
        $actorNombre=$this->input->post('actor_nombre');
        $idMedio=$this->input->post('medio');

        $DatosDeActor['actor_nombre']=$actorNombre;
        $idActor=$this->ReformaElectoral_modelo->insertarDatosActor($DatosDeActor);
        $relacionIdActor=$idActor;
        
        //identificador del tema seleccionado
        $idtema = $this->input->post('tema');

        //Identificador de subtema seleccionado
        $idsubtema = $this->input->post('idsubtema');

        $relacionIdSubtema=$idsubtema;
                
        $DatosDeNoticia['fecha']=$fechaDeNoticia;
        $DatosDeNoticia['titular']=$titularDeNoticia;
        $DatosDeNoticia['resumen']=$resumenDeNoticia;
        $DatosDeNoticia['url']=$urlDeNoticia;
        $DatosDeNoticia['rel_idactor']=$relacionIdActor;
        $DatosDeNoticia['rel_subtema']=$relacionIdSubtema;
        
        $idNoticia=$this->ReformaElectoral_modelo->insertarDatosNoticia($DatosDeNoticia);
        $relacionIdNoticia=$idNoticia;
        
        $DatosDeNoticiaMedio['rel_idnoticia']=$relacionIdNoticia;
        $DatosDeNoticiaMedio['rel_idmedio']=$idMedio;
        
        $idNoticiaMedio=$this->ReformaElectoral_modelo->insertarDatosNoticiaMedio($DatosDeNoticiaMedio);
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

    public function resumen()
    {
        $this->load->view("html/encabezado.php");
        $this->load->view('html/navbar');
		//--------------------- actor
		$datos['dtsactor']=array();
		$numTotalNoticias=$this->Graficos_model->numeroTotalNoticias();
		$actores=$this->Graficos_model->leerActores();
		foreach ($actores as $a)
		{
			$cantidad=$this->Graficos_model->numeroNoticiasActor($a->idactor);
			
			$valporcentual=intval(($cantidad/$numTotalNoticias)*100);
			array_push($datos['dtsactor'],array($a->actor_nombre,$valporcentual));
		}
		//----------------------
		//-------------------- medios
		$datos['dtsmedio']=array();
		$medios=$this->Graficos_model->leerMedios();
		foreach ($medios as $m)
		{
			$cantidad=$this->Graficos_model->numeroNoticiasMedio($m->idmedio);
			
			$valporcentual=intval(($cantidad/$numTotalNoticias)*100);
			array_push($datos['dtsmedio'],array($m->nombre_medio,$valporcentual));
		}
		//----------------------
		//-------------------- tipo medios
		$datos['dtstipomedio']=array();
		$tipos=$this->Graficos_model->leerTipoMedios();
		foreach ($tipos as $t)
		{
			$cantidad=$this->Graficos_model->numeroNoticiasTipoMedio($t->idtipomedio);
			
			$valporcentual=intval(($cantidad/$numTotalNoticias)*100);
			array_push($datos['dtstipomedio'],array($t->nombre_tipo,$valporcentual));
		}
		//----------------------
		//-------------------- tema
		$datos['dtstema']=array();
		$temas=$this->Graficos_model->leerTemas();
		foreach ($temas as $te)
		{
			$cantidad=$this->Graficos_model->numeroNoticiasTema($te->idtema);
			
			$valporcentual=intval(($cantidad/$numTotalNoticias)*100);
			array_push($datos['dtstema'],array($te->nombre_tema,$valporcentual));
		}
		//----------------------
        $this->load->view('formularios/vresumen_reforma_electoral',$datos);

        $this->load->view('html/pie.php');
		
    }

}