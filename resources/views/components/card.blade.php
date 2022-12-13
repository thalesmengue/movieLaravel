@props(["movie"])
<div class="p-1 mt-10 rounded w-1/4 border-rose-600">
    <div class="flex flex-col gap-2 border-4 border-rose-600 p-4 text-rose-500 bg-slate-800">
        <div class="flex flex-col gap-2 text-center">
            <div class="flex gap-2 text-xl h-120 w-80">
                <h2>Name:</h2>
                <p class="text-gray-300"> {{ $movie->name }} </p>
            </div>
            <div class="flex gap-2 text-xl">
                <h2>Rating:</h2>
                <p class="text-gray-300"> {{ $movie->rating }} </p>
            </div>

            <div class="flex gap-2 justify-between text-xl">
                <div class="flex gap-2">
                    <h2>When Watched:</h2>
                    <p class="text-gray-300"> {{ $movie->date_watched->format("d/m/Y") }} </p>
                </div>

                <div class="flex flex-wrap gap-4 text-purple-500">
                    <a href=" {{ route("movies.edit", $movie->id)}} ">
                        <i class="fa-solid fa-pen-to-square hover:opacity-70"></i>
                    </a>
                    <form class="flex items-center" method="POST" action="{{ route("movies.destroy", $movie->id)}}">
                        @method('DELETE') @csrf
                        <button type="submit">
                            <i class="fa-solid fa-trash-can hover:opacity-70"></i>
                        </button>
                    </form>
                    <a href="#">
                        <i class="fa-solid fa-star hover:opacity-70"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
