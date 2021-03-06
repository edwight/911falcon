<?php

namespace App\Http\Middleware;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use Closure;
//use Auth;
class Administrador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct(Guard $auth){
        $this->auth = $auth;
    }
    public function handle($request, Closure $next)
    {
        //dd($this->auth->user()->roles);
        switch ($this->auth->user()->roles) {
            case 'admin':
                # code...
                //return redirect()->to('admin/dashboard');
            break;
            case 'operador':
                # code...
                return redirect()->to('recepcion');
            break;
            case 'supervisor':
                # code...
                //return redirect()->to('admin/recepcion');
            break;
            case 'despacho':
                # code...
                return redirect()->to('recepcion');
            break;

            default:
                # code...
                break;
        }
        

        return $next($request);
    }
}
