@extends('layout.app')
@section('title', 'Page Initial')

@section('content')

<br>

<div class="col-md-12 content-type-user">
  <div id="li-admin" class="content-user card fewPadding fewMargin text-center">
    <a href="/company/create"><li> Company <br>
    <i class="fa fa-users" aria-hidden="true"></i></li></a>
  </div>

  <div id="li-cliente" class="content-user card fewPadding fewMargin text-center">
     <a href="/user/create"><li> User <br>
    <i class="fa fa-user-plus" aria-hidden="true"></i></li></a>
  </div> 
</div>

@endsection