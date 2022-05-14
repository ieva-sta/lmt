<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriptionRequest;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function store(SubscriptionRequest $request)
    {
        return response()->json([
            'status' => $request->all()
        ]);
    }
}
