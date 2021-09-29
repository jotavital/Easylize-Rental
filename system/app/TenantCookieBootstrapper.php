<?php

namespace App;

use App\Models\System\Company;
use Stancl\Tenancy\Contracts\TenancyBootstrapper;
use Stancl\Tenancy\Contracts\Tenant;

class TenantCookieBootstrapper implements TenancyBootstrapper
{
    public function bootstrap(Tenant $tenant)
    {
        if(setcookie('tenant_name', $tenant->getTenantKey(), time() + 60 * 60 * 24 * 30, '/')){
            $company = Company::where('banco_empresa', $_COOKIE['tenant_name'])->get()->first();
            setcookie('nome_empresa', $company->nome_empresa, time() + 60 * 60 * 24 * 30, '/');
        }

    }

    public function revert()
    {
        // ...
    }
}
