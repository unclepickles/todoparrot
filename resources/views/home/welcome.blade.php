@extends('layouts.master')
@section('content')

    <h1>Welcome to TODOParrot</h1>
    <p>TodoParrot is great</p>
    <a href="http://www.wjgilmore.com" class="btn btn-success">W.J. Gilmore, LLC</a>
@endsection

@section('advertisement')
    @parent
    <p>
        Buy the TODOParrot productivity guide for $10!
    </p>

    @endsection