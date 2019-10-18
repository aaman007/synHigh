@extends('layouts.app')

@section('content')
    <div class="my-4 mx-4">
        <h1>Syntax Highlighter</h1>
        {!! Form::open(['action' => 'CodesController@store' , 'method' => 'POST'  , 'enctype' => 'multipart/form-data']) !!}

            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title','',['class' => 'form-control' , 'placeholder' => 'Title'])}}
            </div>

            <div class="form-group">
                    {{Form::label('body','Code')}}
                    {{Form::textarea('body','',['id' => 'article-ckeditor' ,'class' => 'form-control' , 'placeholder' => 'Enter Code'])}}
            </div>

            {{Form::submit('Higlight Now',['class' => 'btn btn-primary'])}}

        {!! Form::close() !!}
        <br>
    </div>
@endsection