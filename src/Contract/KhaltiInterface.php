<?php

namespace Anil\Khalti\Contract;

interface KhaltiInterface
{

    public function initiateTransaction(array $data):array;

    public function verifyTransaction(string $token, int|float $amount):array;

    public function merchantTransaction():array;

    public function transactionDetail(string $idx):array;

    public function paymentStatus(string $token, int|float $amount):array;
}
