<?php namespace Bantenprov\Item\Http\Middleware;

use Closure;

/**
 * The ItemMiddleware class.
 *
 * @package Bantenprov\Item
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class ItemMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
