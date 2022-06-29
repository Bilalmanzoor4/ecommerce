@extends ('project1/back/layout/default')
  @section ('content')
 <div class="container" >
 <aside class="right-side" >
    
                     <div class="table-responsive">
                                        <!-- .table - Uses sparkline charts-->
                                        <table class="table table-striped">
                                            <tr>
                                                <th>id</th>
                                                <th>PRODUCT NAME</th>
                                                <th>PRODUCT CATEGORY</th>
                                                <th>PRODUCT PRICE</th>
                                                <th>PRODUCT IMAGE</th>
                                                <th>Action</th>
                                            </tr>

                                            @foreach ($product as $products)

                                            <tr>
                                                <td>{{$products->id}}</td>
                                                <td>{{$products->productname}}</td>
                                                <td>{{$products->productcategory}}</td>
                                                <td>{{$products->productprice}}</td>
                                                <td> <img src="{{$products->img}}" 
                                                   height="50px" width="50px" /></td>
<td><a class="btn btn-danger" 
    href="{{URL::to('')}}/admin/delproduct/{{$products->id}}">Delete</a>
    <a class="btn btn-danger" 
   href="{{URL::to('')}}/admin/editproduct/{{$products->id}}">Edit</a></td>
                                           </tr>

                                           @endforeach
                                           
                                        

</div>                                       </table>

</aside>
</div>
@stop