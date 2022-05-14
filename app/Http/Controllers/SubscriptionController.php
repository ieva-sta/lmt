<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriptionRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;

class SubscriptionController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'subscriptions' => Cache::get('subscriptions')
        ]);
    }

    public function store(SubscriptionRequest $request): JsonResponse
    {
        $subscriptions = Cache::get('subscriptions') ?? [];
        $name = $request->get('name');
        $email = $request->get('email');

        if (in_array($email, array_column($subscriptions, 'email'))) {
            return response()->json([
                'message' => 'Šis e-pasts jau ir reģistrēts konkursam.'
            ]);
        }

        $subscription = [
            'name'  => $name,
            'email' => $email
        ];

        $subscriptions[] = $subscription;

        Cache::forever('subscriptions', $subscriptions);

        return response()->json([
            'message' => 'Paldies! Tu esi reģistrēts konkursam.'
        ]);
    }
}
