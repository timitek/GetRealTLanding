@extends('layouts.app')

@section('content')
<h1 class="title">
Hello World
</h1>
<p class="subtitle">
Get started with <strong>GetRealT</strong>!
</p>

  @include('welcome.partials.contact')
  @include('welcome.partials.themePicker')
@endsection