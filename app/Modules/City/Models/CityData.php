<?php

namespace App\Modules\City\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CityData extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'city_data';

    protected $guarded = [];

    public function Master(): BelongsTo

    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function Lang(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'lang_id', 'id');
    }
}
