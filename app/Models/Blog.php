<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;

class Blog extends Model 
{
    use HasFactory;

    protected $fillable = [
        // 'user_id',
        // 'user_name',
        'title',
        'description',
        
        'thumbnail',
        'meta_description',
        'meta_title',
        'meta_keywords'
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected $table = 'blogs';
}
