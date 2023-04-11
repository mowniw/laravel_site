<form method="POST" action="{{ route('login_page') }}">
    @csrf

    <div>
        <label for="email">Email</label>

        <<div>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>
    </div>

    <div>
        <label for="password">Password</label>

        <div>
            <input id="password" type="password" name="password" required>
        </div>
    </div>

    <div>
        <div>
            <div>
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">
                    Remember Me
                </label>
            </div>
        </div>
    </div>

    <div>
        <div>
            <button type="submit">
                Log in
            </button>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            @endif
        </div>
    </div>
</form>
