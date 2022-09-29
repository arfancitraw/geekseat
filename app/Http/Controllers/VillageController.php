<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    public function store(Request $request)
    {
        $data = [];
        if($request->person)
        {
            foreach($request->person as $key => $value)
            {
                $age = $request->person[$key]['age'];
                $year = $request->person[$key]['year'];

                if($age > $year)
                {
                    $data[$key]['age'] = $age;
                    $data[$key]['year'] = $year;
                    $data[$key]['killed_year'] = -1;
                    $data[$key]['killed_number'] = -1;
                }else{
                    $data[$key]['age'] = $age;
                    $data[$key]['year'] = $year;
                    $data[$key]['killed_year'] = $year - $age;
                    $data[$key]['killed_number'] = $this->fibonacci($year - $age);
                }
            }

        }
        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    }

    function fibonacci($index)  
    {
        $fibonacci = [];

        for ($i = 0; $i <= $index; $i++) { 
            if ($i == 0) {
                $number = 0;
            }elseif($i == 1){
                $number = 1;
            }else{
                $number = $fibonacci[$i - 1] + $fibonacci[$i - 2];
            }
            array_push($fibonacci, $number);
        }
        return array_sum($fibonacci);
    }
}
