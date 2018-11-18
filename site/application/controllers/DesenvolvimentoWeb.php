<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Doctrine $doctrine Biblioteca ORM
 * @author Rafael Rocha <rafaeltbt@gmail.com>
 */
class DesenvolvimentoWeb extends Principal_Controller {

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
        /**
         * Includes de components
         */
        $this->load->component('page/SimplePage');
        $this->load->model('EntitiesModels/PortfolioModel');
        $this->load->model('EntitiesModels/TipoPortfolioModel');

        $dados['portfolios'] = $this->PortfolioModel->retrieveAllByOrder('id', 'desc');
        $dados['tipos'] = $this->TipoPortfolioModel->retrieveAll();
        /**
         * criação de panels
         */
        $content = $this->load->view('desenvolvimento_web/web_page', $dados, true);
        return $content;
    }

    public function getMenuSelecionado() {
        return 'desenvolvimento-web';
    }

    public function getMenu() {
        return $this->load->view('_inc/menu_desenv_web', '', true);
    }

    public function getLogo() {
        return $this->load->view('_inc/logo_desenv_web', '', true);
    }

}