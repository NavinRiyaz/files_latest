<?php

namespace App\Validation;

use App\Models\UserModel;

class LoginCheckValidation
{
     public function validateUser(string $str, string $fields, array $data)
     {
        $model = new UserModel();
        $user = $model->where('username', $data['username'])->first();
        if (!$user){
            return false;
        }
        return password_verify($data['password'], $user['password']);
     }
}
