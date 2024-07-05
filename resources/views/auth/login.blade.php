@extends('layouts/app')


@section('titulo')
    Iniciar Sesion
@endsection

@section('contenido')
    <!-- Container -->
        <div class="container mx-auto">
            <div class="flex justify-center px-6 py-12">
                <!-- Row -->
                <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    <!-- Col -->
                    <div
                        class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                        style="background-image: url('https://c4.wallpaperflare.com/wallpaper/41/681/303/pc-hd-1080p-nature-1920x1080-wallpaper-preview.jpg')"
                    ></div>
                    <!-- Col -->
                    <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none ">
                        <h3 class="pt-4 text-2xl text-center">Login</h3>
                        <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" action="{{route('login')}}" method="POST">

                            @csrf

                            <div class="mb-4 md:flex md:justify-between">
                               
                                <div class="w-full">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="name">
                                        UserName
                                    </label>
                                    <input
                                        name="name"
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border @error('name') border-red-500 @enderror rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="name"
                                        type="text"
                                        placeholder="MasterNoob777..."
                                        value="{{old('name')}}"
                                    />
                                </div>
                            </div>
                            
                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4 md:mr-2 md:mb-0 w-full">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                        Password
                                    </label>
                                    <input
                                        name="password"
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border @error('password') border-red-500 @enderror rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="password"
                                        type="password"
                                        placeholder="******************"
                                        value="{{old('password')}}"
                                    />
                                </div>
                                
                            </div>

                            <div>
                                <input type="checkbox" name="rememberPass" id="rememberPass" />
                                <label for="rem">Recuerda mi contraseña</label>
                            </div>
                            <div class="my-3 text-sm bg-red-500 text-white rounded-md mt-2 text-center px-3">
                                @error('name')
                                <p class="px-3 py-1">> {{$message}}</p>
                                @enderror
                                
                                @error('password')
                                <p class="px-3 py-1">> {{$message}}</p>
                                @enderror

                                @if (session('invalidCred_msg'))
                                <p class="px-3 py-1">>{{session('invalidCred_msg')}}</p>   
                                @endif
                            </div>
                            

                            <div class="mb-6 text-center">
                                <button
                                    class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                    type="submit"
                                >
                                    Connect!
                                </button>
                            </div>
                            <hr class="mb-6 border-t" />
                            <div class="text-center">
                                <a
                                    class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                    href="#"
                                >
                                    Forgot Password?
                                </a>
                            </div>
                            <div class="text-center">
                                <a
                                    class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                    href="/login"
                                >
                                    Already have an account? Login!
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection