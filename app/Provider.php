<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Provider extends Model
{
    use Sushi;

    protected $rows = [
        [
            'name' => 'Amazon',
        ],
        [
            'name' => 'Google',
        ],
        [
            'name' => 'Microsoft',
        ],
        [
            'name' => 'Laravel',
        ],
        [
            'name' => 'GitHub',
        ],
        [
            'name' => 'Twitter',
        ],
        [
            'name' => 'Linode',
        ],
        [
            'name' => 'StackPath',
        ],
        [
            'name' => 'Digital Ocean',
        ],
        [
            'name' => 'Hetzner',
        ],
        [
            'name' => 'Vultr',
        ],
    ];

    public function consoles()
    {
        return $this->hasMany(Console::class, 'provider', 'name');
    }
}
