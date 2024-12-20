<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'task_id',
        'amount',
        'type',
        'status'
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'created_at' => 'datetime:Y-m-d\TH:i:s.vP',
        'updated_at' => 'datetime:Y-m-d\TH:i:s.vP'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}