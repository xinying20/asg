<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories;

use \App
\Repositories\ICustRes;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;

/**
 * Description of CustRepos
 *
 * @author Chris
 */
class CustRepos implements ICustRes {

    //put your code here
    public function addCustomer(array $data) {
        // Create a new customer instance and populate it with data
        $customer = new Customer;
        $customer->cusName = $data['cusName'];
        $customer->cusIC = $data['cusIC'];
        $customer->phone = $data['phone'];
        $customer->email = $data['email'];
        // Set other customer properties as needed
        // Save the customer
        $customer->save($data);

        return view('addCust');
    }
   
}
