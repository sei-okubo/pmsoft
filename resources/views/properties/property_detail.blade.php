@extends('layout')

@section('title', '物件詳細ページ')

@section('header')
@include('header')
@endsection

@section('content')
<main>
  <div class="container">
    @if (Auth::user()->id === $property->user_id)
    <h2>物件詳細</h2>
    <div>
      <div class="form-group">
        <h3>物件名:</h3>
        <p>{{ $property->property_name }}</p>
      </div>
      <div class="up">
        <div class="left">
          <div class="form-group">
            <h3>自己資本:</h3>
            <p>{{ $property->capital }}<span>円</span></p>
          </div>
          <div class="form-group">
            <h3>諸費用:</h3>
            <p>{{ $property->expense }}<span>円</span></p>
          </div>
          <div class="form-group">
            <h3>賃料:</h3>
            <p>{{ $property->rent }}<span>円</span></p>
          </div>
          <div class="form-group">
            <h3>月固定支出（管理費等）:</h3>
            <p>{{ $property->fixed_expenditure }}<span>円</span></p>
          </div>
        </div>
        <div class="right">
          <div class="form-group">
            <h3>借入額:</h3>
            <p>{{ $property->loan }}<span>円</span></p>
          </div>
          <div class="form-group">
            <h3>借入期間:</h3>
            <p>{{ $property->loan_period }}<span>年</span></p>
          </div>
          <div class="form-group">
            <h3>金利:</h3>
            <p>{{ $property->interest }}<span>％</span></p>
          </div>
          <div class="form-group">
            <h3>ローン返済月額:</h3>
            <p>{{ $property->repay }}<span>円</span></p>
          </div>
        </div>
      </div>
      <div class="under">
        <div class="left">
          <div class="income_wrapper">
          </div>
          <div>
            <input type="button" id="add_income_btn" value="その他固定収入を追加する">
          </div>
        </div>
        <div class="right">
          <div class="expenditure_wrapper"></div>
          <div>
            <input type="button" id="add_expenditure_btn" value="その他固定支出を追加する">
          </div>
        </div>
      </div>
    </div>
    <div class="links">
      <div>
        <a href="{{ route('home') }}">戻る</a>
      </div>
    </div>
    @else
    <div class="alert">
      <p>所有者ではありません</p>
    </div>
    <div class="links">
      <div>
        <a href="{{ route('home') }}">戻る</a>
      </div>
    </div>
    @endif
  </div>
</main>
@endsection