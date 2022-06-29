@extends ('project1/back/layout/default')
  @section ('content')
 <div class="container" >           
 <aside class="right-side" >
    
                     <div class="table-responsive">
                                        <!-- .table - Uses sparkline charts-->
                                        <table class="table table-striped">
                                            <tr>
                                                <th>id</th>
                                                <th>User_id</th>
                                                <th>Total_Price</th>
                                                <th>Created_at</th>
                                                <th>Action</th>
                                            </tr>

                                            @foreach ($order as $orders)

                                            <tr>
                                                <td>{{$orders->id}}</td>
                                                <td>{{$orders->userid}}</td>
                                                <td>{{$orders->totalprice}}</td>
                                               <?php 
                                                 
                                                 $createdAt = Carbon::parse($orders['created_at']);
                                                         echo   $At=$createdAt->format('Y,m,d');
                                              Carbon::createFromDate(2019,02,28)->diffForHumans(); ?>
                                                <td>{{$orders->created_at}}</td>
<td><a class="btn btn-danger" 
    href="{{URL::to('')}}">Delete</a>?
 p   <a class="btn btn-danger" 
   href="{{URL::to('')}}">Edit</a></td>
                                           </tr>

                                           @endforeach
                                           
                                        

</div>                                       </table>

</aside>
</div>
@stop