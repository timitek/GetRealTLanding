@extends('layouts.app')

@section('content')

<div v-if="currentPage === 'contact'">
    @include('welcome.partials.contact')
</div>
<div v-if="currentPage === 'theme'">
    @include('welcome.partials.theme')
</div>
<div v-if="currentPage === 'file'">
    @include('welcome.partials.file')
</div>

@endsection