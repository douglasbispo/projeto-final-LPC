<?php

namespace App\Providers;


use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class ApiImovelProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("api-imovel", function () {
            return Http::withOptions([
                "verify" => false,
                "base_uri" => "https://api.softpop.com.br/public/api/v1/",
            ])
                ->withToken("eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYXBpLnNvZnRwb3AuY29tLmJyXC9wdWJsaWNcL2FwaVwvdjFcL2xvZ2luIiwiaWF0IjoxNjU2MzUxNDE5LCJleHAiOjE2NTYzNTUwMTksIm5iZiI6MTY1NjM1MTQxOSwianRpIjoiYldESTVjMDBKcnU2VWR2WCIsInN1YiI6NSwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.ciL4OKyv68cLbSCAU9CNQFzStilBF-cK5-FSzi1Xf4E");
        });
    }
}
