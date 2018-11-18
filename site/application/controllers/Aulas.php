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

    public function getCustomPage() {
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