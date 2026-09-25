<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function showLogin(): View
    {
        return view('admin.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'string'],
        ]);

        $storedHash = config('admin.password');

        if (! $storedHash || ! Hash::check($request->password, $storedHash)) {
            return back()->withErrors(['password' => 'Incorrect password.']);
        }

        $request->session()->regenerate();
        $request->session()->put('is_admin', true);

        return redirect()->route('admin.messages');
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->forget('is_admin');
        $request->session()->regenerate();

        return redirect()->route('admin.login');
    }

    public function messages(): View
    {
        $messages = ContactMessage::latest()->paginate(20);

        return view('admin.messages', compact('messages'));
    }
}