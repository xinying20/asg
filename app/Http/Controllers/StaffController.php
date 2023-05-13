<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaffRopos;
use App\Models\Staff;
use Illuminate\Support\Facades\Mail;
use App\Mail\SampleMail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Mail\ResetEmail;
use DOMDocument;
use XSLTProcessor;

class StaffController extends Controller {

    public function index() {
//
    }

    public function create() {
        return view('StaffLogin');
    }

    public function login(Request $req) {
        $staffID = $req->get('staffID');
        $password = $req->get('password');
        $data = [
            'staffID' => $staffID,
            'password' => $password
        ];

        $req = new \App\Models\StaffRepos();
        $repository = new \App\Models\StaffD($req);
        try {
            $result = $repository->login($data);
        } catch (Exception $ex) {
            return redirect('/Staff/create')->with('warning', 'Username or password is not vaild');
        }

// compare the input data with the database record
        if ($result == 'Admin') {
            return redirect()->route('staffList');
        }
        if ($result == 'Staff') {
            return redirect()->route('searchCust');
        } else {
            return redirect('/Staff/create')->withErrors(['warning' => 'Username or password is not vaid'])
                            ->withInput();
        }
    }

    public function addStaff() {
        return view('addStaff');
    }

    public function renderAdmins() {

        $xmlFile = resource_path('views/xml/Admin.xml');
        $xslFile = resource_path('views/xml/renderAdmin.xsl');

        $xml = new DOMDocument();
        $xml->load($xmlFile);

        $xsl = new DOMDocument();
        $xsl->load($xslFile);

        $proc = new XSLTProcessor();
        $proc->importStylesheet($xsl);

        echo $proc->transformToXml($xml);
    }

    public function store(Request $req) {
        $staffName = $req->get('name');
        $staffIC = $req->get('ic');
        $phone = $req->get('phone');
        $address = $req->get('address');
        $status = $req->get('status');
        $email = $req->get('email');

        $user = \App\Models\Staff::where('email', $email)->first();
        $chkIC = \App\Models\Staff::where('staffIC', $staffIC)->first();
        $chkPhone = \App\Models\Staff::where('phone', $phone)->first();

        if ($user || $chkIC || $chkPhone) {
            return redirect('/Staff/create')
                            ->withErrors(['confirm' => 'Account exist !'])
                            ->withInput();
        } else {
// register the user and redirect to success page  
            $req = new \App\Models\StaffRepos();
            $repository = new \App\Models\StaffD($req);
            $data = ([
                'staffName' => $staffName,
                'staffIC' => $staffIC,
                'phone' => $phone,
                'address' => $address,
                'status' => $status,
                'email' => $email,
                'token' => 'active',
                'password' => $staffIC
            ]);

// Create a new staff member
            $staff = $repository->create($data);
            Mail::to($email)->send(new SampleMail($data));
            return redirect('/Staff/create')->with('confirm', 'Account registered successful');
        }
    }

    public function edit($id) {

        $staff = \App\Models\Staff::where('staffID', $id)->first();
        return view('editStaff', compact('staff', 'id'));
    }

    public function storeEdit(Request $req, $staffID) {

        $staff = \App\Models\Staff::where('staffID', $staffID)->first();

        $staffName = $req->get('name');
        $staffIC = $req->get('ic');
        $phone = $req->get('phone');
        $address = $req->get('address');
        $status = $req->get('status');
        $token = $req->get('token');
        $email = $req->get('email');

// register the user and redirect to success page  
        $req = new \App\Models\StaffRepos();
        $repository = new \App\Models\StaffD($req);
// update a staff member
        $data = ([
            'staffName' => $staffName,
            'staffIC' => $staffIC,
            'phone' => $phone,
            'address' => $address,
            'status' => $status,
            'token' => $token,
            'email' => $email,
        ]);

        $staff = $repository->update($staffID, $data);
    }

    public function reset(Request $req) {
        $email = $req->get('email');

        $resetPasswordLink = route('resetPassword.get', $email);
        $message = "Click the following link to reset your password: <a href='$resetPasswordLink '/>Reset Password";
        $headers = [
            'Content-Type' => 'text/html',
            'charset' => 'utf-8',
            'X-Mailer' => 'Laravel/' . app()->version(),
        ];

        Mail::raw($message, function ($message) use ($email) {
            $message->to($email)
                    ->subject('Password reset request')
                    ->setBody($message, 'text/html');
        });

        return redirect('ForgotPass')->with('confirm', 'We have e-mailed your password reset link');
    }

    public function forgotPass() {
        return view('ForgotPass');
    }

    public function showResetPasswordForm($email) {
        return view('ResetPass', ['email' => $email]);
    }

    public function show() {
        return view('ForgotPass');
    }

    public function update(Request $req) {
        $email = $req->get('email');
        $pass = $req->get('password');
        $cpass = $req->get('cpassword');

        $updatePassword = \App\Models\Staff::where('email', $email)->first();
        if ($updatePassword) {
            DB::table('Staff')->update([
                'email' => $req->email,
                'password' => $pass
            ]);
            return redirect('/Staff/create')->with('confirm', 'Password reset successful');
        }
        return redirect('resetPassword.get')->with('confirm', 'Invalid Password');
    }

    public function staffList() {
        $staff = Staff::all();
        return view('DisplayStaff', compact('staff'));
    }

}
