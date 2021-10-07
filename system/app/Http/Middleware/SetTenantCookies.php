<?php

namespace App\Http\Middleware;

use App\Classes\MyHelpers;
use App\Models\System\Company;
use Closure;
use Illuminate\Http\Request;

class SetTenantCookies
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        MyHelpers::deleteAllCookies();

        setcookie('tenant_name', $request->segment(1), time() + 60 * 60 * 24 * 30, '/');
        isset($_COOKIE['tenant_name']);

        $company = Company::where('banco_empresa', $request->segment(1))->get()->first();
        setcookie('nome_empresa', $company->nome_empresa, time() + 60 * 60 * 24 * 30, '/');

        if (!isset($_COOKIE['nome_empresa']) || $_COOKIE['nome_empresa'] != $company->nome_empresa) {
            echo "<script> location.reload(); </script>";
        }

        return $next($request);
    }
}
