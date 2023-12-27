<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    use HasFactory;

    protected $table = 'expenditures';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'expenditure_name',
        'frequency',
        'amount',
        'property_id',
    ];

    public function store($propertyId, $expenditureData)
    {
        return $this->create([
            'property_id' => $propertyId,
            'expenditure_name' => $expenditureData['expenditure_name'],
            'frequency' => $expenditureData['frequency'],
            'amount' => $expenditureData['amount'],
        ]);
    }
}
