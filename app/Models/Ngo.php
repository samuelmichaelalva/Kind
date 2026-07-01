<?php

namespace App\Models;

use App\Enums\NgoStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ngo extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'name', 'slug', 'email', 'phone', 'website', 'location', 'description', 'mission', 'status'];

    protected $casts = [
        'status' => NgoStatus::class,
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function posts(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function donations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Donation::class);
    }

    public function volunteerOpportunities(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(VolunteerOpportunity::class);
    }
}
