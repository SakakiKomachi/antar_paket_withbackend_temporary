<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        helper(['form', 'url']);
    }

    public function login()
    {
        // Jika sudah login, redirect ke dashboard
        if (session()->get('logged_in')) {
            return redirect()->to('/dashboard');
        }

        $data = [
            'title' => 'Login | Antar Paket'
        ];

        return view('auth/login', $data);
    }

    public function attemptLogin()
    {
        $rules = [
            'username' => 'required',
            'password' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $remember = $this->request->getPost('remember');

        $user = $this->userModel->checkCredentials($username, $password);

        if ($user) {
            // Set session data
            $sessionData = [
                'user_id' => $user['id'],
                'uid' => $user['uid'],
                'username' => $user['username'],
                'email' => $user['email'],
                'logged_in' => true
            ];

            session()->set($sessionData);

            // Remember me functionality
            if ($remember) {
                $token = bin2hex(random_bytes(16));
                $this->userModel->update($user['id'], ['remember_token' => $token]);
                
                // Set cookie selama 30 hari
                helper('cookie');
                set_cookie('remember_token', $token, 30 * 86400);
            }

            return redirect()->to('/dashboard')->with('message', 'Selamat datang kembali!');
        }

        return redirect()->back()->withInput()->with('error', 'Username atau password salah');
    }

    public function logout()
    {
        // Hapus remember token dari database jika ada
        if (session()->has('user_id')) {
            $this->userModel->update(session()->get('user_id'), ['remember_token' => null]);
        }

        // Hapus session dan cookie
        session()->destroy();
        helper('cookie');
        delete_cookie('remember_token');

        return redirect()->to('/login')->with('message', 'Anda telah logout');
    }
}