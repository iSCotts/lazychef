@extends('core::admin.layout')

@section('title')
  Installer | Complete
@stop

@section('content')
  <div id="install-region">
    <h1>Success</h1>
    <p>Install complete.</p>
    <p>You can now <a href="{{ lazychef_url('/lazychef/login') }}">login to the admin</a></p>
  </div>
@stop
