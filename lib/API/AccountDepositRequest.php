<?php
namespace API;

use Models\Core\Client;
use Models\Response\Response;



require_once '../Models/Core/Client.php';
require_once '../Models/Response/InvoiceResponse.php';

/**
 * Class AccountDepositRequest
 *
 * @package Safe2Pay\Api
 */
class AccountDepositRequest{

    /**
     * Detail a deposit
     *
     * @param [int] $Id
     * @return Response
     */
    public static function Detail($Id){

        $request = Client:: HttpClient('GET',"v2/Transfer/Get?Id={$Id}", null,false);
        $response = json_decode($request , true);
        return  $response;
    }

    /**
     * List deposit Register
     *
     * @param [date] $CreatedDateInitial
     * @param [date] $CreatedDateEnd
     * @param [int] $PageNumber
     * @param [int] $RowsPerPage
     * @return Response
     */
    public static function List($CreatedDateInitial,$CreatedDateEnd,$PageNumber,$RowsPerPage){

        $request = Client:: HttpClient('GET',"v2/Transfer/List?CreatedDateInitial={$CreatedDateInitial}&CreatedDateEnd={$CreatedDateEnd}&PageNumber={$PageNumber}&RowsPerPage={$RowsPerPage}", null,false);
        $response = json_decode($request , true);
        return $response;
    }

     /**
     * Get the bank account details 
     * @return Response
     */
    public static function GetBankAccount(){

        $request = Client:: HttpClient('GET','v2/MerchantBankData/Get', null,false);
        $response = json_decode($request , true);
        return  $response;
    }

}
