<?php
/**
 * Created by Sergio y Julio.
 * Date: 30/04/2015
 */

class Model_cliente extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // SELECT * FROM clientes;
    public function ver_cliente($idCliente){

        $this->db->select('*');
        $this->db->from('clientes');
        $this->db->order_by('idCliente', $idCliente);

        $consulta = $this->db->get();
        $resultado = $consulta->result();

        return $resultado;
    }

    // SELECT * FROM clientes WHERE idCliente = (SELECT idCliente FROM ofertas WHERE idOferta = $idOferta)
    public function ver_cliente_por_oferta($idOferta){

        $this->db->select('*');
        $this->db->from('clientes');
        $this->db->where('idCliente in (SELECT idCliente FROM ofertas WHERE idOferta = '.$idOferta.')');

        $consulta = $this->db->get();
        $resultado = $consulta->row();

        return $resultado;
    }

}