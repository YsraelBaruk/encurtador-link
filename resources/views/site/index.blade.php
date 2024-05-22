@extends('layouts.basic')

@section('title', 'Página inicial')

@section('content')
    @component('layouts._components.menu_site')
    @endcomponent

    @component('layouts._components.form_contact')    
    @endcomponent
@endsection