<?php

namespace API;

use Models\Core\Client;
use Models\Response\Response;


require_once '../Models/Core/Client.php';
require_once '../Models/Response/InvoiceResponse.php';

/**
 * Class PaymentRequest
 *
 * @package  Api
 */
class PaymentRequest{

    /**
     * Get Payment Methods
     *
     * @param [Payment] $payment
     * @return Array
     */
    public static function GetPaymentMethods()
    {
        
        $request = Client::HttpClient('GET', 'v2/MerchantPaymentMethod/List', null, false);

        $response = new Response();

        foreach (json_decode($request, true) as $key => $value) $response->{$key} = $value;

        return $response;
    }

    /**
     * BankSlip Sale
     *
     * @param [Payment] $payment
     * @return Response
     */
    public static function BankSlip($payment)
    {

        $request = Client::HttpClient('POST', 'v2/Payment', json_encode($payment), true);

        $response = new Response();

        foreach (json_decode($request, true) as $key => $value) $response->{$key} = $value;

        return $response;
    }

    /**
     * CreditCard Sale
     *
     * @param [Payment] $payment
     * @return Response
     */
    public static function CreditCard($payment)
    {

        $request = Client::HttpClient('POST', 'v2/Payment', json_encode($payment), true);

        $response = new Response();

        foreach (json_decode($request, true) as $key => $value) $response->{$key} = $value;

        return $response;
    }

    /**
     * CryptoCurrency Sale
     *
     * @param [Payment] $payment
     * @return Response
     */
    public static function CryptoCurrency($payment)
    {

        $request = Client::HttpClient('POST', 'v2/Payment', json_encode($payment), true);

        $response = new Response();

        foreach (json_decode($request, true) as $key => $value) $response->{$key} = $value;

        return $response;
    }

    /**
     * Debit Card Sale
     *
     * @param [Payment] $payment
     * @return Response
     */
    public static function DebitCard($payment)
    {

        $request = Client::HttpClient('POST', 'v2/Payment', json_encode($payment), true);

        $response = new Response();

        foreach (json_decode($request, true) as $key => $value) $response->{$key} = $value;

        return $response;
    }

    /**
     * Carnet Sale
     *
     * @param [Payment] $payment
     * @return Response
     */
    public static function Carnet($payment)
    {

        $request = Client::HttpClient('POST', 'v2/Carnet', json_encode($payment), true);

        $response = new Response();

        foreach (json_decode($request, true) as $key => $value) $response->{$key} = $value;

        return $response;
    }

    /**
     * Carnet Sale
     *
     * @param [Payment] $payment
     * @return Response
     */
    public static function CarnetLot($payment)
    {

        $request = Client::HttpClient('POST', 'v2/Carnet', json_encode($payment), true);

        $response = new Response();

        foreach (json_decode($request, true) as $key => $value) $response->{$key} = $value;

        return $response;
    }

    /**
     * DebitAccount Sale
     *
     * @param [Payment] $payment
     * @return Response
     */
    public static function DebitAccount($payment)
    {

        $request = Client::HttpClient('POST', 'v2/payment', json_encode($payment), true);

        $response = new Response();

        foreach (json_decode($request, true) as $key => $value) $response->{$key} = $value;

        return $response;
    }

     /**
     * Refund a payment
     *
     * @param [int] $Id
     * @return Response
     */
    public static function Refund($Id)
    {

        $request = Client::HttpClient('DELETE', "v2/CreditCard/Cancel/{$Id}", null, false);

        $response = new Response();

        foreach (json_decode($request, true) as $key => $value) $response->{$key} = $value;

        return $response;
    }

   
}

