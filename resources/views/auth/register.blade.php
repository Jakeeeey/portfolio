<x-layout>
    <h1>Register new account</h1>

    <div>
        <form action="{{ route('register') }}" method="post">
            @csrf

            {{-- Name --}}
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}">
                @error('name')
                    {{ $message }}
                @enderror
            </div>

            {{-- Email --}}
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="{{ old('email') }}">
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

            {{-- Confirm Password --}}
            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation">
            </div>

            {{-- Register Button --}}
            <div>
                <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</x-layout>
