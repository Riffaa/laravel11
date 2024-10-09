<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        // Validasi data yang masuk
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'role' => 'required|in:user,admin',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi avatar
        ]);

        // Siapkan avatar path
        $avatarPath = null; // Default avatar path

        // Tangani upload avatar
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
        }

        // Buat instance pengguna baru
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']), // Hash password
            'role' => $validatedData['role'], // Simpan role yang dipilih
            'avatar' => $avatarPath, // Simpan path avatar
        ]);

        // Redirect atau login pengguna jika perlu
        return redirect()->route('home')->with('success', 'Registration successful.');
    }
}
