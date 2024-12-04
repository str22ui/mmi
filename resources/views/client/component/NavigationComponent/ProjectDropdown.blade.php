
@if(isset($kotas) && $kotas->isNotEmpty())
    <div class="block relative nav-dropdown">
        <button type="button" id=""  class="flex gap-5 items-center font-bold text-base nav-dropdown-btn-sm lg:nav-dropdown-btn">
            <p>Project</p>
        </button>
        <div class="bg-white text-[#898989] text-sm flex-col w-full lg:w-40 gap-2 relative lg:absolute hidden nav-dropdown-content">
            @foreach ($kotas as $kota)
                <a class="hover:bg-primary hover:text-white px-2 py-1" href="{{ url('/showProject/' . $kota->kota) }}">
                    {{ $kota->kota }}
                </a>
            @endforeach
        </div>
    </div>
@else
    <div class="block relative nav-dropdown">
        <button class="flex gap-5 items-center font-bold text-base nav-dropdown-btn-sm lg:nav-dropdown-btn">
            <p>Project</p>
        </button>
        <div class="bg-white text-[#898989] text-sm flex-col w-full lg:w-40 gap-2 relative lg:absolute hidden nav-dropdown-content">
            <p class="px-2 py-1 text-gray-500">No projects available</p>
        </div>
    </div>
@endif
