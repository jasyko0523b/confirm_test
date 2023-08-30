@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/inquiry.css') }}">
@endsection

@section('content')
<div class="inquiry">
    <form class="inquiry-form">
        <h2 class="inquiry-form__tytle">お問い合わせ</h2>
        <table class="inquiry-form__table">
            <tr>
                <th class="inquiry-form__item">
                    <span class="inquiry-form__item--header required">お名前</span>
                </th>
                <td>
                    <div class="inquiry-form__item">
                        <input class="inquiry-form__item--input" type="text" name="sei"/>
                    </div>
                </td>
                <td>
                    <div class="inquiry-form__item">
                        <input class="inquiry-form__item--input" type="text" name="mei"/>
                    </div>
                </td>
            </tr>
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
                        <input class="inquiry-form__item--radio" type="radio" name="sex" value="male" checked />
                        <label class="inquiry-form__item--radio-label" for="male">男性</label>
                        <input class="inquiry-form__item--radio" type="radio" name="sex" value="female"/>
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
                        <input class="inquiry-form__item--input" type="text" name="email"/>
                    </div>
                </td>
            </tr>
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
                    <div class="inquiry-form__item">
                        <input class="inquiry-form__item--input" type="text" name="address_code"/>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2">
                    <div class="inquiry-form__item">
                        <p class="inquiry-form__item--example">例）test@123-4567</p>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="inquiry-form__item">
                    <span class="inquiry-form__item--header required">住所</span>
                </th>
                <td colspan="2">
                    <div class="inquiry-form__item">
                        <input class="inquiry-form__item--input" type="text" name="address_1"/>
                    </div>
                </td>
            </tr>
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
                        <input class="inquiry-form__item--input" type="text" name="address_2"/>
                    </div>
                </td>
            </tr>
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
                        <textarea class="inquiry-form__item--textarea" name="opinion"></textarea>
                    </div>
                </td>
            </tr>
        </table>
        <button class="inquiry-form__button">確認</button>
    </form>
</div>
@endsection