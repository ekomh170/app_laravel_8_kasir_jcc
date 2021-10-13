<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use App\Models\Mbarang;
use App\Models\Tpembelian;
use App\Models\Tpembelianbarang;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //Barang
        Mbarang::create([
            'nama_barang' => 'Sabun batang',
            'harga_satuan' => '3000',
        ]);

        Mbarang::create([
            'nama_barang' => 'Mi Instan',
            'harga_satuan' => '2000',
        ]);

        Mbarang::create([
            'nama_barang' => 'Pensil',
            'harga_satuan' => '1000',
        ]);

        Mbarang::create([
            'nama_barang' => 'Kopi sachet',
            'harga_satuan' => '1500',
        ]);

        Mbarang::create([
            'nama_barang' => 'Air minum galon',
            'harga_satuan' => '20000',
        ]);
        //Barang

        //Users
        $password = 'Amano2829';
        User::create([
            'name' => 'Eko Muchamad Haryono',
            'username' => 'Eko',
            'email' => 'ekomh13@gmail.com',
            'password' => Hash::make($password),
            'role' => 'Admin',
        ]);

        User::create([
            'name' => 'Amalia Renata',
            'username' => 'Amal',
            'email' => 'amalia@gmail.com',
            'password' => Hash::make($password),
            'role' => 'Kasir',
        ]);

        User::create([
            'name' => 'Dara Rangga',
            'username' => 'Dara',
            'email' => 'dara@gmail.com',
            'password' => Hash::make($password),
            'role' => 'Kasir',
        ]);
        //Users

        //Profile
        Profile::create([
            'umur' => 18,
            'jenis_kelamin' => 'Pria',
            'tempat_lahir' => 'Bogor',
            'tgl_lahir' => '2003-03-29',
            'alamat' => 'Jalan Puspanegara, Kp.Kamurang Rt 02/08, Kel.Puspanegara, Kec. Citeureup',
            'bio' => 'I graduated from SMK 1 TRIPLE "J" 2020/2021, majoring in software engineering. I have expertise in web development using HTML, CSS, JS, PHP, MYSQL, Codeigniter 3, Laravel 6, Bootstrap and for collaboration in making applications I can also use git, github and gitlab.',
            'no_telp' => '082246105463',
            'profile_foto' => 'default.svg',
            'user_id' => 1,
        ]);

        Profile::create([
            'umur' => 19,
            'jenis_kelamin' => 'Perempuan',
            'tempat_lahir' => 'Bogor',
            'tgl_lahir' => '2002-02-10',
            'alamat' => 'Jalan Sejahtera, Kp Jambu, Kel. KelapaSari, Kec. cibadak',
            'bio' => 'I graduated from SMK 1 TRIPLE "J" 2020/2021, majoring in marketing',
            'no_telp' => '0838123123',
            'profile_foto' => 'default.svg',
            'user_id' => 2,
        ]);

        Profile::create([
            'umur' => 20,
            'jenis_kelamin' => 'Perempuan',
            'tempat_lahir' => 'Bogor',
            'tgl_lahir' => '2001-01-12',
            'alamat' => 'Jalan Sejahtera, Kp Jambu, Kel. KelapaSari, Kec. cibadak',
            'bio' => 'I graduated from SMK 1 TRIPLE "J" 2020/2021, majoring in accounting',
            'no_telp' => '083213123',
            'profile_foto' => 'default.svg',
            'user_id' => 3,
        ]);
        //Profile


        //Transaksi Pembelian
        Tpembelian::create([
            'total_harga' => 39500,
        ]);

        Tpembelian::create([
            'total_harga' => 200000,
        ]);
        //Transaksi Pembelian

        //Transaksi Pembelian Barang
        Tpembelianbarang::create([
            'transaksi_pembelian_id' => 1,
            'master_barang_id' => 1,
            'jumlah' => 10,
            'harga_satuan' => 3000,
        ]);

        Tpembelianbarang::create([
            'transaksi_pembelian_id' => 1,
            'master_barang_id' => 3,
            'jumlah' => 5,
            'harga_satuan' => 1000,
        ]);

        Tpembelianbarang::create([
            'transaksi_pembelian_id' => 1,
            'master_barang_id' => 4,
            'jumlah' => 3,
            'harga_satuan' => 1500,
        ]);

        Tpembelianbarang::create([
            'transaksi_pembelian_id' => 2,
            'master_barang_id' => 5,
            'jumlah' => 10,
            'harga_satuan' => 20000,
        ]);
        //Transaksi Pembelian Barang

    }
}