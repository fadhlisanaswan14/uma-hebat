protected $routeMiddleware = [
    // ... middleware lainnya
    'age.check' => \App\Http\Middleware\CheckAge::class,
];