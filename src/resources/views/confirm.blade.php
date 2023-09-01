@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm">
    <form class="confirm-form" action="/thanks" method="post">
        @csrf
        <h2 class="confirm-form__tytle">内容確認</h2>
        <table class="confirm-form__table">
            <tr>
                <th class="confirm-form__item">
                    <span class="confirm-form__item--header">お名前</span>
                </th>
                <td>
                    <div class="confirm-form__item">
                        <input class="confirm-form__item--input" type="text" name="fullname" value="{{ $confirm['fullname'] }}" disabled/>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="confirm-form__item">
                    <span class="confirm-form__item--header">性別</span>
                </th>
                <td>
                    <div class="confirm-form__item">
                        @if ( $confirm['gender'] == "1")
                            <input class="confirm-form__item--input" type="text" name="gender" value="男性" disabled/>
                        @else
                            <input class="confirm-form__item--input" type="text" name="gender" value="女性" disabled/>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <th class="confirm-form__item">
                    <span class="confirm-form__item--header">メールアドレス</span>
                </th>
                <td>
                    <div class="confirm-form__item">
                        <input class="confirm-form__item--input" type="text" name="email" value="{{ $confirm['email'] }}" disabled/>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="confirm-form__item">
                    <span class="confirm-form__item--header">郵便番号</span>
                </th>
                <td colspan="2">
                    <div class="confirm-form__item">
                        <input class="confirm-form__item--input" type="text" name="postcode" value="{{ $confirm['postcode'] }}" disabled/>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="confirm-form__item">
                    <span class="confirm-form__item--header">住所</span>
                </th>
                <td>
                    <div class="confirm-form__item">
                        <input class="confirm-form__item--input" type="text" name="address" value="{{ $confirm['address'] }}" disabled/>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="confirm-form__item">
                    <span class="confirm-form__item--header">建物名</span>
                </th>
                <td>
                    <div class="confirm-form__item">
                        <input class="confirm-form__item--input" type="text" name="building_name" value="{{ $confirm['building_name'] }}" disabled/>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="confirm-form__item">
                    <span class="confirm-form__item--header">ご意見</span>
                </th>
                <td>
                    <div class="confirm-form__item">
                        <textarea class="confirm-form__item--textarea" name="opinion" id="textarea" disabled>{{ $confirm['opinion'] }}</textarea>
                    </div>
                </td>
            </tr>
        </table>
        <button class="confirm-form__button--fix"type="button" onClick="history.back()">修正する</button>
        <button class="confirm-form__button--submit" type="submit">確認</button>
    </form>
</div>
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/textarea-resize.js') }}"></script>
@endsection