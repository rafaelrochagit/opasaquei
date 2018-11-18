    <?php

    defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Rafael Rocha <rafaeltbt@gmail.com>
 */
class Erro extends Principal_Controller {

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
        if ($this->uri->segment(1) == 'restrito') {
            error('Página Não Encontrada', 'Essa Página não existe.');
            redirect('restrito/home');
        }
        $dados['content'] = $this->page();
        return $this->load->view('components/page/simple_page', $dados, true);
    }

    /**
     * 
     * @return string contendo o html do panel
     */
    public function page() {
        $alert = $this->session->flashdata('alert');
        $aviso = $alert != null ? process_alert($alert) : 
        '<header>
        <div class="intro-text">Página Não Encontrada</div>
        </header>';
        $page = new SimplePage('', $aviso);
        return $page->getComponent();
    }

    public function getMenuSelecionado() {
        return 'nenhum';
    }

    public function getSlide() {
        return '';
    }

}
