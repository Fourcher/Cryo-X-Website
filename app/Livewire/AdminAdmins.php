<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\User;

use Spatie\Permission\Exceptions\RoleAlreadyExists;
use Spatie\Permission\Models\Role;

class AdminAdmins extends Component
{


    public $admins;
    public $new_email;
    public $new_name;
    public $new_password;

    // Get all users with role "administrator"
    public function mount()
    {
        // if role does not exist, create it
        // Role::create(['name' => 'administrator']);
        $this->admins = User::role('administrator')->get();
    }

    public function addAdminByEmail()
    {

        die();

        $new_user = User::create(['email'=> $this->new_email, 'name'=> $this->new_name, 'password'=> bcrypt($this->new_password)]);
        $new_user->assignRole('administrator');




    }



    public function render()
    {
        return view("livewire.admin-admins", [
            "admins" => $this->admins,
            "new_email" => $this->new_email,
            "new_name" => $this->new_name,
            "new_password" => $this->new_password
            ]);
    }


}



