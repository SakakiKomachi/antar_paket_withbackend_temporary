<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['uid', 'username', 'email', 'password', 'remember_token'];
    protected $useTimestamps = true;

    // Generate UID baru
    public function generateUid()
    {
        $lastUser = $this->orderBy('id', 'DESC')->first();
        
        if ($lastUser) {
            $lastNumber = (int) substr($lastUser['uid'], 3);
            $newNumber = $lastNumber + 1;
            return 'CST' . str_pad($newNumber, 4, '0', STR_PAD_LEFT);
        }
        
        return 'CST0001';
    }

    // Cek kredensial login
    public function checkCredentials($username, $password)
    {
        $user = $this->where('username', $username)
                    ->orWhere('email', $username)
                    ->first();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return false;
    }

    // Daftar user baru
    public function registerUser($data)
    {
        $data['uid'] = $this->generateUid();
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        
        return $this->insert($data);
    }
    public function updatePassword($userId, $newPassword)
    {
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        return $this->update($userId, ['password' => $hashedPassword]);
    }
}