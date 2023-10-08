<?php

namespace Anil\Khalti;


use Anil\Khalti\Contract\KhaltiInterface;
use Illuminate\Support\Facades\Http;

class Khalti implements KhaltiInterface
{

    public function initiateTransaction(array $data): array
    {

        $response = Http::withHeaders([
            'Authorization' => config('khalti.secret_key')
        ])->post(config('khalti.initiate_url'), [
            'return_url' => config('khalti.return_url'),
            'website_url' => config('khalti.website_url'),
            'amount' => $data['amount'],
            'purchase_order_id' => $data['purchase_order_id'],
            'purchase_order_name' => $data['purchase_order_name'],
            'customer_info' => $data['customer_info'],
        ]);

        return json_decode($response->body(), true);


    }

    public function verifyTransaction(string $token, int|float $amount): array
    {

        $response = Http::withHeaders([
            'Authorization' => config('khalti.secret_key')
        ])->post(config('khalti.verify_url'), [
            'token' => request()->token,
            'amount' => request()->amount,
        ]);

        return json_decode($response->body(), true);

    }


    public function merchantTransaction(): array
    {

        $response = Http::withHeaders([
            'Authorization' => config('khalti.secret_key')
        ])
            ->get(config('khalti.merchant_transaction_url'));

        return json_decode($response->body(), true);

    }

    public function transactionDetail(string $idx): array
    {

        $response = Http::withHeaders([
            'Authorization' => config('khalti.secret_key')
        ])
            ->get(config('khalti.merchant_transaction_url') . $idx);

        return json_decode($response->body(), true);

    }

    public function paymentStatus(string $token, int|float $amount): array
    {

        $response = Http::withHeaders([
            'Authorization' => config('khalti.secret_key')
        ])
            ->post(config('khalti.payment_status_url'), [
                'token' => $token,
                'amount' => $amount,
            ]);


    }

}
