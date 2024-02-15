<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Services\UserAuthService;
use App\Services\UserRegistrationService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RentalOwnerRegisterController extends Controller
{

    protected $redirectTo = '/home';

    private UserAuthService $userAuthService;

    public function __construct(UserAuthService $userAuthService)
    {
        $this->middleware('guest');
        $this->userAuthService = $userAuthService;
    }

    public function showRegistrationForm()
    {
        return view('auth.rental-owner.register');
    }

    public function store(RegistrationRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $user = $this->userAuthService->registerRentalOwner([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'country' => $validated['country'],
            'password' => Hash::make($validated['password']),
        ]);

        event(new Registered($user));

        Auth::guard()->login($user);
        return redirect(route('verification.notice'));
    }

}
