@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/inquiry.css') }}">
@endsection

@section('content')
<div class="inquiry">
    <form class="inquiry-form" action="/confirm" method="post">
        @csrf
        <h2 class="inquiry-form__tytle">お問い合わせ</h2>
        <table class="inquiry-form__table">
            <tr>
                <th class="inquiry-form__item">
                    <span class="inquiry-form__item--header required">お名前</span>
                </th>
                <td>
                    <div class="inquiry-form__item">
                        <input
                            class="inquiry-form__item--input" type="text"
                            name="sei"
                            value="{{ old('sei') }}"
                        />
                    </div>
                </td>
                <td>
                    <div class="inquiry-form__item">
                        <input class="inquiry-form__item--input" type="text" name="mei" value="{{ old('mei') }}"/>
                    </div>
                </td>
            </tr>
            @if( $errors->has('sei') || $errors->has('mei'))
            <tr>
                <td></td>
                <td>
                    <div class="inquiry-form__item">
                        <p class="inquiry-form__item--error">{{$errors->first('sei')}}</p>
                    </div>
                </td>
                <td>
                    <div class="inquiry-form__item">
                        <p class="inquiry-form__item--error">{{$errors->first('mei')}}</p>
                    </div>
                </td>
            </tr>
            @endif
            <tr>
                <td></td>
                <td>
                    <div class="inquiry-form__item">
                        <p class="inquiry-form__item--example">例）山田</p>
                    </div>
                </td>
                <td>
                    <div class="inquiry-form__item">
                        <p class="inquiry-form__item--example">例）太郎</p>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="inquiry-form__item">
                    <span class="inquiry-form__item--header required">性別</span>
                </th>
                <td colspan="2">
                    <div class="inquiry-form__item">
                        <input class="inquiry-form__item--radio" type="radio" name="gender" id="male" value="1" {{ old('gender','1') == '1' ? 'checked' : '' }}>
                        <label class="inquiry-form__item--radio-label" for="male">男性</label>
                        <input class="inquiry-form__item--radio" type="radio" name="gender" id="female" value="2" {{ old('gender') == '2' ? 'checked' : '' }}>
                        <label class="inquiry-form__item--radio-label" for="female">女性</label>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="inquiry-form__item">
                    <span class="inquiry-form__item--header required">メールアドレス</span>
                </th>
                <td colspan="2">
                    <div class="inquiry-form__item">
                        <input class="inquiry-form__item--input" type="text" name="email" autocomplete="email" value="{{ old('email') }}"/>
                    </div>
                </td>
            </tr>
            @if( $errors->has('email') )
            <tr>
                <td></td>
                <td colspan="2">
                    <div class="inquiry-form__item">
                        <p class="inquiry-form__item--error">{{$errors->first('email')}}</p>
                    </div>
                </td>
            </tr>
            @endif
            <tr>
                <td></td>
                <td colspan="2">
                    <div class="inquiry-form__item">
                        <p class="inquiry-form__item--example">例）test@example.com</p>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="inquiry-form__item">
                    <span class="inquiry-form__item--header required">郵便番号</span>
                </th>
                <td colspan="2">
                    <div class="inquiry-form__item postcode--input">
                        <label for="postcode">〒</label>
                        <input class="inquiry-form__item--input" type="text" name="postcode" id="postcode" value="{{ old('postcode') }}"/>
                    </div>
                </td>
            </tr>
            @if( $errors->has('postcode') )
            <tr>
                <td></td>
                <td colspan="2">
                    <div class="inquiry-form__item postcode--error">
                        <p class="inquiry-form__item--error">{{$errors->first('postcode')}}</p>
                    </div>
                </td>
            </tr>
            @endif
            <tr>
                <td></td>
                <td colspan="2">
                    <div class="inquiry-form__item postcode--example">
                        <p class="inquiry-form__item--example">例）123-4567</p>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="inquiry-form__item">
                    <span class="inquiry-form__item--header required">住所</span>
                </th>
                <td colspan="2">
                    <div class="inquiry-form__item">
                        <input class="inquiry-form__item--input" type="text" name="address" autocomplete = "off" value="{{ old('address') }}"/>
                    </div>
                </td>
            </tr>
            @if( $errors->has('address') )
            <tr>
                <td></td>
                <td colspan="2">
                    <div class="inquiry-form__item">
                        <p class="inquiry-form__item--error">{{$errors->first('address')}}</p>
                    </div>
                </td>
            </tr>
            @endif
            <tr>
                <td></td>
                <td colspan="2">
                    <div class="inquiry-form__item">
                        <p class="inquiry-form__item--example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="inquiry-form__item">
                    <span class="inquiry-form__item--header">建物名</span>
                </th>
                <td colspan="2">
                    <div class="inquiry-form__item">
                        <input class="inquiry-form__item--input" type="text" name="building_name" value="{{ old('building_name') }}"/>
                    </div>
                </td>
            </tr>
            @if( $errors->has('building') )
            <tr>
                <td></td>
                <td colspan="2">
                    <div class="inquiry-form__item">
                        <p class="inquiry-form__item--error">{{$errors->first('building')}}</p>
                    </div>
                </td>
            </tr>
            @endif
            <tr>
                <td></td>
                <td colspan="2">
                    <div class="inquiry-form__item">
                        <p class="inquiry-form__item--example">例）千駄ヶ谷マンション101</p>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="inquiry-form__item">
                    <span class="inquiry-form__item--header required">ご意見</span>
                </th>
                <td colspan="2">
                    <div class="inquiry-form__item">
                        <textarea class="inquiry-form__item--textarea auto-resize" name="opinion">{{ old('opinion') }}</textarea>
                    </div>
                </td>
            </tr>
            @if( $errors->has('opinion') )
            <tr>
                <td></td>
                <td colspan="2">
                    <div class="inquiry-form__item">
                        <p class="inquiry-form__item--error">{{$errors->first('opinion')}}</p>
                    </div>
                </td>
            </tr>
            @endif

        </table>
        <button class="inquiry-form__button" type="submit">確認</button>
    </form>
</div>
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/textarea-resize.js') }}"></script>
@endsection