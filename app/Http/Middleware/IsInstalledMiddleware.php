<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsInstalledMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function handle($request, Closure $next)
    {
        if (!file_exists(base_path('.env'))) {
            throw new \App\Modules\Core\Exceptions\NotInstalledException('PhoenixCMS has not been installed');
        }

        return $next($request);
    }
}
