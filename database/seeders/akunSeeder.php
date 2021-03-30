<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class akunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $old_users = DB::table('user')->get();
        foreach ($old_users as $u){
            DB::insert('insert into users (name,email,password) values (?,?,?)',[
                $u->name,
                $u->nim_profesi_dokter . '@gmail.com',
                Hash::make($u->nim_profesi_dokter)
                
            ]);
        }
        /*foreach ($old_users as $u) {
        DB::table('users')->insert([
         'name'     => $u->nama,
         'email'    => $u->nim_profesi_dokter . '@gmail.com',
         'password' => Hash::make($u->nim_profesi_dokter)
         //'old_id'   -> $user->id
         // ...
     ]);*/
    }
    
}
