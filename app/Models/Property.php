<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = 'properties';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'property_name',
        'capital',
        'expense',
        'loan',
        'loan_period',
        'interest',
        'rent',
        'fixed_expenditure',
        'repay',
    ];

    public function store($request)
    {
        return $this->create([
            'user_id' => $request->user_id,
            'property_name' => $request->property_name,
            'capital' => $request->capital,
            'expense' => $request->expense,
            'loan' => $request->loan,
            'loan_period' => $request->loan_period,
            'interest' => $request->interest,
            'rent' => $request->rent,
            'fixed_expenditure' => $request->fixed_expenditure,
            'repay' => $request->repay,
        ]);
    }
}
