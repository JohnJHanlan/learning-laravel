@extends('layouts.master')

@section('content')
    <h1>Some Content</h1>
    <p>{{ 2 == 3 ? "Hello" : "Does not equal" }}</p>
@endsection