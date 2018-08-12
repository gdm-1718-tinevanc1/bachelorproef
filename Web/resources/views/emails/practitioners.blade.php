<div>
<h1>Lijst met behandelaars</h1>   
<p class="bold"> Beste uw deed een aanvraag voor behandelaars van het type '{{$type}}' in de regio '{{$regio}}'.</p>
<p>Dit zijn onze voorstellen: </p>
<ul>
@foreach ($practitioners as $practitioner)

    <li> 
        <p><span class="bold">Naam:</span> {{$practitioner[0]->firstname}} {{$practitioner[0]->lastname}}</p>
        <p><span class="bold">Clienteel:</span> {{$practitioner[0]->clientele}}</p>
        <p><span class="bold">Email:</span> {{$practitioner[0]->email}}</p>
    </li>
@endforeach
</ul>

<p class="bold">Veel succes!</p>
</div>

