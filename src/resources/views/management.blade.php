@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/management.css') }}">
@endsection

@section('content')
<div class="management">
    <h2 class="management__tytle">管理システム</h2>
    <div class="search">
        <form class="search-form" action="/management/search" method="get">
            <table class="search-form__table">
                <tr>
                    <th class="search-form__item">
                        <span class="search-form__item--header">お名前</span>
                    </th>
                    <td>
                        <div class="search-form__item">
                            <input
                                class="search-form__item--input" type="text"
                                name="name"
                                value="{{ old('name') }}"
                            />
                        </div>
                    </td>
                    <th class="search-form__item">
                        <span class="search-form__item--header">性別</span>
                    </th>
                    <td>
                        <div class="search-form__item">
                            <input class="search-form__item--radio" type="radio" name="gender" id="all" value="0" {{ old('gender','0') == '0' ? 'checked' : '' }}>
                            <label class="search-form__item--radio-label" for="all">全て</label>
                            <input class="search-form__item--radio" type="radio" name="gender" id="male" value="1" {{ old('gender') == '1' ? 'checked' : '' }}>
                            <label class="search-form__item--radio-label" for="male">男性</label>
                            <input class="search-form__item--radio" type="radio" name="gender" id="female" value="2" {{ old('gender') == '2' ? 'checked' : '' }}>
                            <label class="search-form__item--radio-label" for="female">女性</label>
                        </div>
                    </td>
                </tr>
                <tr class="create_at__row">
                    <th class="search-form__item">
                        <span class="search-form__item--header required">登録日</span>
                    </th>
                    <td colspan="3" class="create_at__input">
                        <div class="search-form__item">
                            <input class="search-form__item--input date__input" type="date" name="start" value="{{ old('start') }}"/>
                            <span class="create_at--hyphen">-</span>
                            <input class="search-form__item--input date__input" type="date" name="end" value="{{ old('end') }}"/>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="search-form__item">
                        <span class="search-form__item--header required">メールアドレス</span>
                    </th>
                    <td>
                        <div class="search-form__item">
                            <input class="search-form__item--input" type="text" name="email" autocomplete="email" value="{{ old('email') }}"/>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="search-form__button">
                <button class="search-form__button--reset" type="reset" onClick="location.href='/management'">リセット</button>
                <button class="search-form__button--submit" type="submit">検索</button>
            </div>
        </form>
    </div>

    <div class="opinions">
        <div class="opinions__counter">
            @if (count($opinions) >0)
                <p>全{{ $opinions->total() }}件中　{{  ($opinions->currentPage() -1) * $opinions->perPage() + 1}}-{{ (($opinions->currentPage() -1) * $opinions->perPage() + 1) + (count($opinions) -1)  }}件</p>
            @else
                <p>データがありません。</p>
            @endif
        {{ $opinions->links('pagination::bootstrap-4') }}
        </div>
        <table class="opinions__table">
            <tr>
                <th class="opinions__table--header id">ID</th>
                <th class="opinions__table--header">お名前</th>
                <th class="opinions__table--header gender">性別</th>
                <th class="opinions__table--header">メールアドレス</th>
                <th class="opinions__table--header">ご意見</th>
                <th class="opinions__table--header"></th>
            </tr>
            @foreach($opinions as $opinion)
                <tr>
                    <td class="opinions__table--item id">{{ $opinion['id'] }}</td>
                    <td class="opinions__table--item">{{ str_replace(' ', '', $opinion['fullname']) }}
                    </td>
                    <td class="opinions__table--item gender">
                        @if( $opinion['gender'] == '1' )
                            男性
                        @else
                            女性
                        @endif
                    </td>
                    <td class="opinions__table--item">{{$opinion['email']}}</td>
                    <td class="opinions__table--item opinion">{{ $opinion['opinion'] }}</td>
                    <td>
                        <form class="opinion__form--delete" action="/management/delete" method="post">
                        @method('DELETE')
                        @csrf
                            <input type="hidden" name="id" value="{{ $opinion['id'] }}">
                            <button class="opinion__button--delete" type="submit">削除</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/applyTextLimit.js') }}"></script>
@endsection
