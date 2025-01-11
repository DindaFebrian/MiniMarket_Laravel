<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Branch;
use App\Models\Employee;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Pdf;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return view('transactions.index', compact('transactions'));
    }

    public function create()
    {
        $branches = Branch::all();
        $employees = Employee::all();
        return view('transactions.create', compact('branches', 'employees'));
    }

    public function store(Request $request)
    {
        Transaction::create($request->all());
        return redirect()->route('transactions.index');
    }

    public function edit(Transaction $transaction)
    {
        $branches = Branch::all();
        $employees = Employee::all();
        return view('transactions.edit', compact('transaction', 'branches', 'employees'));
    }

    public function update(Request $request, Transaction $transaction)
    {
        $transaction->update($request->all());
        return redirect()->route('transactions.index');
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transactions.index');
    }
    public function printPdf()
    {
        $transactions = Transaction::all(); // Ambil semua data transaksi
        $pdf = FacadePdf::loadView('transactions.pdf', compact('transactions')); // Load data ke view PDF
        
        return $pdf->download('transactions.pdf'); // Mengunduh PDF dengan nama transaksi.pdf
    }
    public function show($id)
    {
        $transaction = Transaction::findOrFail($id); // Ambil transaksi berdasarkan ID
        return view('transactions.show', compact('transaction')); // Kembalikan view dengan data transaksi
    }


}
