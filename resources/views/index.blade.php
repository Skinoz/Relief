<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/main.css'])
    @include("Nexsit.navbar")
</head>
<body>
    <div class="grid grid-cols-2 mt-20 mx-10 md:mx-9 lg:mx-32 content-center">
        <div class="rambutan index-arg text-right">Faites souffler un vent de magie sur votre interieur</div>
        <img src="{{asset("img/sapin.jpg")}}" alt="" class="row-span-2 justify-self-center" width="80%">
        <img src="{{asset("img/noel.jpg")}}" alt="" class="self-end">
    </div>
    <div class="bg-[#D9D9D9] mt-16">
        <div class="mx-8 md:mx-9 lg:mx-20">
            <div class="pt-10 text-left font-extrabold text-[2rem]">
                Découvrez notre gamme <br>  de produits
            </div>
            <div class="flex space-x-16 justify-center mt-10">
                <div class="relative">
                    <a href="{{route('bedroom')}}">
                        <img src="{{asset('img/bedroom.jpg')}}" alt="" class="">
                        <div class="absolute mx-7 py-2.5 bottom-20 inset-x-0 bg-white text-black text-center rounded-3xl font-bold">Notre gamme chambre</div>
                    </a>
                </div>
                <div class="relative">
                    <a href="{{route('kitchen')}}">
                        <img src="{{asset('img/kitchen.jpg')}}" alt="" class="">
                        <div class="absolute mx-7 py-2.5 bottom-20 inset-x-0 bg-white text-black text-center rounded-3xl font-bold">Notre gamme cuisine</div>
                    </a>
                </div>
                <div class="relative">
                    <a href="{{route('bathroom')}}">
                        <img src="{{asset('img/bathroom.jpg')}}" alt="" class="">
                        <div class="absolute mx-7 py-2.5 bottom-20 inset-x-0 bg-white text-black text-center rounded-3xl font-bold">Notre gamme salle de bain</div>
                    </a>
                </div>
                <div class="relative">
                    <a href="{{route('livingroom')}}">
                        <img src="{{asset('img/livingroom.jpg')}}" alt="" class="">
                        <div class="absolute mx-7 py-2.5 bottom-20 inset-x-0 bg-white text-black text-center rounded-3xl font-bold">Notre gamme salon</div>
                    </a>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
