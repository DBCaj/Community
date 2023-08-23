<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Solid</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="js/initalpine.js"></script>
</head>

<body>
    <div class="flex items-center min-h-screen p-6 bg-[#016e34] dark:bg-gray-900">
        <div class="flex-1 h-full max-w-xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">

                <div class="flex items-center justify-center p-6 sm:p-12 md:w-full">
                    <div class="w-full">

                        <div class="py-2 bg-white text-center mb-5">
                            <img src="{{asset('assets/solidph-logo-whitebg.png')}}" class="h-auto w-26 m-auto" alt="">
                        </div>

                        </br></br>

                        <form action="{{ route('login.auth') }}" method="POST">
                            @csrf

                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Email</span>
                                <input
                                    required
                                    autofocus
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-[#016e34] focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="cassandra@gmail.com" />
                            </label>
                            <label class="block mt-4 text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Password</span>
                                <input
                                    required
                                    name="password"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-[#016e34] focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="***************" 
                                    type="password" />
                            </label>

                            <center>
                            @error('invalid')
                            <span role="alert" style="color: #f00">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </center>
                            
                            <button
                            class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-[#016e34] border border-transparent rounded-lg active:bg-purple-600 hover:bg-[#016e34] focus:outline-none focus:shadow-outline-purple"
                            type="submit"
                            >
                                Log in
                            </button>

                        </form>

                        </br>

                        <center>
                            <a href="{{ route('register.form') }}">
                                Create New Account
                            </a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
