<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Memo extends Model
{
    use HasFactory;

    /**
     * 一括代入可能な属性
     *
     * @var array<string>
     */
    protected $fillable = [
        'user_id',
        'title',
        'body',
    ];

    /**
     * メモの所有者（ユーザー）を取得
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
