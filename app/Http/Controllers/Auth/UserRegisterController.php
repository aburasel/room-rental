<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Services\UserAuthService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserRegisterController extends Controller
{

    protected $redirectTo = '/';

    private UserAuthService $userAuthService;

    public function __construct(UserAuthService $userAuthService)
    {
        $this->middleware('guest');
        $this->userAuthService = $userAuthService;
    }

    public function showRegistrationForm()
    {
        return view('auth.user.register');
    }

    public function store(RegistrationRequest $request)
    {
        $validated = $request->validated();
        $user = $this->userAuthService->registerGeneralUser([
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
