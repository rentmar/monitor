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
	public function numeroTotalNoticias()
	{
		return $this->db->count_all('noticia'); 
	}
	public function numeroNoticiasActor($idact)
	{
		$this->db->where('rel_idactor',$idact);
		return $this->db->count_all('noticia'); 
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