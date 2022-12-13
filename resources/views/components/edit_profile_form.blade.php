@props(["user"])
<form class="space-y-8 divide-y divide-gray-200" action="{{ route("users.update", Auth::user()) }}" method="post">
    @method("PATCH")
    @csrf
    <div class="space-y-8 divide-y divide-gray-200">
        <div>
            <div>
                <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                <p class="mt-1 text-sm text-gray-500">here you can edit your profile information.</p>
            </div>
            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="name" class="block text-sm font-medium text-gray-700">First name</label>
                    <div class="mt-1">
                        <input type="text" name="name" id="name" autocomplete="given-name"
                               class="block w-3/4 rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                                   focus:ring-indigo-500 sm:text-sm" value="{{ $user->name }}">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                    <div class="mt-1">
                        <input type="text" name="last_name" id="last_name" autocomplete="family-name"
                               class="block w-3/4 rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                                   focus:ring-indigo-500 sm:text-sm" value=" {{ $user->last_name }} ">
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email"
                               class="block w-4/6 rounded-md border-gray-300 shadow-sm focus:border-indigo-500
                                   focus:ring-indigo-500 sm:text-sm" value=" {{ $user->email }} ">
                    </div>
                </div>
                <div class="sm:col-span-6">
                    <label for="photo" class="block text-sm font-medium text-gray-700">Photo</label>
                    <div class="mt-1 flex items-center">
            <span class="h-12 w-12 overflow-hidden rounded-full bg-gray-100">
              <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002
                    8.999a4 4 0 11-8 0 4 4 0 018 0z"/>
              </svg>
            </span>
                        <button type="button"
                                class="ml-5 rounded-md border border-gray-300 bg-white py-2 px-3 text-sm font-medium
                                     leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2
                                     focus:ring-indigo-500 focus:ring-offset-2">
                            Change
                        </button>
                    </div>
                </div>
                <div class="sm:col-span-6">
                    <label for="cover-photo" class="block text-sm font-medium text-gray-700">Cover photo</label>
                    <div
                        class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                        <div class="space-y-1 text-center">
                            <img class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                 viewBox="0 0 48 48" aria-hidden="true" src="{{asset(auth()->user()->profile_image)}}">
                            </img>
                            <div class="flex text-sm text-gray-600">
                                <label for="profile_image"
                                       class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600
                                           focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500
                                           focus-within:ring-offset-2 hover:text-indigo-500">
                                    <span>Upload a file</span>
                                    <input id="profile_image" name="profile_image" type="file" class="sr-only">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5">
            <div class="flex justify-end">
                <a href="{{ route("index") }}">
                    <button type="button"
                            class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700
                        shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Cancel
                    </button>
                </a>
                <button type="submit"
                    class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2
                        px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2
                        focus:ring-indigo-500 focus:ring-offset-2">
                    Save
                </button>
            </div>
        </div>
</form>
