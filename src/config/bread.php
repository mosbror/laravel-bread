<?php

return [

    /*
    |--------------------------------------------------------------------------
    | The namespace that holds all models
    |--------------------------------------------------------------------------
    |
    | Configures the namespace where the BREAD controller should look for
    | auto discovering models based on controller naming scheme
    |
    */
    'model_namespace' => '\\App\\Models\\',

    /*
    |--------------------------------------------------------------------------
    | The cache adapter to use with TUS
    |--------------------------------------------------------------------------
    |
    | Needs to be a valid option from the tus-php package
    |
    */
    'tus_cache_adapter' => env('TUS_CACHE_ADAPTER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | The disk where TUS will upload files to
    |--------------------------------------------------------------------------
    |
    | Needs to be a disk that is defined in your filestystem config
    |
    */
    'tus_disk' => env('TUS_DISK', 'public'),

    /*
    |--------------------------------------------------------------------------
    | Max upload size in bytes allowed for TUS
    |--------------------------------------------------------------------------
    |
    | Default is 100MB, set to 0 if you want no restriction
    |
    */
    'tus_max_upload_size' => env('TUS_MAX_UPLOAD_SIZE', 100000000),

    /*
    |--------------------------------------------------------------------------
    | Max age that TUS uploads should be kept
    |--------------------------------------------------------------------------
    |
    | Used by the bread:clean-tus command to determing which stale uploads to
    | remove. Needs to be a string valid to strtotime
    |
    */
    'tus_stale_max_age' => env('TUS_STALE_MAX_AGE', '-2 days')

];
