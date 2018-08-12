@extends('layouts.app')

@section('title', 'Gebruikers')

@section('content')

    <div class="col s12 m10">
     <h5>{{ $user->firstname }} {{ $user->lastname }}</h5>
    </div>
    <div class="col s12 m2">

        @if(count($user->user->roles))
            <ul>
                <span class="bold"> Rollen: </span>
                @foreach($user->user->roles as $role)
                    <li>{{ $role->name }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <div class="clear"></div>
    <hr>
    <div class="col s12">
    Gebruikersnaam: {{ $user->user->username }}
    <br>
    E-mail: {{ $user->user->email }}
    <br>
    <ul>
        <li>Voornaam: {{ $user->firstname }}</li>
        <li>Achternaam: {{ $user->lastname }}</li>
        <li>Telefoonnummer: {{ $user->phonenumber }}</li>
        <li></li>
        <li>Stad: {{ $user->location->city }}</li>
        <li>Postcode: {{ $user->location->zipcode  }}</li>
        <li>Land: {{ $user->location->country->name }}</li>
    </ul>
    </div>

    <div class="col s12">

    @if(count($user->user->roles))
        @foreach($user->user->roles as $role)
            @if($role->name == 'Behandelaar')
                <h5>Behandelaar info </h5>
                <ul>
                    <li>Functie: {{$user->function}}</li>
                    <li>Riziv-nummer: {{$user->rizivnumber}}</li>
                </ul>
            @endif
            @if($role->name == 'Patiënt')
                <h5>Medische info</h5>
                @if($user->profileMedical)
                    <ul>
                        <li><span class="bold">Afstand wandelen:</span>
                        @if($user->profileMedical->howfar == '5km_without') Ik stap gemakkelijk meer dan 5 km, zonder hulpmiddelen
                        @elseif($user->profileMedical->howfar == '5km_with')Ik stap gemakkelijk meer dan 5 km, maar wel met hulpmiddelen
                        @elseif($user->profileMedical->howfar == '500m_without')Ik kan zonder hulpmiddelen de afstanden aan om bv. te voet boodschappen te doen, binnen mijndorp/stad rond te stappen
                        @elseif($user->profileMedical->howfar == '500m_with')Ik kan met hulpmiddelen de afstanden aan om bv. te voet boodschappen te doen, binnen mijn dorp/stad te stappen
                        @elseif($user->profileMedical->howfar == '100m_without')Ik kan zonder hulpmiddelen een blokje om  (ca. 100 - 200m)
                        @elseif($user->profileMedical->howfar == '100m_with')Ik kan zonder hulpmiddelen binnenshuis stappen (ca. 10 - 15m)
                        @elseif($user->profileMedical->howfar == '10m_without')Ik kan zonder hulpmiddelen binnenshuis stappen (ca. 10 - 15m)
                        @elseif($user->profileMedical->howfar == '10m_with')Ik kan met hulpmiddelen binnenshuis stappen (ca. 10 - 15m)
                        @elseif($user->profileMedical->howfar == '2m_without')Ik kan zonder hulpmiddelen maar enkele stappen zetten (ca. 2-5m)
                        @elseif($user->profileMedical->howfar == '2m_with')Ik kan met hulpmiddelen maar enkele stappen zetten (ca. 2-5m)
                        @elseif($user->profileMedical->howfar == 'no')Ik kan niet stappen
                        @endif
                        </li>
                        <li><span class="bold">Opmerking: </span> {{$user->profileMedical->note}} </li>
                    </ul>


                    <div class="col s6">
                        <h6>Pijn</h6>
                        <ul>
                            <li><span class="bold">Shoudergewricht links:</span> {{$user->profileMedical->profilePain->shoulderjoint_left}} </li>
                            <li><span class="bold">Shoudergewricht rechts:</span> {{$user->profileMedical->profilePain->shoulderjoint_right}} </li>
                            <li><span class="bold">Schoudergordel links:</span> {{$user->profileMedical->profilePain->shoulderbelt_left}} </li>
                            <li><span class="bold">Schoudergordel rechts:</span> {{$user->profileMedical->profilePain->shoulderbelt_right}} </li>
                            <li><span class="bold">Elleboog links:</span> {{$user->profileMedical->profilePain->elbow_left}} </li>
                            <li><span class="bold">Elleboog rechts:</span> {{$user->profileMedical->profilePain->elbow_right}} </li>
                            <li><span class="bold">Bovenarm links:</span> {{$user->profileMedical->profilePain->upperarm_left}} </li>
                            <li><span class="bold">Bovenarm rechts:</span> {{$user->profileMedical->profilePain->upperarm_right}} </li>
                            <li><span class="bold">Onderarm links:</span> {{$user->profileMedical->profilePain->underarm_left}} </li>
                            <li><span class="bold">Onderarm rechts:</span> {{$user->profileMedical->profilePain->underarm_right}} </li>
                            <li><span class="bold">Polsgewricht links:</span> {{$user->profileMedical->profilePain->wristjoint_left}} </li>
                            <li><span class="bold">Polsgewricht rechst:</span> {{$user->profileMedical->profilePain->wristjoint_right}} </li>
                            <li><span class="bold">'Knokkels' links:</span> {{$user->profileMedical->profilePain->knuckles_left}} </li>
                            <li><span class="bold">'Knokkels' rechts:</span> {{$user->profileMedical->profilePain->knuckles_right}} </li>
                            <li><span class="bold">Duimbasis links:</span> {{$user->profileMedical->profilePain->thumbbase_left}} </li>
                            <li><span class="bold">Duimbasis rechts:</span> {{$user->profileMedical->profilePain->thumbbase_right}} </li>
                            <li><span class="bold">Vingergewrichten links:</span> {{$user->profileMedical->profilePain->fingerjoints_left}} </li>
                            <li><span class="bold">Vingergewrichten rechts:</span> {{$user->profileMedical->profilePain->fingerjoints_right}} </li>
                            <li><span class="bold">Heupgewricht links:</span> {{$user->profileMedical->profilePain->hipjoint_left}} </li>
                            <li><span class="bold">Heupgewricht rechts:</span> {{$user->profileMedical->profilePain->hipjoint_right}} </li>
                            <li><span class="bold">Bilstreek links:</span> {{$user->profileMedical->profilePain->buttock_left}} </li>
                            <li><span class="bold">Bilstreek rechts:</span> {{$user->profileMedical->profilePain->buttock_right}} </li>
                            <li><span class="bold">Knie links:</span> {{$user->profileMedical->profilePain->knee_left}} </li>
                            <li><span class="bold">Knie rechts:</span> {{$user->profileMedical->profilePain->knee_right}} </li>
                            <li><span class="bold">Enkel links:</span> {{$user->profileMedical->profilePain->ankle_left}} </li>
                            <li><span class="bold">Enkel rechts:</span> {{$user->profileMedical->profilePain->ankle_right}} </li>
                            <li><span class="bold">Voet links:</span> {{$user->profileMedical->profilePain->foot_left}} </li>
                            <li><span class="bold">Voet rechts:</span> {{$user->profileMedical->profilePain->foot_right}} </li>
                            <li><span class="bold">Tenen links:</span> {{$user->profileMedical->profilePain->toes_left}} </li>
                            <li><span class="bold">Tenen rechts:</span> {{$user->profileMedical->profilePain->toes_right}} </li>
                            <li><span class="bold">Nek:</span> {{$user->profileMedical->profilePain->neck}} </li>
                            <li><span class="bold">Kaakgewricht links:</span> {{$user->profileMedical->profilePain->jaw_left}} </li>
                            <li><span class="bold">Kaakgewricht rechts:</span> {{$user->profileMedical->profilePain->jaw_right}} </li>
                            <li><span class="bold">Bovenrug:</span> {{$user->profileMedical->profilePain->lowerback}} </li>
                            <li><span class="bold">Onderrug:</span> {{$user->profileMedical->profilePain->uperback}} </li>
                            <li><span class="bold">Borst:</span> {{$user->profileMedical->profilePain->chest}} </li>
                            <li><span class="bold">Buik:</span> {{$user->profileMedical->profilePain->belly}} </li>
                        </ul>
                    </div>

                    <div class="col s6">
                        <h6>Hulpmiddelen</h6>
                        <ul>
                            <li><span class="bold">Rolstoel:</span> {{$user->profileMedical->profileWalktool->wheelchair}} </li>
                            <li><span class="bold">Elektrische rolstoel: </span>  {{$user->profileMedical->profileWalktool->elecwheelchair}} </li>
                            <li><span class="bold">Loopfiets: </span>  {{$user->profileMedical->profileWalktool->balancebike}} </li>
                            <li><span class="bold">Kruk: </span>  {{$user->profileMedical->profileWalktool->crutch}} </li>
                        </ul>

                        <h6>Brace</h6>
                        <ul>
                            <li><span class="bold">Nekkraag:</span> {{$user->profileMedical->profileBrace->neckcollar}} </li>
                            <li><span class="bold">Schouderbrace: </span>  {{$user->profileMedical->profileBrace->shoulderbrace}} </li>
                            <li><span class="bold">Drukkkledij bovenlichaam: </span>  {{$user->profileMedical->profileBrace->pressure_upper}} </li>
                            <li><span class="bold">Drukkledij onderlichaam: </span>  {{$user->profileMedical->profileBrace->pressure_under}} </li>
                            <li><span class="bold">Kniebrace: </span>  {{$user->profileMedical->profileBrace->kneebrace}} </li>
                            <li><span class="bold">Enkelbrace: </span>  {{$user->profileMedical->profileBrace->anklebrace}} </li>
                            <li><span class="bold">Steunzolen: </span>  {{$user->profileMedical->profileBrace->supportsoles}} </li>
                            <li><span class="bold">Silversplints: </span>  {{$user->profileMedical->profileBrace->silversplints}} </li>
                            <li><span class="bold">Polsbrace: </span>  {{$user->profileMedical->profileBrace->wristbrace}} </li>
                            <li><span class="bold">Korset: </span> {{$user->profileMedical->profileBrace->corset}} </li>
                            <li><span class="bold">Band lage rug: </span> {{$user->profileMedical->profileBrace->bandlowback}} </li>
                            <li><span class="bold">Steunkousen: </span> {{$user->profileMedical->profileBrace->stockings}} </li>
                        </ul>


                        <h6>Luxaties</h6>
                        <ul>
                            <li><span class="bold">Bekkengewricht:</span> {{$user->profileMedical->profileLuxation->pelvicjoint}} </li>
                            <li><span class="bold">Heup: </span>  {{$user->profileMedical->profileLuxation->hip}} </li>
                            <li><span class="bold">Knie: </span>  {{$user->profileMedical->profileLuxation->knee}} </li>
                            <li><span class="bold">Enkel: </span>  {{$user->profileMedical->profileLuxation->ankle}} </li>
                            <li><span class="bold">Middenvoetsbeentje: </span>  {{$user->profileMedical->profileLuxation->metatarsalbone}} </li>
                            <li><span class="bold">Tenen: </span>  {{$user->profileMedical->profileLuxation->toes}} </li>
                            <li><span class="bold">Onderrug: </span>  {{$user->profileMedical->profileLuxation->lowback}} </li>
                            <li><span class="bold">Bovenrug: </span>  {{$user->profileMedical->profileLuxation->highback}} </li>
                            <li><span class="bold">Ribben: </span>  {{$user->profileMedical->profileLuxation->ribs}} </li>
                            <li><span class="bold">Nek: </span> {{$user->profileMedical->profileLuxation->neck}} </li>
                            <li><span class="bold">Kaakgewricht: </span> {{$user->profileMedical->profileLuxation->jaws}} </li>
                            <li><span class="bold">Schouder: </span> {{$user->profileMedical->profileLuxation->shoulder}} </li>
                            <li><span class="bold">Elleboog: </span>  {{$user->profileMedical->profileLuxation->elbow}} </li>
                            <li><span class="bold">Pols: </span> {{$user->profileMedical->profileLuxation->wrist}} </li>
                            <li><span class="bold">Middenhandsbeentje: </span> {{$user->profileMedical->profileLuxation->metacarpal}} </li>
                            <li><span class="bold">Vingers: </span> {{$user->profileMedical->profileLuxation->fingers}} </li>
                        </ul>
                    </div>
                @endif

            @endif
        @endforeach
    @endif

    </div>





@endsection
@include('layouts.editbar',['id' => $user->id])