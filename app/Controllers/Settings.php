<?php namespace App\Controllers;

use App\Models\ProfileModel;
use App\Models\UserModel;

class Settings extends BaseController
{
    protected $profileModel;
    protected $userModel;

    public function __construct()
    {
        $this->profileModel = new ProfileModel();
        $this->userModel = new UserModel(); // Tambahkan ini
        helper(['form', 'url']);
    }

    public function index()
    {
        $data = [
            'title' => 'Pengaturan Profil',
            'user' => $this->profileModel->find(session()->get('id'))
        ];
        
        return view('settings/profile', $data);
    }

    public function updateProfile()
    {
        $userId = session()->get('id');
        $rules = [
            'name' => 'required|min_length[3]',
            'phone' => 'required|numeric',
            'address' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'phone' => $this->request->getPost('phone'),
            'address' => $this->request->getPost('address')
        ];

        $this->profileModel->update($userId, $data);

        return redirect()->to('/settings')->with('message', 'Profil berhasil diperbarui');
    }

    // Tambahkan method-method baru untuk password
    public function password()
    {
        $data = [
            'title' => 'Ubah Password'
        ];
        return view('settings/password', $data);
    }

    public function updatePassword()
    {
        // Validasi input
        $rules = [
            'current_password' => 'required',
            'new_password' => 'required|min_length[8]',
            'confirm_password' => 'required|matches[new_password]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userId = session()->get('id');
        $currentPassword = $this->request->getPost('current_password');
        $newPassword = $this->request->getPost('new_password');

        // Verifikasi password saat ini
        $user = $this->userModel->find($userId);
        if (!password_verify($currentPassword, $user['password'])) {
            return redirect()->back()->with('error', 'Password saat ini salah');
        }

        // Update password baru
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        if ($this->userModel->update($userId, ['password' => $hashedPassword])) {
            return redirect()->to('/settings/password')->with('message', 'Password berhasil diubah');
        } else {
            return redirect()->back()->with('error', 'Gagal mengubah password');
        }
    }

    public function terms()
    {
        return view('settings/terms');
    }

    public function privacy()
    {
        return view('settings/privacy');
    }

    public function customerService()
    {
        return view('settings/customer-service');
    }
}