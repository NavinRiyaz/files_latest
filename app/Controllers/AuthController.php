<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Couchbase\User;
use Psr\Log\LoggerInterface;

class AuthController extends BaseController
{

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        helper(['url', 'form', 'basic']);
    }

    public function index()
    {
        $data = [];

        if ($this->request->getMethod() == 'post'){
            $rules = [
                'username' => 'required|min_length[4]|max_length[4]',
                'password' => 'required|min_length[6]|max_length[8]|validateUser[username, password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Code or Password didn't match",
                ],
            ];

            if (!$this->validate($rules, $errors)){
                return view('auth/login', [
                    'validation' => $this->validator,
                ]);
            } else {
                $user = new UserModel();
                $users = $user->where('username', $this->request->getVar('username'))->first();
                $this->setUserSession($users);

                if($users['role'] === "admin"){
                    return redirect()->to(base_url('admin'));
                }

                if($users['role'] === "staff")  {
                    return redirect()->to(base_url('staffs'));
                }

                if($users['role'] === "files"){
                    return redirect()->to(base_url('files'));
                }

                if($users['role'] === "assistant"){
                    return redirect()->to(base_url('assistant'));
                }
            }
        }
        return view('auth/login');
    }

    private function setUserSession($users)
    {
        $data = [
            'id' => $users['id'],
            'name' => $users['name'],
            'username' => $users['username'],
            'ip' => $users['ip_address'],
            'role' => $users['role'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url("/"))->with('success', 'Successfully Logged Out');
    }

}
