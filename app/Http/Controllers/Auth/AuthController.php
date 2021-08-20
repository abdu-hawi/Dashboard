<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\LogoutResponse;

class AuthController extends Controller
{

    /**
     * The guard implementation.
     *
     * @var StatefulGuard
     */
    protected $guard;

    /**
     * Create a new controller instance.
     *
     * @param StatefulGuard $guard
     * @return void
     */
    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }

    /**
     * Destroy an authenticated session.
     *
     * @param Request $request
     * @return LogoutResponse
     * @throws Exception
     */
    public function destroy(Request $request): LogoutResponse
    {
        $this->guard->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        cache()->forget('setting');

        return app(LogoutResponse::class);
    }
}
