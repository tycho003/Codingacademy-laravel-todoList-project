<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tasks extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "start_date",
        "end_date",
        "priority"
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault();
    }
}
