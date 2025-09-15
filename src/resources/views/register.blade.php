@extends('app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="page__content">
  <div class="page__heading">
    <h2>商品登録</h2>
  </div>

  <form class="form" action="/products/register" method="post">
    @csrf

  <table class="form__table">
    <!--商品名-->
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">商品名</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="name" placeholder="商品名を入力"/>
        </div>
        <div class="form__error">
          @error('name')
            {{ $message }}
          @enderror
        </div>
      </div>
    </div>

    <!--値段-->
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">値段</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="number" name="price" placeholder="値段を入力"/>
        </div>
        <div class="form__error">
          @error('price')
            {{ $message }}
          @enderror
        </div>
      </div>
    </div>

    <!--商品画像-->
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">商品画像</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="file" id="imageUpload" name="image" accept="storage/*"/>
        </div>
        <div class="form__error">
          @error('image')
            {{ $message }}
          @enderror
        </div>
      </div>
    </div>

    <!--季節フォーム-->
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">季節</span>
        <span class="form__label--required">必須</span>
        <span class="form__label--checkbox">複数選択可</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--radio--seasons">
          <label><input type="checkbox" name="season_id[]" value=1 />春</label>
          <label><input type="checkbox" name="season_id[]" value=2 />夏</label>
          <label><input type="checkbox" name="season_id[]" value=3 />秋</label>
          <label><input type="checkbox" name="season_id[]" value=4 />冬</label>
        </div>
        <div class="form__error">
          @error('season_id')
            {{ $message }}
          @enderror
        </div>
      </div>
    </div>

    <!--商品説明入力フォーム-->
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">商品説明</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea name="description" placeholder="商品の説明を入力"></textarea>
        </div>
        <div class="form__error">
          @error('description')
            {{ $message }}
          @enderror
        </div>
      </div>
    </div>

    
    <!-- 戻る -->
    <div class="register__button">
      <a class="register__button__link" href="/products">戻る</a>
    </div>

    <div class="form__button">
      <button class="form__button-submit" type="submit">登録</button>
    </div>
  </form>
</div>
@endsection
