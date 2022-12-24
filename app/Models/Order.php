<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['status', 'name', 'phone', 'user_id'];

    /**
     * @return BelongsToMany
     */
    public function products():BelongsToMany
    {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    /**
     * @return BelongsTo
     */
    public function user():BelongsTo
        {
            return $this->belongsTo(User::class);
        }
}
