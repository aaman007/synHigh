@extends('layouts.app')

@section('content')
    <pre class="p-2" style="background-color:black;color:white;">
        <code>
            {{$code->body}}
        </code>
    </pre>
@endsection