<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 2019/12/11
 * Time: 11:03 AM
 */

namespace All\Exception;

use All\Utils\HttpStatus;

class BadRequestException extends Exception
{
    protected $code = HttpStatus::BAD_REQUEST;
    protected $message = 'Bad Request';
}