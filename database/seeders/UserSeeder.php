<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Untuk Mengambil Data Dari JSON 
        $seeds = file_get_contents('database/seeders/json/User.json');
        $seeds = json_decode($seeds);

        foreach ($seeds as $seed) {
            DB::beginTransaction();
            try {
                //code...
                $user = new User;
                $user->name = $seed->name;
                $user->email = $seed->email;
                $user->password = bcrypt($seed->password);
                $user->slug = Str::random(16);
                $user->address = $seed->address;
                $user->phone = $seed->phone;
                $user->username = $seed->username;
                $user->role = $seed->role;
                $user->status = $seed->status;
                $user->save();
                DB::commit();
            } catch (\Exception $ex) {
                //throw $th;
                echo $ex->getMessage();
                DB::rollBack();
            }
        }
    }
}
