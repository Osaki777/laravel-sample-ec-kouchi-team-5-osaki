@extends('layouts.default')

@section('header')
<header>
    @csrf
    <ul class="header_nav">
        <li>
          <a href="{{ route('register') }}">
            新規登録
          </a>
        </li>
    </ul>
</header>
@endsection