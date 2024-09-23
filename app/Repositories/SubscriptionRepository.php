<?php

namespace App\Repositories;

use App\Interfaces\SubscriptionInterface;
use App\Models\Subscription;

class SubscriptionRepository implements SubscriptionInterface

{
    
   
    public function storeSubscription(array $data)
    {
        return Subscription::create($data);
    }
}
