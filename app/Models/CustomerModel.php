<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'customer_id', 
        'district',
        'full_name',
        'city',
        'phone_number',
        'province',
        'email',
        'postal_code',
        'full_address'
    ];
    
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function generateCustomerId()
    {
        $last = $this->orderBy('id', 'DESC')->first();
        $lastId = $last ? (int) substr($last['customer_id'], 3) : 0;
        $newId = str_pad($lastId + 1, 8, '0', STR_PAD_LEFT);
        return 'CST' . $newId;
    }
}