<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class CustomerController extends BaseController
{
    protected $customerModel;

    public function __construct()
    {
        $this->customerModel = new CustomerModel();
    }

    // Menampilkan daftar customer
    public function index()
    {
        $data = [
            'title' => 'ID Customer',
            'customers' => $this->customerModel->findAll()
        ];
        
        return view('customer/index', $data);
    }

    // Menampilkan form tambah customer
    public function create()
    {
        $data = [
            'title' => 'Form ID Customer',
            'customer_id' => $this->customerModel->generateCustomerId()
        ];
        
        return view('customer/form', $data);
    }

    // Menyimpan data customer baru
    public function save($id = null)
    {
        $rules = [
            'district' => 'required',
            'full_name' => 'required',
            'city' => 'required',
            'phone_number' => 'required',
            'province' => 'required',
            'email' => 'required|valid_email',
            'postal_code' => 'required',
            'full_address' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'customer_id' => $this->request->getPost('customer_id'),
            'district' => $this->request->getPost('district'),
            'full_name' => $this->request->getPost('full_name'),
            'city' => $this->request->getPost('city'),
            'phone_number' => $this->request->getPost('phone_number'),
            'province' => $this->request->getPost('province'),
            'email' => $this->request->getPost('email'),
            'postal_code' => $this->request->getPost('postal_code'),
            'full_address' => $this->request->getPost('full_address')
        ];

        if ($id) {
        // Update existing customer
        $this->customerModel->update($id, $data);
        $message = 'Customer berhasil diperbarui';
    } else {
        // Create new customer
        $this->customerModel->save($data);
        $message = 'Customer berhasil ditambahkan';
    }

    return redirect()->to('/customer')->with('message', $message);
    }

    // Menghapus customer
    public function delete($id)
    {
        $this->customerModel->delete($id);
        return redirect()->to('/customer')->with('message', 'Customer berhasil dihapus');
    }

    public function edit($id)
{
    $customer = $this->customerModel->find($id);
    
    if (!$customer) {
        return redirect()->to('/customer')->with('error', 'Customer tidak ditemukan');
    }

    $data = [
        'title' => 'Edit ID Customer',
        'customer' => $customer
    ];
    
    return view('customer/form', $data);
}
}