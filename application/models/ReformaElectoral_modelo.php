<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class ReformaElectoral_modelo extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
        public function insertarDatosTipoMedio($datosDeTablaTipoMedio){
            $this->db->insert('tipo_medio',$datosDeTablaTipoMedio);
            return $this->db->insert_id();
        }
        public function insertarDatosNoticia($datosDeTablaNoticia){
            $this->db->insert('noticia',$datosDeTablaNoticia);
            return $this->db->insert_id();
        }
        public function insertarDatosMedioComunicacion($datosDeTablaMedioComunicacion){
            $this->db->insert('medio_comunicacion',$datosDeTablaMedioComunicacion);
            return $this->db->insert_id();
        }
        public function insertarDatosNoticiaMedio($datosDeTablaNoticiaMedio){
            $this->db->insert('noticia_medio',$datosDeTablaNoticiaMedio);
            return $this->db->insert_id();
        }
}