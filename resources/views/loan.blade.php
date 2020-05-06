<!doctype html>
<html lang="en">
<head>
    <meta name="csrf-token" content="<?PHP echo csrf_token() ?>">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://res.wx.qq.com/open/libs/weui/2.3.0/weui.min.css"/>

    <title>额度计算器</title>


    <style>
        .weui-toast {
            position: fixed;
            z-index: 5000;
            width: 200px;

        }

        .weui-form__title {

            color: black;
        }

        .weui-cell {

            background-color: rgba(222, 222, 222, 1);
            margin: 0px 10px 0px 10px;


            border-left: 3px solid #2f2f2f;
            border-right: 3px solid #2f2f2f;

        }

        .weui-cells_form {
            background-color: inherit;
            display: none;

        }

        .weui-btn_primary {
            background-color: #000000;
            background-color: #000000;
        }

        .weui-cell__bd {
            background: #bfbfbf;
            height: 2rem;
            line-height: 2rem;
            color: #190a07;
            border-radius: 6px;
            padding-left: 10px;
            border: 1px solid #5d3c2b;
        }

        .weui-select {
            -webkit-appearance: none;
            border: 0;
            outline: 0;
            background-color: transparent;
            width: inherit;
            font-size: inherit;
            height: 2rem;
            line-height: 2rem;
            position: relative;
            z-index: 1;
            padding-left: 16px;
            color: rgba(0, 0, 0, .9);
            color: var(--weui-FG-0);
        }


        .weui-cells_form .weui-cell_disabled:active, .weui-cells_form .weui-cell_readonly:active, .weui-cells_form .weui-cell_switch:active, .weui-cells_form .weui-cell_vcode:active {
            background-color: #ffefe2;
        }

        .weui-cells__group_form .weui-cell {
            padding: 10px 18px;
        }

        .weui-skin_android {
            display: none;
        }

        .active {
            display: block;
        }

        .weui-cells_for {
            display: none;
        }

        .step1 {

            display: block;
        }

        .step2 {
            display: block;
        }

        .weui-cells__group_form:first-child .weui-cells__title {
            margin-top: 0;
            margin: 10px;
            margin-left: 0px;
            padding-left: 16px;
            color: #000;
        }

        .hide {
            display: none;
        }

        .show {
            display: block
        }

        .weui-cells__group_form .weui-cell_select-after .weui-select {
            padding-left: 0;
            width: 100%;
        }

        .weui-cells__group_form .weui-vcode-btn {
            font-size: 16px;
            padding: 0 12px;
            margin-left: 0;
            height: auto;
            width: auto;
            line-height: 2em;
            color: black;
            color: black;
            background-color: #bfbfbf;
            background-color: #bfbfbf;
        }

        .weui-form__control-area {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            margin: 48px 0;
            margin-bottom: 0px;
        }

        .weui-footer__text {
            padding: 0 16px;
            font-size: 12px;
            color: #2d2c28;
        }
        .red {
        color: red;
        }
        .weui-cells__group_form .weui-label {
            max-width: 6em;
            margin-right: 8px;
        }
    </style>
</head>
<body data-weui-theme="light"
      style="    background: url(../images/topbg.png?ud=2) center top / 100% repeat-y rgb(178, 178, 178);">
<div class="page" id="app">

    <div class="weui-form__text-area" style="padding-left: 18px">

        <div class="row">

<div class="col-md-12" style="    width: 100%;
    height: 83px;">



            <img  src="/images/logo.png" style="width: 80px;margin: 20px;margin-left:0px;text-align: left;float:left;color: white" alt="">
</div>
        </div>



    </div>
    <div class="weui-form" style="background-color: #ff8f53;padding-top:0px;  background: rgb(178, 178, 178) url(../images/topbg.png?ud=2) repeat-y center top / 10rem 11.15rem;
    background-size: 100%;">

        <div class="weui-form__text-area">



            <h2 class="weui-form__title">贷款测算</h2>
            <div class="weui-form__desc"></div>
        </div>
        <div style="  /*  background-image:linear-gradient(-135deg, rgb(167, 85, 170) 30%, rgb(255, 143, 83) 100%,rgb(255, 143, 83) 100%);*/
        ">


            {{--   <img src="/images/header_bg.png" alt="" style="
       top: -3.4rem;
       z-index: 999;

       width: 100%;"></div>--}}

            <div class="weui-form__control-area" style="margin-top:0px">


                <div class="weui-cells__group weui-cells__group_form">
                    <div class="weui-cells__title"></div>
                    <div class="weui-cells weui-cells_form" id="step1" v-bind:class="{step1:isStep1}">

                        <div class="weui-cell weui-cell_active"
                             style="      border-radius: 8px 8px 0px 0px; border-top:  3px solid #2f2f2f;">


                        <div class="weui-cell__hd"><label class="weui-label">  <span class="red">* </span> 客户姓名:</label></div>
                            <div class="weui-cell__bd">
                                <input class="weui-input"
                                       v-model="form.name"         style="width: 60%"/>

                                <select style="width: 36%"  name="select2" v-model="form.sex">
                                    <option value="">请选择</option>

                                    <option value="先生">先生</option>
                                    <option value="女士">女士</option>

                                </select>



                            </div>
                        </div>




                        <div class="weui-cell weui-cell_active">
                            <div class="weui-cell__hd"><label class="weui-label"><span class="red">* </span> 年龄:</label></div>
                            <div class="weui-cell__bd">
                                <input class="weui-input" type="number" v-model="form.id_card">
                            </div>
                        </div>
                        <div class="weui-cell weui-cell_active"
                          >
                            <div class="weui-cell__hd"><label class="weui-label"><span class="red">* </span> 需求金额:</label></div>
                            <div class="weui-cell__bd">
                                <input class="weui-input" type="number" pattern="[0-9]*" v-model="form.amount"
                                       style="width: 80%"/>

                                万
                            </div>
                        </div>

                        <div class="weui-cell weui-cell_active weui-cell_select weui-cell_select-after">
                            <div class="weui-cell__hd">
                                <label for="" class="weui-label"><span class="red">* </span> 贷款用途:</label>
                            </div>
                            <div class="weui-cell__bd">
                                <select class="weui-select" name="select2" v-model="form.use">
                                    <option value="">请选择</option>

                                    <option value="购买房产">购买房产</option>
                                    <option value="购买汽车">购买汽车</option>
                                    <option value="经营生意">经营生意</option>
                                    <option value="大额消费">大额消费</option>
                                    <option value="其他用途">其他用途</option>
                                </select>
                            </div>
                        </div>


                        <div class="weui-cell weui-cell_active weui-cell_select weui-cell_select-after">
                            <div class="weui-cell__hd">
                                <label for="" class="weui-label"><span class="red">* </span> 贷款期限:</label>
                            </div>
                            <div class="weui-cell__bd">
                                <select class="weui-select" name="select2" v-model="form.period">
                                    <option value="">请选择</option>


                                    <option value="1"> 1期（一个月）</option>
                                    <option value="3">3期（三个月）</option>
                                    <option value="6">6期（六个月）</option>
                                    <option value="12">12期（一年）</option>
                                    <option value="24"> 24期（两年）</option>
                                    <option value="36">36期（三年）</option>
                                    <option value="60">60期（五年）</option>
                                    <option value="96">96期（八年）</option>
                                    <option value="120">120期（十年）</option>
                                    <option value="240">240期（二十年）</option>
                                    <option value="360">360期（三十年）</option>


                                </select>
                            </div>
                        </div>


                        <div class="weui-cell weui-cell_active">
                            <div class="weui-cell__hd"><label class="weui-label"><span class="red">* </span> 手机号:</label></div>
                            <div class="weui-cell__bd">
                                <input class="weui-input" type="number" pattern="[0-9]*" value="" v-model="form.phone">
                            </div>

                        </div>


                        <div class="weui-cell weui-cell_active weui-cell_vcode">
                            <div class="weui-cell__hd"><label class="weui-label"><span class="red">* </span> 验证码:</label></div>
                            <div class="weui-cell__bd">
                                <input autofocus="" class="weui-input" type="text" pattern="[0-9]*"
                                       maxlength="6" v-model="form.sms_code">
                            </div>
                            <div class="weui-cell__ft">
                                <button class="weui-btn weui-btn_default weui-vcode-btn" @click="sendSms()"
                                        :disabled="!show">
                                    <span v-show="show">获取验证码</span>
                                    <span v-show="!show" class="count">@{{count}} s</span></button>
                            </div>
                        </div>


                        <div class="weui-cell weui-cell_active">
                            <div class="weui-cell__hd"><label class="weui-label">推荐人手机:</label></div>
                            <div class="weui-cell__bd">
                                <input class="weui-input"
                                       v-model="form.invite">
                            </div>
                        </div>



                        <div class="weui-cell weui-cell_active"
                             style="border-bottom:3px solid #2f2f2f; border-radius: 0px 0px 8px 8px; ">
                            <a href="javascript:" class="weui-btn weui-btn_primary" @click="next">下一步</a>
                        </div>

                    </div>


                    <div class="weui-cells weui-cells_form" v-bind:class="{step2:isStep2}">


                        <div class="" v-bind:class="{hide:form.work_type!=2}">


                            <div class="weui-cells__title">经营情况</div>


                            {{--       <div class="weui-cell weui-cell_active"
                                        style="      border-radius: 8px 8px 0px 0px; border-top:  3px solid #2f2f2f;">
                                       <div class="weui-cell__hd"><label class="weui-label">公司名字</label></div>
                                       <div class="weui-cell__bd">
                                           <input class="weui-input" v-model="form.company_name"/>
                                       </div>
                                   </div>
       --}}
                            <div class="weui-cell weui-cell_active"

                                 style="      border-radius: 8px 8px 0px 0px; border-top:  3px solid #2f2f2f;">
                                <div class="weui-cell__hd"><label class="weui-label"><span class="red">* </span> 单位所在市:</label></div>
                                <div class="weui-cell__bd">
                                    <input class="weui-input" v-model="form.company_address"
                                           style="width: 80%"/>

                                    市
                                </div>
                            </div>

                            {{--         <div class="weui-cell weui-cell_active">
                                         <div class="weui-cell__hd"><label class="weui-label">公司注册时间</label></div>
                                         <div class="weui-cell__bd">
                                             <input class="weui-input" v-model="form.company_created_at"/>
                                         </div>
                                     </div>
         --}}

                            <div class="weui-cell weui-cell_active">
                                <div class="weui-cell__hd"><label class="weui-label">最<span class="red">* </span> 近一年营业额:</label></div>
                                <div class="weui-cell__bd">
                                    <input class="weui-input" type="number" pattern="[0-9]*"
                                           v-model="form.company_sum"
                                           style="width: 80%"/>

                                    万
                                </div>
                            </div>

                            <div class="weui-cell weui-cell_active">
                                <div class="weui-cell__hd"><label class="weui-label"><span class="red">* </span> 最近一年缴税（增值税）:</label></div>
                                <div class="weui-cell__bd">
                                    <input class="weui-input" type="number" pattern="[0-9]*"
                                           v-model="form.company_tax" style="width: 80%"/>

                                    万
                                </div>
                            </div>


                            <div class="weui-cell weui-cell_active weui-cell_select weui-cell_select-after">
                                <div class="weui-cell__hd">

                                    <label for="" class="weui-label"><span class="red">* </span> 是否是法人:</label>

                                </div>
                                <div class="weui-cell__bd">


                                    <select class="weui-select" name="select2" v-model="form.is_legal"/>
                                    <option value="">请选择</option>

                                    <option value="是">是</option>
                                    <option value="否">否</option>


                                    </select>
                                </div>
                            </div>
                            <div class="weui-cell weui-cell_active">
                                <div class="weui-cell__hd"><label class="weui-label"><span class="red">* </span> 本人占股:</label></div>
                                <div class="weui-cell__bd">
                                    <input class="weui-input" v-model="form.legoal_stock"
                                           style="width: 80%"/>

                                    %
                                </div>
                            </div>

                            <div class="weui-cell weui-cell_active">
                                <div class="weui-cell__hd"><label class="weui-label"><span class="red">* </span> 公司行业:</label></div>
                                <div class="weui-cell__bd">
                                    <input class="weui-input"
                                           v-model="form.company_indsutry"/>
                                </div>
                            </div>


                            <div class="weui-cell weui-cell_active weui-cell_select weui-cell_select-after"
                                 style="border-bottom:3px solid #2f2f2f; border-radius: 0px 0px 8px 8px; ">
                                <div class="weui-cell__hd">

                                    <label for="" class="weui-label"><span class="red">* </span> 公司注册年限:</label>

                                </div>
                                <div class="weui-cell__bd">


                                    <select class="weui-select" name="select2" v-model="form.year"/>
                                    <option value="">请选择</option>

                                    <option value="无注册">无注册</option>
                                    <option value="1年内">1年内</option>
                                    <option value="1-2年">1-2年</option>
                                    <option value="2年以上">2年以上</option>


                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="" v-bind:class="{hide:form.work_type!=3}">
                            <div class="weui-cells__title">其他收入</div>

                            {{--

                                                        <div class="weui-cell weui-cell_active"
                                                             style="      border-radius: 8px 8px 0px 0px; border-top:  3px solid #2f2f2f;">

                                                            <div class="weui-cell__hd"><label class="weui-label">收入来源</label></div>
                                                            <div class="weui-cell__bd">
                                                                <input class="weui-input" v-model="form.income_source"/>
                                                            </div>
                                                        </div>
                            --}}


                            <div class="weui-cell weui-cell_active weui-cell_select weui-cell_select-after"
                                 style="      border-radius: 8px 8px 0px 0px; border-top:  3px solid #2f2f2f;">
                                <div class="weui-cell__hd">

                                    <label for="" class="weui-label"><span class="red">* </span> 收入来源:</label>

                                </div>
                                <div class="weui-cell__bd">


                                    <select class="weui-select" name="select2" v-model="form.income_source"/>
                                    <option value="">请选择</option>

                                    <option value="租金">租金</option>
                                    <option value="分红">分红</option>

                                    <option value="自由职业">自由职业</option>
                                    <option value="其他">其他</option>


                                    </select>
                                </div>
                            </div>
                            <div class="weui-cell weui-cell_active">
                                <div class="weui-cell__hd"><label class="weui-label"><span class="red">* </span> 月收入额:</label></div>
                                <div class="weui-cell__bd">
                                    <input class="weui-input" type="number" pattern="[0-9]*" v-model="form.income_month_money"/>
                                </div>
                            </div>
                            <div class="weui-cell weui-cell_active"
                                 style="border-bottom:3px solid #2f2f2f; border-radius: 0px 0px 8px 8px; ">
                                <div class="weui-cell__hd"><label class="weui-label"><span class="red">* </span>银行流水:</label></div>
                                <div class="weui-cell__bd">
                                    <input class="weui-input" type="number" pattern="[0-9]*"
                                           v-model="form.income_month"
                                           style="width: 80%"/>月

                                </div>
                            </div>

                        </div>


                        <div class="" v-bind:class="{hide:form.work_type!=1}">


                            <div class="weui-cells__title">上班情况</div>


                            <div class="weui-cell weui-cell_active"
                                 style="      border-radius: 8px 8px 0px 0px; border-top:  3px solid #2f2f2f;">


                                <div class="weui-cell__hd"><label class="weui-label"><span class="red">* </span> 职位:</label></div>
                                <div class="weui-cell__bd">
                                    <input class="weui-input" v-model="form.company_name"/>
                                </div>
                            </div>

                            <div class="weui-cell weui-cell_active">
                                <div class="weui-cell__hd"><label class="weui-label"><span class="red">* </span> 单位所在市:</label></div>
                                <div class="weui-cell__bd">
                                    <input class="weui-input" v-model="form.company_address"
                                           style="width: 80%"/>

                                    市
                                </div>
                            </div>


                            <div class="weui-cell weui-cell_active weui-cell_select weui-cell_select-after">
                                <div class="weui-cell__hd">

                                    <label for="" class="weui-label"><span class="red">* </span> 现单位上班年限:</label>

                                </div>
                                <div class="weui-cell__bd">


                                    <select class="weui-select" name="select2" v-model="form.work_years"/>
                                    <option value="">请选择</option>

                                    <option value="1年内">1年内</option>
                                    <option value="1-3年">1-3年</option>
                                    <option value="3年以上">3年以上</option>


                                    </select>
                                </div>
                            </div>

                            <div class="weui-cell weui-cell_active weui-cell_select weui-cell_select-after">
                                <div class="weui-cell__hd">

                                    <label for="" class="weui-label"><span class="red">* </span> 工资发放形式:</label>

                                </div>
                                <div class="weui-cell__bd">


                                    <select class="weui-select" name="select2" v-model="form.pay_method"/>
                                    <option value="">请选择</option>

                                    <option value="银行代发">银行代发</option>
                                    <option value="部分代发">部分代发</option>
                                    <option value="银行转账">银行转账</option>
                                    <option value="支付宝/微信">支付宝/微信</option>
                                    <option value="现金">现金</option>


                                    </select>
                                </div>
                            </div>


                            <div class="weui-cell weui-cell_active" v-bind:class="{'hide':form.pay_method!='部分代发'&&form.pay_method!='银行代发'}">
                                <div class="weui-cell__hd"><label class="weui-label"><span class="red">* </span> 代发金额:</label></div>
                                <div class="weui-cell__bd">
                                    <input class="weui-input" type="number" pattern="[0-9]*" v-model="form.daifa"/>
                                </div>

                            </div>
                             <div class="weui-cell weui-cell_active">
                                       <div class="weui-cell__hd"><label class="weui-label"><span class="red">* </span> 工资总额:</label></div>
                                       <div class="weui-cell__bd">
                                           <input class="weui-input" type="number" pattern="[0-9]*" v-model="form.total"/>
                                       </div>
                                   </div>

                            <div class="weui-cell weui-cell_active">
                                <div class="weui-cell__hd"><label class="weui-label">社保月扣费</label></div>
                                <div class="weui-cell__bd">
                                    <input class="weui-input" v-model="form.social_secruity"/>
                                </div>
                            </div>

                            <div class="weui-cell weui-cell_active"
                                 style="border-bottom:3px solid #2f2f2f; border-radius: 0px 0px 8px 8px; ">
                                <div class="weui-cell__hd"><label class="weui-label">公积金月扣费</label></div>
                                <div class="weui-cell__bd">
                                    <input class="weui-input" v-model="form.provident_fund"/>
                                </div>
                            </div>

                        </div>


                        <div class="weui-cells__title">完善资料：</div>
                        <div class="weui-cells weui-cells_form" v-bind:class="{step2:isStep2}">


                            <div class="weui-cell weui-cell_active weui-cell_select weui-cell_select-after"
                                 style="      border-radius: 8px 8px 0px 0px; border-top:  3px solid #2f2f2f;">
                                <div class="weui-cell__hd">
                                    <label for="" class="weui-label">住房情况：</label>
                                </div>
                                <div class="weui-cell__bd">


                                    <select class="weui-select" name="select2" v-model="form.house_1">
                                        <option value="全款房">全款房</option>
                                        <option value="按揭房">按揭房</option>
                                        <option value="抵押房">抵押房</option>
                                        <option value="租房">租房</option>
                                        <option value="公司宿舍">公司宿舍</option>
                                        <option value="亲戚朋友房">亲戚朋友房</option>

                                    </select>
                                </div>
                            </div>

                            <div class="weui-cell weui-cell_active" v-bind:class="{'hide':form.house_1!='全款房'&&form.house_1!='按揭房'}">
                                <div class="weui-cell__hd"><label class="weui-label">房产价值：</label></div>
                                <div class="weui-cell__bd">
                                    <input class="weui-input" type="number" pattern="[0-9]*" v-model="form.house_4"
                                           style="width: 80%"/>

                                    万
                                </div>

                            </div>
                            <div class="weui-cell weui-cell_active weui-cell_select weui-cell_select-after">
                                <div class="weui-cell__hd">

                                    <label for="" class="weui-label">住房类型：</label>

                                </div>
                                <div class="weui-cell__bd">


                                    <select class="weui-select" name="select2" v-model="form.house_2">
                                        <option value="">请选择</option>

                                        <option value="住房商品房">住房商品房</option>
                                        <option value="公寓商品房">公寓商品房</option>
                                        <option value="城中村农民房">城中村农民房</option>
                                        <option value="小产权/使用权房">小产权/使用权房</option>

                                    </select>
                                </div>
                            </div>


                            <div class="weui-cell weui-cell_active" v-bind:class="{'hide':form.house_1!='按揭房'}">
                                <div class="weui-cell__hd"><label class="weui-label">房产月供</label></div>
                                <div class="weui-cell__bd">
                                    <input class="weui-input" placeholder="" v-model="form.house_3">
                                </div>

                            </div>

                            <div class="weui-cell weui-cell_active weui-cell_select weui-cell_select-after">
                                <div class="weui-cell__hd">

                                    <label for="" class="weui-label">车辆情况：</label>

                                </div>
                                <div class="weui-cell__bd">


                                    <select class="weui-select" name="select2" v-model="form.car_1">
                                        <option value="">请选择</option>

                                        <option value="按揭车">按揭车</option>
                                        <option value="抵押车">抵押车</option>
                                        <option value="全款车">全款车</option>
                                        <option value="无">无</option>

                                    </select>
                                </div>
                            </div>
                            <div class="weui-cell weui-cell_active" v-bind:class="{'hide':form.car_1!='按揭车'&&form.car_1!='全款车'}">
                                <div class="weui-cell__hd"><label class="weui-label">车辆价值：</label></div>
                                <div class="weui-cell__bd">
                                    <input class="weui-input" type="number" pattern="[0-9]*" v-model="form.car_3"
                                           style="width: 80%"/>万
                                </div>

                            </div>

                            <div class="weui-cell weui-cell_active" v-bind:class="{'hide':form.car_1!='按揭'}">
                                <div class="weui-cell__hd"><label class="weui-label">汽车月供</label></div>
                                <div class="weui-cell__bd">
                                    <input class="weui-input" placeholder="" v-model="form.car_2">
                                </div>

                            </div>


                            <div class="weui-cell weui-cell_active">
                                <div class="weui-cell__hd"><label class="weui-label">信用卡总额度</label></div>
                                <div class="weui-cell__bd">
                                    <input class="weui-input" v-model="form.credit_total"
                                           style="width: 80%"/>

                                    万
                                </div>

                            </div>

                            <div class="weui-cell weui-cell_active">
                                <div class="weui-cell__hd"><label class="weui-label">信用卡已用额度</label></div>
                                <div class="weui-cell__bd">
                                    <input class="weui-input" v-model="form.credit_used" style="width: 80%"/>

                                    万

                                </div>

                            </div>

                            <div class="weui-cell weui-cell_active weui-cell_select weui-cell_select-after">
                                <div class="weui-cell__hd">

                                    <label for="" class="weui-label">保单：</label>

                                </div>
                                <div class="weui-cell__bd">


                                    <select class="weui-select" name="select2" v-model="form.policy">
                                        <option value="">请选择</option>

                                        <option value="有">有</option>
                                        <option value="无">无</option>


                                    </select>
                                </div>
                            </div>
                            <div class="weui-cell weui-cell_active" v-bind:class="{'hide':form.policy!='有'}">
                                <div class="weui-cell__hd"><label class="weui-label">保单年缴费</label></div>
                                <div class="weui-cell__bd">
                                    <input class="weui-input" v-model="form.policy_fee">
                                </div>

                            </div>


                            <div class="weui-cell weui-cell_active weui-cell_select weui-cell_select-after">
                                <div class="weui-cell__hd">

                                    <label for="" class="weui-label">其他增加额度方式：</label>

                                </div>
                                <div class="weui-cell__bd">


                                    <select class="weui-select" name="select2" v-model="form.other">
                                        <option value="">请选择</option>

                                        <option value="他人愿意担保">他人愿意担保</option>
                                        <option value="可提供房产抵押">可提供房产抵押</option>

                                        <option value="无">无</option>

                                    </select>
                                </div>
                            </div>


                            <div class="weui-cell weui-cell_active"
                                 style="border-bottom:3px solid #2f2f2f; border-radius: 0px 0px 8px 8px; ">
                                <a href="javascript:" class="weui-btn weui-btn_primary" @click="submit">提交信息</a>
                            </div>

                        </div>
                    </div>


                    <div class="weui-skin_android" id="workTypModal" v-bind:class="{ active: isShow }">
                        <div class="weui-mask"></div>


                        <div class="weui-actionsheet">
                            <div class="weui-actionsheet__menu">

                                <div style="text-align: center;padding: 2rem">

                                    当前工作状态：
                                </div>
                                <div class="weui-actionsheet__cell" @click="setWorkType(1)">上班</div>
                                <div class="weui-actionsheet__cell" @click="setWorkType(2)">经营</div>
                                <div class="weui-actionsheet__cell" @click="setWorkType(3)">其他收入</div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="weui-form__extra-area">
                    <div class="weui-footer" style="margin-top: 5rem">

                        <p class="weui-footer__text">Copyright © 2008-2020 今日科技 </p>


                    </div>
                </div>
            </div>
            <div id="js_toast" style="display: none;">
                <div class="weui-mask_transparent"></div>
                <div class="weui-toast">
                    <i class="weui-icon-success-no-circle weui-icon_toast"></i>
                    <p class="weui-toast__content">已完成</p>
                </div>
            </div>


            <!--BEGIN toast-->
            <div id="toast" style="display: none;">
                <div class="weui-mask_transparent"></div>
                <div class="weui-toast">
                    <i class="weui-icon-warn weui-icon_msg weui-icon_toast"></i>
                    <p class="weui-toast__content">@{{message}}</p>
                </div>
            </div>
            <!--end toast-->


            <!--BEGIN toast-->
            <div id="toast2" style="display: none;">
                <div class="weui-mask_transparent"></div>
                <div class="weui-toast" style="    position: fixed;
    z-index: 5000;
    width: 200px;
    padding: 2rem;
    text-align: left;
    height: 15rem;
}">
                    <i class="weui-icon-success weui-icon_msg weui-icon_toast" style="    margin-bottom: 1rem;"></i>
                    <p>
                        恭喜您 </p>
                    <p>
                       您的测算结果如下：

                    </p>
                    <p>
                        贷款利息为:
                        <span v-if="form.work_type==1"> 0.3%-8% </span>
                        <span v-if="form.work_type==2"> 0.3%-0.85%</span>
                        <span v-if="form.work_type==3"> 0.5%-0.98% </span>/月，授信额度为：
                    </p>
                    <p style="    font-size: 2rem;
    line-height: 4rem;" class="weui-toast__content">@{{message2}}元</p>
                    <p>我们将安排客户经理一对一服务，请您留意来电。</p>
                </div>
            </div>
            <!--end toast-->
        </div>


        <script src="https://cdn.bootcss.com/vue/2.6.11/vue.min.js"></script>
        <script src="/js/zepto.min.js"></script>

        <script type="text/javascript">
            // toast
            $(function () {
                /*       var $toast = $('#toast');
                       $('#showToast').on('click', function(){
                           if ($toast.css('display') != 'none') return;

                           $toast.fadeIn(100);
                           setTimeout(function () {
                               $toast.fadeOut(100);
                           }, 2000);
                       });*/
            });


            var app = new Vue({
                el: '#app',
                data: {
                    message: 'Hello Vue!',
                    form: {
                        "work_type": 0,
                        "period": '',
                        "sex": '先生'

                    },
                    message2: "",
                    id: 0,
                    isStep1: true,
                    isStep2: false,

                    isShow: false,
                    show: true,
                    count: '',
                    timer: null,
                },
                methods: {

                    sendSms() {
                        if (!this.checkPhone()) {
                            return false;
                        }


                        $.get("/send_sms?phone=" + this.form.phone, function (res) {
                            console.log(res);

                        });

                        if (!this.timer) {
                            this.count = 60;
                            this.show = false;
                            this.timer = setInterval(() => {
                                if (this.count > 0 && this.count <= 60) {
                                    this.count--;
                                } else {
                                    this.show = true;
                                    clearInterval(this.timer);
                                    this.timer = null;
                                }
                            }, 1000)
                        }
                    },

                    toast(message) {
                        this.message = message;

                        var $toast = $('#toast');
                        if ($toast.css('display') != 'none') return;

                        $toast.fadeIn(100);
                        setTimeout(function () {
                            $toast.fadeOut(100);
                        }, 1000);
                    },

                    checkPhone() {


                        var phone = this.form.phone;
                        if (!(/^1[3456789]\d{9}$/.test(phone))) {

                            this.message = "手机号码有误，请重填";
                            var $toast = $('#toast');
                            if ($toast.css('display') != 'none') return;

                            $toast.fadeIn(100);
                            setTimeout(function () {
                                $toast.fadeOut(100);
                            }, 2000);
                            //     alert("手机号码有误，请重填");
                            return false;
                        }

                        return true;
                    },

                    next: function () {


                        //判断输入的是否是正确

                        //


                if (!this.form.amount > 0) {
                            this.toast("需求金额必填");
                            return false;
                        }
                        if (!this.form.period > 0) {
                            this.toast("期数必选");
                            return false;
                        }
                        if (!this.form.sms_code > 0) {
                            this.toast("验证码必填");
                            return false;
                        }
                        if (!this.checkPhone()) {

                            return false;
                        }


                        if (this.form.use == undefined || this.form.use == "") {
                            this.toast("用途必填");
                            return false;
                        }


                        if (this.form.name == undefined || this.form.name == "") {
                            this.toast("客户姓名必填");
                            return false;
                        }

                        if (!this.form.id_card > 0) {
                            this.toast("年龄必填");
                            return false;
                        }


                        var self = this;


                        $.ajax({
                            url: '/loan',
                            type: 'post',
                            data: this.form,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            dataType: 'json',
                            success: function (res, status) {

                                console.log(status);
                                console.log(res);
                                if (res.id > 0) {

                                    self.id = res.id
                                    self.showWorkType();

                                } else {


                                    self.toast(res.msg)

                                }
                            },
                            failure: function (response, status) {

                            },
                            complete: function (xhr, status) {

                                console.log(xhr);
                                console.log(status);
                                if (status == "error") {

                                    var json = JSON.parse(xhr.response);
                                    self.toast(json.msg)
                                }
                            }
                        });


                    },
                    showWorkType() {


                        this.isShow = 1;


                    },
                    setWorkType(select_id) {


                        this.form.work_type = select_id;

                        this.isShow = 0;


                        this.isStep1 = false;


                        this.isStep2 = true;

                    }
                    , submit() {


                        //check type


                        console.log(this.id);

                        this.form.id = this.id;


                        if (this.form.work_type == 3) {


                            if (this.form.income_source == undefined || this.form.income_source == "") {
                                this.toast("收入来源必填");
                                return false;
                            }
                            if (this.form.income_month == undefined || this.form.income_month == "") {
                                this.toast("每月收必填");
                                return false;
                            }


                            //income_source

                        }


                        if (this.form.work_type == 1) {


                            if (this.form.company_name == undefined || this.form.company_name == "") {
                                this.toast("职位必填");
                                return false;
                            }
                            if (this.form.company_address == undefined || this.form.company_address == "") {
                                this.toast("公司地址必填");
                                return false;
                            }
                            if (this.form.work_years == undefined || this.form.work_years == "") {
                                this.toast("现单位上班年限必填");
                                return false;
                            }
                            if (this.form.pay_method == undefined || this.form.pay_method == "") {
                                this.toast("工资发放方式必填");
                                return false;
                            }

                          if (this.form.total == undefined || this.form.total == "") {
                                     this.toast("工资总额必填");
                                     return false;
                                 }
                       /*     if (this.form.social_secruity == undefined || this.form.social_secruity == "") {
                                this.toast("社保月扣费必填");
                                return false;
                            }


                            if (this.form.provident_fund == undefined || this.form.provident_fund == "") {
                                this.toast("公积金月扣费必填");
                                return false;
                            }
*/
                            //income_source

                        }


                        if (this.form.work_type == 2) {


                            /*    if (this.form.company_name == undefined || this.form.company_name == "") {
                                    this.toast("公司名称必填");
                                    return false;
                                }*/
                            if (this.form.company_address == undefined || this.form.company_address == "") {
                                this.toast("公司地址必填");
                                return false;
                            }
                            /*     if (this.form.company_created_at == undefined || this.form.company_created_at == "") {
                                     this.toast("公司注册时间必填");
                                     return false;
                                 }*/
                            if (this.form.company_sum == undefined || this.form.company_sum == "") {
                                this.toast("最近一年营业额必填");
                                return false;
                            }

                            if (this.form.company_tax == undefined || this.form.company_tax == "") {
                                this.toast("增值税必填");
                                return false;
                            }
                            /*        if (this.form.legoal_stock == undefined || this.form.legoal_stock == "") {
                                        this.toast("法人占股必填");
                                        return false;
                                    }*/


                            //income_source

                        }
                        console.log(this.form);


                        var self = this;


                        $.ajax({
                            url: '/loan',
                            type: 'put',
                            data: this.form,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            dataType: 'json',
                            success: function (res, status) {

                                console.log(status);
                                console.log(res);


                                self.message2 = res.quota;
                                var $toast = $('#toast2');
                                if ($toast.css('display') != 'none') return;

                                $toast.fadeIn(100);
                                setTimeout(function () {
                                    $toast.fadeOut(100);
                                }, 200000);
                                //     alert("手机号码有误，请重填");
                                // return false;
                                //评估计算额度

                            },
                            failure: function (response, status) {

                            },
                            complete: function (xhr, status) {

                                console.log(xhr);
                                console.log(status);
                                if (status == "error") {

                                    var json = JSON.parse(xhr.response);
                                    self.toast(json.msg)
                                }
                            }
                        });


                    }
                }
            })

            function showForm() {


            }
        </script>


</body>
</html>

