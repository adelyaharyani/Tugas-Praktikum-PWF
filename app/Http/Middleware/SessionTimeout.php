<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class SessionTimeout
{
    protected $timeout = 600; // 10 menit
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $lastActivity = session('lastActivityTime');
            if ($lastActivity && (time() - $lastActivity > $this->timeout)) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return redirect('/login')->withErrors([
                    'email' => 'Sesi Anda berakhir karena tidak ada aktivitas.',
                ]);}
            session(['lastActivityTime' => time()]);
        }
        return $next($request);
    }}
