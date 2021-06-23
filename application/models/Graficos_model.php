<?php

class Graficos_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	public function leerActores()
	{
		$qry = $this->db->get('actor');
		return $qry->result();
	}
	public function leerMedios()
	{
		$qry = $this->db->get('medio_comunicacion');
		return $qry->result();
	}
	public function leerTipoMedios()
	{
		$qry = $this->db->get('tipo_medio');
		return $qry->result();
	}
	public function leerTemas()
	{
		$qry = $this->db->get('tema');
		return $qry->result();
	}
	public function numeroTotalNoticias()
	{
		return $this->db->count_all('noticia'); 
	}
	public function numeroNoticiasActor($idact)
	{
		$query = $this->db->query('SELECT * FROM noticia WHERE rel_idactor='.$idact);			
		return $query->num_rows(); 
	}
	public function numeroNoticiasMedio($idm)
	{
		$query = $this->db->query('SELECT * FROM noticia_medio WHERE rel_idmedio='.$idm);
		
		return $query->num_rows(); 
	}
	public function numeroNoticiasTipoMedio($idtm)
	{
		$sql = "SELECT tipo_medio.nombre_tipo
				FROM noticia_medio 
				LEFT JOIN medio_comunicacion ON noticia_medio.rel_idmedio=medio_comunicacion.idmedio
				LEFT JOIN tipo_medio ON medio_comunicacion.rel_idtipomedio=tipo_medio.idtipomedio
				WHERE medio_comunicacion.rel_idtipomedio=".$idtm;
        $qry = $this->db->query($sql);
		return $qry->num_rows();
		//return $qry->result();		
	}
	public function numeroNoticiasTema($idt)
	{
		$sql = "SELECT subtema.rel_idtema
				FROM noticia 
				LEFT JOIN subtema ON noticia.rel_subtema=subtema.idsubtema
				WHERE subtema.rel_idtema=".$idt;
        $qry = $this->db->query($sql);
		return $qry->num_rows();
		//return $qry->result();		
	}
	
	public function numeroTotalActores()
	{
		return $this->db->count_all('actor');  
	}
	public function numeroSubTemaNoticias($idst)
	{
		$this->db->where('rel_subtema',$idst);
		return $this->db->count_all('noticia'); 
	}
}