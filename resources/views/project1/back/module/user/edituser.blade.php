@extends ('project1/back/layout/default')
  @section ('content')

<div class="container">
 <aside class="right-side" >


<form class="form-horizontal" method="POST" action="{{URL::to('')}}/admin/updateuser" >

  {{csrf_field()}}
  <div class="form-group">
    <input name="id" type="hidden" value="{{$user->id}}"></input>
    Full NAME
    <input value="{{$user->name}}" name="name" type="firstname" class="form-control" id="exampleInputEmail3" placeholder="Full name">
  </div>
  <div class="form-group">
    Email address
    <input value="{{$user->email}}" name="email" type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
  </div>
  <div class="form-group">
    Password
    <input value="{{$user->password}}" name="password" type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
  </div>

  <button  type="submit" class="btn btn-default">Sign UP</button>
</form>

</aside>
</div>
@stop