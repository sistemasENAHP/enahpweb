<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;
use App\Http\Requests\UserRequest;
class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
         // $User = auth()->user();
        $User = User::all();

        return view('auth.login',compact('User'));
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $validated = $request->safe();

        $request->session()->regenerate();

       $request->user()->last_login = now();
       $request->user()->last_login_ip = $request->ip();
       $request->user()->save();

        return redirect()->intended(route('dashboard', absolute: false));
       

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $user = Auth::user();
        $user->previous_login = $user->last_login;
         $user->last_login_ip = $request->ip();
        $user->last_login = now();
        $user->save();
       


        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
