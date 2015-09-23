@extends('layouts.master')
@section('content')
    <h1>Contact TodoParrot</h1>
    @include('partials.error')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    {!! Form::open(array('route'=>'contact_store', 'class'=>'form')) !!}
    <div class="form-group">
        {!! Form::label('name', 'Your Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Your Name']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Your Email:') !!}
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder'=>'Your Email']) !!}
    </div>
    <!---  Field --->
    <div class="form-group">
        {!! Form::label('message', 'Your Message:') !!}
        {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder'=>'']) !!}
    </div>
    <!---  Field --->
    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    @endsection