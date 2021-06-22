<?php


class Interfaz_model extends CI_Model
{
    private $_tipomedioID;
    private $_temaID;
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function setTipoMedioID($tipomedioID) {
        return $this->_tipomedioID = $tipomedioID;
    }

    public function setTemaID($temaID)
    {
        return $this->_temaID = $temaID;
    }

    public function getAllTipos() {
        $this->db->select(array('c.idtipomedio as tipo_id', 'c.nombre_tipo as tipo_nombre'));
        $this->db->from('tipo_medio as c');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function leerMedios() {
        $this->db->select(array('s.idmedio as medio_id', 's.rel_idtipomedio', 's.nombre_medio as medio_name'));
        $this->db->from('medio_comunicacion as s');
        $this->db->where('s.rel_idtipomedio', $this->_tipomedioID);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function leerActor()
    {
        $query = $this->db->get('actor');
        return $query->result_array();
    }

    public function leerTema()
    {
        $query = $this->db->get('tema');
        return $query->result_array();
    }

    public function leerSubtema()
    {
        $this->db->select(array('s.idsubtema as stema_id', 's.rel_idtema', 's.nombre_subtema as stema_name'));
        $this->db->from('subtema as s');
        $this->db->where('s.rel_idtema', $this->_temaID);
        $query = $this->db->get();
        return $query->result_array();
    }
}