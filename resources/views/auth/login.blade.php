<x-guest-layout>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <img class="mx-auto h-10 w-auto" src="{{url('CSS/dynasoft.jpg')}}" alt="Your Company">
          <h2 id="label" class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
        </div>
      
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <div>
              <label for="email" id="label" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
              <div class="mt-2">
                <input id="email" name="email" type="email"  autocomplete="email" name="email" :value="old('email')" required autofocus autocomplete="username" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>
      
            <div>
              <div class="flex items-center justify-between">
                <label for="password"  name="password" required autocomplete="current-password" id="label" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                @if (Route::has('password.request'))
                    <a id="label" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
              </div>
              <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><br>
              </div>
            </div>
      
            <div>
            <button class="button" type="submit">Sign In</button><br><br> 
            </div>
          </form>
        </div>
      </div>
      <style>
        .button
        {
    
            background: rgb(68, 11, 201);
            color: white;
            width: 100%;
            height: 45px;
            border-radius: 10px;
        }
        #label
        {
            color: rgb(65, 19, 233);
        }
      </style>
      
</x-guest-layout>

