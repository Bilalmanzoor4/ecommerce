@extends ('project1/back/layout/default')
  @section ('content')
 <div class="container" >
 <aside class="right-side" >
    
                     <div class="table-responsive">
                                        <!-- .table - Uses sparkline charts-->
                                        <table class="table table-striped">
                                            <tr>
                                                <th>id</th>
                                                <th>order_id</th>
                                                <th>product_id</th>
                                                <th>price</th>
                                                <th>quantity</th>
                                                <th>Total_Price</th>
                                                <th>Created_at</th>
                                                <th>Action</th>
                                            </tr>

                                            @foreach ($orderdetail as $orderdetails)

                                            <tr>
                                                <td>{{$orderdetails->id}}</td>
                                                <td>{{$orderdetails->orderid}}</td>
                                                <td>{{$orderdetails->productid}}</td>
                                                <td>{{$orderdetails->price}}</td>
                                                <td>{{$orderdetails->quantity}}</td>
                                                <td>{{$orderdetails->totalprice}}</td>
                                                <td>{{$orderdetails->created_at}}</td>
<td><a class="btn btn-danger" 
    href="{{URL::to('')}}">Delete</a>
    <a class="btn btn-danger" 
   href="{{URL::to('')}}">Edit</a></td>
                                           </tr>

                                           @endforeach
                                           
                                        

</div>                                       </table>

</aside>
</div>
@stop