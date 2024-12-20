<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'user_id',
        'screenshot_url',
        'status',
        'feedback'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d\TH:i:s.vP',
        'updated_at' => 'datetime:Y-m-d\TH:i:s.vP'
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}