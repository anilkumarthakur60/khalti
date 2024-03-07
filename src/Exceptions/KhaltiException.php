<?php

namespace Anil\Khalti\Exceptions;

use Exception;
use Symfony\Component\HttpKernel\Exception\HttpException;

class KhaltiException extends HttpException
{
    /**
     * @param                $message
     * @param Exception|null $exception
     * @param array          $headers
     * @param int            $code
     */
    public function __construct($message = null, Exception $exception = null, array $headers = [], $code = 0)
    {
        parent::__construct(500, $message, $exception, $headers, $code);
    }
}
