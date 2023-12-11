<?php

namespace Anil\Khalti\Facades;
use Anil\Khalti\Contract\InitiateTransactionInterface;
use Anil\Khalti\Contract\KhaltiInterface;
use Illuminate\Support\Facades\Facade;


/**
 * @method static KhaltiInterface initiateTransaction(InitiateTransactionInterface $data)
 * @method static KhaltiInterface verifyTransaction(string $token, int|float $amount)
 * @method static KhaltiInterface merchantTransaction()
 * @method static KhaltiInterface transactionDetail(string $idx)
 * @method static KhaltiInterface paymentStatus(string $token, int|float $amount)
 */
class Khalti extends Facade
{

    protected static function getFacadeAccessor():string
    {
        return 'khalti';
    }

}
