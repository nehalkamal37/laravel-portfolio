<x-guest-layout>
   <!-- Registration 9 - Bootstrap Brain Component -->
   <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/registrations/registration-3/assets/css/registration-3.css">
<!-- Registration 3 - Bootstrap Brain Component -->
<section class="p-3 p-md-4 p-xl-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 bsb-tpl-bg-platinum">
          <div class="d-flex flex-column justify-content-between h-100 p-3 p-md-4 p-xl-5">
            <h3 class="m-0">Welcome!</h3>
            <img class="img-fluid rounded mx-auto my-4" loading="lazy" src="{{ asset('bsb-logo.svg')}}" width="245" height="80" alt="BootstrapBrain Logo">
            <p class="mb-0">Not a member yet? <a href="#!" class="link-secondary text-decoration-none">Register now</a></p>
          </div>
        </div>
        <div class="col-12 col-md-6 bsb-tpl-bg-lotion">
          <div class="p-3 p-md-4 p-xl-5">
            <div class="row">
              <div class="col-12">
                <div class="mb-5">
                  <h2 class="h3">Registration</h2>
                  <h3 class="fs-6 fw-normal text-secondary m-0">Enter your details to register</h3>
                </div>
              </div>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
              <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-12">
                  <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                  <input type="" class="form-control" name="first_name" id="firstName" placeholder="First Name" >
                </div>
                @error('first_name')
{{ $message }}
                @enderror
                <div class="col-12">
                  <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                  <input type="" class="form-control" name="last_name" id="lastName" placeholder="Last Name" >
                </div>
                @error('last_name')
                {{ $message }}
                                @enderror

                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" >
                </div>
                @error('email')
                {{ $message }}
                                @enderror

                <div class="col-12">
                  <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                  <input type="password" class="form-control" name="password" id="password" value="" >
                </div>
                @error('password')
                {{ $message }}
                                @enderror
                                <div class="col-12">
                                    <label for="password" class="form-label">confirm Password <span class="text-danger">*</span></label>
                                    <input  type="password"
                                    name="password_confirmation" class="form-control"  id="password" value="" >
                                  </div>                    
                                <div class="mt-4">
                              {{--      <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        
                                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password_confirmation" required autocomplete="new-password" />
                        
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>  --}}

                <div class="col-12">
                    <label for="lastName" class="form-label">Phone <span class="text-danger">*</span></label>
                    <input type="" class="form-control" name="phone" id="" placeholder="phone" >
                  </div>
                  <div class="col-12">
                    <label for="lastName" class="form-label"> Age<span class="text-danger">*</span></label>
                    <input type="" class="form-control" name="age" id="" placeholder="age" >
                  </div>
                  <div class="col-12">
                    <label for="lastName" class="form-label">nationality <span class="text-danger">*</span></label>
                    <input type="" class="form-control" name="nationality" id="" placeholder="nationality" >
                  </div>
                  <div class="col-12">
                    <label for="lastName" class="form-label">address <span class="text-danger">*</span></label>
                    <input type="" class="form-control" name="address" id="" placeholder="address" >
                  </div>
                  <div class="col-12">
                    <label for="" class="form-label">image <span class="text-danger"></span></label>
                    <input type="file" class="form-control" name="user_image" id="" placeholder="image" >
                  </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="iAgree" id="iAgree" required>
                    <label class="form-check-label text-secondary" for="iAgree">
                      I agree to the <a href="#!" class="link-primary text-decoration-none">terms and conditions</a>
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid">

                    <button class="btn bsb-btn-xl btn-primary" name="register" type="submit">Sign up</button>
                  </div>
                </div>
              </div>
            </form>
            <div class="row">
              <div class="col-12">
                <hr class="mt-5 mb-4 border-secondary-subtle">
                <p class="m-0 text-secondary text-end">Already have an account? <a href="{{ route('login')}}" class="link-primary text-decoration-none">Sign in</a></p>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <p class="mt-5 mb-4">Or sign in with</p>
                <div class="d-flex gap-3 flex-column flex-xl-row">
                  <a href="#!" class="btn bsb-btn-xl btn-outline-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                      <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                    </svg>
                    <span class="ms-2 fs-6">Google</span>
                  </a>
                  <a href="#!" class="btn bsb-btn-xl btn-outline-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                    <span class="ms-2 fs-6">Facebook</span>
                  </a>
                  <a href="#!" class="btn bsb-btn-xl btn-outline-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg>
                    <span class="ms-2 fs-6">Twitter</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


{{--<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('first_name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>
        @error('first_name')
        {{ $message}}

        @enderror
        <div>
            <x-input-label for="name" :value="__('last_name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>   <div>
            <x-input-label for="name" :value="_('phone')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>   <div>
            <x-input-label for="name" :value="__('address')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>   <div>
            <x-input-label for="name" :value="__('age')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="age" :value="old('age')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('age')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="name" :value="__('nationality')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="nationality" :value="old('nationality')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('nationality')" class="mt-2" />
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>--}}
</x-guest-layout>
