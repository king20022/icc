<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Complain extends Model
{
    use HasFactory;

    protected $table = 'complains';
    protected $primaryKey = 'id';
    protected $guarded = [];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // /**
    //  * Get the user that owns the Complain
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    //  */
    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(Complain::class, 'complain_id', 'id');
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
