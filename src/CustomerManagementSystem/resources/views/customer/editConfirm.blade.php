@extends('layouts.master')
@section('title', '顧客管理システム')
@section('content')
<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-12">
                <h4 class="font-weight-light mt-4">編集確認</h4>

                <!-- Page Content -->
                <div class="container mt-5">
                    <!--フォーム-->
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="name" value="{{ $name }}">
                        <input type="hidden" name="address" value="{{ $address }}">
                        <input type="hidden" name="tel" value="{{ $tel }}">
                        <input type="hidden" name="email" value="{{ $email }}">

                        <!--お名前-->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">お名前</label>
                            <div class="col-sm-10">{{ $name }}</div>
                        </div>
                        <!--/お名前-->

                        <!--住所-->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">住所</label>
                            <div class="col-sm-10">{{ $address }}</div>
                        </div>
                        <!--/住所-->

                        <!--電話番号-->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">電話番号</label>
                            <div class="col-sm-10">{{ $tel }}</div>
                        </div>
                        <!--/電話番号-->

                        <!--メールアドレス-->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">メールアドレス</label>
                            <div class="col-sm-10">{{ $email }}</div>
                        </div>
                        <!--/メールアドレス-->

                        <!--ボタンブロック-->
                        <div class="form-group row mt-5">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-block">登録</button>
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