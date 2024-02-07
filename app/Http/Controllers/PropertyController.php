<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PropertyRequest;
use App\Models\Property;
use App\Models\Income;
use App\Models\Expenditure;

class PropertyController extends Controller
{
    public function __construct()
    {
        $this->property = new Property();
        $this->income = new Income();
        $this->expenditure = new Expenditure();
    }

    /**
     * 物件登録画面表示
     * @return view
     */
    public function showPropertyForm()
    {
        return view('properties.property_form');
    }

    /**
     * 物件登録
     * @param PropertyRequest $request
     */
    public function storeProperty(PropertyRequest $request)
    {
        try {
            $property = $this->property->store($request);
            $propertyId = $property->id;

            if (isset($request->other_income_name[0])) {
                $income_names = $request->other_income_name;
                $income_frequencies = $request->other_income_frequency;
                $income_amounts = $request->other_income_amount;
                $income_count = count($income_names);
                for ($i = 0; $i < $income_count ; $i++) {
                    if ($income_names[$i] === null) {
                        break;
                    }
                    $incomeData = array(
                        'income_name' => $income_names[$i],
                        'frequency' => $income_frequencies[$i],
                        'amount' => $income_amounts[$i],
                    );

                    $income = $this->income->store($propertyId, $incomeData);
                }
            }

            if (isset($request->other_expenditure_name[0])) {
                $expenditure_names = $request->other_expenditure_name;
                $expenditure_frequencies = $request->other_expenditure_frequency;
                $expenditure_amounts = $request->other_expenditure_amount;
                $expenditure_count = count($expenditure_names);
                for ($i = 0; $i < $expenditure_count ; $i++) {
                    if ($expenditure_names[$i] === null) {
                        break;
                    }
                    $expenditureData = array(
                        'expenditure_name' => $expenditure_names[$i],
                        'frequency' => $expenditure_frequencies[$i],
                        'amount' => $expenditure_amounts[$i],
                    );
                    
                    $expenditure = $this->expenditure->store($propertyId, $expenditureData);
                }
            }

            $request->session()->regenerate();
            return redirect()->route('home')->with('success', '物件登録が完了しました！');
        } catch (\Exception $e) {
            return back()->withErrors([
                'error' => '物件登録に失敗しました',
            ]);
        }
    }

    /**
     * 物件詳細
     * @param int $id
     * @return View
     */
    public function showPropertyDetail($id)
    {
        $property = $this->property->find($id);
        if (is_null($property)) {
            return redirect()->route('home')->with('error', '物件情報が取得できませんでした');
        }
        $incomes = $this->income->where('property_id', '=', $id)->get();
        $expenditures = $this->expenditure->where('property_id', '=', $id)->get();
        return view('properties.property_detail', [
            'property' => $property,
            'incomes' => $incomes,
            'expenditures' => $expenditures,
        ]);
    }

    /**
     * 物件編集画面表示
     * @param int $id
     * @return View
     */
    public function showEditProperty($id)
    {
        $property = $this->property->find($id);
        if (is_null($property)) {
            return redirect()->route('home')->with('error', '物件情報が取得できませんでした');
        }
        $incomes = $this->income->where('property_id', '=', $id)->get();
        $expenditures = $this->expenditure->where('property_id', '=', $id)->get();
        return view('properties.property_edit', [
            'property' => $property,
            'incomes' => $incomes,
            'expenditures' => $expenditures,
        ]);
    }

    /**
     * 物件更新
     * @param PropertyRequest $request
     */
    public function exeEditProperty(PropertyRequest $request)
    {
        try {
            $id = $request->property_id;
            $property = Property::find($id);
            $property->fill([
                'name' => $request->property_name,
                'capital' => $request->capital,
                'expense' => $request->expense,
                'rent' => $request->rent,
                'fixed_expenditure' => $request->fixed_expenditure,
                'loan' => $request->loan,
                'loan_period' => $request->loan_period,
                'interest' => $request->interest,
                'repay' => $request->repay,
            ]);
            $property->save();

            if ($request->other_income_id !== null) {
                $income_ids = $request->other_income_id;
                $income_names = $request->other_income_name;
                $income_frequencies = $request->other_income_frequency;
                $income_amounts = $request->other_income_amount;
                $income_count = count($income_ids);
                for ($i = 0; $i < $income_count ; $i++) {
                    $income = Income::find($income_ids[$i]);
                    $income->fill([
                        'income_name' => $income_names[$i],
                        'frequency' => $income_frequencies[$i],
                        'amount' => $income_amounts[$i],
                    ]);
                    $income->save();
                }
            }

            if ($request->other_expenditure_id !== null) {
                $expenditure_ids = $request->other_expenditure_id;
                $expenditure_names = $request->other_expenditure_name;
                $expenditure_frequencies = $request->other_expenditure_frequency;
                $expenditure_amounts = $request->other_expenditure_amount;
                $expenditure_count = count($expenditure_ids);
                for ($i = 0; $i < $expenditure_count ; $i++) {
                    $expenditure = Expenditure::find($expenditure_ids[$i]);
                    $expenditure->fill([
                        'expenditure_name' => $expenditure_names[$i],
                        'frequency' => $expenditure_frequencies[$i],
                        'amount' => $expenditure_amounts[$i],
                    ]);
                    $expenditure->save();
                }
            }
            
            $request->session()->regenerate();
            return redirect()->route('home')->with('success', '物件更新が完了しました！');
        } catch (\Exception $e) {
            return back()->withErrors([
                'error' => '物件更新に失敗しました',
            ]);
        }
    }

    /**
     * 物件削除
     * @param Request $request
     */
    public function exeDeleteProperty(Request $request)
    {
        try {
            $id = $request->propertyId;
            try {
                Property::destroy($id);
            } catch (\Exception $e) {
                return back()->withErrors([
                    'error' => '物件削除に失敗しました',
                ]);
            }
            try {
                $incomes = Income::where('property_id', '=', $id)->get();
                $income_count = count($incomes);
                for ($i = 0; $i < $income_count ; $i++) {
                    $incomes[$i]->delete();
                }
            } catch (\Exception $e) {
                return back()->withErrors([
                    'error' => '物件削除に失敗しました',
                ]);
            }
            try {
                $expenditures = Expenditure::where('property_id', '=', $id)->get();
                $expenditure_count = count($expenditures);
                for ($i = 0; $i < $expenditure_count ; $i++) {
                    $expenditures[$i]->delete();
                }
            } catch (\Exception $e) {
                return back()->withErrors([
                    'error' => '物件削除に失敗しました',
                ]);
            }
            
            $request->session()->regenerate();
            return redirect('home')->with('success', '物件削除が完了しました！');
        } catch (\Exception $e) {
            return back()->withErrors([
                'error' => '物件削除に失敗しました',
            ]);
        }
    }

    /**
     * @param Request $request
     */
    public function simulation(Request $request)
    {
        $timing = $request->get('timing');
        $price = $request->get('price');
        $cost = $request->get('cost');
        $id = $request->get('id');
        $property = $this->property->find($id);
        $incomes = $this->income->where('property_id', '=', $id)->get();
        $expenditures = $this->expenditure->where('property_id', '=', $id)->get();

        $balance = $property->loan;
        $incomeTotal = 0;
        $expenditureTotal = 0;
        for ($i = 1; $i <= $timing; $i++) {
            // 毎月の元金減少額
            $decrease = $property->repay - $balance * ($property->interest * 0.01 / 12);
            $balance = $balance - $decrease;

            // その他収入合計
            foreach ($incomes as $income) {
                if ($income->frequency === 1) {
                    $incomeTotal += $income->amount;
                } else {
                    if ($i % 12 === 0) {
                        $incomeTotal += $income->amount;
                    }
                }
            }

            // その他支出合計
            foreach ($expenditures as $expenditure) {
                if ($expenditure->frequency === 1) {
                    $expenditureTotal += $expenditure->amount;
                } else {
                    if ($i % 12 === 0) {
                        $expenditureTotal += $expenditure->amount;
                    }
                }
            }
        }
        // 残債
        $balance = round($balance);
        
        // 賃料の合計
        $rent = $property->rent * $timing;
        // 返済額の合計
        $repay = $property->repay * $timing;
        // 固定支出の合計
        $fixed_expenditure = $property->fixed_expenditure * $timing;

        $profit = $price - $balance - $cost - $property->capital - $property->expense + $rent - $repay - $fixed_expenditure + $incomeTotal - $expenditureTotal;

        $result = array(
            'profit' => $profit,
        );

        header('Content-type: application/json');
        echo json_encode($result);
    }
}
