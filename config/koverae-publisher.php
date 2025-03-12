<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Publisher Database Connection
    |--------------------------------------------------------------------------
    |
    | This is the database connection you want Publisher to use while storing &
    | reading your content. By default Publisher assumes you've prepared a
    | new connection called "Publisher". However, you can change that
    | to anything you want.
    |
    */

    'database_connection' => env('PUBLISHER_DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Publisher Uploads Disk
    |--------------------------------------------------------------------------
    |
    | This is the storage disk Publisher will use to put file uploads, you can use
    | any of the disks defined in your config/filesystems.php file. You may
    | also configure the path where the files should be stored.
    |
    */

    'storage_disk' => env('PUBLISHER_STORAGE_DISK', 'local'),

    'storage_path' => env('PUBLISHER_STORAGE_PATH', 'public/publisher/images'),

    /*
    |--------------------------------------------------------------------------
    | Publisher Domain
    |--------------------------------------------------------------------------
    |
    | This is the subdomain where Publisher will be accessible from. By default it
    | will be accessible on the same domain as your app.
    |
    */

    'domain' => env('PUBLISHER_DOMAIN'),

    /*
    |--------------------------------------------------------------------------
    | Publisher Path
    |--------------------------------------------------------------------------
    |
    | This is the URI prefix where Publisher will be accessible from. Feel free to
    | change this path to anything you like.
    |
    */

    'path' => env('PUBLISHER_PATH', 'publisher'),

    /*
    |--------------------------------------------------------------------------
    | Publisher Middleware Group
    |--------------------------------------------------------------------------
    |
    | This is the middleware group that Publisher uses.
    |
    */

    'middleware_group' => env('PUBLISHER_MIDDLEWARE_GROUP', 'web'),

    /*
    |--------------------------------------------------------------------------
    | Publisher Post Preview Path
    |--------------------------------------------------------------------------
    |
    | Publisher uses this path to display a preview link in the editor. While
    | building the link tag, the {postSlug} placeholder will be replaced
    | by the actual post slug.
    |
    */

    'preview_path' => '/{postSlug}',

    'editor' => [

        /*
        |--------------------------------------------------------------------------
        | Default editor (for when you don't want options)
        |--------------------------------------------------------------------------
        |
        | Publisher usually allows either markdown or rich text editing. If you're
        | setting up an environment where you only want one or the other
        | you can specify that here. (options: null, 'markdown', 'rich')
        |
        */

        'default' => null,

    ],

    /*
    |--------------------------------------------------------------------------
    | The pagination of Publisher collections
    |--------------------------------------------------------------------------
    |
    | You can configure here the number of items, per page.
    |
    */
    'pagination' => [
        'posts' => 30,
        'tags' => 30,
        'teams' => 30,
        'pages' => 30,
    ],
];
