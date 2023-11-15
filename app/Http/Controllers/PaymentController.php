<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpesa;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function payment()
    {
        return view('payment');
    }

    /**
     * Display a listing of the resource.
     */
    public function confirmation(Request $request)
    {
        // dd($request->amount);
        $amount = number_format($request->amount, 2);
        return view('confirmation')->with('amount', $amount);
    }

    /**
     * Display a listing of the resource.
     */
    public function stk(Request $request)
    {
        $mpesa= new \Safaricom\Mpesa\Mpesa();
        $amount = strval($request->amount);
        // dd(gettype($request->amount));
        // dd($request->amount);

        $BusinessShortCode = '174379';
        $LipaNaMpesaPasskey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $TransactionType = 'CustomerPayBillOnline';
        $Amount = $amount;
        $PartyA = '254795909989';
        $PartyB = '174379';
        $PhoneNumber = '254795909989';
        $CallBackURL = 'https://85be-197-237-209-31.ngrok-free.app';
        $AccountReference = 'AccountReference';
        $TransactionDesc = 'TransactionDesc';
        $Remarks = 'Remarks';

        $stkPushSimulation=$mpesa->STKPushSimulation(
            $BusinessShortCode,
            $LipaNaMpesaPasskey,
            $TransactionType,
            $Amount,
            $PartyA,
            $PartyB,
            $PhoneNumber,
            $CallBackURL,
            $AccountReference,
            $TransactionDesc,
            $Remarks
        );
        // dd($stkPushSimulation);

        // $callbackData=$mpesa->getDataFromCallback();
        // dd($callbackData);
        
        return view('process');
    }

    /**
     * Display a listing of the resource.
     */
    public function success()
    {
        $mpesa= new \Safaricom\Mpesa\Mpesa();

        $callbackData=$mpesa->getDataFromCallback();
        // dd($callbackData);
        return view('success');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
