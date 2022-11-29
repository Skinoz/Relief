<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/main.css'])
    @include('Nexsit.navbar')
</head>
<body>
    <div class="my-3 mx-10 md:mx-9 md:my-3 lg:my-2 lg:mx-32 text-[0.9rem] font-bold">
        <a href="/">Accueil</a> > <a href="{{route('bathroom')}}">Salon</a>
    </div>
    <div class="my-3 mx-10 md:mx-9 md:my-3 lg:my-2 lg:mx-32 pt-10">
        <div class="pt-10 text-left font-bold text-[2rem]">
            Découvrez nos produits de la chambre
        </div>
        <div class="text-[1.1rem]">
            Des meubles bien conçus aux couleurs classiques organisent l'espace et restent appropriés même si <br> votre style évolue. Ainsi, quand le look de votre chambre change, inutile de remplacer les meubles. <br> Votre portefeuille et la planète vous diront merci.
        </div>
        <div class="mt-5">
            <img src="{{asset("img/livingroomxl.jpg")}}" alt="">
        </div>
    </div>
</body>
</html>
