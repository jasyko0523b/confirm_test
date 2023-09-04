@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/inquiry.css') }}">
@endsection

@section('content')
<div class="inquiry">
    <form class="inquiry-form h-adr" action="/confirm" method="post">
        @csrf
        <input type="hidden" class="p-country-name" value="Japan">
        <h2 class="inquiry-form__tytle">お問い合わせ</h2>
        <table class="inquiry-form__table">
            <tr>
                <th class="inquiry-form__item">
                    <span class="inquiry-form__item--header required-mark">お名前</span>
                </th>
                <td>
                    <div class="inquiry-form__item">
                        <input class="inquiry-form__item--input" type="text" name="sei" id="sei" value="{{ old('sei') }}"
                        />
                        <p class="inquiry-form__item--error">
                            @if( $errors->has('sei') )
                                {{$errors->first('sei')}}
                            @endif
                        </p>
                        <p class="inquiry-form__item--example">例）山田</p>
                    </div>
                </td>
                <td>
                    <div class="inquiry-form__item">
                        <input class="inquiry-form__item--input" type="text" name="mei" id="mei" value="{{ old('mei') }}"/>
                        <p class="inquiry-form__item--error">
                            @if( $errors->has('mei') )
                                {{$errors->first('mei')}}
                            @endif
                        </p>
                        <p class="inquiry-form__item--example">例）太郎</p>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="inquiry-form__item">
                    <span class="inquiry-form__item--header required-mark">性別</span>
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
                    <span class="inquiry-form__item--header required-mark">メールアドレス</span>
                </th>
                <td colspan="2">
                    <div class="inquiry-form__item">
                        <input class="inquiry-form__item--input" type="text" name="email" autocomplete="email" value="{{ old('email') }}"/>
                        <p class="inquiry-form__item--error">
                            @if( $errors->has('email') )
                                {{$errors->first('email')}}
                            @endif
                        </p>
                        <p class="inquiry-form__item--example">例）test@example.com</p>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="inquiry-form__item">
                    <span class="inquiry-form__item--header required-mark">郵便番号</span>
                </th>
                <td colspan="2">
                    <div class="inquiry-form__item postcode--input">
                        <label for="postcode">〒</label>
                        <div class="inquiry-form__item--postcode">
                            <input class="inquiry-form__item--input p-postal-code" type="text" size="8" maxlength="8" name="postcode" id="postcode" value="{{ old('postcode') }}"/>
                            <p class="inquiry-form__item--error">
                            @if( $errors->has('postcode') )
                                {{$errors->first('postcode')}}
                            @endif
                            </p>
                            <p class="inquiry-form__item--example">例）123-4567</p>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="inquiry-form__item">
                    <span class="inquiry-form__item--header required-mark">住所</span>
                </th>
                <td colspan="2">
                    <div class="inquiry-form__item">
                        <input class="inquiry-form__item--input p-region p-locality p-street-address" type="text" name="address" autocomplete = "off" value="{{ old('address') }}"/>
                        <p class="inquiry-form__item--error">
                            @if( $errors->has('address') )
                                {{$errors->first('address')}}
                            @endif
                        </p>
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
                        <input class="inquiry-form__item--input p-extended-address" type="text" name="building_name" value="{{ old('building_name') }}"/>
                        <p class="inquiry-form__item--error">
                            @if( $errors->has('building_name') )
                                {{$errors->first('building_name')}}
                            @endif
                        </p>
                        <p class="inquiry-form__item--example">例）千駄ヶ谷マンション101</p>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="inquiry-form__item">
                    <span class="inquiry-form__item--header required-mark">ご意見</span>
                </th>
                <td colspan="2">
                    <div class="inquiry-form__item">
                        <textarea class="inquiry-form__item--textarea" name="opinion" >{{ old('opinion') }}</textarea>
                        <p class="inquiry-form__item--error">
                            @if( $errors->has('opinion') )
                                {{$errors->first('opinion')}}
                            @endif
                        </p>
                    </div>
                </td>
            </tr>
        </table>
        <button class="inquiry-form__button" type="submit">確認</button>
    </form>
</div>
@endsection

@section('js')
<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
<script type="text/javascript" src="{{ asset('js/textarea-resize.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/validation.js') }}"></script>
@endsection