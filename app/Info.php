<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    //

    /**
     * calculate loan
     */
    public static function calculator($request)
    {
        $work_type = $request->work_type;


        $max = 50;

        $min = 10;
        if ($work_type == 1) {
            $max = 50;

        } else if ($work_type == 2) {
            $max = 300;
            $min = 50;

        } else if ($work_type == 3) {
            $max = 30;
        }
        $quota = 0;

        //全款房统一50万

        //  全款房，全款房额度为房子评估价*70%+车子评估价*40%，
        if (!empty($request->house_1)) {

            if ($request->house_1 == "全款房") {

                $quota = $request->house_4 * 0.7;


                if (!empty($request->car_3)) {


                    $quota = $quota + $request->car_3 * 0.4;


                }
            }

            if ($request->house_1 == "按揭房") {

                $quota = $request->house_4;


                if (!empty($request->car_3)) {


                    $quota = $quota + $request->car_3 * 0.4;


                }
            }

        }





        //policy_fee


        //工资x3  x36  tax
        if (!empty($request->tax)) {

            if ($request->tax > 0) {

                $tmp = $request->tax * 3 * 36;


                $quota = max($tmp, $quota);
            }


        }

        //保单年缴费 x20 倍
        if (!empty($request->policy_fee)) {

            if ($request->policy_fee > 0) {

                $tmp = $request->policy_fee * 20;


                $quota = max($tmp, $quota);
            }


        }


        //house_3

        //房子月供  x100 倍
/*        if (!empty($request->house_3)) {

            if ($request->house_3 > 0) {

                $tmp = $request->house_3 * 100;


                $quota = max($tmp, $quota);
            }


        }*/


        //无业收入  income_month
        if (!empty($request->income_month)) {

            if ($request->income_month > 0) {

                $tmp = $request->income_month * 3 * 36;


                $quota = max($tmp, $quota);
            }


        }


        //÷12×5%×36   company_sum
        if (!empty($request->company_sum)) {

            if ($request->company_sum > 0) {

                $tmp = $request->company_sum / 12 * 0.05 * 36;


                $quota = max($tmp, $quota);
            }


        }


        if ($quota > $max) {

            $quota = $max;
        }

        if ($quota < $min) {

            $quota = $min;
        }


        $quota = floor($quota) . "万";

        return $quota;

    }

    public function workType()
    {

        if ($this->work_type == 1) {
            return "工作";
        }
        if ($this->work_type == 2) {
            return "经营";
        }
        if ($this->work_type == 3) {
            return "无业";
        }

    }

    public function getInfo($keyword)
    {

        if (!empty($this->info)) {
            $info = json_decode($this->info);


            foreach ($info as $key => $i) {


                if ($key == $keyword) {

                    return $i;
                }
            }


        }
    }

}
