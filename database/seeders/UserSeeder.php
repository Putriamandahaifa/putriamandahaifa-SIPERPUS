<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pustakawan = User::create([
            'name' => 'Pustakawan',
            'email' => 'pustakawan@unsur.ac.id',
            'password' => Hash::make('password#2024')
        ]);
        $pustakawan->assignRole('pustakawan');
        $pustakawan->givePermissionTo('kelola_buku');
        $pustakawan->givePermissionTo('kelola_peminjaman');
        $pustakawan->givePermissionTo('kelola_pengembalian');

        $pustakawan = User::create([
            'name' => 'mahasiswa',
            'email' => 'mahasiswan@unsur.ac.id',
            'password' => Hash::make('password#2024')
        ]);
        $pustakawan->assignRole('member');
        $pustakawan->givePermissionTo('lihat_buku');
        $pustakawan->givePermissionTo('pinjam_buku');

        // User::factory()->create([
        //     'name' => 'pustakawan',
        //     'email' => 'pustakawan@unsur.ac.id',
        // ])->assignRole('pustakawan');
        
        // User::factory()->create([
        //     'name' => 'mahasiswa',
        //     'email' => 'mahasiswa@unsur.ac.id',
        // ])->assignRole('mahasiswa');
    }
}
