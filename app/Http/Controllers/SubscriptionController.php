<?php

namespace App\Http\Controllers;

use App\Interfaces\SubscriptionInterface;
use App\Http\Requests\SubscriptionRequest;
use App\Models\Subscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    // protected $subscriptionRepository;
    private SubscriptionInterface $subscriptionInterface;

    public function __construct(SubscriptionInterface $subscriptionInterface)
    {
        $this->subscriptionInterface = $subscriptionInterface;

    }

    public function souscription($id)
    {
        $plans = [
            [
                "id" => 1,
                "formula" => "Normale",
                "price" => "110 000",
                "sceance" => "3 par semaine",
                "register" => "10 000",
                "total" => "120 000"
            ],
            [
                "id" => 2,
                "formula" => "Accélérée",
                "price" => "130 000",
                "sceance" => "3 par semaine",
                "register" => "10 000",
                "total" => "140 000"
            ],
            [
                "id" => 3,
                "formula" => "Premium ou VIP",
                "price" => "150 000",
                "sceance" => "Variable",
                "register" => "10 000",
                "total" => "160 000"
            ]
        ];

        $plan = array_filter($plans, function ($plan) use ($id) {
            return $plan['id'] == $id;
        });

        // if (Auth::check())
        //     return redirect()->route('welcome');

        return view('souscription', ['plan' => array_shift($plan)]);
    }

    public function subscription(SubscriptionRequest $request)
    {
        $data = $request->all();

        $data['plan'] = $request->plan;
        $data['total'] = $request->total;

        $this->subscriptionInterface->storeSubscription($data);


        return redirect()->back()->with('success', 'Inscription réussie.');
    }

    public function souscriptionDashboard()
    {

        $subscriptions = Subscription::all();

        return  view('souscriptionDashboard', ["subscriptions" => $subscriptions]);


        // return view('souscriptionDashboard');
    }
    
}

