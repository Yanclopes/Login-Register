<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sheet extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sheet';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'class',
        'level',
        'race',
        'background',
        'alignment',
        'alignment_tendency',
        'attributes',
        'hit_points',
        'speed',
        'armor_class',
        'initiative',
        'action_points',
        'inspiration',
        'saving_throws',
        'skills',
        'languages',
        'senses',
        'racial_traits',
        'class_traits',
        'known_spells',
        'equipment',
        'background_story',
        'user_id',  // Added user_id to fillable array
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'attributes' => 'array',
        'hit_points' => 'array',
        'saving_throws' => 'array',
        'skills' => 'array',
        'languages' => 'array',
        'senses' => 'array',
        'racial_traits' => 'array',
        'class_traits' => 'array',
        'known_spells' => 'array',
        'equipment' => 'array',
    ];

    /**
     * Get the user that owns the sheet.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
