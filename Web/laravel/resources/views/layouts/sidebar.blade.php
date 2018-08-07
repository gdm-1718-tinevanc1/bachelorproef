 <ul id="slide-out" class="side-nav fixed">
        <li><a href="{{ url('/home') }}" class="waves-effect"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Dashboard</a></li>
        <li><a href="{{ url('/diseases') }}"class="waves-effect"><i class="fa fa-info fa-fw" aria-hidden="true"></i>Algemene info</a></li>
        <li><a href="{{ url('/symptoms') }}"class="waves-effect"><i class="fas fa-frown fa-fw" aria-hidden="true"></i>Klachtenprofiel</a></li>
        <li><a href="{{ url('/devices') }}" class="waves-effect"><i class="fa fa-wheelchair fa-fw" aria-hidden="true"></i>Hulpmiddelen</a></li>
        <li><a href="{{ url('/rights') }}" class="waves-effect"><i class="fa fa-gavel fa-fw" aria-hidden="true"></i>Recht op</a></li>
        <li>
                        <!-- Dropdown Trigger -->
            <a class='dropdown-trigger' href='#' data-target='dropdown1'><i class="fa fa-futbol fa-fw"></i>Therapieën<i class="fa fa-caret-down right" aria-hidden="true"></i></a>

            <!-- Dropdown Structure -->
            <ul id='dropdown1' class='dropdown-content'>
                <li style="margin-top:1px"><a href="{{ url('/manualtherapies') }}" class="waves-effect"><i class="fa fa-futbol fa-fw" aria-hidden="true"></i>Manuele therapie</a></li>
                <li><a href="{{ url('/exercisetherapies') }}" class="waves-effect"><i class="fa fa-futbol fa-fw" aria-hidden="true"></i>Oefeningstherapie</a></li>
                <li><a href="{{ url('/exercisesexamples') }}" class="waves-effect"><i class="fa fa-futbol fa-fw" aria-hidden="true"></i>Voorbeeldoefeningen</a></li>
            </ul>
    
        </li>

        <li><a href="{{ url('/practitioners') }}" class="waves-effect"><i class="fa fa-user-md fa-fw" aria-hidden="true"></i>Behandelaars</a></li>
        <li><a href="{{ url('/users') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Gebruikers</a></li>
        <li><a href="{{ url('/news') }}" class="waves-effect"><i class="fa fa-newspaper fa-fw" aria-hidden="true"></i>Nieuws</a></li>

 

         <li>
                        <!-- Dropdown Trigger -->
            <a class='dropdown-trigger' href='#' data-target='dropdown2'><i class="fa fa-check fa-fw" aria-hidden="true"></i>Types<i class="fa fa-caret-down right" aria-hidden="true"></i></a>

            <!-- Dropdown Structure -->
            <ul id='dropdown2' class='dropdown-content'>
                <li style="margin-top:1px"><a href="{{ url('/types/devices') }}" class="waves-effect"><i class="fa fa-check fa-fw" aria-hidden="true"></i>Hulpmiddelen types</a></li>
                <li><a href="{{ url('/types/practitioners') }}" class="waves-effect"><i class="fa fa-check fa-fw" aria-hidden="true"></i>Behandelaars types</a></li>
                <li><a href="{{ url('/types/agencies') }}" class="waves-effect"><i class="fa fa-check fa-fw" aria-hidden="true"></i>Instanties types</a></li>
                <li><a href="{{ url('/types/news') }}" class="waves-effect"><i class="fa fa-check fa-fw" aria-hidden="true"></i>Nieuws types</a></li>
                <li><a href="{{ url('/types/exercisesexamples') }}" class="waves-effect"><i class="fa fa-check fa-fw" aria-hidden="true"></i>Voorbeeldoefeningen types</a></li>
                <li><a href="{{ url('/types/exercisetherapies') }}" class="waves-effect"><i class="fa fa-check fa-fw" aria-hidden="true"></i>Oefeningstherapie types</a></li>
            </ul>
    
        </li>

</ul>
