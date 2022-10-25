<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Record;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RecordController extends Controller
{
    public function index(Request $request)
    {
        $user_id = $request->user_id ?? null;
        $year = $request->year ?? null;
        $month = $request->month ?? null;

        $daily_amounts = Record::where('user_id', $user_id)
            ->where('year', $year)
            ->where('month', $month)
            ->get()
            ->groupBy('day')
            ->map(function ($item, $day) {
                return ['day' => $day, 'amount' => $item->sum('amount')];
            })
            ->values();

            $total_by_language = Record::with('language_record')->where('user_id', $user_id)
            ->where('year', $year)
            ->where('month', $month)
            ->get();

        dd($total_by_language);

        $response_data = [
            'user_id' => $user_id,
            'year' => $year,
            'month' => $month,
            'total' => [
                'daily' => $daily_amounts,
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
