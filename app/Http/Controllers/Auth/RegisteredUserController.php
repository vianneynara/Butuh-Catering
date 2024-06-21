<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data
        $validatedData = $request->validate([
            'first_name' =>['required'],
            'last_name' =>['required'],
            'username' => ['required', 'string'],
            'email' => ['required', 'string'],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        // Buat pengguna baru
        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Kirim event Registered
        event(new Registered($user));

        // Login pengguna baru
        Auth::login($user);

        // Redirect ke halaman welcome
        return redirect()->route('homepage'); // Ubah ke route yang sesuai untuk redirect setelah register
    }
}

