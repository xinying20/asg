<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;

/**
 *
 * @author Chris
 */
interface IStaff {

    public function create(array $data);

    public function login(array $data);

    public function delete($data);

    public function update($staffID, array $data);
}
