@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks">
    <div class="thanks__message">
        <p class="thanks__message--text">
            ご意見いただきありがとうございました。
        </p>
        <a class="thanks__message--button" href="/">トップページへ</a>
    </div>
</div>
@endsection
