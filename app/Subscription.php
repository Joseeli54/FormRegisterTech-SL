<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model{

	protected $table = 'subscriptions';
    protected $primaryKey = "id";
    protected $fillable = ['id','user_id', 'name', 'phone' ,'email','findout','revenueve','team','obstacle','business']; 

     private $plan_design = array(
		'annualGBPPlan' => "plan_F4I7yEdjF6D688", 
		'annualEURPlan' => "plan_DZlFrM7UauFLuJ",
		'annualUSDPlan' => "plan_DZlHWmMNopcaSl",
		'monthlyGBPPlan' => "plan_F4GgEPzamnYMnc", 
		'monthlyEURPlan' => "plan_DZlCOapsEnznLR",
		'monthlyUSDPlan' => "plan_DZlFQ5boa8Xfih",
	 );
	private $plan_video = array(
		'annualGBPPlan' => "plan_EHDP3XnuE1Ze4e",
		'annualEURPlan' => "plan_EHDaCPXPDWxSSI",
		'annualUSDPlan' => "plan_EHDZbkF0CSfLky",
		'monthlyGBPPlan' => "plan_EHCaUMCzvLYbmp",
		'monthlyEURPlan' => "plan_EHCdwlqWn7dwdM",
		'monthlyUSDPlan' => "plan_EHCcqc9anDnQvW",
	 );

	private $plan_hibrid = array(
		'annualGBPPlan' => "plan_EHDhFsJXdlv6kA",
		'annualEURPlan' => "plan_EHDmuqS7TDvtvY",
		'annualUSDPlan' => "plan_EHDjkbsNTLoaXp",
		'monthlyGBPPlan' => "plan_EHDePUiPUz2wkp",
		'monthlyEURPlan' => "plan_EHDfITjjKCaPtF",
		'monthlyUSDPlan' => "plan_EHDfoYXaCau1Ci",

	 );

  	public function planDesign($plan){
  		return $this->plan_design[$plan];
  	}

  	public function planVideo($plan){
  		return $this->plan_video[$plan];
  	}

  	public function planHibrid($plan){
  		return $this->plan_hibrid[$plan];
  	}

  }