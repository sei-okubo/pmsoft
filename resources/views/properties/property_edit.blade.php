@extends('layout')

@section('title', '物件編集ページ')

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
    <h2>物件編集</h2>
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
    <form method="POST" action="{{ route('exeEditProperty') }}">
      @method('PATCH')
      @csrf
      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
      <input type="hidden" name="property_id" value="{{ $property->id }}">
      <div class="form-group">
        <label for="property_name"><span>*</span>物件名:</label>
        <input type="text" id="property_name" name="property_name" value="{{ $property->property_name }}">
      </div>
      <div class="up">
        <div class="left">
          <div class="form-group">
            <label for="capital"><span>*</span>自己資本:</label>
            <input type="text" id="capital" name="capital"  value="{{ $property->capital }}">
            <span>円</span>
          </div>
          <div class="form-group">
            <label for="expense"><span>*</span>諸費用:</label>
            <input type="text" id="expense" name="expense"  value="{{ $property->expense }}">
            <span>円</span>
          </div>
          <div class="form-group">
            <label for="rent"><span>*</span>賃料:</label>
            <input type="text" id="rent" name="rent"  value="{{ $property->rent }}">
            <span>円</span>
          </div>
          <div class="form-group">
            <label for="fixed_expenditure">月固定支出（管理費等）:</label>
            <input type="text" id="fixed_expenditure" name="fixed_expenditure" value="{{ $property->fixed_expenditure }}">
            <span>円</span>
          </div>
        </div>
        <div class="right">
          <div class="form-group">
            <label for="loan">借入額:</label>
            <input type="text" id="loan" name="loan" value="{{ $property->loan }}">
            <span>円</span>
          </div>
          <div class="form-group">
            <label for="loan_period">借入期間:</label>
            <input type="text" id="loan_period" name="loan_period" value="{{ $property->loan_period }}">
            <span>年</span>
          </div>
          <div class="form-group">
            <label for="interest">金利:</label>
            <input type="text" id="interest" name="interest" value="{{ $property->interest }}">
            <span>％</span>
          </div>
          <div class="form-group">
            <label for="repay">ローン返済月額:</label>
            <input type="text" id="repay" name="repay" value="{{ $property->repay }}">
            <span>円</span>
          </div>
        </div>
      </div>
      <div class="under">
        <div class="left">
          <div class="income_wrapper">
          <?php $i = 1; ?>
            @foreach($incomes as $income)
            <div class="form-group income">
              <input type="hidden" name="other_income_id[]" value="{{ $income->id }}">
              <fieldset>
                <legend>その他固定収入 ({{ $i }})</legend>
                <label for="">名前</label>
                <input type="text" class="other_income_name" name="other_income_name[]" value="{{ $income->income_name }}">
                <select class="other_income_frequency" name="other_income_frequency[]">
                  <option value="0">-- 選択してください --</option>
                  @if($income->frequency === 1)
                  <option value="1" selected>月額</option>
                  <option value="2">年額</option>
                  @else
                  <option value="1">月額</option>
                  <option value="2" selected>年額</option>
                  @endif
                </select>
                <input type="text" name="other_income_amount[]" class="other_income_amount" value="{{ $income->amount }}">
              </fieldset>
              <span>円</span>
            </div>
            <?php $i++; ?>
            @endforeach
          </div>
        </div>
        <div class="right">
          <div class="expenditure_wrapper">
          <?php $i = 1; ?>
            @foreach($expenditures as $expenditure)
            <div class="form-group expenditure">
            <input type="hidden" name="other_expenditure_id[]" value="{{ $expenditure->id }}">
              <fieldset>
                <legend>その他固定支出 ({{ $i }})</legend>
                <label for="">名前</label>
                <input type="text" class="other_expenditure_name" name="other_expenditure_name[]" value="{{ $expenditure->expenditure_name }}">
                <select class="other_expenditure_frequency" name="other_expenditure_frequency[]">
                  <option value="0">-- 選択してください --</option>
                  @if($expenditure->frequency === 1)
                  <option value="1" selected>月額</option>
                  <option value="2">年額</option>
                  @else
                  <option value="1">月額</option>
                  <option value="2" selected>年額</option>
                  @endif
                </select>
                <input type="text" name="other_expenditure_amount[]" class="other_expenditure_amount" value="{{ $expenditure->amount }}">
              </fieldset>
              <span>円</span>
            </div>
            <?php $i++; ?>
            @endforeach
          </div>
        </div>
      </div>
      <div class="form-group">
        <button type="submit" id="submit-btn">物件更新</button>
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