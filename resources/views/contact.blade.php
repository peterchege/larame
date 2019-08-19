@extends('layout.app')





@section('content')

    <h1> Contact Page </h1>
{{-- 
    @if(count($people))
    <ul>
        @foreach($people as $person)
        
        <li> {{$person}} </li>

        @endforeach


    </ul>

    @endif --}}

    {{-- PHONE NUMBER --}}

    @if(count($numbers))

    <ul>

        @foreach($numbers as $tel)
        
        <li>
            {{$tel}}
        </li>

        @endforeach

    <ul>

    @endif


@stop



@section('footer')

    <script> alert('Hello Peter')</script>

@stop