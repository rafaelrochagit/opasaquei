<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Doctrine $doctrine Biblioteca ORM
 * @author Rafael Rocha <rafaeltbt@gmail.com>
 */
class Aulas extends Principal_Controller {

    /**
     * Método Construtor
     */
    public function __construct() {
        parent::__construct();

    }

    public function index() {

    }

    public function avaliacaogoogle(){
    }
    public function avaliacaogooglephone(){
    }

    public function getCustomPage() {
        if(isset($this->uri->segments[2]) && $this->uri->segments[2] == 'avaliacaogoogle'){
            //header( 'Location: https://search.google.com/local/writereview?placeid=ChIJqzvXvEs7WpMRWYmNBq930W0' );
            header( 'Location: https://www.google.com.br/search?q=CLN+406+bl.+B+Subsolo+Loja+02,+Asa+Norte+Com%C3%A9rcio+Local+Norte+406+Opa,+Saquei!+-+Asa+Norte,+Bras%C3%ADlia+-+DF,+70847-520&ludocid=7913237613879593305#lrd=0x935a3b4bbcd73bab:0x6dd177af068d8959,1,,,' );
        }
        if(isset($this->uri->segments[2]) && $this->uri->segments[2] == 'avaliacaogooglephone'){
            header( 'Location: https://www.google.com.br/search?q=CLN+406+bl.+B+Subsolo+Loja+02,+Asa+Norte+Comércio+Local+Norte+406+Opa,+Saquei!+-+Asa+Norte,+Brasília+-+DF,+70847-520&ludocid=7913237613879593305&ibp=gwp;0,7#imagekey=!1e2!2s4EbUfTI-MGKrJhwstVFR4w&lkt=LocalPoiReviews&viewerState=ga' );
        }  
        /**
         * Includes de models
         */
        $this->load->model('EntitiesModels/DepoimentoModel');
        /**
         * Includes de components
         */
        $this->load->component('page/SimplePage');
        /**
         * criação de panels
         */
        $dados['depoimentos'] = $this->DepoimentoModel->retrieveAllByOrder('data', 'desc');
        $data['depoimento_page'] = $this->load->view('aulas/depoimentos_comp', $dados, true);
        $content = $this->load->view('aulas/aulas_page', $data, true);
        return $content;
    }

    public function getMenuSelecionado() {
        return 'aulas-particulares';
    }

    public function getMenu() {
        return $this->load->view('_inc/menu_aulas', '', true);
    }



}