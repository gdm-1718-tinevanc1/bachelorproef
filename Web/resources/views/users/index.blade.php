@extends('layouts.app')

@section('title', 'Gebruikers')


@section('content')
    <a class="btn right" href="{{ url('/users/create') }}">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Maak een nieuwe gebruiker aan
    </a>

    <form class="form" action="">
        <div class="input-field col s12 input--search">
            <input onkeydown="if(event.keyCode==13){ $('.form').submit();}" type="text" class="form-control" id="search" name="search"  value="{{$search}}" placeholder="Zoeken" >

            <select class="browser-default" class="form-control" id="role" name="role" onchange="$('.form').submit();">
                <option value="" disabled selected>Kies een rol</option>
                <option  @if('all' == $selectedRole) selected @endif value="all">Alle</option>
                @foreach($roles as $role)
                    <option  @if($role->id == $selectedRole) selected @endif value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>
            <button class="btn btn-default-sm" type="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>
    
    <h5> Gebruikers</h5>
    <hr>

    <table>
        <thead>
        <tr>
            <th class="link"><a href="?sort=lastname"> Naam </a></th>
            <th class="link"><a href="?sort=email"> Emailadres </a></th>
            <th class="link"><a href="?sort=location"> Locatie </a></th>
            <th class="link"><a href="?sort=role"> Rol </a></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>
                    {{ $user->lastname }} {{ $user->firstname }}
                </td>
  
                <td>
                    {{ $user->user->email }}
                </td>

                <td>
                 {{ $user->location->city }} {{ $user->location->country->name }}
                </td>

                <td>
                    @foreach($user->user->roles as $role)
                        {{ $role->name }}
                    @endforeach
                </td>
                
                <td>
                    <a href="/users/{{$user->id}}/delete">
                        <i class="fa fa-trash actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                <td>
                    <a href="/users/{{$user->id}}/edit">
                        <i class="fas fa-pencil-alt actionButtons" aria-hidden="true"></i>
                    </a>
                </td>

                 <td>
                     <a href="/users/{{$user->id}}">
                     <i class="fa fa-caret-right actionButtons" aria-hidden="true"></i>
                     </a>
                 </td>
             </tr>
        @endforeach
        </tbody>
    </table>

    <ul class="pagination">
        {{$users->links()}}
    </ul>
@endsection