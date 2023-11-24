<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Employee;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use LdapRecord\Laravel\Auth\ListensForLdapBindFailure;

class AuthenticatedSessionController extends Controller
{
    use ListensForLdapBindFailure;

    protected $username = 'username';

    public function __construct()
    {
        $this->listenForLdapBindFailure();
    }
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {

        $request->authenticate();

        $request->session()->regenerate();

        if (!Auth::user()->hasRole('super-admin')) {

            //if (!Auth::user()->dni) {
                Auth::user()->update([
                    'dni' => $request->dni
                ]);
            //}
            //dd(Auth::user());
            if (!Auth::user()->employee) {
                //$this->destroy($request);
                Auth::guard('web')->logout();

                $request->session()->invalidate();

                $request->session()->regenerateToken();

                return redirect('/login')->with('error', 'No existe empleado con ese DNI.');
            }

            if (Auth::user() && Auth::user()->getRoleNames() == null) {
                Auth::user()->assignRole('user');
            }
        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
