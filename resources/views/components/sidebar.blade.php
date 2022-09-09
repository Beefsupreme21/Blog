<style>
    .search-background {
        background-color: #273340;
    }
</style>

<div class="ml-6 mt-2 w-[350px] border border-red-500">
    <form action="#" method="POST">
        @csrf
        <div class="relative">
            <div class="absolute top-4 left-3">
                <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
            </div>
            <input
                type="text"
                name="searchQuery"
                class="search-background text-xl text-white py-3 pl-12 rounded-full"
                placeholder="Search Twitter"
                value="{{ request('searchQuery') ?? null }}"
            />
        </div>
    </form>
</div>

