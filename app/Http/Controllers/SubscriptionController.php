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
                "formula" => "Normale ( CHARIOT )",
                "price" => "100 000",
                "sceance" => "3 par semaine",
                "register" => "10 000",
                "total" => "50 000"
            ],
            [
                "id" => 2,
                "formula" => "Accélérée ( CHARIOT )",
                "price" => "120 000",
                "sceance" => "5 par semaine",
                "register" => "10 000",
                "total" => "60 000"
            ],
            [
                "id" => 3,
                "formula" => "Premium ( CHARIOT )",
                "price" => "150 000",
                "sceance" => "Variable",
                "register" => "10 000",
                "total" => "75 000"
            ],
            [
                "id" => 4,
                "formula" => "Normale ( CHARGEUSE )",
                "price" => "350 000",
                "sceance" => "3 par semaine",
                "register" => "20 000",
                "total" => "125 000"
            ],
            [
                "id" => 5,
                "formula" => "Normale ( GRUE PPM )",
                "price" => "450 000",
                "sceance" => "3 par semaine",
                "register" => "20 000",
                "total" => "225 000"
            ],
            [
                "id" => 6,
                "formula" => "Normale ( HYDRAULIQUE )",
                "price" => "350 000",
                "sceance" => "3 par semaine",
                "register" => "20 000",
                "total" => "125 000"
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

        // $this->subscriptionInterface->storeSubscription($data);
        $suscriptionId = $this->subscriptionInterface->storeSubscription($data)->id;
        $newTotal = str_replace(" ", "", $request->total);
        $operator = strtoupper($request->payment);

        return redirect("https://paygateglobal.com/v1/page?token=d4cfd991-0fb8-4ebb-aea2-0db502686678&amount=$newTotal&description=test&identifier=$suscriptionId&phone_number=$request->payment_number&network=$operator");

        // return redirect()->back()->with('success', 'Inscription réussie.');
    }

    public function souscriptionDashboard()
    {
        $subscriptions = Subscription::all();

        return  view('souscriptionDashboard', ["subscriptions" => $subscriptions]);

        // return view('souscriptionDashboard');
    }
}
