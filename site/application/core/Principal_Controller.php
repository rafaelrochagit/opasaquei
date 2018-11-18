<?php



(defined('BASEPATH')) OR exit('No direct script access allowed');



/**

 * Principal_Controller

 * @category Principal_Controller

 * @package  CodeIgniter

 * @author Rafael Rocha <rafaeltbt@gmail.com>

 */

abstract class Principal_Controller extends Site_Controller {



    abstract function getCustomPage();



    abstract function getMenuSelecionado();



    /**

     * Constructor of Base Controller

     */

    function __construct() {

        parent::__construct();

        $body['menu'] = $this->getMenu();

        $body['customPage'] = $this->getCustomPage();

        $body['logo'] = $this->getLogo();

        $dados['body'] = $this->load->view('_inc/body_page', $body, true);

        $footer['menuSelecionado'] = $this->getMenuSelecionado();

        $dados['footer'] = $this->load->view('_inc/footer', $footer, true);

        $this->load->view('template_site', $dados);

    }



    public function getMenu() {

        return $this->load->view('_inc/menu_principal', '', true);

    }

    public function getLogo() {

        return $this->load->view('_inc/logo_principal', '', true);

    }

}

