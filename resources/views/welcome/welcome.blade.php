@extends('layouts.app')

@section('content')
<h1 class="title">
Hello World
</h1>
<p class="subtitle">
Get started with <strong>GetRealT</strong>!
</p>


<div v-if="currentPage === 'contact'">
    @include('welcome.partials.contact')
</div>
<div v-if="currentPage === 'theme'">
    @include('welcome.partials.theme')
</div>
<div v-if="currentPage === 'confirm'">
    @include('welcome.partials.confirm')
</div>

@endsection