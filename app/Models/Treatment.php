<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'patient_id',
        'name',
        'description',
        'price',
        'treatment_date',
        'notes',
    ];

    protected $casts = [
        'treatment_date' => 'date',
        'price' => 'decimal:2',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
