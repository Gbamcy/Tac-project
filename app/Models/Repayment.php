<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repayment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function loan()
    {
        return $this->belongsTo(Loan::class, 'loan_id');
    }
}
