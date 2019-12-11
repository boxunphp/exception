<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 2019/12/11
 * Time: 11:06 AM
 */

namespace All\Exception;

use All\Utils\HttpStatus;

class ForbiddenException extends Exception
{
    protected $code = HttpStatus::FORBIDDEN;
    protected $message = 'Forbidden';
}