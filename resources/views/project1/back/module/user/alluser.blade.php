@extends ('project1/back/layout/default')
  @section ('content')
 <div class="container" >
 <aside class="right-side" >
    
                     <div class="table-responsive">
                                        <!-- .table - Uses sparkline charts-->
                                        <table class="table table-striped">
                                            <tr>
                                                <th>id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                            
                                            @foreach ($users as $user)

                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
 <td><a class="btn btn-danger" 
    href="{{URL::to('')}}/admin/deluser/{{$user->id}}">Delete</a>
    <a class="btn btn-danger" 
    href="{{URL::to('')}}/admin/edituser/{{$user->id}}">Edit</a></td>
                                           </tr>

                                           @endforeach

</div>                                       </table>

</aside>
</div>
@stop