@extends('layouts.main')

@section('title','ShowTime')

@section('content')
        <h1>ewhjhejwhwejh</h1>
        @if(10 > 15)
            <p>é verdade</p>
        @endif   
        
        <p>{{ $nome }}</p>

        @for($i = 2; $i < count($arr); $i++)

            <p>{{ $arr[$i] }}

        @endfor

@endsection
