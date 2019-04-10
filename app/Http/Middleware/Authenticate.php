<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;

class Authenticate 
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

    public function handle($request, Closure $next)
    {
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('login');
            }
        }

        if($request->path() == 'order-detail') return $next($request);
        
        if(auth()->user()->type != 'admin'){
            $message = 'Permiso denegado: Solo los administradores pueden entrar a esta sección';
            return redirect()->route('home')->with('message', $message);
        }

        return $next($request);
    }
}
