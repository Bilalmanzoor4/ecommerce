@extends ('project1/back/layout/default')
  @section ('content')

<div class="container">
 <aside class="right-side" >


<form class="form-horizontal" method="POST" action="{{URL::to('')}}/addcategorys" >
  {{csrf_field()}}
  <div class="form-group">
    CATEGOEY VALUE
    <input name="categoryvalue" type="category-value" class="form-control" id="exampleInputEmail3" placeholder="CATEGORY VALUE">
  </div>
  <div class="form-group">
    CATEGORY NAME
    <input name="categoryname" type="category-name" class="form-control" id="exampleInputEmail3" placeholder="CATEGORY NAME">
  </div>
  
    <button type="submit" class="btn btn-default">SUBMIT</button>
</form>

</aside>
</div>
@stop