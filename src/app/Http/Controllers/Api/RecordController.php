<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Record;
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
        $record = Record::new($user_id, $year, $month);

        $response_data = [
            'user_id' => $user_id,
            'year' => $year,
            'month' => $month,
            'total' => [
                'daily' => $record->dailyTodal(),
                'by_language' => $record->totalByLanguage(),
                'by_content' => $record->totalByContent()
            ]
        ];

        return response()->json($response_data, Response::HTTP_OK, [], JSON_UNESCAPED_UNICODE);
    }
}
