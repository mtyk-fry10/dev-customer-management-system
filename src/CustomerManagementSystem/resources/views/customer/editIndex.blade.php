@extends('layouts.master')
@section('title', '顧客管理システム')
@section('content')
<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-12">
                <h4 class="font-weight-light mt-4">編集</h4>

                <!-- Page Content -->
                <div class="container mt-5">
                    <!--フォーム-->
                    <form action="" method="post" class="needs-validation" novalidate>
                        {{ csrf_field() }}
                        {{ method_field('patch') }}

                        <!--お名前-->
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">お名前</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{ $customer->name }}" class="form-control @if($errors->has('name')) is-invalid @endif" id="inputName" placeholder="山田　太郎" required>
                                @if($errors->has('name'))
                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                @else
                                <div class="invalid-feedback">必須項目です</div>
                                <!--HTMLバリデーション-->
                                @endif
                            </div>
                        </div>
                        <!--/お名前-->

                        <!--住所-->
                        <div class="form-group row">
                            <label for="inputTel" class="col-sm-2 col-form-label">住所</label>
                            <div class="col-sm-10">
                                <input type="address" name="address" value="{{ $customer->address }}" class="form-control @if($errors->has('address')) is-invalid @endif" id="inputAddress" placeholder="〒100-0013 東京都千代田区霞が関2丁目1-1" required>
                                @if($errors->has('address'))
                                <div class="invalid-feedback">{{ $errors->first('address') }}</div>
                                @else
                                <div class="invalid-feedback">必須項目です</div>
                                <!--HTMLバリデーション-->
                                @endif
                            </div>
                        </div>
                        <!--/住所-->

                        <!--電話番号-->
                        <div class="form-group row">
                            <label for="inputTel" class="col-sm-2 col-form-label">電話番号</label>
                            <div class="col-sm-10">
                                <input type="tel" name="tel" value="{{ $customer->tel }}" class="form-control @if($errors->has('tel')) is-invalid @endif" id="inputTel" placeholder="080-1111-2222" required>
                                @if($errors->has('tel'))
                                <div class="invalid-feedback">{{ $errors->first('tel') }}</div>
                                @else
                                <div class="invalid-feedback">必須項目です</div>
                                <!--HTMLバリデーション-->
                                @endif
                            </div>
                        </div>
                        <!--/電話番号-->

                        <!--メールアドレス-->
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">メールアドレス</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" value="{{ $customer->email }}" class="form-control @if($errors->has('email')) is-invalid @endif" id="inputEmail" placeholder="yamada@laraweb.net" required>
                                @if($errors->has('email'))
                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                @else
                                <div class="invalid-feedback">必須項目です</div>
                                <!--HTMLバリデーション-->
                                @endif
                            </div>
                        </div>
                        <!--/メールアドレス-->

                        <!--ボタンブロック-->
                        <div class="form-group row mt-5">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-block">確認</button>
                            </div>
                        </div>
                        <!--/ボタンブロック-->

                    </form>
                    <!--/フォーム-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection