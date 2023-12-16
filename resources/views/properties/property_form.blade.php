@extends('layout')

@section('title', '物件登録ページ')

@section('header')
@include('header.auth_header')
@endsection

@section('content')
<main>
  <div class="container">
    <h2>物件登録</h2>
    <p><span class="red">*</span>入力必須</p>
    <!-- @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    @if (session('login_error'))
    <div class="alert alert-danger">
      {{ session('signup_error') }}
    </div>
    @endif -->
    <form method="POST" action="">
      @csrf
      <div class="form-group">
        <label for="name"><span>*</span>物件名:</label>
        <input type="text" id="name" name="name">
      </div>
      <div class="up">
        <div class="left">
          <div class="form-group">
            <label for="capital"><span>*</span>自己資本:</label>
            <input type="text" id="capital" name="capital">
            <span>円</span>
          </div>
          <div class="form-group">
            <label for="expense"><span>*</span>諸費用:</label>
            <input type="text" id="expense" name="expense">
            <span>円</span>
          </div>
          <div class="form-group">
            <label for="rent"><span>*</span>賃料:</label>
            <input type="text" id="rent" name="rent">
            <span>円</span>
          </div>
        </div>
        <div class="right">
          <div class="form-group">
            <label for="loan">借入額:</label>
            <input type="text" id="loan" name="loan">
            <span>円</span>
          </div>
          <div class="form-group">
            <label for="loan_period">借入期間:</label>
            <input type="password" id="loan_period" name="loan_period">
            <span>年</span>
          </div>
          <div class="form-group">
            <label for="fixed_expenditure">月固定支出（管理費等）:</label>
            <input type="text" id="fixed_expenditure" name="fixed_expenditure">
            <span>円</span>
          </div>
          <div class="form-group">
            <label for="repay">ローン返済月額:</label>
            <input type="text" id="repay" name="repay">
            <span>円</span>
          </div>
        </div>
      </div>
      <div class="under">
        <div class="left">
          <div class="form-group">
            <fieldset>
              <legend>その他固定収入①</legend>
              <label for="other_income_name">名称:</label>
              <input type="text" id="other_income_name" name="other_income_name">
              <select id="other_income_frequency" name="other_income_frequency">
                <option value="0">月額</option>
                <option value="1">年額</option>
              </select>
              <input type="text" id="other_income_amount" name="other_income_amount">
            </fieldset>
            <span>円</span>
          </div>
        </div>
        <div class="right">
          <div class="form-group">
          <fieldset>
              <legend>その他固定支出①</legend>
              <label for="other_expenditure_name">名称:</label>
              <input type="text" id="other_expenditure_name" name="other_expenditure_name">
              <select id="other_expenditure_frequency" name="other_expenditure_frequency">
                <option value="0">月額</option>
                <option value="1">年額</option>
              </select>
              <input type="text" id="other_expenditure_amount" name="other_expenditure_amount">
            </fieldset>
            <span>円</span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <button type="submit" id="submit-btn">物件登録</button>
      </div>
    </form>
    <div class="links">
      <div>
        <a href="{{ route('home') }}">戻る</a>
      </div>
    </div>
  </div>
</main>
@endsection