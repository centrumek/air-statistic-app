<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JsonMiddleware
{

    public function handle($request, Closure $next)
    {
        $request->headers->set("Accept", "application/json");

        return $next($request);
    }
}
