<?php
/**
 * Created by Sergio y Julio.
 * Date: 24/04/2015
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ofertas extends CI_Controller{

    // Funcion que muestra todas las ofertas
    public function index(){

        $this->load->model('model_oferta');
        $parametros['lista'] = $this->model_oferta->ver_ofertas();
        $parametros['numero'] = $this->model_oferta->contar_ofertas();

        $this->load->model('model_provincia');
        $parametros['provincia'] = $this->model_provincia->ver_provincias();

        $data['title'] = "Ofertas de Trabajo";

        $this->load->view('templates/header', $data);
        $this->load->view('ofertas/ver_ofertas', $parametros);
        $this->load->view('templates/footer');

    }

    // Funcion que devuelve la oferta según su ID
    private function buscar_oferta($id){
        $sol = false;

        $this->load->model('model_oferta');
        $oferta = $this->model_oferta->ver_oferta($id);

            if($oferta->idOferta == $id){
                $sol = $oferta;
            }

        return $sol;
    }

    // Funcion que muestra la oferta según su ID
    public function ver_oferta($id){

        $data['title'] = "No existe la oferta";
        $oferta['oferta'] = $this->buscar_oferta($id);

        $this->load->model('model_cliente');
        $oferta['cliente'] = $this->model_cliente->ver_cliente_por_oferta($id);

        if($oferta){
            $data['title'] = $oferta['oferta']->titulo;
        }

        $this->load->view('templates/header', $data);
        $this->load->view('ofertas/ver_oferta', $oferta);
        $this->load->view('templates/footer');

    }

    // Funcion que crea una nueva oferta
    private function crear_oferta($titulo, $descripcion, $fecha, $salario, $idiomas, $experiencia, $idCliente){

        $this->load->model('model_cliente');
        $cliente['cliente'] = $this->model_cliente->ver_cliente($idCliente);

        $this->load->model('model_oferta');
        $this->model_oferta->crear_oferta($titulo, $descripcion, $fecha, $salario, $idiomas, $experiencia, $idCliente, $cliente['provincia']);

    }

    public function nueva_oferta($titulo, $descripcion, $fecha, $salario, $idiomas, $experiencia, $idCliente){

        $oferta = crear_oferta($titulo, $descripcion, $fecha, $salario, $idiomas, $experiencia, $idCliente);
        $data['title'] = "Nueva Oferta";

        $this->load->view('templates/header', $data);
        $this->load->view('ofertas/oferta_creada', $oferta);
        $this->load->view('templates/footer');
    }
}


