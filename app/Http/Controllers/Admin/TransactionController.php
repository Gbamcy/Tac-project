<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TicketFormRequest;
use App\Http\Requests\TransactionFormRequest;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//       index dd(\request()->all());
        $transactions = Transaction::query()->paginate(10);
        $users = User::query()->where('role', 'user')->get();
        return view('backend.admin.transactions.listings', compact('transactions','users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.transactions.listings');
    }

    /**
     * Store a newly created resource in storage.
     * @param TransactionFormRequest $request
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'user_id'=>'required|exists:users,id',
            'amount'=>'required|numeric|gt:0',
            'type'=>'required',
            'description'=>'nullable',
        ]);

        if ($request->get('type') == 'credit') {
            //perform credit/ save operation
            $transaction = Transaction::query()->create([
                'user_id' => $request->get('user_id'),
                'amount' => $request->get('amount'),
                'description' => $request->get('description'),
                'type' => 'credit'
            ]);

            $wallet = Wallet::query()->where('user_id', $request->get('user_id'))->first();
            $initialBalance = $wallet->current_balance;
            $currentBalance = (float)$wallet->current_balance + (float)$request->get('amount');
            $wallet->update([
                'initial_balance' => $initialBalance,
                'current_balance' => $currentBalance
            ]);

            return redirect()->route('admin.transactions.index')->with('status','account credited successfully');

        }elseif ($request->get('type') == 'debit') {
            //perform withdrawal
            $wallet = Wallet::where('user_id', $request->get('user_id'))->first();
            if ($wallet->current_balance > $request->get('amount')) {
                $transaction = Transaction::query()->create([
                   'user_id' => $request->get('user_id'),
                    'amount' => $request->get('amount'),
                    'description' => $request->get('description'),
                    'type' => 'debit'
                ]);

                $wallet = Wallet::query()->where('user_id', $request->get('user_id'))->first();
                $initialBalance = $wallet->current_balance;
                $currentBalance = (float)$wallet->current_balance - (float)$request->get('amount');
                $wallet->update([
                    'initial_balance' => $initialBalance,
                    'current_balance' => $currentBalance
                ]);
                return redirect()->route('admin.transactions.index')->with('status','account debited successfully');

            } else {
                dd($request->all());
                return redirect()->route('admin.transactions.index')->with('status', 'transaction not allowed.!');
            }

        }


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('backend.admin.transactions.show',compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('backend.admin.transactions.edit',compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction ->name = $request ->get('name');
        $transaction ->amount = $request ->get('amount');
        $transaction ->type = $request ->get('type');
        $transaction ->description = $request ->get('description');
        $transaction->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();
        return redirect('/admin/transactions')->with('status,deleted successfully.!');
    }
}
