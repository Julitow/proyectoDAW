<?php
/**
 * Created by Sergio y Julio.
 * Date: 27/04/2015
 */

class Model_provincia extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // SELECT nombre FROM provincias;
    public function ver_provincias(){

        $this->db->select('*');
        $this->db->from('provincias');

        $consulta = $this->db->get();
        $resultado = $consulta->result();

        return $resultado;
    }

    // SELECT * FROM ofertas WHERE ID = id;
    public function ver_provincia($id){

        $this->db->select('nombre');
        $this->db->from('provincias');
        $this->db->where('idProvincia', $id);

        $consulta = $this->db->get();
        $resultado = $consulta->row();

        return $resultado;
    }

}