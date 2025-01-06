<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skyscraper extends Model
{
    use HasFactory;
    protected $table = 'skyscrapers';
    public $timestamps = false;

    protected $fillable = ['name', 'city_id', 'height', 'stories', 'finished'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public static $rules = [
        'name' => 'required|string|min:2|max:50',
        'city_id' => 'required|exists:cities,id',
        'height' => 'required|numeric|between:140,1000',
        'stories' => 'nullable|integer|between:25,300',
        'finished' => 'nullable|integer|between:1900,3000',
    ];
}
