<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;

class InitialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
      DB::table('users')->insert([
        'name'=> 'Administrador',
        'email' => 'administrador@venoudev.com',
        'password' => Hash::make('Hol4mundo.8156'),
      ]);


      $roles = [
         'administrador',
         'propietario',
         'vendedor',
         'cliente',
      ];

      foreach ($roles as $rol) {
           Role::create(['guard_name'=>'api','name' => $rol]);
      }
      $user=User::where('email','administrador@venoudev.com')->first();
      $user->assignRole('administrador');

    }
}
