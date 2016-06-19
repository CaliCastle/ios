<?php

namespace iOS;

use File;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{

    /**
     * Get all default apps.
     * 
     * @return array
     */
    public static function defaultApps()
    {
        return json_decode(File::get(resource_path('apps.json')));
    }
}
