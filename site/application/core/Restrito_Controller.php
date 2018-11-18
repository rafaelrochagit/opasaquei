<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Restrito_Controller
 * @category Restrito_Controller
 * @package  CodeIgniter
 * @author Rafael Rocha <rafaeltbt@gmail.com>
 */
abstract class Restrito_Controller extends Site_Controller {

    public $departamento;
    public $menuAtivo = '';
    public $menuAtivoFilho = '';
    public $menuAtivoNeto = '';

    abstract protected function getMenuAtivo();

    abstract protected function getContent();

    abstract protected function getController();

    /**
     * Constructor of Base Controller
     */
    function __construct() {
        parent::__construct();
        $usuario = $this->session->id;
        if ($usuario != null) {
            $perfil = $this->session->perfil;
            permissaoController($this->getController(), $perfil);
            $dados['content'] = $this->getContent();
            $dados['menuAtivo'] = $this->menuAtivo == '' ? $this->getMenuAtivo() : $this->menuAtivo;
            $dados['menuAtivoFilho'] = $this->menuAtivoFilho;
            $dados['menuAtivoNeto'] = $this->menuAtivoNeto;
            $this->load->view('restrito/template/template_admin', $dados);
        } else {
            error("Proibido", "Você não tem permissão!");
            redirect('home');
        }
    }

    protected function setMenuAtivo($menu) {
        $this->menuAtivo = $menu;
    }

    protected function setMenuAtivoFilho($menu) {
        $this->menuAtivoFilho = $menu;
    }

    protected function setMenuAtivoNeto($menu) {
        $this->menuAtivoNeto = $menu;
    }

}
