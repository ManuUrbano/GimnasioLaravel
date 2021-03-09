<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Usuario Manu
        $user = new User();
        $user->usuario = "Manu";
        $user->nombre = "Manuel";
        $user->email = "jmanuurbano@gmail.com";
        $user->apellidos = "Urbano Moreno";
        $user->dni = "49118359L";
        $user->password = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi"; // password
        $user->rol_id = 1;

        $user->save();


        //Nuevos usuarios...
    }
}
