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
                        {{ $confirm['sei'] }} {{$confirm['mei']}}
                        <input type="hidden" name="sei" value="{{ $confirm['sei'] }}"/>
                        <input type="hidden" name="mei" value="{{ $confirm['mei'] }}"/>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="confirm-form__item">
                    <span class="confirm-form__item--header">性別</span>
                </th>
                <td>
                    <div class="confirm-form__item">
                        <input type="hidden" name="gender" value="{{ $confirm['gender'] }}"/>
                        @if ( $confirm['gender'] == "1" )
                            男性
                        @else
                            女性
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
                        {{ $confirm['email'] }}
                        <input type="hidden" name="email" value="{{ $confirm['email'] }}"/>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="confirm-form__item">
                    <span class="confirm-form__item--header">郵便番号</span>
                </th>
                <td colspan="2">
                    <div class="confirm-form__item">
                        {{ mb_convert_kana($confirm['postcode'], "na")}}
                        <input type="hidden" name="postcode" value="{{ $confirm['postcode'] }}"/>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="confirm-form__item">
                    <span class="confirm-form__item--header">住所</span>
                </th>
                <td>
                    <div class="confirm-form__item">
                        {{ mb_convert_kana($confirm['address'], "na")}}
                        <input type="hidden" name="address" value="{{ $confirm['address'] }}"/>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="confirm-form__item">
                    <span class="confirm-form__item--header">建物名</span>
                </th>
                <td>
                    <div class="confirm-form__item">
                        {{ mb_convert_kana($confirm['building_name'], "na")}}
                        <input type="hidden" name="building_name" value="{{ $confirm['building_name'] }}"/>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="confirm-form__item">
                    <span class="confirm-form__item--header">ご意見</span>
                </th>
                <td>
                    <div class="confirm-form__item">
                        {{ $confirm['opinion'] }}
                        <input type="hidden" name="opinion" value="{{ $confirm['opinion'] }}"/>
                    </div>
                </td>
            </tr>
        </table>
        <button class="confirm-form__button--fix" type="button" onClick="history.back()">修正する</button>
        <button class="confirm-form__button--submit" type="submit">確認</button>
    </form>
</div>
@endsection