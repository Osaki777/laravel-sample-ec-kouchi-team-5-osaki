@extends('layouts.logged_in')

@section('content')
    <h1>{{ $title }}</h1>

    <dl>
        <dt>商品名</dt>
        <dd>{{ $item->name }}</dd>
        <dt>画像</dt>
        <dd class="item_image">
            @if($item->image !== '')
                <img src="{{ secure_asset('storage/item_photos/' . $item->image) }}">
            @else
                <img src="{{ secure_asset('images/no_image.png') }}">
            @endif
            @if($item->user_id === Auth::user()->id)
                <a href="{{ route('items.edit_image', $item) }}">
                    画像を変更
                </a>
            @endif
        </dd>
        <dt>カテゴリ</dt>
        <dd>{{ $item->category->name }}</dd>
        <dt>価格</dt>
        <dd>{{ $item->price }}円</dd>
        <dt>説明</dt>
        <dd>{{ $item->description }}</dd>
    </dl>
    <a href="{{ route('items.confirm', $item) }}">
        購入する
    </a>
@endsection