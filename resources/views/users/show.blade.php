@extends('layouts.logged_in')

@section('content')
    <h1>{{ $title }}</h1>

    <p>{{ $user->name }} さん</p>

    <h2>【購入履歴】</h2>
    
       <style>
        h2{
            color: #77969A;
            font-size: 30px;
            background-color: #FB9966;
        }
    </style>
    
@endsection
