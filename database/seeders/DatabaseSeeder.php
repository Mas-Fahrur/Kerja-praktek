<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Menu;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $data = [
            [
                'menu_id' => 'MK01',
                'nama_menu' => 'Sop Sayur',
                'harga' => 10000,
                'gambar' => 'sop.jpg'
            ],
            [
                'menu_id' => 'MK02',
                'nama_menu' => 'Chatauge',
                'harga' => 7000,
                'gambar' => 'chatauge.jpg'
            ],
            [
                'menu_id' => 'MK03',
                'nama_menu' => 'Bihun Goreng',
                'harga' => 8000,
                'gambar' => 'bihun.jpg'
            ],
            [
                'menu_id' => 'MK04',
                'nama_menu' => 'Oseng Pare',
                'harga' => 7000,
                'gambar' => 'osengpare.jpg'
            ],
            [
                'menu_id' => 'MK05',
                'nama_menu' => 'Oseng daun singkong',
                'harga' => 7000,
                'gambar' => 'osengdaunsingkong.jpg'
            ],
            [
                'menu_id' => 'MK06',
                'nama_menu' => 'Terong Balado',
                'harga' => 7000,
                'gambar' => 'terong.jpg'
            ],
            [
                'menu_id' => 'MK07',
                'nama_menu' => 'Mie Goreng',
                'harga' => 6000,
                'gambar' => 'miegoreng.jpg'
            ],
            [
                'menu_id' => 'MK08',
                'nama_menu' => 'Nasi Putih',
                'harga' => 4000,
                'gambar' => 'nasi.jpg'
            ],
            [
                'menu_id' => 'MN01',
                'nama_menu' => 'Es Teh',
                'harga' => 3000,
                'gambar' => 'esteh.jpg'
            ],
            [
                'menu_id' => 'MN02',
                'nama_menu' => 'Es Jeruk',
                'harga' => 4000,
                'gambar' => 'esjeruk.jpg'
            ],
            [
                'menu_id' => 'MN03',
                'nama_menu' => 'Es Kampul',
                'harga' => 4000,
                'gambar' => 'eskampul.jpg'
            ],
            [
                'menu_id' => 'ML1',
                'nama_menu' => 'Tahu goreng/biji',
                'harga' => 1000,
                'gambar' => 'tahugoreng.jpg'
            ],
            [
                'menu_id' => 'ML02',
                'nama_menu' => 'Tempe goreng/biji',
                'harga' => 1000,
                'gambar' => 'tempe goreng.jpg'
            ],
            [
                'menu_id' => 'ML03',
                'nama_menu' => 'Telor',
                'harga' => 5000,
                'gambar' => 'telor.jpg'
            ],
            [
                'menu_id' => 'ML04',
                'nama_menu' => 'Ayam Goreng',
                'harga' => 5000,
                'gambar' => 'ayamgoreng.jpg'
            ],
            [
                'menu_id' => 'ML05',
                'nama_menu' => 'Krupuk',
                'harga' => 2000,
                'gambar' => 'krupuk.jpg'
            ],

        ];

        foreach ($data as $item) {
            Menu::create($item);
        }
    }
}
