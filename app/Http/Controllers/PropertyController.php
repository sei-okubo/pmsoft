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
     */
    public function storeProperty(PropertyRequest $request)
    {
        try {
            $property = $this->property->store($request);
            $propertyId = $property->id;
            // $propertyId = 3;

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
            return redirect('home')->with('success', '物件登録が完了しました！');
        } catch (\Exception $e) {
            dd($e);
            return back()->withErrors([
                'error' => '物件登録に失敗しました',
            ]);
        }
    }
}
