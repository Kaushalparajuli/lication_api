<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TokenRequest;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $req = TokenRequest::where('user_id', auth()->user()->id)->count();
        $req_today = TokenRequest::where('user_id', auth()->user()->id)
            ->whereDate('created_at', Carbon::now()->format('Y-m-d'))
            ->count();
        $req_week = TokenRequest::where('user_id', auth()->user()->id)
            ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
            ->count();

        return view('backend.home', [
            'token_request' => $req,
            'token_request_today' => $req_today,
            'token_request_week' => $req_week,
        ]);
    }
}
