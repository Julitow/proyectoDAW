<?php
/**
 * Created by Sergio y Julio.
 * Date: 24/04/2015
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ofertas extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('model_oferta');
        $this->load->model('model_provincia');
        $this->load->model('model_cliente');
    }

    // Funcion que muestra todas las ofertas
    public function index(){

        $parametros['numero'] = $this->model_oferta->contar_ofertas();
        $parametros['provincia'] = $this->model_provincia->ver_provincias();

        $this->load->library('pagination'); //Cargar librería de paginación
        $pages=1; //Número de registros mostrados por páginas
        $config['base_url'] = base_url().'ofertas/'; // parámetro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
        $config['total_rows'] = $this->model_oferta->contar_ofertas();//calcula el número de filas
        $config['per_page'] = $pages; //Número de registros mostrados por páginas
        $config['num_links'] = 2; //Número de links mostrados en la paginación (cuantos números queremos que se muestren)
        $config["uri_segment"] = 2;//el segmento de la paginación

        $config['cur_tag_open'] = '<b class="paginacion">'; //página actual
        $config['cur_tag_close'] = '</b>';

        $config['first_link'] = 'Primero';
        $config['first_tag_open'] = '<div class="pag">';
        $config['first_tag_close'] = '</div>';

        $config['last_link'] = 'Último';
        $config['last_tag_open'] = '<div class="pag">';
        $config['last_tag_close'] = '</div>';

        $config['next_link'] = '&#10095;';//siguiente link
        $config['next_tag_open'] = '<div class="pag-2">';
        $config['next_tag_close'] = '</div>';

        $config['prev_link'] = '&#10094;';//anterior link
        $config['prev_tag_open'] = '<div class="pag-2">';
        $config['prev_tag_close'] = '</div>';

        $config['num_tag_open'] = '<div class="paginacion">';
        $config['num_tag_close'] = '</div>';

        $config['full_tag_open'] = '<div id="paginacion">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config); //inicializamos la paginación
        $parametros["ofertas"] = $this->model_oferta->total_paginados($config['per_page'], $this->uri->segment(2));

        $data['title'] = "Ofertas de Trabajo";

        $this->load->view('templates/header', $data);
        $this->load->view('ofertas/ver_ofertas', $parametros);
        $this->load->view('templates/footer');

    }

    // Funcion que devuelve la oferta según su ID
    private function buscar_oferta($id){
        $sol = false;

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

        $cliente['cliente'] = $this->model_cliente->ver_cliente($idCliente);

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


