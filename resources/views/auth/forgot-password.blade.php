<x-guest-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <img class="mx-auto h-10 w-auto" src="{{url('CSS/dynasoft.jpg')}}" alt="Your Company">
        </div>
      
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
        
            <div>
                <div id="head" class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>
              <div class="mt-2">
                <input id="email" name="email" type="email"  :value="old('email')" required autofocus class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><br>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>
            </div>
            <div  class="flex items-center justify-end mt-4">
                <x-primary-button id="link_button">
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
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
        #link_button{
            background: rgb(65, 19, 233); 
        }
        #head{
            color:  rgb(65, 19, 233);
        }
      </style>
</x-guest-layout>



