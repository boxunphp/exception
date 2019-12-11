<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 2019/12/11
 * Time: 11:07 AM
 */

namespace All\Exception;

use All\Utils\HttpStatus;

class MethodNotAllowedException extends Exception
{
    protected $code = HttpStatus::METHOD_NOT_ALLOWED;
    protected $message = 'Method Not Allowed';
}