@extends('app')

@section('css')
<link rel= "stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
  <div class="page__content">
    <div class="page__heading">
      <!-- ページタイトル -->
      <h2>商品一覧</h2>

      <!-- 商品追加サイトリンク -->
      <div class="register__button">
        <a class="register__button__link" href="/products/register">＋商品を追加</a>
      </div>
    </div>

    <div class="content">

        <!-- サイドメニュー -->
        <div class="sidebar">
          <!-- 商品名検索フォーム -->
          <div class="product-name__search">
            <input type="text" name="product-name" placeholder="商品名で検索" />
          </div>

          <!-- 検索ボタン -->
          <div class="product-name__search--button">
            <button class="product-name__search--button-submit" type="submit">検索</button>
          </div>
          
          <!-- 金額並び替え -->
          <select name="sort-price" class="sort-price__products">
                <h3 class="sort-price__title">価格順で表示</h3>
                <option value="highest">高い順に表示</option>
                <option value="lowest">低い順に表示</option>
          </select>
        </div>


    </div>



  </div>
@endsection