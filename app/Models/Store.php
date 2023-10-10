<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Store extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'name',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @param $id
     * @param $name
     * @return int
     */
    public static function getStoreId($id, $name): int
    {
        return self::query()
            ->firstOrCreate(
                ['user_id'=> $id, 'name' => $name]
            )['id'];
    }
}
