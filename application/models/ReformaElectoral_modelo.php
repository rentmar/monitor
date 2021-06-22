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
        public function insertarDatosNoticia($datosDeTablaNoticia){
            $this->db->insert('noticia',$datosDeTablaNoticia);
            return $this->db->insert_id();
        }

}