<?php
/**
 * Created by Sergio y Julio.
 * Date: 24/04/2015
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Oferta extends CI_Controller{

    private $lista = array(
        array('id' => 1, 'nombre' => 'Reparación', 'descripcion' => 'Necesito formatear mi equipo completamente.'),
        array('id' => 2, 'nombre' => 'Página web', 'descripcion' => 'Queremos diseñar una página web para nuestar empresa.'),
        array('id' => 3, 'nombre' => 'Reparación impresora', 'descripcion' => 'Necesito arreglar mi impresora URGENTEMENTE!.')
    );

    // Funcion que muestra todas las ofertas
    public function index(){

        $data['title'] = "Ofertas de Trabajo";
        $ofertas['lista'] = $this->lista;

        $this->load->view('templates/header', $data);
        $this->load->view('ofertas/ver_ofertas', $ofertas);
        $this->load->view('templates/footer');

    }

    // Funcion que devuelve la oferta según su ID
    private function buscar_oferta($id){
        $sol = false;
        foreach($this->lista as $item){
            if($item['id'] == $id){
                $sol = $item;
            }
        }
        return $sol;
    }

    // Funcion que muestra la oferta según su ID
    public function ver_oferta($id=null){

        $data['title'] = "No existe la oferta";
        $oferta['oferta'] = $this->buscar_oferta($id);

        if($oferta){
            $data['title'] = $oferta['oferta']['nombre'];
        }

        $this->load->view('templates/header', $data);
        $this->load->view('ofertas/ver_oferta', $oferta);
        $this->load->view('templates/footer');

    }

}


