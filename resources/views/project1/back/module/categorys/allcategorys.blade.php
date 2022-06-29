@extends ('project1/back/layout/default')
  @section ('content')
 <div class="container" >
 <aside class="right-side" >
    
                     <div class="table-responsive">
                                        <!-- .table - Uses sparkline charts-->
                                        <table class="table table-striped">
                                            <tr>
                                                <th>id</th>
                                                <th>CATEGORY VALUE</th>
                                                <th>CATEGORY NAME</th>
                                                <th>Action</th>
                                            </tr>
                                            
                                               @foreach ($category as $categorys)

                                            <tr>
                                                <td>{{$categorys->id}}</td>
                                                <td>{{$categorys->categoryvalue}}</td>
                                                <td>{{$categorys->categoryname}}</td>
<td><a class="btn btn-danger" 
    href="{{URL::to('')}}/admin/delcategory/{{$categorys->id}}">Delete</a>
    <a class="btn btn-danger" 
   href="{{URL::to('')}}/admin/editcategory/{{$categorys->id}}">Edit</a></td>
                                           </tr>

                                           @endforeach
                                        

</div>                                       </table>

</aside>
</div>
@stop