<div class="container max-w-full mx-auto py-24 px-6">
    <div class="mt-24">
        <div class="max-w-sm mx-auto px-6 bg-white p-16 border-2 border-black">
            <div class="relative flex flex-wrap">
                <div class="w-full relative">
                    <div class="mt-4">
                        <div class="mb-5 text-center font-base text-gray-700">
                            <span class="font-mono font-semibold text-xl">forgot password</span>
                        </div>
                        <form class="mt-16" method="post" action="{{ route("password.email") }}">
                            @csrf
                            <div class="mx-auto max-w-lg">
                                <div class="py-2">
                                    <span class="px-1 text-sm text-gray-600">email</span>
                                    <input placeholder="test@test.com" type="text" name="email"
                                           class="text-md block px-3 py-2  rounded-lg w-full bg-white border-2
                                           placeholder-gray-600 shadow-md focus:bg-white focus:outline-none">
                                    @if($errors->has("email"))
                                        <div class="text-center text-base text-red-600">
                                            {{ $errors->first("email") }}
                                        </div>
                                    @endif
                                    <div>
                                        @if(session()->has("message"))
                                            <div class="text-center text-base text-red-600">
                                                {{ session()->get("message") }}
                                            </div>
                                        @endif
                                    </div>
                                    <button class="mt-3 text-lg font-semibold bg-purple-600 w-full text-white rounded-lg
                                     px-6 py-3 block shadow-xl hover:opacity-80 mt-4"> Login
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

