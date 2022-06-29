@extends ('project1/back/layout/default')
  @section ('content')

<div class="container">
 <aside class="right-side" >


<form class="form-horizontal" method="POST" action="{{URL::to('')}}/admin/updatecategory" >

  {{csrf_field()}}
  <div class="form-group">
    <input name="id" type="hidden" value="{{$category->id}}"></input>
    <div class="form-group">
    Category value
    <input value="{{$category->categoryvalue}}" name="categoryvalue" type="" class="form-control" id="exampleInputEmail3" >
  </div>


    Category Name
    <input value="{{$category->categoryname}}" name="categoryname" type="" class="form-control" id="exampleInputEmail3" >
  </div>
  
  <button  type="submit" class="btn btn-default">Submit</button>
</form>

</aside>
</div>
@stop