<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;

use App\Models\IStaff;
use \App\Models\Staff;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Mail\ResetEmail;
use Illuminate\Support\Facades\Mail;

/**
 * Description of StaffD
 *
 * @author Chris
 */
class StaffD implements IStaff {

    protected $res;

    public function __contruct(IStaff $respon) {
        $this->res = $respon;
    }

    public function create(array $data) {
        $staff = new Staff($data);
        $staff->save();
    }

    public function delete($data) {
        
    }

    public function login(array $data) {
        $id = $data['staffID'];
        $password = $data['password'];

        $staff = \App\Models\Staff::where('staffID', $id)->first();

        if ($staff && $staff->password === $password) {
            $status = $staff->status;
            return $status;
        } else {
            return false;
        }
    }

    public function update($staffID, array $data) {
        DB::table('Staff')
                ->where('staffID', $staffID)
                ->update($data);
    }

}
