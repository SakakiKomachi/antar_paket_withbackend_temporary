<?php namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password', 'name', 'phone', 'address', 'profile_picture', 'status'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}