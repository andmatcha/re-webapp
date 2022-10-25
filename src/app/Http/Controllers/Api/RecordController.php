<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class RecordController extends Controller
{
    public function index(Request $request)
    {
        $user_id = $request->user_id ?? null;
        $year = $request->year ?? null;
        $month = $request->month ?? null;
        $records = DB::table('records')
            ->where('user_id', '=', $user_id)
            ->whereYear('date', $year)
            ->whereMonth('date', $month)->get();

        dd($records);

        $response_data = [
            'user_id' => 1,
            'year' => 2022,
            'month' => 10,
            'total' => [
                'daily' => [
                    ['date' => 1, 'amount' => 1]
                ],
                'by_language' => [
                    ['id' => 1, 'name' => 'HTML', 'amount' => 1]
                ],
                'by_content' => [
                    ['id' => 1, 'name' => 'POSSE課題', 'amount' => 1]
                ]
            ]
        ];

        return response()->json($response_data, Response::HTTP_OK, [], JSON_UNESCAPED_UNICODE);
    }
}
