@extends('layout')

@section('title', '物件登録ページ')

@section('header')
@include('header')
@endsection

@section('content')
<main>
  @if (session('error'))
    <script>
      $(function(){
        toastr.error('{{ session('error') }}');
      });
    </script>
  @endif
  <div class="container">
    <h2>物件登録</h2>
    <p><span class="red">*</span>入力必須</p>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form method="POST" action="{{ route('storeProperty') }}">
      @csrf
      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
      <div class="form-group">
        <label for="property_name"><span>*</span>物件名:</label>
        <input type="text" id="property_name" name="property_name">
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
          <div class="form-group">
            <label for="fixed_expenditure">月固定支出（管理費等）:</label>
            <input type="text" id="fixed_expenditure" name="fixed_expenditure" value="0">
            <span>円</span>
          </div>
        </div>
        <div class="right">
          <div class="form-group">
            <label for="loan">借入額:</label>
            <input type="text" id="loan" name="loan" value="0">
            <span>円</span>
          </div>
          <div class="form-group">
            <label for="loan_period">借入期間:</label>
            <input type="text" id="loan_period" name="loan_period" value="0">
            <span>年</span>
          </div>
          <div class="form-group">
            <label for="interest">金利:</label>
            <input type="text" id="interest" name="interest" value="0">
            <span>％</span>
          </div>
          <div class="form-group">
            <label for="repay">ローン返済月額:</label>
            <input type="text" id="repay" name="repay" value="0">
            <span>円</span>
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