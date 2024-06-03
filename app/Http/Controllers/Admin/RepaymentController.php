<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use App\Models\Repayment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RepaymentController extends Controller
{
    public function index()
    {
        $repayments = Repayment::query()->paginate(10);
        $users = User::query()->where('role', 'user')->get();
        return view('backend.admin.repayments', compact('repayments', 'users'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'loan_id'=>'required|exists:loans,id',
            'amount'=>'required|numeric|gt:0'
        ]);

//        dd($request->all());
        $loan = Loan::query()->find($request->get('loan_id'));
        if ($loan->outstanding_balance > 0) {
            if ($loan->outstanding_balance >= $request->get('amount')) {
                $amount = $request->get('amount');
            }else {
               $amount = $loan->outstanding_balance;
               $excess = $request->get('amount') - $amount;
               // what to do with the excess
            }
            $repayment = Repayment::query()->create([
                'loan_id' => $request->get('loan_id'),
                'amount' => $amount
            ]);
            $loan->update([
                'outstanding_balance' => $loan->outstanding_balance - $repayment->amount
            ]);
        }else {
            //what to do if loan is fully paid
        }

        return redirect()->route('admin.repayments')->with('status','payment successfully');
    }
    public function destroy($id)
    {
        $repayment = Repayment::findOrFail($id);
        $repayment->delete();
        return redirect()->route('admin.repayments')->with('success','deleted successfully.!');
    }

}
