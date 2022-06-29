@extends ('project1/back/layout/default')
  @section ('content')

<div class="container">
 <aside class="right-side" >


<form class="form-horizontal" method="POST" action="{{URL::to('')}}/admin/updateproduct"  enctype="multipart/form-data" >
  {{csrf_field()}}

   <div class="form-group">
    <input name="id" type="hidden" value="{{$product->id}}"></input>
    <div class="form-group">

  <div class="form-group">
    PRODUCT NAME
    <input name="productname" type="text" class="form-control" id="exampleInputEmail3" placeholder="" value="{{$product->productname}}">
  </div>
  
  <div class="form-group">
    PRODUCT CATEGORY
    <input name="productcategory" type="text" class="form-control" id="exampleInputEmail3" placeholder=""  value="{{$product->productcategory}}">
  </div>

  <div class="form-group">
    PRODUCT PRICE
    <input name="productprice" type="text" class="form-control" id="exampleInputEmail3" placeholder="" value="{{$product->productprice}}">
  </div>
 <div class="form-group">
    PRODUCT IMG
    <input name="img" type="file" class="form-control" >
  </div>
<button type="submit" class="btn btn-default">SUBMIT</button>
</form>

</aside>
</div>
@stop