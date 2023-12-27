'use strict'

{
  $(function() {
    $("#submit-btn").on("click", function(e) {
      // ログイン＆新規登録
      const inputPasswordConf = $("#password_confirmation");
      if (inputPasswordConf.val() === "") {
        toastr.error('パスワード再入力が未入力です。');
        e.preventDefault();
      }

      const inputPassword = $("#password");
      if (inputPassword.val() === "") {
        toastr.error('パスワードが未入力です。');
        e.preventDefault();
      }

      const inputEmail = $("#email");
      if (inputEmail.val() === "") {
        toastr.error('メールアドレスが未入力です。');
        e.preventDefault();
      }

      const inputName = $("#name");
      if (inputName.val() === "") {
        toastr.error('ユーザー名が未入力です。');
        e.preventDefault();
      }

      if (inputPasswordConf.val() !== undefined) {
        if (inputPassword.val() !== inputPasswordConf.val()) {
          if (inputPassword.val() !== "" && inputPasswordConf.val() !== "") {
            toastr.error('パスワード再入力と一致しません');
            e.preventDefault();
          }
        }
      }

      // 物件登録
      const expenditureAmount = $(".other_expenditure_amount");
      if (expenditureAmount.val() === "") {
        toastr.error('その他固定支出の金額が未入力です。');
        e.preventDefault();
      }

      const expenditureFrequency = $(".other_expenditure_frequency");
      if (expenditureFrequency.val() === "0") {
        toastr.error('その他固定支出の頻度が未選択です。');
        e.preventDefault();
      }

      const expenditureName = $(".other_expenditure_name");
      if (expenditureName.val() === "") {
        toastr.error('その他固定支出の名前が未入力です。');
        e.preventDefault();
      }

      const incomeAmount = $(".other_income_amount");
      if (incomeAmount.val() === "") {
        toastr.error('その他固定収入の金額が未入力です。');
        e.preventDefault();
      }

      const incomeFrequency = $(".other_income_frequency");
      if (incomeFrequency.val() === "0") {
        toastr.error('その他固定収入の頻度が未選択です。');
        e.preventDefault();
      }

      const incomeName = $(".other_income_name");
      if (incomeName.val() === "") {
        toastr.error('その他固定収入の名前が未入力です。');
        e.preventDefault();
      }

      const rent = $("#rent");
      if (rent.val() === "") {
        toastr.error('賃料が未入力です。');
        e.preventDefault();
      }

      const expense = $("#expense");
      if (expense.val() === "") {
        toastr.error('諸費用が未入力です。');
        e.preventDefault();
      }

      const capital = $("#capital");
      if (capital.val() === "") {
        toastr.error('自己資本が未入力です。');
        e.preventDefault();
      }

      const propertyName = $("#property_name");
      if (propertyName.val() === "") {
        toastr.error('物件名が未入力です。');
        e.preventDefault();
      }
    });
  });
}


// その他収入フォーム作成
let incomeFormCount = 0;
const income_btn = document.querySelector('#add_income_btn');
if (income_btn !== null) {
  income_btn.addEventListener('click', () => {
    incomeFormCount += 1;
  
    const newIncomeFormGroup = document.createElement('div');
    newIncomeFormGroup.classList.add('form-group', 'income', `income-form-${incomeFormCount}`);
  
    const newIncomeFieldset = document.createElement('fieldset');
    newIncomeFormGroup.appendChild(newIncomeFieldset);
  
    const newIncomeLegend = document.createElement('legend');
    newIncomeLegend.textContent = `その他固定収入 (${incomeFormCount}) `;
    newIncomeFieldset.appendChild(newIncomeLegend);
  
    const newIncomeDeleteBtn = document.createElement('input');
    newIncomeDeleteBtn.type = 'button';
    newIncomeDeleteBtn.value = '削除';
    newIncomeDeleteBtn.classList.add('remove-btn');
    newIncomeDeleteBtn.setAttribute('onclick', 'delete_form_element("income-form-' + incomeFormCount + '");');
    newIncomeFieldset.appendChild(newIncomeDeleteBtn);
  
    const newIncomeLabel = document.createElement('label');
    newIncomeLabel.textContent = '名前:';
    newIncomeFieldset.appendChild(newIncomeLabel);
  
    const newIncomeInputName = document.createElement('input');
    newIncomeInputName.type = 'text';
    newIncomeInputName.classList.add('other_income_name');
    newIncomeInputName.name = 'other_income_name[]';
    newIncomeFieldset.appendChild(newIncomeInputName);
  
    const newIncomeSelect = document.createElement('select');
    newIncomeSelect.classList.add('other_income_frequency');
    newIncomeSelect.name = 'other_income_frequency[]';
    newIncomeFieldset.appendChild(newIncomeSelect);
  
    const newIncomeOptionDefault = document.createElement('option');
    newIncomeOptionDefault.textContent = '-- 選択してください --';
    newIncomeOptionDefault.value = '0';
    newIncomeSelect.appendChild(newIncomeOptionDefault);
  
    const newIncomeOptionMonth = document.createElement('option');
    newIncomeOptionMonth.textContent = '月額';
    newIncomeOptionMonth.value = '1';
    newIncomeSelect.appendChild(newIncomeOptionMonth);
  
    const newIncomeOptionYear = document.createElement('option');
    newIncomeOptionYear.textContent = '年額';
    newIncomeOptionYear.value = '2';
    newIncomeSelect.appendChild(newIncomeOptionYear);
  
    const newIncomeInputAmount = document.createElement('input');
    newIncomeInputAmount.type = 'text';
    newIncomeInputAmount.classList.add('other_income_amount');
    newIncomeInputAmount.name = 'other_income_amount[]';
    newIncomeFieldset.appendChild(newIncomeInputAmount);
  
    const newIncomeSpan = document.createElement('span');
    newIncomeSpan.textContent = '円';
    newIncomeFormGroup.appendChild(newIncomeSpan);
  
    const incomeFragment = document.createDocumentFragment();
    incomeFragment.appendChild(newIncomeFormGroup);
  
    document.querySelector('.income_wrapper').appendChild(incomeFragment);
  });
}

// その他支出フォーム作成
let expenditureFormCount = 0;
const expenditure_btn = document.querySelector('#add_expenditure_btn');
if (income_btn !== null) {
  expenditure_btn.addEventListener('click', () => {
    expenditureFormCount += 1;

    const newExpenditureFormGroup = document.createElement('div');
    newExpenditureFormGroup.classList.add('form-group', 'expenditure', `expenditure-form-${expenditureFormCount}`);

    const newExpenditureFieldset = document.createElement('fieldset');
    newExpenditureFormGroup.appendChild(newExpenditureFieldset);

    const newExpenditureLegend = document.createElement('legend');
    newExpenditureLegend.textContent = `その他固定収入 (${expenditureFormCount}) `;
    newExpenditureFieldset.appendChild(newExpenditureLegend);

    const newExpenditureDeleteBtn = document.createElement('input');
    newExpenditureDeleteBtn.type = 'button';
    newExpenditureDeleteBtn.value = '削除';
    newExpenditureDeleteBtn.classList.add('remove-btn');
    newExpenditureDeleteBtn.setAttribute('onclick', 'delete_form_element("expenditure-form-' + expenditureFormCount + '");');
    newExpenditureFieldset.appendChild(newExpenditureDeleteBtn);

    const newExpenditureLabel = document.createElement('label');
    newExpenditureLabel.textContent = '名前:';
    newExpenditureFieldset.appendChild(newExpenditureLabel);

    const newExpenditureInputName = document.createElement('input');
    newExpenditureInputName.type = 'text';
    newExpenditureInputName.classList.add('other_expenditure_name');
    newExpenditureInputName.name = 'other_expenditure_name[]';
    newExpenditureFieldset.appendChild(newExpenditureInputName);

    const newExpenditureSelect = document.createElement('select');
    newExpenditureSelect.classList.add('other_expenditure_frequency');
    newExpenditureSelect.name = 'other_expenditure_frequency[]';
    newExpenditureFieldset.appendChild(newExpenditureSelect);

    const newExpenditureOptionDefault = document.createElement('option');
    newExpenditureOptionDefault.textContent = '-- 選択してください --';
    newExpenditureOptionDefault.value = '0';
    newExpenditureSelect.appendChild(newExpenditureOptionDefault);

    const newExpenditureOptionMonth = document.createElement('option');
    newExpenditureOptionMonth.textContent = '月額';
    newExpenditureOptionMonth.value = '1';
    newExpenditureSelect.appendChild(newExpenditureOptionMonth);

    const newExpenditureOptionYear = document.createElement('option');
    newExpenditureOptionYear.textContent = '年額';
    newExpenditureOptionYear.value = '2';
    newExpenditureSelect.appendChild(newExpenditureOptionYear);

    const newExpenditureInputAmount = document.createElement('input');
    newExpenditureInputAmount.type = 'text';
    newExpenditureInputAmount.classList.add('other_expenditure_amount');
    newExpenditureInputAmount.name = 'other_expenditure_amount[]';
    newExpenditureFieldset.appendChild(newExpenditureInputAmount);

    const newExpenditureSpan = document.createElement('span');
    newExpenditureSpan.textContent = '円';
    newExpenditureFormGroup.appendChild(newExpenditureSpan);

    const expenditureFragment = document.createDocumentFragment();
    expenditureFragment.appendChild(newExpenditureFormGroup);

    document.querySelector('.expenditure_wrapper').appendChild(expenditureFragment);
  });
}

// フォーム削除
function delete_form_element(name) {
  const elem = document.querySelector('.' + name);
  elem.remove();
};