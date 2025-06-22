<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard Antar Paket',
            'user' => [
                'name' => 'Hansen',
                'avatar' => 'https://plus.unsplash.com/premium_photo-1671656349322-41de944d259b'
            ],
            'stats' => [
                'total_pengiriman' => 0,
                'pengiriman_hari_ini' => 0
            ]
        ];

        return view('dashboard/index', $data);
    }
}