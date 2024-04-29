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
        $gunskin = Arr::first(static::all(), fn($gunskin) => $gunskin['id'] == $id);
        if (! $gunskin) {
            abort(404);
        }
    }

}
