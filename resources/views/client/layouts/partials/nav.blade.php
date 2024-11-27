<nav id="a" class="fixed z-50 bg-primary ease-linear duration-100 translate-x-0 lg:bg-transparent w-screen top-0 font-[Poppins]">
    <button id="btnNav" type="button" class="float-right text-white mr-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
    </button>

    <div id="nav" class="hidden flex-col-reverse lg:block">
        <section id="navMenu" class="flex flex-col lg:flex-row lg:mt-0 py-5 px-5 lg:px-12 xl:px-20 justify-evenly">
            <a href="/">
                <img class="w-52 lg:w-64 xl:w-48" src="{{ asset('img/logo.png') }}" alt="logo">
            </a>
            <div class="flex flex-col lg:flex-row gap-5 mt-10 lg:mt-0 lg:items-center text-white">
                @include('client.component.NavigationComponent.Menu')
            </div>
        </section>
    </div>

</nav>


<script>
    let lgg = window.matchMedia("(min-width: 1024px)").matches;
    let logo11 = document.getElementById('logo11');
    let logo12 = document.getElementById('logo12');

    if(lgg){
        logo11.classList.remove('hero-hidden')
        logo12.classList.add('hero-hidden')
    }else{
        logo12.classList.remove('hero-hidden')
        logo11.classList.add('hero-hidden')
    }

</script>

