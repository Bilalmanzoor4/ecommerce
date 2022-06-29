@extends ('project1/back/layout/default')
  @section ('content')

<div class="container">
 <aside class="right-side" >


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif








<form class="form-horizontal" method="POST" action="{{URL::to('')}}/admin/user/adduser" >
  {{csrf_field()}}
  <div class="form-group">
    Full NAME
    <input name="name" type="firstname" class="form-control" id="exampleInputEmail3" placeholder="Full name">
  </div>
  <div class="form-group">
    Email address
    <input name="email" type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
  </div>
  <div class="form-group">
    Password
    <input name="password" type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-default">Sign UP</button>
</form>

</aside>
</div>
@stop