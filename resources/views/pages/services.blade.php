@extends('pages.layouts.app')

@section('content')

        @if(count($users)> 0)
         <ul class="list-group">
                  <table class="table table-hover">

                                 <thead>

                                  <th>Id</th>
                                  <th>Name</th>
                                  <th>Email</th>

                                </thead>

                                 <tbody>
                                @foreach($users as $user)

                               
                                 <tr>

                                 <td>{{$user->id}} </td>
                                <td><a href="profiles/{{$user->id}}">{{$user->name}}</a></td>
                                 <td>{{$user->email}} </td>
                              
                                 </tr>
                                
                                
                     @endforeach
                     </tbody>
                   </table>
                  </ul>
                  @else 
                  <p>No users in the database</p>
                @endif
        

@endsection
  

