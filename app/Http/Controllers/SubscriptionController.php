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
        $advanceDefault = config('payment.advance_default'); 

        $plans = [
            [
                "id" => 1,
                "formula" => "Normale ( CHARIOT )",
                "price" => "100000",
                "sceance" => "3 par semaine",
                "register" => "10000",
                "tranche_1" => "50000",
                "tranche_2" => "50000",
                "advance" => $advanceDefault,
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
                "advance" => $advanceDefault,
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
                "advance" => $advanceDefault,
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
                "advance" => $advanceDefault,
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
                "advance" => $advanceDefault,
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
                "advance" => $advanceDefault,
                "total" => "370000"
            ],
            [
                "id" => 7,
                "formula" => "Normale ( BENNE )",
                "price" => "300000",
                "sceance" => "3 par semaine",
                "register" => "20000",
                "tranche_1" => "150000",
                "tranche_2" => "150000",
                "advance" => $advanceDefault,
                "total" => "320000"
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
        $data['total'] = $request->total;

        
        // $this->subscriptionInterface->storeSubscription($data);
        $suscriptionId = $this->subscriptionInterface->storeSubscription($data)->id;
        $newTotal = str_replace(" ", "", $request->total);
        $operator = strtoupper($request->payment);

        $amount = $request->amount;

        return redirect("https://paygateglobal.com/v1/page?token=d4cfd991-0fb8-4ebb-aea2-0db502686678&amount=$amount&description=test&identifier=$suscriptionId&phone_number=$request->payment_number&network=$operator");

        // return redirect()->back()->with('success', 'Inscription réussie.');
    }

    public function souscriptionDashboard()
    {
        $subscriptions = Subscription::all();

        return  view('souscriptionDashboard', ["subscriptions" => $subscriptions]);
    }
}
