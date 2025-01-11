<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data pegawai
        Employee::create([
            'name' => 'Ferdian Akbar',
            'position' => 'Store Manager',  // Ganti dengan nilai yang sesuai enum
            'branch_id' => 1,  // Mengacu ke cabang dengan id 1
        ]);

        Employee::create([
            'name' => 'Adinda Febrian',
            'position' => 'Cashier',  // Ganti dengan nilai yang sesuai enum
            'branch_id' => 2,  // Mengacu ke cabang dengan id 2
        ]);

        Employee::create([
            'name' => 'Irgi Iskandar',
            'position' => 'Supervisor',  // Ganti dengan nilai yang sesuai enum
            'branch_id' => 3,  // Mengacu ke cabang dengan id 3
        ]);
    }
}
