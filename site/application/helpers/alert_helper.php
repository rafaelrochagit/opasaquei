<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function _base_alert($type, $title, $message = false) {
    $CI = & get_instance();
    $alert = json_encode(array('type' => $type, 'head' => $title, 'message' => $message));
    $CI->session->set_flashdata('alert', $alert);
    $CI->session->set_flashdata('message', $message);
}

function process_alert($json) {
    $CI = & get_instance();
    $CI->session->set_flashdata('alert', null);
    $CI->session->set_flashdata('message', null);
    $config = json_decode($json);
    $icon = '';
    switch ($config->{'type'}) {
        case 'success':
            $icon = 'ok';
            $head = 'Success Message';
            break;

        case 'info':
            $icon = 'info-sign';
            $head = 'Info Message';
            break;

        case 'warning':
            $icon = 'record';
            $head = 'Warning Message';
            break;

        case 'danger':
            $icon = 'ban-circle';
            $head = 'Danger Message';
            break;
    }

    $head = (!empty($config->{'head'})) ? $config->{'head'} : $head;
    $msg = (empty($config->{'message'})) ? '' : '<hr class="message-inner-separator"><p>' . $config->{'message'} . '</p>';
    return '<section id="alert"><div><div class="alert alert-' .
            $config->{'type'} . ' alert-custom">'
            . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'
            . '<span class="glyphicon glyphicon-' . $icon . '"></span> '
            . '<strong>' . $head . '</strong>' . $msg . '</div>'
            . '</div>'
            . '</section>';
}

if (!function_exists('success')) {

    function success($title, $message = false) {
        _base_alert('success', $title, $message);
    }

}
if (!function_exists('warning')) {

    function warning($title, $message = false) {
        _base_alert('warning', $title, $message);
    }

}
if (!function_exists('error')) {

    function error($title, $message = false) {
        _base_alert('danger', $title, $message);
    }

}
if (!function_exists('info')) {

    function info($title, $message = false) {
        _base_alert('info', $title, $message);
    }

}
if (!function_exists('errorEmail')) {

    function errorEmail() {
        error('Falha', 'Falha ao enviar o email, tente novamente!');
    }

}
if (!function_exists('successEmail')) {

    function successEmail($textAdicional = '') {
        success('Sucesso', 'Email enviado com sucesso! ' . $textAdicional);
    }

}