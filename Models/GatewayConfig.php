<?php

namespace Larabookir\Gateway\Models;

use Illuminate\Database\Eloquent\Model;

class GatewayConfig extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
