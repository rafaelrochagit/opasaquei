<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Use enums\TipoStatus;

include_once(APPPATH . "third_party/mpdf60_min/" . 'mpdf.php');

/**
 * @property Doctrine $doctrine Biblioteca ORM
 * @author Rafael Rocha <rafaeltbt@gmail.com>
 */
class AjaxController extends CI_Controller {

    /**
     * Método Construtor
     */
    public function __construct() {
        parent::__construct();
        enumLoad();
    }

    public function index() {

    }

    public function downloadPacotePdf(){
        $dados['pacote'] = $_POST['pacote'];
        $titulo = 'Pacote Opa, Saquei!';

        $content = $this->load->view('aulas/pdf_style', $dados, true);
        // pega instancia do mpdf já inicializado com o certificado
        $mpdf = new mPDF('utf-8', 'A4-L'); // A4-L : Paisagem
        /* Propriedades do documento PDF */
        $mpdf->SetAuthor('Opa, Saquei!'); // Autor
        $mpdf->SetSubject($titulo); //Assunto
        //$mpdf->SetKeywords('palavras, chave, aqui'); //Palavras chave
        $mpdf->SetTitle($titulo); //Titulo
        
        $mpdf->WriteHTML($content);
        $mpdf->Output('pacote-opa-saquei.pdf', 'I');
        exit();
    }

    public function enviarEmail() {
        /* Carregando Models */
        try{
            $this->load->model('EntitiesModels/ContatoModel');
            $dados = $this->input->post();
            $dados['id'] = '';
            $dados['data'] = date('Y-m-d H:i:s');
            $this->ContatoModel->CI_saveOrUpdate($dados,'id');
            $destinatario = 'opa.saquei@gmail.com';

            $config['mailtype'] = 'html';
            $this->load->library('email');

            $this->email->initialize($config);

            $this->email->from('contato@opasaquei.com.br', 'Site Ops');
            $this->email->to($destinatario);

            $this->email->subject('Contato - '.$dados['tipo'] . ' ' . limitaTexto($dados['mensagem'],40));
            $dados['title'] = "Contato";
            $corpo = $this->load->view('components/template_email', $dados, true);
            $this->email->message($corpo);

            if ($this->email->send()) {
                successEmail();
                return true;
            } else {
                errorEmail();
                return false;
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
}
