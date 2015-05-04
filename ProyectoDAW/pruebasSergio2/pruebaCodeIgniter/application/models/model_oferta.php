<?php
/**
 * Created by Sergio y Julio.
 * Date: 27/04/2015
 */

class Model_oferta extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function crear_oferta($titulo, $descripcion, $fecha, $salario, $idiomas, $experiencia, $idCliente, $provincia){

        $nueva_oferta = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'fecha' => $fecha,
            'salario' => $salario,
            'idiomas' => $idiomas,
            'experiencia' => $experiencia,
            'idCliente' => $idCliente,
            'provincia' => $provincia
        );

        $this->db->insert('ofertas', $nueva_oferta);

    }

    public function eliminar_oferta($id){
        $this->db->where('idOferta', $id);
        $this->db->delete('ofertas');
    }

    // SELECT * FROM ofertas ORDER BY id DESC;
    public function ver_ofertas(){

        $this->db->select('*');
        $this->db->from('ofertas');
        $this->db->order_by('idOferta', 'desc');

        $consulta = $this->db->get();
        $resultado = $consulta->result();

        return $resultado;
    }

    // SELECT * FROM ofertas ORDER BY id DESC LIMIT 3;
    public function ver_cuatro_ultimas_ofertas(){

        $this->db->select('*');
        $this->db->from('ofertas');
        $this->db->order_by('idOferta', 'desc');
        $this->db->limit(3);

        $consulta = $this->db->get();
        $resultado = $consulta->result();

        return $resultado;
    }

    // SELECT * FROM ofertas WHERE ID = id;
    public function ver_oferta($id){

        $this->db->select('*');
        $this->db->from('ofertas');
        $this->db->where('idOferta', $id);

        $consulta = $this->db->get();
        $resultado = $consulta->row();

        return $resultado;
    }

    // SELECT COUNT(*) FROM ofertas;
    public function contar_ofertas(){
        $this->db->select('*');
        $this->db->from('ofertas');

        $consulta = $this->db->get();
        $rowcount = $consulta->num_rows();

        return $rowcount;
    }
}