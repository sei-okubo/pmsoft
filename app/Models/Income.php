<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $table = 'incomes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'income_name',
        'frequency',
        'amount',
        'property_id',
    ];

    public function store($propertyId, $incomeData)
    {
        return $this->create([
            'property_id' => $propertyId,
            'income_name' => $incomeData['income_name'],
            'frequency' => $incomeData['frequency'],
            'amount' => $incomeData['amount'],
        ]);
    }
}
