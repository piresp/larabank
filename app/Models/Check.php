<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    use HasFactory;

    public const PENDING = 'pending';
    public const APPROVED = 'approved';
    public const REJECTED = 'rejected';

    protected $fillable = [
        'amount',
        'file',
        'description',
        'status',
        'account_id'
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}