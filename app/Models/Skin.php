<?php
namespace App\Models;
use Illuminate\Support\Arr;

class Skin {
    public static function all () {
        return [
                'id' => 1,
                'name' => 'Reaver Vandal',
                'value' => '$1850'
            ];
    }

    public static function find (int $id): array {
        $skin = Arr::first(static::all(), fn($skin) => $skin['id'] == $id);
        if (! $skin) {
            abort(404);
        }
    }

}
