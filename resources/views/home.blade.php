@extends('main')

@section('title')
<title>Home | Jelle Kuipers</title>

@section('content')
<div class="w-screen">
<div class="font-jet text-slate-100 w-7/12 p-2 my-8 text-left"> 
    <h1 class="opfont-semibold text-8xl">
        Hallo! 
        {{-- Mogelijk Goedenmiddag/ochten/avond afhankelijk van huidige tijd gebruiker --}}
    </h1>
    <p class="Text-3xl py-2">
        Ik ben Jelle, <br>
        Student Software Development
    </p>
</div>
</div>

<div class="font-jet">
    <h1>Over mij</h1>
</div>
<div class="font-jet text-slate-100">
    <h1>Opleiding</h1>
    <p>Ik volg momenteel de opleiding software developer op het Alfa-college in Hardenberg.
        Dit is een niveau 4 opleiding op het MBO (Crebo nummer: 12345678).

        Ik doe deze opleiding nadat ik mijn Middelbare school heb afgemaakt op TL niveau, waar ik eindigde met een gemiddelde van 123 over alle vakken.
        Met een X in Kernvak 1, X in kernvak 2 en X in kernvak 3
    </p>

    <h1>Vaardigheden</h1>

    <h2>Programmeer talen & Frameworks</h2>
    <h3>PHP</h3>
    <h3>Laravel</h3>
    <h3>Backpack for Laravel</h3>
    <h3>Java</h3>
    <h3>TailwindCSS / CSS</h3>

    <h2>Talen</h2>
    <h3>Nederlands</h3>
    <p>Nederlands is mijn moedertaal</p>
    <h3>Engels</h3>
    <p>Mijn Engels is vloeiend en ik heb mijn Engels examens (B1/A1) afgesloten met een 10</p>
    
    <h1>Werk ervaring</h1>
    
    <h2>Blauwolk</h2>
    <p>Stagair frontend 01-1970 - 01-1970 (3 mnd)</p>
    <p>Tijdens deze stage heb ik voornamelijk Frontend werk gedaan, waarmee ik voor het eerst heb gewerkt in Laravel, met SCSS en een klein beetje React Native Web in de laatste weken van mijn stage.
        Hier heb ik ook meteen geleerd dat frontend werk niet echt mijn ding is. en ik liever verder wou werken in back-end
    </p>
    
    <h2>Lidl</h2>
    <p>Winkelmedewerker | 04-2022 - 01-2023 (9mnd)</p>
    <p>Hier heb ik gewerkt als kassiere, vakkenvuller en magazijnwerker.</p>
    
    <h2>Harwig & De aanleg</h2>
    <p>Keukenhulp | 05-2021 - 10-2021 (6 mnd)</p>
    <p>Hier was ik verantwoordelijk voor Desserts, koude voorgerechten, voorbereiding van eten voor de spits, kleine bonnen en het afsluiten en schoonmaken van de keuken.
    </p>
    
    <h2>Action</h2>
    <p>Winkelmedewerker | 10-2019 - 06-2020 (9 mnd)</p>
    <p>Dit was mijn eerste bijbaantje. Ik heb hier schoongemaakt, rekken gespiegeld en klanten geholpen.</p>

</div>
<div class="font-jet">
    <h1>Projecten</h1>
</div>
<div class="font-jet">
    <h1>Tijdreis</h1>
</div>
<div class="font-jet">
    <h1>Handmade by daantje</h1>
</div>
<div class="font-jet">
    <h1>Webshop casus</h1>
</div>
<div class="font-jet">
    <h1>Portfolio website</h1>
    <P>Deze website heb ik gemaakt tijdens mijn schooluren waar we ook naar stagebedrijven moesten gaan zoeken</P>
    <p>Deze website is gemaakt met Laravel, Backpack voor laravel en Tailwindcss</p>
</div>
@endsection

@section('script')
@endsection