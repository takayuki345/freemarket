@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
    <div class="register__wrapper">
        <h2 class="register__title">会員登録</h2>
        <div class="register__container">
            <form class="register__form" action="/register" method="post">
                @csrf
                <div class="form-group">
                    <label>ユーザー名</label>
                    <input type="text" name="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="error">
                            <ul>
                                <li>{{ $message }}</li>
                            </ul>
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>メールアドレス</label>
                    <input type="text" name="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="error">
                            <ul>
                                <li>{{ $message }}</li>
                            </ul>
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input type="password" name="password">
                    @error('password')
                        <div class="error">
                            <ul>
                                <li>{{ $message }}</li>
                            </ul>
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirmation">確認用パスワード</label>
                    <input type="password" name="password_confirmation">
                </div>
                <div class="form-group">
                    <button type="submit">登録する</button>
                </div>
            </form>
            <div class="link">
                <a href="/login">ログインはこちら</a>
            </div>
        </div>
    </div>
@endsection
