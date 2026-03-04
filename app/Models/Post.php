<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Post extends Model
{
    protected function casts()
    {
        return [
            'tags' => 'array',
        ];
    }
}
