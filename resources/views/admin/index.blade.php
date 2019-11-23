@extends('layouts.app')

@section('content')
    <h1>admin</h1>
    @if (count($admin) > 1)
        
   
    @foreach ($collection as $item)
          <div class="well">
              <h3>{{$admin->login}}</h3>
              <small>zaher {{$admin->created_at}}</small>
          </div>
    @endforeach ($admin as admin)
       
    @else
        <p>no administrateur</p>
    @endif
    @endif   
    
@endsection