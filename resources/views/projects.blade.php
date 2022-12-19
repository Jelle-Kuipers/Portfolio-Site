@extends('main')

@section('title')
<title>Projecten | Jelle Kuipers</title>

@section('content')
<div class="w-screen">
    <div class="font-jet text-slate-100 w-7/12 p-2 my-8 text-left"> 
        <h1 class="opfont-semibold text-8xl">
            PROJECTEN
        </h1>
    </div>
</div>
<div id="tijdreis">
    <h1>Tijdreis</h1>
    <p>
    Dit project was voor de Historische vereniging Hardenberg, deze is ons als 2e jaars klas toegewezen vanuit school.<br>
    De klant wou graag een website hebben waarop gebruikers een reservering konden maken voor hun tours.<br>
    Hierbij wou de klant ook graag een admin paneel hebben om eventueel informatie aan te passen, touren toe te voegen, bewerken en te verwijderen. <br>

    Het is besloten om deze website in Laravel op te bouwen met backpack voor het adminpaneel, daarnaast is op verzoek van de klant Molly gebruikt als betalingsysteem. <br>
    <br>
        Voor dit project werdt onze klas opgedeeld in 3 groepen: Backend, Frontend En Data & Security. <br>
        Ik ben begonnen met werkzaamheden in Data & Security. Waarbij we zijn begonnen met het uitzoeken van Privacywetgeving, Voor de opslag van de persoonsgevens voor de boekingen. <br>
        Daarna zijn we begonnen met het opbouwen van de ERD voor de database. Zodra deze klaar was hebben we de migrations geschreven en getest.
        <br><br>
        De volgende stap was in samenwerking met Backend, de SQL queries geschreven voor het opslaan en ophalen van data vanuit de pagina's die zijn uitgeleverd door Frontend. <br>
        Hierbij moet ik wel noteren, deze zijn oorsprongelijk geschreven als pure SQL, omdat we niet bekend waren met Eloquent en Laravel's ingebouwde hulp voor het bouwen van queries.
        Deze taak is naarmate de voortgang van het project tegelijk gedaan met andere taken zoals:<br>
        De taak om Backpack te installeren, werkend te krijgen en te vertalen naar het nederlands.
</div>
<div id="webshop">
    <p>webshop</p>
</div>
<div id="daantje">
    <p>daantje</p>
</div>
<div id="portfolio">
    <p>portfolio</p>
</div>
@endsection

@section('script')
@endsection