<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;
use App\Subscription;

class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.register-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validar = 0;
        $response = 'User Created Successfully';
        
        $users_email = \DB::table('users')->get();
        foreach ($users_email as $us){
            if($us->email == $request->input('email')){
                $validar = 1;
            }
        }

        if($validar == 0){
            $user = new User();
            $user->name = $request->input('name');
            $user->lastname = $request->input('lastName');
            $user->email = $request->input('email');
            $user->company = $request->input('company');
            $user->employees = $request->input('employees');
            $user->problems = $request->input('problems');
            $user->industry = $request->input('industry');
            $user->password = Hash::make($request->input('password'));
            $user->remember_token = $request->input('_token');
            $user->save();

            $user
            ->roles()
            ->attach(Role::where('name', 'user')->first());

            $subscription = new Subscription();
            $plan = $request->input('selType');
            $timeplan = $request->input('selTime');
            $currency = $request->input('selCurrency');

            $subscription->user_id = $user->id;
            $subscription->name = $request->input('name_sub');
            $subscription->quantity = $request->input('quantity');
            $subscription->stripe_id = 'sub_'.time();

            if($plan == 0){
               $subscription->stripe_plan = $this->SelectPlanDesign($subscription, $timeplan, $currency);
            }else if($plan == 1){
                $subscription->stripe_plan = $this->SelectPlanVideo($subscription, $timeplan, $currency);
            } else{
                $subscription->stripe_plan = $this->SelectPlanHibrid($subscription, $timeplan, $currency);
            }
            
            $user->stripe_id = $subscription->stripe_id;
            $subscription->save();
            $user->save();
        } else
        {
           $response = 'Email already, insert other';
        }
        
        return $response;
    }

    public function SelectPlanDesign($subscription, $timeplan, $currency){
          if($timeplan == 0){
            if($currency == 0){
              return $subscription->planDesign('annualUSDPlan');
            }
            else if ($currency == 1){
              return $subscription->planDesign('annualEURPlan');    
            }
            else if ($currency == 2){
              return $subscription->planDesign('annualGBPPlan');
            }
           }
           else if($timeplan == 1)
           {
            if($currency == 0){
              return $subscription->planDesign('monthlyUSDPlan');
            }
            else if ($currency == 1){
              return $subscription->planDesign('monthlyEURPlan');    
            }
            else if ($currency == 2){
              return $subscription->planDesign('monthlyGBPPlan');
            }
           }
    }

    public function SelectPlanVideo($subscription, $timeplan, $currency){
          if($timeplan == 0){
            if($currency == 0){
              return $subscription->planVideo('annualUSDPlan');
            }
            else if ($currency == 1){
              return $subscription->planVideo('annualEURPlan');    
            }
            else if ($currency == 2){
              return $subscription->planVideo('annualGBPPlan');
            }
           }
           else if($timeplan == 1)
           {
            if($currency == 0){
              return $subscription->planVideo('monthlyUSDPlan');
            }
            else if ($currency == 1){
              return $subscription->planVideo('monthlyEURPlan');    
            }
            else if ($currency == 2){
              return $subscription->planVideo('monthlyGBPPlan');
            }
           }
    }

     public function SelectPlanHibrid($subscription,$timeplan, $currency){
          if($timeplan == 0){
            if($currency == 0){
              return $subscription->planHibrid('annualUSDPlan');
            }
            else if ($currency == 1){
              return $subscription->planHibrid('annualEURPlan');    
            }
            else if ($currency == 2){
              return $subscription->planHibrid('annualGBPPlan');
            }
           }
           else if($timeplan == 1)
           {
            if($currency == 0){
              return $subscription->planHibrid('monthlyUSDPlan');
            }
            else if ($currency == 1){
              return $subscription->planHibrid('monthlyEURPlan');    
            }
            else if ($currency == 2){
              return $subscription->planHibrid('monthlyGBPPlan');
            }
           }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
