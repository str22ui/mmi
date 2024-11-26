<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
     <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>

<body class="bg-[#EEEEEE]">
    <div class="flex flex-col sm:flex-row h-screen">

        <div class="relative md:flex items-center justify-center flex-1 text-white mt-20"
            style="background-image: url('{{ asset('images/login.png') }}'); background-size: contain; background-repeat: no-repeat; ">




        </div>

        <div class="flex items-center justify-center flex-1">
            <div class="max-w-md w-full p-6 bg-white shadow-md rounded-md">
                <h1 class="text-3xl font-bold text-gray-950 mb-10 text-center">Sign in </h1>
                {{-- <label>Please fill with your username and password</label> --}}
                <form action="/loginUser" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="username" class="block text-gray-600 text-sm font-medium mb-2">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500 "
                            placeholder="Masukkan email...">
                    </div>
                    @error('email')
                        <div class="invalid-feedback">

                        </div>
                    @enderror
                    <div class="mb-4">
                        <label for="password" class="block text-gray-600 text-sm font-medium mb-2">Password</label>
                        <input type="password" id="password" name="password"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500 "
                            placeholder="Masukkan password...">
                    </div>

                    <div class="invalid-feedback">

                    </div>


                    {{-- <div class="my-5 "><a href="#"
                            class="hover:border-b-2 hover:border-solid hover:border-black">Lupa Password ?</a></div> --}}

                    <div class="flex items-center mb-4">
                        <button type="submit"
                            class="bg-[#495E57] w-full text-white px-4 py-2 rounded-md hover:bg-green-900 focus:outline-none focus:bg-green-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="h-5 w-5 inline-block mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            Login
                        </button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</body>

</html>
