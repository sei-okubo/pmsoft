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
          <?php $i = 1; ?>
            @foreach($incomes as $income)
            <div class="form-group">
              <h3>その他固定収入 {{ $i }}</h3>
              <p>{{ $income->income_name }}</p>
              <p>
                @if($income->frequency === 1)
                月額
                @else
                年額
                @endif
              </p>
              <p>{{ $income->amount }}<span>円</span></p>
            </div>
            <?php $i++; ?>
            @endforeach
          </div>
        </div>
        <div class="right">
          <div class="expenditure_wrapper">
          <?php $i = 1; ?>
            @foreach($expenditures as $expenditure)
            <div class="form-group">
              <h3>その他固定支出 {{ $i }}</h3>
              <p>{{ $expenditure->expenditure_name }}</p>
              <p>
                @if($expenditure->frequency === 1)
                月額
                @else
                年額
                @endif
              </p>
              <p>{{ $expenditure->amount }}<span>円</span></p>
            </div>
            <?php $i++; ?>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="links">
      <div class="flex">
        <div class="left">
          <div class="form-group">
            <form method="get" action="{{ route('showEditProperty', $property->id) }}">
              <button type="submit" class="edit-btn">物件編集</button>
            </form>
          </div>
        </div>
        <div class="right">
          <div class="form-group">
            <form method="post" action="{{ route('exeDeleteProperty') }}">
              @method('DELETE')
              @csrf
              <input type="hidden" name="propertyId" value="{{ $property->id }}">
              <button type="submit" class="delete_btn">物件削除</button>
            </form>
          </div>
        </div>
      </div>
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