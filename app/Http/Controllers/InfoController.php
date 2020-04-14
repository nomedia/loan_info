<?php

namespace App\Http\Controllers;

use App\Info;
use App\Sms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class InfoController extends Controller
{
    //

    public function sendSms(Request $request)
    {

        $phone = $request->phone;

        $rand = rand(1000, 9999);


        Cache::put("SMSCODE" . $phone, $rand);

        $msg = "【新房网】新房易分期提醒您：您的验证码是 " . $rand . "  请于15分钟内输入，工作人员不会向您索取，请勿泄露。";


        $rs = Sms::sendSms($phone, $msg);


        return response()->json($rs, 200);


    }

    public function index()
    {

        return view("loan");

    }

    public function store(Request $request)
    {

        /*
                $i = Info::first();
                return response()->json($i, 201);*/
        //return response()->json(["msg"=>"失败"], 403);


        //check phone code

        $code = Cache::get("SMSCODE" . $request->phone);


        if ($code != $request->sms_code || !$code) {
            return response()->json(["msg" => "验证码错误"], 403);


        }


        $i = new Info();
        $i->amount = $request->amount;
        $i->phone = $request->phone;
        //   $i->sms_code = $request->sms_code;
        $i->invite = $request->invite;
        $i->name = $request->name;
        $i->id_card = $request->id_card;
        $i->period = $request->period;
        $i->save();

        return response()->json($i, 201);


    }


    public function update(Request $request)
    {

        $id = $request->id;

        $info = $request->all();


        $quota = Info::calculator($request);

        Info::where("id", $id)->update(["info" => json_encode($info), "work_type" => $request->work_type, "quota" => $quota]);


        return response()->json(["msg" => "成功", "quota" => $quota], 200);


    }
}
