<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;


class MailController extends Controller
{
   function sendOTPMail(Request $request)
   {
      $phoneRegex = "/^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/";
      global $otp;
      $rnd = rand(1000, 9999);
      $otp = $rnd;
      $details = [
         'otp' => $otp
      ];
      $redis = Redis::connection();
      $redis->set($request->email, $otp);
      $redis->expire($request->email, 300);
      if (preg_match($phoneRegex, $request->email)) {
         $basic  = new \Vonage\Client\Credentials\Basic("6f8f57ea", "3wQy2vgenxaoKB4R");
         $client = new \Vonage\Client($basic);

         $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("91".$request->email, "IGZY", 'Your OTP for password reset of igzy customer app: '.$otp.'. This OTP will be valid for 5 minutes only')
         );

         $message = $response->current();

         if ($message->getStatus() == 0) {
            return view('otp', ['email' => $request->email]);
         } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
            return;
         }
      }
      \Mail::to($request->email)->send(new \App\Mail\SendMail($details));
      return view('otp', ['email' => $request->email]);
   }

   function verifyOTP(Request $request)
   {
      $redis = Redis::connection();
      $otp = $redis->get($request->email);
      if ($request->otp == $otp) {
         return view('new_password_reset', ['email' => $request->email]);
      } else {
         echo "otp not matched";
      }
      // Redis::key(['utkarsh', 'value']);
      // Redis::expire([''])
   }
}
