<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::query()->paginate(10);
        $users = User::query()->where('role', 'user')->get();
        return view('backend.admin.loans', compact('loans', 'users'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'amount' => 'required|numeric|gt:0',
            'reason' => 'nullable|string',
            'due_date' => 'date',
            'guarantor_id' => 'nullable|exists:users,id'
        ]);

        $inputs = $request->all();
        $dueDate = Carbon::parse($inputs['due_date']);
        $diff = Carbon::now()->diffInDays($dueDate);
        $rate = env('LOAN_RATE', 0);

        $inputs['interest'] = $inputs['amount'] * $rate/365 * $diff/100;
        $inputs['outstanding_balance'] = $inputs['interest'] + $inputs['amount'];
        $inputs['status'] = 'unpaid';

        $loan = Loan::query()->create($inputs);
        return redirect()->route('admin.loans')->with('status','Loan created successfully');;
    }
    public function show($id)
    {
       $loans = Loan::where($id)->findOrFail();
       return view('backend.admin.loans.show', compact('loans'));
    }
    public function destroy ($id)
    {
        $loans = Loan::findOrFail($id);

        $loans ->Delete();

        return redirect('admin/loans')->with('success','Loan deleted successfully.!');
    }
    public function edit($id)
    {
        $loan = Loan::findOrFail($id);
        return view('backend.admin.loans.edit',compact('loan'));
    }
}
