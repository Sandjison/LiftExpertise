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
                "price" => "100000",
                "sceance" => "3 par semaine",
                "register" => "10000",
                "tranche_1" => "50000",
                "tranche_2" => "50000",
                "total" => "110000"
            ],
            [
                "id" => 2,
                "formula" => "Accélérée ( CHARIOT )",
                "price" => "120000",
                "sceance" => "5 par semaine",
                "register" => "10000",
                "tranche_1" => "60000",
                "tranche_2" => "60000",
                "total" => "130000"
            ],
            [
                "id" => 3,
                "formula" => "Premium ( CHARIOT )",
                "price" => "150000",
                "sceance" => "Variable",
                "register" => "10000",
                "tranche_1" => "75000",
                "tranche_2" => "75000",
                "total" => "160000"
            ],
            [
                "id" => 4,
                "formula" => "Normale ( CHARGEUSE )",
                "price" => "350000",
                "sceance" => "3 par semaine",
                "register" => "20000",
                "tranche_1" => "175000",
                "tranche_2" => "175000",
                "total" => "370000"
            ],
            [
                "id" => 5,
                "formula" => "Normale ( GRUE PPM )",
                "price" => "450000",
                "sceance" => "3 par semaine",
                "register" => "20000",
                "tranche_1" => "225000",
                "tranche_2" => "225000",
                "total" => "470000"
            ],
            [
                "id" => 6,
                "formula" => "Normale ( HYDRAULIQUE )",
                "price" => "350000",
                "sceance" => "3 par semaine",
                "register" => "20000",
                "tranche_1" => "175000",
                "tranche_2" => "175000",
                "total" => "370000"
            ],
            [
                "id" => 7,
                "formula" => "Normale ( BENNE )",
                "price" => "250000",
                "sceance" => "3 par semaine",
                "register" => "10000",
                "tranche_1" => "125000",
                "tranche_2" => "125000",
                "total" => "270000"
            ]
        ];

        $plan = array_filter($plans, function ($plan) use ($id) {
            return $plan['id'] == $id;
        });

        return view('souscription', ['plan' => array_shift($plan)]);
    }

    public function subscription(SubscriptionRequest $request)
    {
        $data = $request->all();

        $data['plan'] = $request->plan;
        $data['register'] = $request->register;
        $data['tranche_1'] = $request->tranche_1;
        $data['tranche_2'] = $request->tranche_2;
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

    }
}
