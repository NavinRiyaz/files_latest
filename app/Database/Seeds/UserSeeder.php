<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userModel = new UserModel();
        $userModel->insertBatch([
            [
                'name' => "Administrator",
                'username' => "3333",
                'password' => password_hash("12345678", PASSWORD_BCRYPT),
                'email' => "admin@admin.com",
                'phone' => "9876543210",
                'role' => "admin",
                'ip_address' => "127.0.0.1",
                'last_login_time' => "12:00",
            ],
            [
                'name' => "Files Section",
                'username' => "6666",
                'password' => password_hash("12345678", PASSWORD_BCRYPT),
                'email' => "files@admin.com",
                'phone' => "9876543210",
                'role' => "files",
                'ip_address' => "127.0.0.1",
                'last_login_time' => "12:00",
            ],
            [
                'name' => "CPS Section",
                'username' => "9999",
                'password' => password_hash("12345678", PASSWORD_BCRYPT),
                'email' => "cps@admin.com",
                'phone' => "9876543210",
                'role' => "assistant",
                'ip_address' => "127.0.0.1",
                'last_login_time' => "12:00",
            ],
        ]);
    }
}
