<?php


use App\Models\IStaff;
namespace App\Models;

/**
 * Description of StaffRepos
 *
 * @author Chris
 */
class StaffRepos implements IStaff{

    public function create(array $data) {
        if (empty('name')) {
            throw new InvalidArgumentException("Name is required");
        }
    }

    public function delete($data) {
        
    }

    public function login(array $data) {
        $validator = Validator::make($data, [
                    'staffID' => 'required|staffID',
                    'password' => 'required',
        ]);

        if ($validator->fails()) {
            return false;
        }
        $req = new \App\Models\StaffRopos();
        $repository = new \App\Models\StaffD($req);
        // Call the core login logic from the wrapped implementation

        return $repository->login($credentials);
    }

    public function update($staffID, array $data) {
        if (empty(data['name'])) {
            throw new InvalidArgumentException("Name is required");
        }
    }

}
