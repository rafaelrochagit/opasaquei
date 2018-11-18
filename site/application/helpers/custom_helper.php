<?php

Use Entities\AbstractEntity;

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('embedVideoYoutube')) {

    function embedVideoYoutube($link) {
        $matches = array();
        if (preg_match("#http://(.*)\.youtube\.com/watch\?v=(.*)(&(.*))?#", $link, $matches)) {
            $dados['match'] = $matches[2];
            return $dados;
        } else if (preg_match("#https://(.*)\.youtube\.com/watch\?v=(.*)(&(.*))?#", $link, $matches)) {
            $dados['match'] = $matches[2];
            return $dados;
        } else {
            return 'Function embedVideo Link fornecido não é um link do youtube válido.';
        }
    }

}

if (!function_exists('linkWithProtocol')) {

    function linkWithProtocol($link) {
        /* strpos retorna a posicao da primeira
         * ocorrencia da palavra procurada, ou
         * false caso não encontre
         */
        $linkhttp = strpos($link, "http://");
        $linkhttps = strpos($link, "https://");
        if ($linkhttp !== false || $linkhttps !== false || $link == '#') {
            return $link;
        } else {
            return 'http://' . $link;
        }
    }

}


if (!function_exists('limitaTexto')) {

    function limitaTexto($var, $limite) {
        if (strlen($var) > $limite) {
            $var = substr($var, 0, $limite);
            $var = trim($var) . "...";
        }
        return $var;
    }

}


if (!function_exists('pathRaiz')) {

    function pathRaiz() {
        $path = $_SERVER['SCRIPT_FILENAME'];
        $path_parts = pathinfo($path);
        return $path_parts['dirname'];
    }

}

function imagemUrl($caminho, $foto, $default) {
    $path = $_SERVER['SCRIPT_FILENAME'];
    $path_parts = pathinfo($path);
    $diretorio = $path_parts['dirname'] . $caminho;
    if ($foto == null || !is_file($diretorio . $foto)) {
        $image = base_url($caminho . $default);
    } else {
        $image = base_url($caminho . $foto);
    }
    return $image;
}

if (!function_exists('processBack')) {

    function processBack($back) {
        if (strpos($back, 'http') !== FALSE) {
            return '<a title="Voltar" href=' . $back . ' class="back glyphicon glyphicon-arrow-left">'
                    . '</a>';
        }
        return '<a title="Voltar" href=' . base_url($back) . ' class="back glyphicon glyphicon-arrow-left">'
                . '</a>';
    }

}
if (!function_exists('back')) {

    function back($back) {
        $CI = & get_instance();
        $CI->session->set_flashdata('back', $back);
    }

}

if (!function_exists('processNew')) {

    function processNew($new) {
        return '<h3 class = "box-title pull-right" style="margin-right: 15px;">'
                . '<a class = "btn btn-success" href =' . base_url($new) . '>'
                . '<i class = "fa fa-plus-circle"></i>'
                . ' Novo '
                . '</a>'
                . '</h3>';
    }

}

if (!function_exists('new')) {

    function newButton($new) {
        $CI = & get_instance();
        $CI->session->set_flashdata('new', $new);
    }

}


if (!function_exists('pathImages')) {

    function pathImages() {
        $path = $_SERVER['SCRIPT_FILENAME'];
        $path_parts = pathinfo($path);
        $diretorio = $path_parts['dirname'] . '/public/images/';
        return $diretorio;
    }

}

if (!function_exists('excluirImagem')) {

    function excluirImagem($foto) {
        if ($foto != '') {
            $caminho = pathRaiz() . $foto;
            if (is_file($caminho)) {
                unlink($caminho);
            }
        }
    }

}

if (!function_exists('excluirFile')) {

    function excluirFile($file) {
        if ($file != '') {
            $caminho = pathRaiz() . $file;
            if (is_file($caminho)) {
                unlink($caminho);
            }
        }
    }

}

if (!function_exists('tirarAcentosSearch')) {

    function tirarAcentosSearch($string) {
        if ($string == null) {
            return '';
        }
        return preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/", "/(ç)/", "/(Ç)/"), explode(" ", "a A e E i I o O u U n N c C"), $string)
                . ' ' . $string;
    }

}

if (!function_exists('maiusculasPalavras')) {

    function maiusculasPalavras($string, $delimiters = array(" ", "-", ".", "'", "O'", "Mc"), $exceptions = array("de", "da", "dos", "das", "do", "I", "II", "III", "IV", "V", "VI")) {
        /*
         * Exceptions in lower case are words you don't want converted
         * Exceptions all in upper case are any words you don't want converted to title case
         *   but should be converted to upper case, e.g.:
         *   king henry viii or king henry Viii should be King Henry VIII
         */
        $string = mb_convert_case($string, MB_CASE_TITLE, "UTF-8");
        foreach ($delimiters as $dlnr => $delimiter) {
            $words = explode($delimiter, $string);
            $newwords = array();
            foreach ($words as $wordnr => $word) {
                if (in_array(mb_strtoupper($word, "UTF-8"), $exceptions)) {
                    // check exceptions list for any words that should be in upper case
                    $word = mb_strtoupper($word, "UTF-8");
                } elseif (in_array(mb_strtolower($word, "UTF-8"), $exceptions)) {
                    // check exceptions list for any words that should be in upper case
                    $word = mb_strtolower($word, "UTF-8");
                } elseif (!in_array($word, $exceptions)) {
                    // convert to uppercase (non-utf8 only)
                    $word = ucfirst($word);
                }
                array_push($newwords, $word);
            }
            $string = join($delimiter, $newwords);
        }//foreach
        return $string;
    }

}


if (!function_exists('retira_acentos')) {

    function retira_acentos($texto) {
        $array1 = array("á", "à", "â", "ã", "ä", "é", "è", "ê", "ë", "í", "ì", "î", "ï", "ó", "ò", "ô", "õ", "ö", "ú", "ù", "û", "ü", "ç"
            , "Á", "À", "Â", "Ã", "Ä", "É", "È", "Ê", "Ë", "Í", "Ì", "Î", "Ï", "Ó", "Ò", "Ô", "Õ", "Ö", "Ú", "Ù", "Û", "Ü", "Ç");
        $array2 = array("a", "a", "a", "a", "a", "e", "e", "e", "e", "i", "i", "i", "i", "o", "o", "o", "o", "o", "u", "u", "u", "u", "c"
            , "A", "A", "A", "A", "A", "E", "E", "E", "E", "I", "I", "I", "I", "O", "O", "O", "O", "O", "U", "U", "U", "U", "C");
        return str_replace($array1, $array2, $texto);
    }

}
if (!function_exists('idade')) {

    function idade($data) {
        // Separa em dia, mês e ano
        list($dia, $mes, $ano) = explode('/', $data);

        // Descobre que dia é hoje e retorna a unix timestamp
        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
        // Descobre a unix timestamp da data de nascimento do fulano
        $nascimento = mktime(0, 0, 0, $mes, $dia, $ano);

        // Depois apenas fazemos o cálculo já citado :)
        $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);

        return $idade;
    }
}

if (!function_exists('tratarNome')) {

    function tratarNome($string) {
        // somente o nome do arquivo
        $nome = preg_replace('/\.[^.]*$/', '', $string);
        // removendo simbolos, acentos etc
        $a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýýþÿŔŕ?';
        $b = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuuyybyRr-';
        $nome1 = strtr($nome, utf8_decode($a), $b);
        $nome2 = str_replace(".", "-", $nome1);
        $nome3 = preg_replace("/[^0-9a-zA-Z\.]+/", '-', $nome2);
        return utf8_decode(strtolower($nome3));
    }

}

if (!function_exists('processaData')) {

    function processaData(&$dados, $index) {
        if (empty($dados[$index])) {
            unset($dados[$index]);
        } else {
            $dados[$index] = implode('-', array_reverse(explode('/', $dados[$index])));
            $dados[$index] = new DateTime($dados[$index]);
        }
        return $dados;
    }

}

if (!function_exists('mes')) {

    function mes($num) {
        switch ($num) {
            case '1':
                return 'Janeiro';
            case '2':
                return 'Fevereiro';
            case '3':
                return 'Março';
            case '4':
                return 'Abril';
            case '5':
                return 'Maio';
            case '6':
                return 'Junho';
            case '7':
                return 'Julho';
            case '8':
                return 'Agosto';
            case '9':
                return 'Setembro';
            case '10':
                return 'Outubro';
            case '11':
                return 'Novembro';
            case '12':
                return 'Dezembro';
            default:
                return 'Mês Inválido';
        }
    }

}
