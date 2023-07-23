@include('components.header')

<div class="h-screen flex justify-center items-center text-center">
    <form action="{{route("login")}}" method="POST"
          class="bg-gray-300 border rounded border-blue-700 shadow-md hover:shadow-lg shadow-blue-600 hover:shadow-blue-700 ease-in duration-100 px-24 py-16 md:py-24">
        @csrf
        <h2 class="text-center text-2xl font-bold mb-4">Login</h2>
        <div class="flex my-2 justify-center mt-8">
            <input
                class="px-4 md:px-8 py-1 md:py-2 rounded-full border border-blue-700 @error("email") border-red-600 @enderror invalid:focus:ring-blue-400 caret-blue-500 placeholder:italic outline-none focus:ring-blue-700 focus:ring-1"
                placeholder="Email" type="email" name="email" id="email" required autocomplete="email"
                value="{{old("email")}}">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="flex my-2 justify-center">
            <input
                class="px-4 md:px-8 py-1 md:py-2 rounded-full border border-blue-700 @error("password") border-red-600 @enderror invalid:focus:ring-blue-400 caret-blue-500 placeholder:italic outline-none focus:ring-blue-700 focus:ring-1"
                placeholder="Password" type="password" name="password" id="password" required autocomplete="password"
                value="{{old("password")}}">
        </div>

        <div class="flex my-2 items-center justify-center text-center">
            <button type="submit"
                    class="px-6 md:px-8 py-1 md:py-2 rounded-full border border-blue-700 invalid:focus:ring-blue-400 caret-blue-500 placeholder:italic outline-none focus:ring-blue-700 focus:ring-1 bg-gradient-to-r hover:from-sky-500 hover:via-blue-600 hover:to-blue-800 hover:text-white hover:shadow-md hover:shadow-blue-700 ease-in duration-100">
                Login
            </button>
        </div>

        <div class="mt-6 items-center justify-center text-center">
            @error('email')
            <div class="text-red-800">
                {{ $message }}
            </div>
            @enderror
            @error('password')
            <div class="text-red-800">
                {{ $message }}
            </div>
            @enderror
            @if (Route::has('password.request'))
                <a class="" href="{{ route('password.request') }}">
                    Forgot Your Password? <p class="inline-block text-blue-700 hover:text-blue-800">
                        Reset
                    </p>
                </a>
            @endif
            <div class="">
                <a href="{{route("register")}}">
                    Don't have an account? <p class="inline-block text-blue-700 hover:text-blue-800">
                        Register
                    </p>
                </a>
            </div>

        </div>


    </form>
</div>

@include('components.footer')
