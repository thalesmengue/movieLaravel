<div class="flex items-center justify-center mt-12">
    <div class="px-8 py-6 mx-4 mt-4 text-left bg-white shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3 border-4 border-rose-600">
        <div class="flex justify-center">
            <i class="fa-solid fa-film text-4xl text-purple-500 mb-4"></i>
        </div>
        <h3 class="text-2xl font-bold text-center text-rose-600">register movie</h3>
        <form action="{{ route("store") }}" method="post">
            @csrf
            <div class="mt-4">
                <div>
                    <label class="block text-slate-400" for="Name">movie name<label>
                            <input type="text" placeholder="name" name="name"
                                   class="w-full placeholder-slate-400 px-4 py-2 mt-2 border rounded-md
                                   focus:outline-none focus:ring-1 focus:ring-rose-600">
                </div>
                <div class="mt-4">
                    <label class="block text-slate-400" for="email">rating<label>
                            <input type="number" placeholder="rating" name="rating" max="10" min="1"
                                   class="w-full placeholder-slate-400 px-4 py-2 mt-2 border rounded-md
                                   focus:outline-none focus:ring-1 focus:ring-rose-600">
                </div>
                <div class="mt-4">
                    <label class="block text-slate-400">when watched<label>
                            <input type="date" placeholder="when i watched" name="date_watched"
                                   class="w-full placeholder-slate-400 px-4 py-2 mt-2 border rounded-md
                                   focus:outline-none focus:ring-1 focus:ring-rose-600">
                </div>
                <div class="flex justify-center items-center">
                    <button class="px-6 py-2 mt-4 text-white bg-rose-500 rounded-lg hover:opacity-80">register
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
