<?php

defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * @property Doctrine $doctrine Biblioteca ORM
 * @author Rafael Rocha <rafaeltbt@gmail.com>
 */
class OrientacaoProfissional extends Principal_Controller {

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
        /**
         * criação de panels
         */
        $content = $this->load->view('orientacao_profissional/orientacao_page', '', true);
        return $content;
    }

    public function getMenuSelecionado() {
        return 'orientacao-profissional';
    }

    public function getMenu() {
        return $this->load->view('_inc/menu_orientacao', '', true);
    }

    public function getLogo() {
        return $this->load->view('_inc/logo_principal', '', true);
    }

}
