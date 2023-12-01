@extends('layouts.profile')

@section('title', 'プロフィール作成') {{-- タイトルを設定 --}}

@section('content')
    <h1>プロフィール作成フォーム</h1>

    <form method="POST" action="{{ route('admin.profile.create') }}">
        @csrf

        <div>
            <label for="name">氏名:</label>
            <input type="text" id="name" name="name">
        </div>

        <div>
            <label for="gender">性別:</label>
            <input type="text" id="gender" name="gender">
        </div>

        <div>
            <label for="hobby">趣味:</label>
            <input type="text" id="hobby" name="hobby">
        </div>

        <div>
            <label for="introduction">自己紹介欄:</label>
            <textarea id="introduction" name="introduction"></textarea>
        </div>

        <div>
            <button type="submit">送信</button>
        </div>
    </form>
@endsection