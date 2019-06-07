<?php 

namespace App\Helpers;

class Plan
{
    public static function SelectPlanDesign($subscription, $timeplan, $currency){
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

    public static function SelectPlanVideo($subscription, $timeplan, $currency){
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

     public static function SelectPlanHibrid($subscription,$timeplan, $currency){
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
}