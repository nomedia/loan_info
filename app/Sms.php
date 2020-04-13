<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Log;

class Sms extends Model
{
    //
    public static function sendSms($tel, $content)
    {

//查询手机号 推送消息


       // $content = str_replace("【酒呗】", "", $content);


        $data["userid"] = 773;
        $data["account"] = config("app.sms_account");
        $data["password"] =config("app.sms_password");
        $data["mobile"] = $tel;
        $data["content"] = $content;
        $data["action"] = "send";
        $rs = Sms::curl_post("http://www.gxt106.com/sms.aspx", $data);

        Log::info(json_encode($rs));

        Log::info("发送了短信" . $data["content"]);


        return $rs;

    }

    private static function curl_post($url, $array)
    {

        $curl = curl_init();
//设置提交的url
        curl_setopt($curl, CURLOPT_URL, $url);
//设置头文件的信息作为数据流输出
        curl_setopt($curl, CURLOPT_HEADER, 0);
//设置获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//设置post方式提交
        curl_setopt($curl, CURLOPT_POST, 1);
//设置post数据
        $post_data = $array;
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post_data));
//执行命令
        $data = curl_exec($curl);
//关闭URL请求
        curl_close($curl);
//获得数据并返回
        return $data;
    }


}
