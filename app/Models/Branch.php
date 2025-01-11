<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = ['branch_name', 'address', 'city'];


    public function create()
{
    $branches = Branch::all(); // Ambil semua data cabang dari database
    $employees = Employee::all(); // (Opsional) Tambahkan karyawan jika dibutuhkan
    return view('transactions.create', compact('branches', 'employees'));
}
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
