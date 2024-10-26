<?php

namespace App\Http\Controllers;

use App\Interfaces\ContactInterface;
use Illuminate\Support\Facades\Auth;
use App\Interfaces\SubscriptionInterface;
use App\Http\Requests\SubscriptionRequest;
use App\Models\Subscription;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private SubscriptionInterface $subscriptionInterface;

    public function __construct(SubscriptionInterface $subscriptionInterface)
    {
        $this->subscriptionInterface = $subscriptionInterface;
    }
    
    public function messageDashboard()
    {
        return view('messageDashboard');
    }
}
