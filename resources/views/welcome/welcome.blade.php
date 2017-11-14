@extends('layouts.app')

@section('content')

<div v-if="currentPage === 'contact'">
    @include('welcome.partials.contact')
</div>
<div v-if="currentPage === 'products'">
    @include('welcome.partials.products')
</div>
<div v-if="currentPage === 'theme'">
    @include('welcome.partials.theme')
</div>
<div v-if="currentPage === 'file'">
    @include('welcome.partials.file')
</div>
<div v-if="currentPage === 'images'">
    @include('welcome.partials.images')
</div>
<div v-if="currentPage === 'blogs'">
    @include('welcome.partials.blogs')
</div>
<div v-if="currentPage === 'confirmation'">
    @include('welcome.partials.confirmation')
</div>

@endsection