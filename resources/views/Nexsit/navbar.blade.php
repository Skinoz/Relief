<div class="">
    <nav class="overflow-hidden bg-white">
        <div class="my-3 mx-10 md:mx-9 md:my-3 lg:my-2 lg:mx-32">
            <div class="flex items-center mt-4 natural Nexsit-grey">
                <div class="flex-none">
                    <a href="/"><img src="{{ asset('img/Relief.png') }}" alt="" class="h-16 mb-4"></a>
                </div>
                <div class="md:flex hidden grow justify-center list-none space-x-10">
                    <li class="">
                        <a href="{{route('kitchen')}}" class="nav-text"><span>Cuisine</span></a>
                    </li>
                    <li class="">
                        <a href="{{route('livingroom')}}" class="nav-text"><span>Salon</span></a>
                    </li>
                    <li class="">
                        <a href="{{route('bedroom')}}" class="nav-text"><span>Chambre</span></a>
                    </li>
                    <li class="">
                        <a href="{{route('bathroom')}}" class="nav-text"><span>Salle de bain</span></a>
                    </li>
                </div>
                <div class="flex space-x-6 Nexsit-grey-svg">
                    <img src="{{ asset('img/user.svg') }}" alt="" width="20px" height="20px">
                    <img src="{{ asset('img/cart.svg') }}" alt="" width="20px" height="20px">
                </div>
            </div>
        </div>
    </nav>
</div>
<hr class="mx-10 md:mx-9 lg:mx-32 Nexsit-grey hr-nav">
