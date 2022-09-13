<style>
    .search-background {
        background-color: #273340;
    }

    .whats-happening-background {
        background-color: #252E38;
    }
</style>

<div class="mx-6 mt-2 xl:w-[350px] ">
    <form action="#" method="POST">
        @csrf
        <div class="relative">
            <div class="absolute top-4 left-3">
                <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
            </div>
            <input
                type="text"
                name="searchQuery"
                class="search-background text-xl text-white py-3 pl-12 rounded-full w-full"
                placeholder="Search Twitter"
                value="{{ request('searchQuery') ?? null }}"
            />
        </div>
    </form>

    <div class="whats-happening-background rounded-lg p-4 mt-4">
        <div class=" text-white font-bold pb-4">
            <p class="text-xl">What's happening</p>

            <p class="text-slate-500">Queen Elizabeth II</p>
            <p class="font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, harum.</p>
        </div>

        <a href="#" class="text-cyan-600 pt-4">Show more</a>
    </div>

    <div class="whats-happening-background rounded-lg p-4 mt-4">
        <div class=" text-white font-bold pb-4">
            <p class="text-xl">What's happening</p>
            <p class="text-slate-500">Queen Elizabeth II</p>
            <p class="font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, harum.</p>
        </div>

        <a href="#" class="text-cyan-600 pt-4">Show more</a>
    </div>
    
</div>


