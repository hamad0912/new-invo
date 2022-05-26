<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plan;
class PlanController extends Controller
{
    public function index()
    {
        $plans = plan::all();
        return view('plans.index', compact('plans'));
    }

    /**
     * Show the Plan.
     *
     * @return mixed
     */
    public function show(plan $plan, Request $request)
    {   
        $paymentMethods = $request->user()->paymentMethods();

        $intent = $request->user()->createSetupIntent();
        
        return view('plans.show', compact('plan', 'intent'));
    }

}
