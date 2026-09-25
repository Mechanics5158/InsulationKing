@extends('layouts.app')

@section('title', 'Admin Login — Insulation King')

@section('content')
<section class="page-hero">
    <div class="wrap">
        <h1>Admin Login</h1>
    </div>
</section>

<section>
    <div class="wrap" style="max-width:420px;">
        @error('password')
            <div class="alert" style="border-color:#a54f22; color:#a54f22; margin-bottom:16px;">{{ $message }}</div>
        @enderror

        <form method="POST" action="{{ route('admin.login.attempt') }}">
            @csrf
            <div class="field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required autofocus>
            </div>
            <button type="submit" class="btn btn-copper">Log in</button>
        </form>
    </div>
</section>
@endsection