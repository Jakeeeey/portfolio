<x-layout>
    <h1>Login to your account</h1>
    <div>
        <form action="{{ route('login') }}" method="post">
            @csrf

            {{-- Email --}}
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                    {{ $message }}
                @enderror
            </div>

            {{-- Password --}}
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                @error('password')
                    {{ $message }}
                @enderror
            </div>

            {{-- Remember --}}
            <div>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember Me</label>
            </div>

            {{-- Login Button --}}
            <div>
                @error('failed')
                {{ $message }}
                @enderror
                <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
                <button type="submit">Login</button>
            </div>

        </form>
    </div>
</x-layout>
