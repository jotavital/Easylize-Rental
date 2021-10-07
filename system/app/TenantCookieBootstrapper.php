<?php

namespace App;

use App\Models\System\Company;
use Stancl\Tenancy\Contracts\TenancyBootstrapper;
use Stancl\Tenancy\Contracts\Tenant;

class TenantCookieBootstrapper implements TenancyBootstrapper
{
    public function bootstrap(Tenant $tenant)
    {
        

    }

    public function revert()
    {
        // ...
    }
}
