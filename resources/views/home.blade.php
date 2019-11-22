@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, animi dicta distinctio dolores enim, eos expedita
        ipsam laboriosam nemo numquam obcaecati, optio quis ratione sapiente similique sint voluptate. Assumenda, mollitia?</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, animi dicta distinctio dolores enim, eos expedita
        ipsam laboriosam nemo numquam obcaecati, optio quis ratione sapiente similique sint voluptate. Assumenda, mollitia?</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to sidebar</p>
@endsection


