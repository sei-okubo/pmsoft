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

      <div class="sell">
        <div class="flex">
          <div class="left">
            <h3>売却時期</h3>
            <input type="text" name="timing" id="timing">
            ヶ月目
          </div>
          <div class="right">
            <h3>売却額</h3>
            <input type="text" name="price" id="price">
            円
          </div>
        </div>
        <div class="flex">
          <div class="left">
            <h3>売却時諸費用</h3>
            <input type="text" name="cost" id="cost">
            円
          </div>
          <div class="right flex sim-btn-wrapper">
            <input type="hidden" name="property_id" id="property_id"  value="{{ $property->id }}">
            <button id="sim-btn">計算する</button>
          </div>
        </div>
        <div class="result-wrapper">
          <p>
            <span id="sim-result"> -- </span>
            <span>円</span>
          </p>
        </div>
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

@section('sim')
<script>
  $.ajaxSetup({
    headers: { 'X-CSRF-TOKEN': $("[name='csrf-token']").attr("content") },
  })

  $('#sim-btn').on('click', function() {
    id = $('input[name="property_id"]').val();
    timing = $('input[name="timing"]').val();
    price = $('input[name="price"]').val();
    cost = $('input[name="cost"]').val();

    if(timing === '' || price === '' || cost === '') {
      toastr.error('未入力の項目があります');
    } else {
      $.ajax({
        url: "{{ route('simulation') }}",
        method: "POST",
        data: { 'id' : id, 'timing' : timing, 'price' : price, 'cost' : cost },
        dataType: "json",
      }).done(function(res) {
        $('#sim-result').text(res.profit);
      }).fail(function() {
        alert('通信に失敗しました');
      });
    }
  });

</script>
@endsection