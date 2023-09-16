<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressesController extends Controller
{

    public function index(){
        return Address::all();
    }

    public function findOne(Request $r){
        $address =  Address::find($r->id);
        $address['user'] = $address->user;
        return $address;
    }

    public function create(Request $r){
        $rawData = $r->only(['address','user_id']);
        $address = Address::create($rawData);
        return $address;
    }
}
