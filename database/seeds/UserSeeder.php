<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::create(['name' => 'manager']);
        // Role::create(['name' => 'unit']);
        
        // $user = new User();
        // $user->username = 'C0050002339';
        // $user->password = bcrypt('C0050002339');
        // $user->unit_name = 'Departemen Pengantongan & Prod';
        // $user->save();
        // $user->assignRole('unit');

        // $user = new User();
        // $user->username = 'C0050002339_Mgr';
        // $user->password = bcrypt('C0050002339_Mgr');
        // $user->unit_name = 'Departemen Pengantongan & Prod';
        // $user->save();
        // $user->assignRole('manager');

        // $user = new User();
        // $user->username = 'C0050000110';
        // $user->password = bcrypt('C0050000110');
        // $user->unit_name = 'Departemen Keamanan';
        // $user->save();
        // $user->assignRole('unit');

        // $user = new User();
        // $user->username = 'C0050000110_Mgr';
        // $user->password = bcrypt('C0050000110_Mgr');
        // $user->unit_name = 'Departemen Keamanan';
        // $user->save();
        // $user->assignRole('manager');

        $user = new User();
        $user->username = 'C0050000129';
        $user->password = bcrypt('C0050000129');
        $user->unit_name = 'Departemen Riset';
        $user->save();
        $user->assignRole('unit');

        $user = new User();
        $user->username = 'C0050000129_Mgr';
        $user->password = bcrypt('C0050000129_Mgr');
        $user->unit_name = 'Departemen Riset';
        $user->save();
        $user->assignRole('manager');

    }
}
