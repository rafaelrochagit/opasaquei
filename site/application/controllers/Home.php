<?php



defined('BASEPATH') OR exit('No direct script access allowed');



/**

 * @property Doctrine $doctrine Biblioteca ORM

 * @author Rafael Rocha <rafaeltbt@gmail.com>

 */

class Home extends Principal_Controller {



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

//        $this->load->model('EntitiesModels/SlideModel');

        /**

         * Includes de components

         */

        $this->load->component('page/SimplePage');

        /**

         * criação de panels

         */

        /*$content = $this->load->view('home/home_page', '', true);*/
        redirect('aulas-particulares');

        return $content;

    }


    public function getMenuSelecionado() {

        return 'principal';

    }



}

