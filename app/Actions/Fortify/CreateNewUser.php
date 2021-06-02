<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use DB;
class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'level' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();
        DB::insert('insert into dosen (NAMA,NIP,NIDN,KETERANGAN,Status,RS) values (?,?,?,?,?,?)',[
            $input['name'],
            $input['username'],
            $input['username'],
            '',
            '',
            '',
        ]);
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'username' => $input['username'],
            'level' => $input['level'],
            'password' => Hash::make($input['password']),
        ]);
       
    }
}
