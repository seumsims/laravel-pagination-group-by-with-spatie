# [Laravel groupBy with pagination Notion Doc](https://1md.notion.site/Laravel-Group-By-with-Pagination-f9db0ad33422463998ebaf528ba8e8a7)
# Laravel Group By with Pagination

# “Great achievement is usually born of great sacrifice, and is never the result of selfishness.”~ Napoleon Hill

News Feed Eradicator

[Laravel groupBy with pagination](https://stackoverflow.com/questions/65077526/laravel-groupby-with-pagination)

[https://github.com/barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar)

- `composer require barryvdh/laravel-debugbar --dev`
    
    ![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled.png)
    
    ![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%201.png)
    
    ![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%202.png)
    
    ![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%203.png)
    
    [GitHub - barryvdh/laravel-debugbar: Laravel Debugbar (Integrates PHP Debug Bar)](https://github.com/barryvdh/laravel-debugbar#installation)
    
    Require this package with composer. It is recommended to only require the package for development.
    
    `composer require barryvdh/laravel-debugbar --dev`
    
    Laravel uses Package Auto-Discovery, so doesn't require you to manually add the `ServiceProvider`.
    
    The `Debugbar` will be enabled when `APP_DEBUG` is `true`.
    
    > If you use a catch-all/fallback route, make sure you load the `Debugbar ServiceProvider` before your own App S`erviceProviders`.
    > 
    
    [GitHub - barryvdh/laravel-debugbar: Laravel Debugbar (Integrates PHP Debug Bar)](https://github.com/barryvdh/laravel-debugbar#lumen)
    
    ### **Lumen:**
    
    For Lumen, register a different Provider in `bootstrap/app.php`:
    
    `if (env('APP_DEBUG')) {
     $app->register(Barryvdh\Debugbar\LumenServiceProvider::class);
    }`
    
    To change the configuration, copy the file to your config folder and enable it:
    
    `$app->configure('debugbar');`
    

[Laravel 8 2022](https://www.notion.so/Laravel-8-2022-974ef0787f0e4d5a8b2c988b97f17195) 

- `php artisan make:controller TesterController` without `-mcr` flag
    
    ```php
    <?php
    
    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    
    class TesterController extends Controller
    {
        //
    }
    ```
    
- `php artisan make:controller TesterController` with `-mcr` flag
    
    ```php
    <?php
    
    namespace App\Http\Controllers;
    
    use App\Models\Tester;
    use Illuminate\Http\Request;
    
    class TesterController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            //
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\Tester  $tester
         * @return \Illuminate\Http\Response
         */
        public function show(Tester $tester)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\Tester  $tester
         * @return \Illuminate\Http\Response
         */
        public function edit(Tester $tester)
        {
            //
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\Tester  $tester
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Tester $tester)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Tester  $tester
         * @return \Illuminate\Http\Response
         */
        public function destroy(Tester $tester)
        {
            //
        }
    }
    ```
    
- note : when use `-mcr` flag use with `make:model`
    - -m means migration
    - -c means controller
    - -r means resource
    - `-mcr` is shorthand flag for those individual flags
    - `php artisan make:model -h` shows flag definition and uses
        
        
    - `app/Http/Controllers/TesterController.php`
        
        ```php
        <?php
        
        namespace App\Http\Controllers;
        
        use App\Models\Tester;
        use Illuminate\Http\Request;
        
        class TesterController extends Controller
        {
            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
            public function index()
            {
                return view('test');
            }
        
            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
                //
            }
        
            /**
             * Store a newly created resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @return \Illuminate\Http\Response
             */
            public function store(Request $request)
            {
                //
            }
        
            /**
             * Display the specified resource.
             *
             * @param  \App\Models\Tester  $tester
             * @return \Illuminate\Http\Response
             */
            public function show(Tester $tester)
            {
                //
            }
        
            /**
             * Show the form for editing the specified resource.
             *
             * @param  \App\Models\Tester  $tester
             * @return \Illuminate\Http\Response
             */
            public function edit(Tester $tester)
            {
                //
            }
        
            /**
             * Update the specified resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @param  \App\Models\Tester  $tester
             * @return \Illuminate\Http\Response
             */
            public function update(Request $request, Tester $tester)
            {
                //
            }
        
            /**
             * Remove the specified resource from storage.
             *
             * @param  \App\Models\Tester  $tester
             * @return \Illuminate\Http\Response
             */
            public function destroy(Tester $tester)
            {
                //
            }
        }
        ```
        
    - `app/Models/Tester.php`
        
        ```php
        <?php
        
        namespace App\Models;
        
        use Illuminate\Database\Eloquent\Factories\HasFactory;
        use Illuminate\Database\Eloquent\Model;
        
        class Tester extends Model
        {
            use HasFactory;
        }
        ```
        
    - `database/migrations/2022_06_12_121604_create_testers_table.php`
        
        ```php
        <?php
        
        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;
        
        class CreateTestersTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create('testers', function (Blueprint $table) {
                    $table->id();
                    $table->timestamps();
                });
            }
        
            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists('testers');
            }
        }
        ```
        
    - `routes/web.php`
        
        ```php
        <?php
        
        use App\Http\Controllers\TesterController;
        use Illuminate\Support\Facades\Route;
        
        /*
        |--------------------------------------------------------------------------
        | Web Routes
        |--------------------------------------------------------------------------
        |
        | Here is where you can register web routes for your application. These
        | routes are loaded by the RouteServiceProvider within a group which
        | contains the "web" middleware group. Now create something great!
        |
        */
        
        Route::get('/', function () {
            return view('welcome');
        });
        
        Route::get('/test', [TesterController::class, 'index']);
        ```
        
    - `resources/views/test.blade.php`
        
        ```php
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Test</title>
        </head>
        <body>
        <div><h1>Test</h1></div>
        </body>
        </html>
        ```
        
    - `composer.json` June 12, 2022 12:00 AM
        
        ```json
        {
            "name": "laravel/laravel",
            "type": "project",
            "description": "The Laravel Framework.",
            "keywords": [
                "framework",
                "laravel"
            ],
            "license": "MIT",
            "require": {
                "php": "^7.3",
                "fideloper/proxy": "^4.2",
                "fruitcake/laravel-cors": "^2.0",
                "guzzlehttp/guzzle": "^7.0.1",
                "laravel/framework": "^8.0",
                "laravel/tinker": "^2.0"
            },
            "require-dev": {
                "barryvdh/laravel-debugbar": "^3.6",
                "facade/ignition": "^2.3.6",
                "fzaninotto/faker": "^1.9.1",
                "mockery/mockery": "^1.3.1",
                "nunomaduro/collision": "^5.0",
                "phpunit/phpunit": "^9.3"
            },
            "config": {
                "optimize-autoloader": true,
                "preferred-install": "dist",
                "sort-packages": true
            },
            "extra": {
                "laravel": {
                    "dont-discover": []
                }
            },
            "autoload": {
                "psr-4": {
                    "App\\": "app/",
                    "Database\\Factories\\": "database/factories/",
                    "Database\\Seeders\\": "database/seeders/"
                }
            },
            "autoload-dev": {
                "psr-4": {
                    "Tests\\": "tests/"
                }
            },
            "minimum-stability": "dev",
            "prefer-stable": true,
            "scripts": {
                "post-autoload-dump": [
                    "Illuminate\\Foundation\\ComposerScripts::postAutoloadDump",
                    "@php artisan package:discover --ansi"
                ],
                "post-root-package-install": [
                    "@php -r \"file_exists('.env') || copy('.env.example', '.env');\""
                ],
                "post-create-project-cmd": [
                    "@php artisan key:generate --ansi"
                ]
            }
        }
        ```
        
    
    ![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%204.png)
    
    ![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%205.png)
    
    [Laravel groupBy with pagination](https://stackoverflow.com/questions/65077526/laravel-groupby-with-pagination)
    
    [Timeline for Laravel groupBy with pagination](https://stackoverflow.com/posts/65077526/timeline)
    
    ![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%206.png)
    
    ![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%207.png)
    
    [57 pagination in laravel | laravel bangla tutorial based on official documentation](https://youtu.be/YUSC7LVqDAo)
    
    What is eloquent ORM?
    
    Eloquent is **an object relational mapper (ORM) that is included by default within the Laravel framework**. An ORM is software that facilitates handling database records by representing data as objects, working as a layer of abstraction on top of the database engine used to store an application's data. Jul 15, 2021
    
    [A Practical Introduction to Laravel Eloquent ORM | DigitalOcean](https://www.digitalocean.com/community/tutorial_series/a-practical-introduction-to-laravel-eloquent-orm)
    
    79 📌 `ModelEloquent` ORM Create New Model
    
    ![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%208.png)
    
    **44 what is migration in `laravel` ? `laravel` `bangla` tutorial based on official documentation**
    
    [https://www.youtube.com/watch?v=hksZ1XGhwxI&list=PLbC4KRSNcMnqS-J6XxwS9YZZL1WhriQat&index=44](https://www.youtube.com/watch?v=hksZ1XGhwxI&list=PLbC4KRSNcMnqS-J6XxwS9YZZL1WhriQat&index=44)
    
    [](https://laracasts.com/discuss/channels/laravel/convert-sql-file-to-laravel-migration-file)
    
    [sql to laravel migration - Google Search](https://www.google.com/search?q=sql+to+laravel+migration&oq=sql+to+laravel+migration&aqs=chrome..69i57.7728j0j1&sourceid=chrome&ie=UTF-8)
    
    [https://github.com/Xethron/migrations-generator](https://github.com/Xethron/migrations-generator)
    
    [https://github.com/kitloong/laravel-migrations-generator](https://github.com/kitloong/laravel-migrations-generator)
    
    [Laravel Migration Generator Online](https://laravelarticle.com/laravel-migration-generator-online)
    
    - #_****Laravel_Migration_Generator_Online**** #️⃣
        
        ![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%209.png)
        
    
    **How to use the** ⏰ **#_TimeStamp data type in SQL Server Part 1**
    
    [How to use the TimeStamp data type in SQL Server (part 1 of 2)](https://www.youtube.com/watch?v=GHQa0NBkicA)
    
    **How to use the** ⏰ **#_TimeStamp data type in SQL Server Part 2**
    
    [How to use the TimeStamp data type in SQL Server. (part 2 of 2)](https://youtu.be/lmwUmaIb2jg)
    
    #_**Timestamp_has_been_deprecated_in_SQL_Server**
    
    [Timestamp has been deprecated in SQL Server.](https://youtu.be/8OCNceq7808)
    
    - ✅ Correct #_Time_Stamp & #_Datetime #_created_at #_*updated_*at create command
        
        ```sql
        CREATE TABLE `datum` (
        	`id` INT(11) NOT NULL AUTO_INCREMENT,
        	`name` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
        	`created_at` DATETIME NULL DEFAULT current_timestamp(),
        	`updated_at` DATETIME NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
        	PRIMARY KEY (`id`) USING BTREE
        )
        ```
        
        for **`cmd`** `ps` bash shell 
        
        ```sql
        CREATE TABLE `datum` (
        	`id` INT(11) NOT NULL AUTO_INCREMENT,
        	`name` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
        	`created_at` DATETIME NULL DEFAULT current_timestamp(),
        	`updated_at` DATETIME NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
        	PRIMARY KEY (`id`) USING BTREE
        )
        COLLATE='utf8mb4_general_ci'
        ENGINE=InnoDB
        AUTO_INCREMENT=3
        ;
        ```
        
        Laravel Model Schema 
        
        ```php
        <?php
        
        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;
        
        class CreateDatumTable extends Migration
        {
            public function up()
            {
                Schema::create('datum', function (Blueprint $table) {
        
        		$table->increments(id);
        		$table->string('name',50)->nullable()->default('NULL');
        		$table->datetime('created_at')->nullable()->default('current_timestamp');
        		$table->datetime('updated_at')->nullable()->default('current_timestamp');
        		$table->primary('id');
        
                });
            }
        
            public function down()
            {
                Schema::dropIfExists('datum');
            }
        }
        ```
        
        Note : this is not valid for Laravel 8
        
        [Laravel - The PHP Framework For Web Artisans](https://laravel.com/docs/8.x/migrations)
        
    
    [Laravel - The PHP Framework For Web Artisans](https://laravel.com/docs/8.x/migrations)
    
    [](https://laravel.com/docs/8.x/pagination#paginating-query-builder-results)
    
    #_paginating_query_builder_results, #_paginating_with_query_builder
    
    - ****[Paginating Query Builder Results](https://laravel.com/docs/8.x/pagination#paginating-query-builder-results)****
        
        ## [Basic Usage](https://laravel.com/docs/8.x/pagination#basic-usage)
        
        ### **[Paginating Query Builder Results](https://laravel.com/docs/8.x/pagination#paginating-query-builder-results)**
        
        There are several ways to paginate items. The simplest is by using the **`paginate`** method on the [query builder](https://laravel.com/docs/8.x/queries) or an [Eloquent query](https://laravel.com/docs/8.x/eloquent). The **`paginate`** method automatically takes care of setting the query's "limit" and "offset" based on the current page being viewed by the user. By default, the current page is detected by the value of the **`page`** query string argument on the HTTP request. This value is automatically detected by Laravel, and is also automatically inserted into links generated by the paginator.
        
        In this example, the only argument passed to the **`paginate`** method is the number of items you would like displayed "per page". In this case, let's specify that we would like to display **`15`** items per page:
        
        ```php
        <?php
         
        namespace App\Http\Controllers;
         
        use App\Http\Controllers\Controller;
        use Illuminate\Support\Facades\DB;
         
        class UserController extends Controller
        {
            /**
             * Show all application users.
             *
             * @return \Illuminate\Http\Response
             */
            public function index()
            {
                return view('user.index', [
                    'users' => DB::table('users')->paginate(15)
                ]);
            }
        }
        ```
        
    
    ![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%2010.png)
    
    - #_Laravel_8_Blade
        - Laravel 8 Blade Section Indexes
            
            > ❗
            > 
            > 
            > **WARNING** You're browsing the documentation for an old version of **Laravel**. Consider upgrading your project to [Laravel 9.x](https://laravel.com/docs/9.x).
            > 
            
            # **Blade Templates**
            
            - **[Introduction](https://laravel.com/docs/8.x/blade#introduction)**
            - **[Displaying Data](https://laravel.com/docs/8.x/blade#displaying-data)**
                - [HTML Entity Encoding](https://laravel.com/docs/8.x/blade#html-entity-encoding)
                - [Blade & JavaScript Frameworks](https://laravel.com/docs/8.x/blade#blade-and-javascript-frameworks)
            - **[Blade Directives](https://laravel.com/docs/8.x/blade#blade-directives)**
                - [If Statements](https://laravel.com/docs/8.x/blade#if-statements)
                - [Switch Statements](https://laravel.com/docs/8.x/blade#switch-statements)
                - [Loops](https://laravel.com/docs/8.x/blade#loops)
                - [The Loop Variable](https://laravel.com/docs/8.x/blade#the-loop-variable)
                - [Conditional Classes](https://laravel.com/docs/8.x/blade#conditional-classes)
                - [Including `**Sub Views**`](https://laravel.com/docs/8.x/blade#including-subviews)
                - [The **`@once`** Directive](https://laravel.com/docs/8.x/blade#the-once-directive)
                - [Raw PHP](https://laravel.com/docs/8.x/blade#raw-php)
                - [Comments](https://laravel.com/docs/8.x/blade#comments)
            - **[Components](https://laravel.com/docs/8.x/blade#components)**
                - [Rendering Components](https://laravel.com/docs/8.x/blade#rendering-components)
                - [Passing Data To Components](https://laravel.com/docs/8.x/blade#passing-data-to-components)
                - [Component Attributes](https://laravel.com/docs/8.x/blade#component-attributes)
                - [Reserved Keywords](https://laravel.com/docs/8.x/blade#reserved-keywords)
                - [Slots](https://laravel.com/docs/8.x/blade#slots)
                - [Inline Component Views](https://laravel.com/docs/8.x/blade#inline-component-views)
                - [Anonymous Components](https://laravel.com/docs/8.x/blade#anonymous-components)
                - [Dynamic Components](https://laravel.com/docs/8.x/blade#dynamic-components)
                - [Manually Registering Components](https://laravel.com/docs/8.x/blade#manually-registering-components)
            - **[Building Layouts](https://laravel.com/docs/8.x/blade#building-layouts)**
                - [Layouts Using Components](https://laravel.com/docs/8.x/blade#layouts-using-components)
                - [Layouts Using Template Inheritance](https://laravel.com/docs/8.x/blade#layouts-using-template-inheritance)
            - **[Forms](https://laravel.com/docs/8.x/blade#forms)**
                - [CSRF Field](https://laravel.com/docs/8.x/blade#csrf-field)
                - [Method Field](https://laravel.com/docs/8.x/blade#method-field)
                - [Validation Errors](https://laravel.com/docs/8.x/blade#validation-errors)
            - **[Stacks](https://laravel.com/docs/8.x/blade#stacks)**
            - **[Service Injection](https://laravel.com/docs/8.x/blade#service-injection)**
            - **[Extending Blade](https://laravel.com/docs/8.x/blade#extending-blade)**
                - [Custom Echo Handlers](https://laravel.com/docs/8.x/blade#custom-echo-handlers)
                - [Custom If Statements](https://laravel.com/docs/8.x/blade#custom-if-statements)
            
            ## [Introduction](https://laravel.com/docs/8.x/blade#introduction)
            
            Blade is the simple, yet powerful templating engine that is included with Laravel. Unlike some PHP templating engines, Blade does not restrict you from using plain PHP code in your templates. In fact, all Blade templates are compiled into plain PHP code and cached until they are modified, meaning Blade adds essentially zero overhead to your application. Blade template files use the **`.blade.php`** file extension and are typically stored in the **`resources/views`** directory.
            
            Blade views may be returned from routes or controller using the global **`view`** helper. Of course, as mentioned in the documentation on [views](https://laravel.com/docs/8.x/views), data may be passed to the Blade view using the **`view`** helper's second argument:
            
            ```php
            Route::get('/', function () {
                return view('greeting', ['name' => 'Finn']);
            });
            ```
            
            ### **[Loops](https://laravel.com/docs/8.x/blade#loops)**
            
            In addition to conditional statements, Blade provides simple directives for working with PHP's loop structures. Again, each of these directives functions identically to their PHP counterparts:
            
            ```php
            @for ($i = 0; $i < 10; $i++)
                The current value is {{ $i }}
            @endfor
             
            @foreach ($users as $user)
                <p>This is user {{ $user->id }}</p>
            @endforeach
             
            @forelse ($users as $user)
                <li>{{ $user->name }}</li>
            @empty
                <p>No users</p>
            @endforelse
             
            @while (true)
                <p>I'm looping forever.</p>
            @endwhile
            ```
            
            ```php
            <div>
                @foreach($names as $name)
                    {{ $name->name }}
            
                @endforeach
            
            </div>
            ```
            
            ```php
            CREATE TABLE `names` (
            	`id` INT(11) NOT NULL AUTO_INCREMENT,
            	`name` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
            	`created_at` DATETIME NULL DEFAULT current_timestamp(),
            	`updated_at` DATETIME NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
            	PRIMARY KEY (`id`) USING BTREE
            )
            COLLATE='utf8mb4_general_ci'
            ENGINE=InnoDB
            AUTO_INCREMENT=23
            ;
            ```
            
            ```php
            
            ```
            
    - #_Laravel_8_Pagination
        - #_Larvel_8_Pagination_Indexes_Links
            
            # **Database: Pagination**
            
            - **[Introduction](https://laravel.com/docs/8.x/pagination#introduction)**
            - **[Basic Usage](https://laravel.com/docs/8.x/pagination#basic-usage)**
                - [Paginating Query Builder Results](https://laravel.com/docs/8.x/pagination#paginating-query-builder-results)
                - [Paginating Eloquent Results](https://laravel.com/docs/8.x/pagination#paginating-eloquent-results)
                - [Cursor Pagination](https://laravel.com/docs/8.x/pagination#cursor-pagination)
                - [Manually Creating A Paginator](https://laravel.com/docs/8.x/pagination#manually-creating-a-paginator)
                - [Customizing Pagination URLs](https://laravel.com/docs/8.x/pagination#customizing-pagination-urls)
            - **[Displaying Pagination Results](https://laravel.com/docs/8.x/pagination#displaying-pagination-results)**
                - [Adjusting The Pagination Link Window](https://laravel.com/docs/8.x/pagination#adjusting-the-pagination-link-window)
                - [Converting Results To JSON](https://laravel.com/docs/8.x/pagination#converting-results-to-json)
            - **[Customizing The Pagination View](https://laravel.com/docs/8.x/pagination#customizing-the-pagination-view)**
                - [Using Bootstrap](https://laravel.com/docs/8.x/pagination#using-bootstrap)
            - **[Paginator and LengthAwarePaginator Instance Methods](https://laravel.com/docs/8.x/pagination#paginator-instance-methods)**
            - **[Cursor Paginator Instance Methods](https://laravel.com/docs/8.x/pagination#cursor-paginator-instance-methods)**
            
            ## [Introduction](https://laravel.com/docs/8.x/pagination#introduction)
            
            In other frameworks, pagination can be very painful. We hope Laravel's approach to pagination will be a breath of fresh air. Laravel's paginator is integrated with the [query builder](https://laravel.com/docs/8.x/queries) and [Eloquent ORM](https://laravel.com/docs/8.x/eloquent) and provides convenient, easy-to-use pagination of database records with zero configuration.
            
            By default, the HTML generated by the paginator is compatible with the [Tailwind CSS framework](https://tailwindcss.com/); however, Bootstrap pagination support is also available.
            
        
        ## [Displaying Pagination Results](https://laravel.com/docs/8.x/pagination#displaying-pagination-results)
        
        When calling the **`paginate`** method, you will receive an instance of **`Illuminate\Pagination\LengthAwarePaginator`**, while calling the **`simplePaginate`** method returns an instance of **`Illuminate\Pagination\Paginator`**. And, finally, calling the **`cursorPaginate`** method returns an instance of **`Illuminate\Pagination\CursorPaginator`**.
        
        These objects provide several methods that describe the result set. In addition to these helpers methods, the paginator instances are iterators and may be looped as an array. So, once you have retrieved the results, you may display the results and render the page links using [Blade](https://laravel.com/docs/8.x/blade):
        
        ```php
        <div class="container">
            @foreach ($users as $user)
                {{ $user->name }}
            @endforeach
        </div>
         
        {{ $users->links() }}
        ```
        
        The **`links`**
         method will render the links to the rest of the pages in the result set. Each of these links will already contain the proper **`page`**
         query string variable. Remember, the HTML generated by the **`links`**
         method is compatible with the [Tailwind CSS framework](https://tailwindcss.com/)
        .
        
        ![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%2011.png)
        
        ![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%2012.png)
        
    
    [https://laravel.com/docs/8.x/cache](https://laravel.com/docs/8.x/cache)
    
    - #_Laravel_8_Cache
        
        # **Cache**
        
        # “By constant self-discipline and self-control, you can develop greatness of character.”~ Grenville Kleiser
        
        News Feed Eradicator
        
        - #_Laravel_8_Cache_Indexes_Links
            - **[Introduction](https://laravel.com/docs/8.x/cache#introduction)**
            - **[Configuration](https://laravel.com/docs/8.x/cache#configuration)**
                - [Driver Prerequisites](https://laravel.com/docs/8.x/cache#driver-prerequisites)
            - **[Cache Usage](https://laravel.com/docs/8.x/cache#cache-usage)**
                - [Obtaining A Cache Instance](https://laravel.com/docs/8.x/cache#obtaining-a-cache-instance)
                - [Retrieving Items From The Cache](https://laravel.com/docs/8.x/cache#retrieving-items-from-the-cache)
                - [Storing Items In The Cache](https://laravel.com/docs/8.x/cache#storing-items-in-the-cache)
                - [Removing Items From The Cache](https://laravel.com/docs/8.x/cache#removing-items-from-the-cache)
                - [The Cache Helper](https://laravel.com/docs/8.x/cache#the-cache-helper)
            - **[Cache Tags](https://laravel.com/docs/8.x/cache#cache-tags)**
                - [Storing Tagged Cache Items](https://laravel.com/docs/8.x/cache#storing-tagged-cache-items)
                - [Accessing Tagged Cache Items](https://laravel.com/docs/8.x/cache#accessing-tagged-cache-items)
                - [Removing Tagged Cache Items](https://laravel.com/docs/8.x/cache#removing-tagged-cache-items)
            - **[Atomic Locks](https://laravel.com/docs/8.x/cache#atomic-locks)**
                - [Driver Prerequisites](https://laravel.com/docs/8.x/cache#lock-driver-prerequisites)
                - [Managing Locks](https://laravel.com/docs/8.x/cache#managing-locks)
                - [Managing Locks Across Processes](https://laravel.com/docs/8.x/cache#managing-locks-across-processes)
            - **[Adding Custom Cache Drivers](https://laravel.com/docs/8.x/cache#adding-custom-cache-drivers)**
                - [Writing The Driver](https://laravel.com/docs/8.x/cache#writing-the-driver)
                - [Registering The Driver](https://laravel.com/docs/8.x/cache#registering-the-driver)
            - **[Events](https://laravel.com/docs/8.x/cache#events)**
            
            ## [Introduction](https://laravel.com/docs/8.x/cache#introduction)
            
            Some of the data retrieval or processing tasks performed by your application could be CPU intensive or take several seconds to complete. When this is the case, it is common to cache the retrieved data for a time so it can be retrieved quickly on subsequent requests for the same data. The cached data is usually stored in a very fast data store such as [Memcached](https://memcached.org/) or [Redis](https://redis.io/).
            
            Thankfully, Laravel provides an expressive, unified API for various cache backends, allowing you to take advantage of their blazing fast data retrieval and speed up your web application.
            
            ## [Configuration](https://laravel.com/docs/8.x/cache#configuration)
            
            Your application's cache configuration file is located at **`config/cache.php`**. In this file, you may specify which cache driver you would like to be used by default throughout your application. Laravel supports popular caching backends like [Memcached](https://memcached.org/), [Redis](https://redis.io/), [DynamoDB](https://aws.amazon.com/dynamodb), and relational databases out of the box. In addition, a file based cache driver is available, while **`array`** and "null" cache drivers provide convenient cache backends for your automated tests.
            
            The cache configuration file also contains various other options, which are documented within the file, so make sure to read over these options. By default, Laravel is configured to use the **`file`** cache driver, which stores the serialized, cached objects on the server's filesystem. For larger applications, it is recommended that you use a more robust driver such as Memcached or Redis. You may even configure multiple cache configurations for the same driver.
            
        
        ## [Cache Usage](https://laravel.com/docs/8.x/cache#cache-usage)
        
        ### **[Obtaining A Cache Instance](https://laravel.com/docs/8.x/cache#obtaining-a-cache-instance)**
        
        To obtain a cache store instance, you may use the **`Cache`** facade, which is what we will use throughout this documentation. The **`Cache`** facade provides convenient, terse access to the underlying implementations of the Laravel cache contracts:
        
        ```php
        <?php
         
        namespace App\Http\Controllers;
         
        use Illuminate\Support\Facades\Cache;
         
        class UserController extends Controller
        {
            /**
             * Show a list of all users of the application.
             *
             * @return Response
             */
            public function index()
            {
                $value = Cache::get('key');
         
                //
            }
        }
        ```
        
    
    ### **[Simple Pagination](https://laravel.com/docs/8.x/pagination#simple-pagination)**
    
    The **`paginate`** method counts the total number of records matched by the query before retrieving the records from the database. This is done so that the paginator knows how many pages of records there are in total. However, if you do not plan to show the total number of pages in your application's UI then the record count query is unnecessary.
    
    Therefore, if you only need to display simple "Next" and "Previous" links in your application's UI, you may use the **`simplePaginate`** method to perform a single, efficient query:
    
    ```php
    $users = DB::table('users')->simplePaginate(15);
    ```
    
    ```php
    public function index()
        {
            $names = DB::table('names')->simplePaginate(5);
    
            return view('test', compact('names'));
        }
    ```
    
    [https://laravel.com/docs/8.x/pagination#paginating-eloquent-results](https://laravel.com/docs/8.x/pagination#paginating-eloquent-results)
    
    ### **[Paginating Eloquent Results](https://laravel.com/docs/8.x/pagination#paginating-eloquent-results)**
    
    You may also paginate [Eloquent](https://laravel.com/docs/8.x/eloquent) queries. In this example, we will paginate the **`App\Models\User`** model and indicate that we plan to display 15 records per page. As you can see, the syntax is nearly identical to paginating query builder results:
    
    ```php
    use App\Models\User;
     
    $users = User::paginate(15);
    ```
    
    Of course, you may call the **`paginate`**
     method after setting other constraints on the query, such as **`where`**
     clauses:
    
    ```php
    $users = User::where('votes', '>', 100)->paginate(15);
    ```
    
    You may also use the **`simplePaginate`**
     method when paginating Eloquent models:
    
    ```php
    $users = User::where('votes', '>', 100)->simplePaginate(15);
    ```
    
    Similarly, you may use the **`cursorPaginate`**
     method to cursor paginate Eloquent models:
    
    ```php
    $users = User::where('votes', '>', 100)->cursorPaginate(15);
    ```
    
    ![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%2013.png)
    
    [Illuminate\Database\QueryException with message 'SQLSTATE[42S02]: Base table or view not found: 1146 Table 'test.people' doesn't exist](https://stackoverflow.com/questions/46190717/illuminate-database-queryexception-with-message-sqlstate42s02-base-table-or)
    
    ## [Eloquent Model Conventions](https://laravel.com/docs/8.x/eloquent#eloquent-model-conventions)
    
    Models generated by the **`make:model`** command will be placed in the **`app/Models`** directory. Let's examine a basic model class and discuss some of Eloquent's key conventions:
    
    ```php
    <?php
     
    namespace App\Models;
     
    use Illuminate\Database\Eloquent\Model;
     
    class Flight extends Model
    {
        //
    }
    ```
    
    ### **[Table Names](https://laravel.com/docs/8.x/eloquent#table-names)**
    
    After glancing at the example above, you may have noticed that we did not tell Eloquent which database table corresponds to our **`Flight`** model. By convention, the "snake case", plural name of the class will be used as the table name unless another name is explicitly specified. So, in this case, Eloquent will assume the **`Flight`** model stores records in the **`flights`** table, while an **`AirTrafficController`** model would store records in an **`air_traffic_controllers`** table.
    
    If your model's corresponding database table does not fit this convention, you may manually specify the model's table name by defining a **`table`** property on the model:
    
    ```php
    <?php
     
    namespace App\Models;
     
    use Illuminate\Database\Eloquent\Model;
     
    class Flight extends Model
    {
        /**
         * The table associated with the model.
         *
         * @var string
         */
        protected $table = 'my_flights';
    }
    ```
    
    ### **[Manually Creating A Paginator](https://laravel.com/docs/8.x/pagination#manually-creating-a-paginator)**
    
    Sometimes you may wish to create a pagination instance manually, passing it an array of items that you already have in memory. You may do so by creating either an **`Illuminate\Pagination\Paginator`**, **`Illuminate\Pagination\LengthAwarePaginator`** or **`Illuminate\Pagination\CursorPaginator`** instance, depending on your needs.
    
    The **`Paginator`** and **`CursorPaginator`** classes do not need to know the total number of items in the result set; however, because of this, these classes do not have methods for retrieving the index of the last page. The **`LengthAwarePaginator`** accepts almost the same arguments as the **`Paginator`**; however, it requires a count of the total number of items in the result set.
    
    In other words, the **`Paginator`** corresponds to the **`simplePaginate`** method on the query builder, the **`CursorPaginator`** corresponds to the **`cursorPaginate`** method, and the **`LengthAwarePaginator`** corresponds to the **`paginate`** method.
    
    🎵
    When manually creating a paginator instance, you should manually "slice" the array of results you pass to the paginator. If you're unsure how to do this, check out the #[`array_slice`](https://secure.php.net/manual/en/function.array-slice.php) PHP function.
    
    [array_slice](https://www.php.net/manual/en/function.array-slice.php)
    
    [How to Paginate the Laravel Collection? Two Ways.](https://youtu.be/trzwyMAmzE0)
    
    - **Paginate the Laravel Collection**
        
        # **How to Paginate the Laravel Collection? Two Ways**
        
        [How to Paginate the Laravel Collection? Two Ways.](https://youtu.be/trzwyMAmzE0)
        
        7,499 views  Mar 13, 2022  Today I'm answering a question from a Youtube comment, showing two ways how to perform the pagination on Laravel Collection.
        
        Related links:
        - Simon Hamp: Paginated Collection in Laravel [https://gist.github.com/simonhamp/549...](https://www.youtube.com/redirect?event=video_description&redir_token=QUFFLUhqa1VwUXNEcWJKWkJvUUU5NF83LWtyaW1XdHRLQXxBQ3Jtc0ttcjYxX3ZtTmtTOWlRUks2YW4xVXBkZjIyT2xLZFBuV0NETnVCX1MyZXI3ZmRlZm1aaFNCNGRqYWtWeV9yMzVycHBMT1Bxd1NLNC1OM0JMU3RaRmFyc0twcmZVOFZrdkZkVG5pSGhHTkl1Sm1ZVllBcw&q=https%3A%2F%2Fgist.github.com%2Fsimonhamp%2F549e8821946e2c40a617c85d2cf5af5e&v=trzwyMAmzE0)
        - Spatie Laravel Collection Macros: [https://github.com/spatie/laravel-col...](https://www.youtube.com/redirect?event=video_description&redir_token=QUFFLUhqbWdFQ1FKb3Q2RXcwbnpGcTQwVUctajlfSERfZ3xBQ3Jtc0trdklDV2M5VUx4UFZESFUzcl9KV25sY0hoQm9lRkt0a1F1SDAtZUh6cktJczN3S0l4N21CTVdZVlItbUtPZGItYUFLZTNtbzRZb3VOb04wQnpIeFUxcEhUamR3R0dFVzZ5MVNrclFYbmpCejNNbTFIcw&q=https%3A%2F%2Fgithub.com%2Fspatie%2Flaravel-collection-macros%2F%23paginate&v=trzwyMAmzE0)
        - Create Helpers for Collections or Carbon with Laravel Macros [https://www.youtube.com/watch?v=HLstT...](https://www.youtube.com/watch?v=HLstTFVuxW4&t=0s)
        - Laravel Str Macro: Define Custom String Helpers [https://www.youtube.com/watch?v=Mssv0...](https://www.youtube.com/watch?v=Mssv0OoQlCw&t=0s)
        
        - - - - -
        Support the channel by checking out our products:
        - Enroll in my Laravel courses: [https://laraveldaily.teachable.com](https://www.youtube.com/redirect?event=video_description&redir_token=QUFFLUhqbTFHd0l1cWxsYmxMQUdMem5IUFh5R0wzUnFoZ3xBQ3Jtc0trX0hmZTUyeHZZTHAzTkdNc3JxcGtqV1duN1pucVZGZ2ZYTGl0YWh6LU1nN1owTUhwWjBWeno4R2pqeGxsM1ltaWdGcGU1VmQ5cFNWN2JzWkFJZjZzZjFpZlNSZExCQ3VCWjdQVF9oVUtHMWR6RTdfYw&q=https%3A%2F%2Flaraveldaily.teachable.com%2F&v=trzwyMAmzE0)
        - Try our Laravel QuickAdminPanel: [https://bit.ly/quickadminpanel](https://www.youtube.com/redirect?event=video_description&redir_token=QUFFLUhqbVl3OEw3ZWdHMzBvcF84MElpMjZYMHJYQVBHd3xBQ3Jtc0trdjNqSEd0dFBrMTZqN1NxaWdyUERYRVkzYndYMUtQWTFweUY2YjRjSkR6NlpHYTVEOEpCMGx3aTJLTW9pNDZCb1o3UDNzZjl4eG9BanVid0I5NkxfMk1Sd1hNRkdjMWxJbnhJMWR3OUNSNGVzLS1qcw&q=https%3A%2F%2Fbit.ly%2Fquickadminpanel&v=trzwyMAmzE0)
        - Buy my ready-made Laravel scripts: [https://laraveldaily.gumroad.com](https://www.youtube.com/redirect?event=video_description&redir_token=QUFFLUhqbTBIblZUS3BkYk1JczhaUU9yUi05UjFCQjY3QXxBQ3Jtc0tsUDB4NHB6ODdCQjZ2WU1SOXo4SEZKS3JiWWp3YjM2Rkc0Qm1XbDlQYWx4SGl2NjVTOTZmUThEc1JaeFZhODg4Zmk0M3hvT01SbWZvRXphbUFGNnJ1S2ZtaDNZRVhFbEVtN1ZxYmo2bG5GZUprQXhRQQ&q=https%3A%2F%2Flaraveldaily.gumroad.com%2F&v=trzwyMAmzE0)
        - Purchase my Livewire Kit: [https://livewirekit.com](https://www.youtube.com/redirect?event=video_description&redir_token=QUFFLUhqa25PZ2Y3YTdkcGdIYW9qV2h2OXg2OWxkSGlWd3xBQ3Jtc0trWG5NMmNuZTJTeUJFV0FjVGVWQWk2YU9NcTdua2tCRVBKZmUxLTlZQVZOaE05bFJzanZXdUVkZmF5VS03SXNCWHhVQnVQS3VHZ1ZOOHE2ZnFaVGExRUJBcEI4dFdSeVlfSTIxQTRmSnVOUFJjNk94MA&q=https%3A%2F%2Flivewirekit.com%2F&v=trzwyMAmzE0)
        - Subscribe to my weekly newsletter: [http://bit.ly/laravel-newsletter](https://www.youtube.com/redirect?event=video_description&redir_token=QUFFLUhqbWVGbXFrQU0xY0pONkNJRkYtYkhlb2lSTmx4Z3xBQ3Jtc0tuNVZ0eDM5TG5LLTFHTWdXdVhhdFk4dkdXamVrLVFtVzVad1NUZzVaMUloWjBxYno2QWYwb3dFRVAwOFJ3b3FnZ3dEQnNfcVhoQjFiOHdhZEQ1YWJYNDllbTFMT3VWSzZHS20xeGdPYkNWU0NqYkc4QQ&q=http%3A%2F%2Fbit.ly%2Flaravel-newsletter&v=trzwyMAmzE0)
        
    
    `composer require spatie/laravel-collection-macros`
    
    ```php
    public function index()
        {
            $some_names = Tester::get();
            $names = collect($some_names)->paginate(5);
    
            return view('test', compact('names'));
        }
    ```
    

### #_group_by_custom_pagination_raw_query

```php
// query group by clause
$query = "SELECT * FROM test GROUP BY id";
```

```sql
SELECT * FROM names GROUP BY date
```

![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%2014.png)

![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%2015.png)

[sql to laravel query builder - Google Search](https://www.google.com/search?q=sql+to+laravel+query+builder&rlz=1C1BNSD_enBD995BD995&oq=sql+to+laravel&aqs=chrome.0.0i512j69i57j0i512l8.8225j1j7&sourceid=chrome&ie=UTF-8)

[SQL to Eloquent](https://jjlabajo.github.io/SQLtoEloquent/)

[Laravel ORM vs Query Builder vs SQL: SPEED TEST!](https://dev.to/hesamzakerirad/laravel-orm-vs-query-builder-vs-sql-speed-test-4knf)

**[How do I get the query builder to output its raw SQL query as a string?](https://stackoverflow.com/questions/18236294/how-do-i-get-the-query-builder-to-output-its-raw-sql-query-as-a-string)**

[How do I get the query builder to output its raw SQL query as a string?](https://stackoverflow.com/questions/18236294/how-do-i-get-the-query-builder-to-output-its-raw-sql-query-as-a-string)

#_uses_of_tinker_shell

```php
php artisan tinker
```

![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%2016.png)

```php
Tester::get()->where('name')->groupBy('date');
```

```php
Tester::get()->groupBy('date');
```

```php
DB::table('names')->get();
```

```php
DB::table('names')->groupBy('date')->get();
```

![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%2017.png)

[Laravel - The PHP Framework For Web Artisans](https://laravel.com/docs/8.x/queries#grouping)

[Laravel : Syntax error or access violation: 1055 Error](https://stackoverflow.com/questions/40917189/laravel-syntax-error-or-access-violation-1055-error)

![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%2018.png)

![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%2019.png)

![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%2020.png)

![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%2021.png)

[My TTL was 86400!](https://ttl-calc.com/)

![Untitled](Laravel%20Group%20By%20with%20Pagination%20f7f9df64b1664efb96b60d36aaf357c2/Untitled%2022.png)

```php
$data = Tester::latest()->orderBy('date','desc')->get()->groupBy('date');
```

for blade file looping system

```php
@foreach ($data as $date=> $post)

<div class="grad1">{{ date('D d M', strtotime($date))}}</div>

@foreach ($post as $item)

<h1 class="k_1">
    <a > {{$item->name}}</a>
</h1>
 @endforeach
 @endforeach
```

```php
{{$paginator->nextPageUrl()}}
```

```php
$data = Tester::latest()->orderBy('date','desc')->get()
->groupBy('date')
->paginate(1);
```

```php
$data->total()
```

```php
@for ($i = 0; $i < $data->total(); $i++)
      <a href=""> {{$i}} </a>
@endfor
```

- app\Http\Controllers\TesterController.php
    
    ```php
    <?php
    
    namespace App\Http\Controllers;
    use Illuminate\Support\Facades\DB;
    use App\Models\Tester;
    use Illuminate\Http\Request;
    
    class TesterController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            #$some_names = Tester::get();
            #$names = collect($some_names)->paginate(5);
            #$names = DB::table('names')->groupBy('date')->get()->paginate(2);
            $data = Tester::latest()->orderBy('date','desc')->get()->groupBy('date')->paginate(1);
            #dd($data->total());
            #dd($data);
    
            return view('test', compact('data'));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            //
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\Tester  $tester
         * @return \Illuminate\Http\Response
         */
        public function show(Tester $tester)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\Tester  $tester
         * @return \Illuminate\Http\Response
         */
        public function edit(Tester $tester)
        {
            //
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\Tester  $tester
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Tester $tester)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Tester  $tester
         * @return \Illuminate\Http\Response
         */
        public function destroy(Tester $tester)
        {
            //
        }
    }
    ```
    

```php
$data = Tester::latest()
->orderBy('date','desc')
->get()
->groupBy('date')
->paginate(1);
```

- resources\views\test.blade.php
    
    ```php
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Test</title>
    </head>
    <body>
    <div><h1>Test</h1></div>
    {{--dd($names)--}}
    <div>
        @foreach ($data as $date=> $post)
    
        <div class="grad1">{{ date('D d M', strtotime($date))}}</div>
        
        @foreach ($post as $item)
        
        <h1 class="k_1">
            <a > {{$item->name}}</a>
        </h1>
         @endforeach
         @endforeach
         
         {{-- <a href="{{$paginator->nextPageUrl()}}">next</a> --}}
         @for ($i = 1; $i < $data->total(); $i++)
          <a href="?page={{$i}}"> {{$i}} </a>
    @endfor
    </div>
    
    </body>
    </html>
    ```
    
- resources\views\test.blade.php
    
    ```php
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Test</title>
    </head>
    <body>
    <div><h1>Test</h1></div>
    {{--dd($names)--}}
    <div>
        @foreach ($data as $date=> $post)
    
            <div class="grad1"> @foreach ($post as $item)
    
                <h1 class="k_1">
                    <a> {{$item->date}}</a>
                </h1>
            @endforeach</div>
    
            @foreach ($post as $item)
    
                <h1 class="k_1">
                    <a> {{$item->name}}</a>
                </h1>
            @endforeach
        @endforeach
    
        {{-- <a href="{{$paginator->nextPageUrl()}}">next</a> --}}
        @for ($i = 1; $i < $data->total(); $i++)
            <a href="?page={{$i}}"> {{$i}} </a>
        @endfor
    </div>
    
    </body>
    </html>
    ```
    

[Illuminate\Pagination\LengthAwarePaginator | Laravel API](https://laravel.com/api/8.x/Illuminate/Pagination/LengthAwarePaginator.html#method_nextPageUrl)

[Laravel - The PHP Framework For Web Artisans](https://laravel.com/docs/8.x/blade#loops)

When using loops you may also end the loop or skip the current iteration using the **`@continue`**
 and **`@break`**
 directives:

```php
@foreach ($users as $user)
    @if ($user->type == 1)
        @continue
    @endif
 
    <li>{{ $user->name }}</li>
 
    @if ($user->number == 5)
        @break
    @endif
@endforeach
```

```php
<div class="grad1"> 
@foreach ($post as $item)

            <h1 class="k_1">
                {{-- <a> {{dd($item->date)}}</a> --}}
                <a> {{$item->date}}</a>
                @break
            </h1>
@endforeach
</div>
```

- resources\views\`test.blade.php`
    
    ```php
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Test</title>
    </head>
    <body>
    <div><h1>Test</h1></div>
    {{--dd($names)--}}
    <div>
        @foreach ($data as $date=> $post)
    
            <div class="grad1"> @foreach ($post as $item)
    
                <h1 class="k_1">
                    {{-- <a> {{dd($item->date)}}</a> --}}
                    <a> {{$item->date}}</a>
                    @break
                </h1>
            @endforeach</div>
    
            @foreach ($post as $item)
    
                <h1 class="k_1">
                    <a> {{$item->name}}</a>
                </h1>
            @endforeach
        @endforeach
    
        {{-- <a href="{{$paginator->nextPageUrl()}}">next</a> --}}
        @for ($i = 1; $i < $data->total(); $i++)
            <a href="?page={{$i}}"> {{$i}} </a>
        @endfor
    </div>
    
    </body>
    </html>
    ```