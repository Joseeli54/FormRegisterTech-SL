<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Plan;
use Auth;
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
        $this->middleware('admin');
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
            if($us->email == $request->email){
                $validar = 1;
            }
        }

        if($validar == 0){
            $user = new User();
            $user->name = $request->name;
            $user->lastname = $request->lastName;
            $user->email = $request->email;
            $user->company = $request->company;
            $user->employees = $request->employees;
            if($request->selRole == 1){
                $user->is_employee = true;
            }else{
                $user->is_employee = false;
            }
            $user->problems = $request->problems;
            $user->industry = $request->industry;
            $user->password = Hash::make($request->password);
            $user->remember_token = $request->_token;
            $user->save();

            $user
            ->roles()
            ->attach(Role::where('name', 'user')->first());

            $subscription = new Subscription();
            $plan = $request->selType;
            $timeplan = $request->selTime;
            $currency = $request->selCurrency;

            $subscription->user_id = $user->id;
            $subscription->name = $request->name_sub;
            $subscription->quantity = $request->quantity;
            $subscription->stripe_id = 'sub_'.time();

            if($plan == 0){
               $subscription->stripe_plan = Plan::SelectPlanDesign($subscription, $timeplan, $currency);
            }else if($plan == 1){
                $subscription->stripe_plan = Plan::SelectPlanVideo($subscription, $timeplan, $currency);
            } else{
                $subscription->stripe_plan = Plan::SelectPlanHibrid($subscription, $timeplan, $currency);
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
