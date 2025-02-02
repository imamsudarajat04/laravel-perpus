<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property integer id
 * @property string npm
 * @property string kelas
 * @property string alamat
 * @property string noTelp
 * @property string photoProfile
 * @property integer users_id
 * @property User user
 */
class Profile extends Model
{
    use HasFactory;

    protected $table = "profile";
    protected $fillable =[
        'npm',
        'kelas',
        'alamat',
        'noTelp',
        'photoProfile',
        'users_id'
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'users_id', 'id');
    }
}
