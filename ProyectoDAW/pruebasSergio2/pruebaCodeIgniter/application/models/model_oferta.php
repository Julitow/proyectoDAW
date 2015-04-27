<?php
/**
 * Created by Sergio y Julio.
 * Date: 27/04/2015
 */

class Model_oferta extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function crear_oferta($titulo, $descripcion){

        $ofertaNueva = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion
        );

        $this->db->insert('ofertas', $ofertaNueva);

    }

    public function eliminar_oferta($id){
        $this->db->where('id', $id);
        $this->db->delete('ofertas');
    }

    // SELECT * FROM ofertas ORDER BY id DESC;
    public function ver_ofertas(){

        $this->db->select('*');
        $this->db->from('ofertas');
        $this->db->order_by('id', 'desc');

        $consulta = $this->db->get();
        $resultado = $consulta->result();

        return $resultado;
    }

    // SELECT * FROM ofertas WHERE ID = id;
    public function ver_oferta($id){

        $this->db->select('*');
        $this->db->from('ofertas');
        $this->db->where('id', $id);

        $consulta = $this->db->get();
        $resultado = $consulta->row();

        return $resultado;
    }

}