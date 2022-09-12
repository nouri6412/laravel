<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CheckTime
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
       
        $now = Carbon::now();
        $start = Carbon::createFromTimeString('00:00');
        $end = Carbon::createFromTimeString('10:05');
        if ($now->between($start, $end)) {
            return redirect('/not-available-now');
        }

        return $next($request);
    }
}
