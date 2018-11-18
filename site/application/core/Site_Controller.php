<?php


(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Site_Controller
 * @category Site_Controller
 * @package  CodeIgniter
 * @author Rafael Rocha <rafaeltbt@gmail.com>
 */

abstract class Site_Controller extends CI_Controller {

    /**
     * Constructor of Base Controller
     */


    function __construct() {

      parent::__construct();

      enumLoad();

 	  date_default_timezone_set('America/Sao_Paulo');

    }











}



