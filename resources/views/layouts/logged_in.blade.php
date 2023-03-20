@extends('layouts.default')

@section('header')
<header>
	<ul class="header_nav navbar-light bg-light">
		<li>こんにちは、{{ Auth::user()->name }}さん！</li>
			<li>
				<a href="{{ route('users.show', Auth::user()) }}">
					プロフィール
				</a>
			</li>
			<li>
				<form action="{{ route('logout') }}" method="POST">
					@csrf
					<input type="submit" value="ログアウト">
				</form>
			</li>
			<li>
				<form class="search">
					<div class="input-group">
						<input class="form-control" type="text" name="keyword" placeholder="キーワード検索">
						<span class="input-group-append">
							<input class="btn btn-outline-secondary" type="submit" value="検索" >
						</span>
					</div>
				</form>	
			</li>
		</ul>
</header>
@endsection