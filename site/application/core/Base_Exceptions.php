<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Class dealing with errors as exceptions
 */
class Base_Exceptions extends CI_Exceptions
{

    /**
     * Force exception throwing on erros
     */
    public function show_error($heading, $message, $template = 'error_general', $status_code = 500)
    {

        $message = implode(" / ", (!is_array($message)) ? array($message) : $message);

        throw new CiError($message);
    }

}

/**
 * Captured error from Code Igniter
 */
class CiError extends Exception
{

}