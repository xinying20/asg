<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use \App\Models\Customer;
use App\Repositories\ICustRes;
use Illuminate\Support\Facades\DB;

class CustController extends Controller {

    public function __construct(ICustRes $ICust) {
        $this->ICust = $ICust;
    }

    public function index() {
        //
    }

    public function create() {
        return view('searchCust');
    }
    
    public function addCust() {
        return view('addCust');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'cusName' => 'required|max:255',
            'cusIC' => 'required|max:14',
            'phone' => 'required|max:18',
            'email' => 'required|email|unique:customers,email',
        ]);

        $custName = $request->get('cusName');
        $custIC = $request->get('cusIC');
        $phone = $request->get('phone');
        $email = $request->get('email');

        $data = [
            'cusName' => $custName,
            'cusIC' => $custIC,
            'phone' => $phone,
            'email' => $email
        ];

        $chkCust = \App\Models\Customer::where('cusIC', $custIC)->first();

        if ($chkCust) {
            return redirect('addCust')
                            ->withErrors(['confirm' => 'Customer details is exist !'])
                            ->withInput();
        } else {
            $cust = $this->ICust->addCustomer($data);
            return redirect('addCust')
                            ->withErrors(['confirm' => 'Customer is added !'])
                            ->withInput();
        }
    }

    public function show() {
        $users = Customer::all();
        return view('searchCust', compact('users'));
    }

    public function edit($id) {
        $cust = \App\Models\Customer::where('cusID', $id)->first();
        return view('editCust', compact('cust', 'id'));
    }

    public function storeEdit(Request $req, $custID) {

        $cust = \App\Models\Customer::where('cusID', $custID)->first();

        $cusName = $req->get('name');
        $cusIC = $req->get('ic');
        $phone = $req->get('phone');
        $email = $req->get('email');


        DB::table('customers')->update([
            'cusID'=> $custID,
            'cusName'=> $cusName,
            'cusIC'=> $cusIC,
            'phone'=>$phone,
            'email'=> $email
        ]);
    }

    public function update(Request $request, $id) {
        //
    }

    public function destroy($id) {
        //
    }

}
