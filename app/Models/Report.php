<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'client_id',
        'hotdishmeat',
        'hotdishveg',
        'chili',
        'rye',
        'extrarye',
        'focaccia',
        'extrafocaccia',
    ];

    protected $searchableFields = ['*'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
