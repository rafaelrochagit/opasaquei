<?php
require_once LIBCOMPPATH . 'WebComponent.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Panel RowWrapper1Panel
 * recebe 1 componentes
 *
 * @author Rafael Rocha <rafaeltbt@gmail.com>
 */
class SimplePage extends WebComponent {

    /**
     * 
     * @param type $content html do conteudo, titulo
     * @return html do 
     * @var RowPanel contendo um 
     * @var Wrapper1Panel
     */
     public function __construct($title = '', $content = '') {
        parent::__construct();
        if (!empty($content)) {
            $dados['title'] = $title;
            $dados['content'] = $content;
            $page = $this->load->view('components/page/simple_page', $dados, true);
            $this->setComponent($page);
        }
    }

    public function testaInstancia($instancias = array()) {
        return $instancias;
    }

}
