<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $user = $this->isLoggedIn();

        if (!$user) {
            return response()->json([
                'message' => 'User not logged in',
            ], 401);
        } else {
            return view('profile.edit', [
                'user' => $user,
            ]);
        }
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $user = $this->isLoggedIn();

        if (!$user) {
            return response()->json([
                'message' => 'User not logged in',
            ], 401);
        } else {
            $validated = $request->validate([
                'username' => ['required', 'string', 'max:32', 'unique:users,username,' . $user->getKey()],
                'first_name' => ['required', 'string', 'max:50'],
                'last_name' => ['nullable', 'string', 'max:50'],
                'email' => ['required', 'string', 'email', 'max:320', 'unique:users,email,' . $user->getKey()],
                'phone_number' => ['nullable', 'string', 'max:16', 'unique:users,phone_number,' . $user->getKey()],
                'date_of_birth' => ['nullable', 'date']
            ]);

            $user->update($validated);

            return redirect()->route('profile.edit')->with('status', 'profile-updated');
        }
    }

    // Helper method

    /**
     * Check if logged (authenticated) in.
     */
    public function isLoggedIn()
    {
        $user = Auth::user();

        if (!$user) {
            return null;
        }

        $userModel = User::where('user_id', $user->getAuthIdentifier())->first();

        return $userModel;
    }
}
