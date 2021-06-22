<?php

class Otrotema_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	public function insertaOtroTema($dts)
	{
		$this->db->insert('otro_tema',$dts);
		return $idOtrotema = $this->db->insert_id();
	}
	public function insertaOtroSubTema($dts)
	{
		$this->db->insert('otro_subtema',$dts);
		return $idOtroSubtema = $this->db->insert_id();
	}
}