<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(){
        return Invoice::all();
    }

    public function create(Request $r){
        $rawData = $r->only(['description', 'price','address_id','user_id']);
        $invoice = Invoice::create($rawData);
        return $invoice;
    }

    public function findOne(Request $r){
        $invoice = Invoice::find($r->id);
        $invoice['user'] = $invoice->user;
        $invoice['address'] = $invoice->address;
        return $invoice;
    }

}
