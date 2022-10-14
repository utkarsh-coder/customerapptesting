<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    public function index()
    {
        return "index function";
    }

    public function store(Request $request)
    {
        echo "<pre>";
        // return $request->all();
        // return "data printing";
        $customers = customers::where('email', $request->email)->first();
        if ($customers == null) {
            $customers = new customers();
            $customers->email = $request->email;
            $customers->password = $request->password;

            $customers->save();
            echo "Record inserted successfully.<br/>";
            echo '<a href = "/login">Click Here</a> to go back.';
        } else {
            echo "Email/Mobile already exists. Try using another one.<br/>";
            echo '<a href = "/login">Click Here</a> to go back.';
        }


        // return $customers->all();

        // return redirect('http://127.0.0.1:8000/login' ::previous());
        // redirect()->back();
        // window.location.assign("http://127.0.0.1:8000/login");

        // return "data saved";
    }

    public function update(Request $request)
    {
        $customers = customers::where('email', $request->email)->first();
        $customers->email = $request->email;
        $customers->password = $request->password;
        $customers->save();
        return redirect('login');
    }

    public function view()
    {
        echo "<pre>";
        // return $request->all();
        // return "data printing";

        $customers = new customers();
        // $customers->id = 3;
        // // return $customers->all();
        return customers::all()->where("email", "utkarshblp@gmail.com");

        // return "data saved";
    }

    public function register()
    {
        return view("register");
    }

    public function forgotmail()
    {
        return view("forgotmail");
    }

    public function verifyOTP()
    {
        return view("otp");
    }

    public function mapuser()
    {
        return view('usermapping');
    }

    public function verify(Request $request)
    {
        $customers = new customers();
        // $data = customers::all()->where("email", $request->email)->first();

        // $dataarray = array(
        //     'email' => 'iot.developers@kochartech.com',
        //     'password' => 'Kipl@1234'
        // );
        // $data = json_encode($dataarray);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://uat.gizmosmart.io/igzy/1.6/public/api_login',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{"email":"'.$request->email.'","password":"'.$request->password.'"}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Cookie: JSESSIONID=eyJpdiI6IkIrYXM2b0UrN3lhTmROWEM4U2RLeGc9PSIsInZhbHVlIjoiT1JXMXlCZVp3dVFDSWVYckVsRlN1V0FzYXZHSGRzRkJ2d2NUaDFKZUtva0MycnVqdElPaVN1VlB2S3VwXC82bGRQQmVtTEdFRmhwTUswMzJ3aTF3QUNnPT0iLCJtYWMiOiJjMjIwZjQxMzNjNjA0ZjQxMGU4YzY5OGU1ZmVjNDA4NjBkMWE3ODIxZWNkZWJiMmRlYzA1MGNlZmFmMDc1MzBmIn0%3D'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $data = json_decode($response);

        if($data->code == 1){
            return view("home");
        }
        else if($data->message == "User doesnt found"){
            echo "User not found";
        }
        else{
            echo "incorrect credentials";
        }

        // return $data[0]->email;
        // print_r($data);
        // if ($data != '') {
        //     if ($data->password == $request->password) {
        //         session()->put('user_id', 1);
        //         // session()->forget('user_id');
        //         return view("home");
        //     } else {
        //         return "incorrect credentials";
        //     }
        // }
        // return "data not found";
    }

    public function home()
    {
        // $customers = new customers();
        // $data = customers::all()->where("email", $request->email);
        // // return sizeof($data);
        // if (sizeof($data) > 0) {
        //     if ($data[0]->password == $request->password) {
        //         return view("home");
        //     } else {
        //         return "incorrect credentials";
        //     }
        // }
        return view("home");
    }

    public function healthChart()
    {
        return view("healthchart");
    }

    public function sitelocation()
    {
        return view("sitelocation");
    }

    public function drilldown(Request $request)
    {
        return view('drilldownchart', ['type' => $request->type]);
    }

    public function sitelist(Request $request)
    {
        return view('deviceListTable', ['type' => $request->type, 'status' => $request->status]);
    }
}
