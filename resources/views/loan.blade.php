<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://res.wx.qq.com/open/libs/weui/2.3.0/weui.min.css"/>

    <title>Document</title>


    <style>

        .weui-form__title {

            color: white;
        }

        .weui-cell {

            background-color: #ffefe2;
            margin: 0px 10px 0px 10px;


            border-left: 3px solid #cb3709;
            border-right: 3px solid #cb3709;

        }

        .weui-cells_form {
            background-color: #ffb817;
            display: none;

        }

        .weui-cell__bd {
            background: #e1b89e;
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
        .weui-cells_for{
            display: none;
        }
        .step1{

            display: block;
        }

    </style>
</head>
<body data-weui-theme="light" style="background: #ff8f53">
<div class="page" id="app">


    <div class="weui-form" style="background-color: #ff8f53;margin-top;0px   ;  background: #ffb817 url(../images/topbg.png) no-repeat center top / 10rem 11.15rem;
    background-size: 100%;">

        <div class="weui-form__text-area">
            <h2 class="weui-form__title">额度计算器</h2>
            <div class="weui-form__desc"></div>
        </div>
        <div style="  /*  background-image:linear-gradient(-135deg, rgb(167, 85, 170) 30%, rgb(255, 143, 83) 100%,rgb(255, 143, 83) 100%);*/
        ">


            <img src="/images/header_bg.png" alt="" style="
    top: -3.4rem;
    z-index: 999;

    width: 100%;"></div>

        <div class="weui-form__control-area" style="margin-top:0px">


            <div class="weui-cells__group weui-cells__group_form">
                <div class="weui-cells__title"></div>
                <div class="weui-cells weui-cells_form" id="step1" v-bind:class="{step1:isStep1}">


                    <div class="weui-cell weui-cell_active"
                         style="      border-radius: 8px 8px 0px 0px; border-top:  3px solid #cb3709;">
                        <div class="weui-cell__hd"><label class="weui-label">需求金额</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="number" pattern="[0-9]*"/>
                        </div>
                    </div>


                    <div class="weui-cell weui-cell_active weui-cell_select weui-cell_select-after">
                        <div class="weui-cell__hd">
                            <label for="" class="weui-label">期数：</label>
                        </div>
                        <div class="weui-cell__bd">
                            <select class="weui-select" name="select2">
                                <option value="12">12期</option>
                                <option value="24">24期</option>
                                <option value="36">36期</option>
                                <option value="48">48期</option>
                                <option value="68">60期</option>
                            </select>
                        </div>
                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">手机号</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="number" pattern="[0-9]*" value="">
                        </div>

                    </div>


                    <div class="weui-cell weui-cell_active weui-cell_vcode">
                        <div class="weui-cell__hd"><label class="weui-label">验证码</label></div>
                        <div class="weui-cell__bd">
                            <input autofocus="" class="weui-input" type="text" pattern="[0-9]*"
                                   maxlength="6">
                        </div>
                        <div class="weui-cell__ft">
                            <button class="weui-btn weui-btn_default weui-vcode-btn">获取验证码</button>
                        </div>
                    </div>


                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">推荐人</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="number"
                                   pattern="[0-9]*"/>
                        </div>
                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">客户姓名</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="number"
                                   pattern="[0-9]*"/>
                        </div>
                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">身份证号码</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="number"
                                   pattern="[0-9]*"/>
                        </div>
                    </div>


                    <div class="weui-cell weui-cell_active"
                         style="border-bottom:3px solid #cb3709; border-radius: 0px 0px 8px 8px; ">
                        <a href="javascript:" class="weui-btn weui-btn_primary" @click="next">下一步</a>
                    </div>
                    @{{ message }}
                    <a href="javascript:" class="weui-btn weui-btn_default" id="showAndroidActionSheet">Android
                        ActionSheet</a>
                </div>


                <div class="weui-cells__title">工作类型</div>
                <div class="weui-cells weui-cells_form"  v-bind:class="{step2:isStep2}">


                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">工作类型</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="number"
                                   pattern="[0-9]*"/>
                        </div>
                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">公司名字</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="number"
                                   pattern="[0-9]*"/>
                        </div>
                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">单位所在地</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="number"
                                   pattern="[0-9]*"/>
                        </div>
                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">公司注册时间</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="number"
                                   pattern="[0-9]*"/>
                        </div>
                    </div>


                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">最近一年营业额</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="number"
                                   pattern="[0-9]*"/>
                        </div>
                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">最近一年缴税（增值税）</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="number"
                                   pattern="[0-9]*"/>
                        </div>
                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">法人占股</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="number"
                                   pattern="[0-9]*"/>
                        </div>
                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">收入来源</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="number"
                                   pattern="[0-9]*"/>
                        </div>
                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">每月收入</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="number"
                                   pattern="[0-9]*"/>
                        </div>
                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">公司名称</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="number"
                                   pattern="[0-9]*"/>
                        </div>
                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">单位所在地</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="number"
                                   pattern="[0-9]*"/>
                        </div>
                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">现单位上班年限</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="number"
                                   pattern="[0-9]*"/>
                        </div>
                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">工资发放形式</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="number"
                                   pattern="[0-9]*"/>
                        </div>
                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">税收收入</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="number"
                                   pattern="[0-9]*"/>
                        </div>
                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">社保缴存金额</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="number"
                                   pattern="[0-9]*"/>
                        </div>
                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">公积金缴税金额</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" type="number"
                                   pattern="[0-9]*"/>
                        </div>
                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">住房情况</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" placeholder="" type="number" pattern="[0-9]*"/>
                        </div>

                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">单独所有</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" placeholder="" type="number" pattern="[0-9]*"/>
                        </div>

                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">共有</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" placeholder="" type="number" pattern="[0-9]*"/>
                        </div>

                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">按揭</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" placeholder="" type="number" pattern="[0-9]*"/>
                        </div>

                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">抵押</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" placeholder="" type="number" pattern="[0-9]*"/>
                        </div>

                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">全款</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" placeholder="" type="number" pattern="[0-9]*"/>
                        </div>

                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">月供</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" placeholder="" type="number" pattern="[0-9]*"/>
                        </div>

                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">车辆情况</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" placeholder="" type="number" pattern="[0-9]*"/>
                        </div>

                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">按揭</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" placeholder="" type="number" pattern="[0-9]*"/>
                        </div>

                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">抵押</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" placeholder="" type="number" pattern="[0-9]*"/>
                        </div>

                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">全款</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" placeholder="" type="number" pattern="[0-9]*"/>
                        </div>

                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">信用卡总额度</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" placeholder="" type="number" pattern="[0-9]*"/>
                        </div>

                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">信用卡已用额度</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" placeholder="" type="number" pattern="[0-9]*"/>
                        </div>

                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">保单</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" placeholder="" type="number" pattern="[0-9]*"/>
                        </div>

                    </div>

                    <div class="weui-cell weui-cell_active">
                        <div class="weui-cell__hd"><label class="weui-label">保单年缴费</label></div>
                        <div class="weui-cell__bd">
                            <input class="weui-input" placeholder="" type="number" pattern="[0-9]*"/>
                        </div>

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
                        <div class="weui-actionsheet__cell" @click="setWorkType(3)">无业</div>
                    </div>
                </div>
            </div>

        </div>
        <div class="weui-form__tips-area">
            <p class="weui-form__tips">
                表单页提示，居中对齐
            </p>
        </div>
        <div class="weui-form__opr-area">
            <a class="weui-btn weui-btn_primary weui-btn_disabled" href="javascript:" id="showTooltips">确定</a>
        </div>
        <div class="weui-form__tips-area">
            <p class="weui-form__tips">
                表单页提示，居中对齐
            </p>
        </div>
        <div class="weui-form__extra-area">
            <div class="weui-footer">
                <p class="weui-footer__links">
                    <a href="javascript:" class="weui-footer__link">底部链接文本</a>
                </p>
                <p class="weui-footer__text">Copyright © 2008-2019 新房网  </p>
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
</div>


<script src="https://cdn.bootcss.com/vue/2.6.11/vue.min.js"></script>


<script type="text/javascript">


    var app = new Vue({
        el: '#app',
        data: {
            message: 'Hello Vue!',
            form: {
                "work_type": 0
            },
            isStep1:true,
            isStep2:false,

            isShow: false,
        },
        methods: {
            next: function () {


                //判断输入的是否是正确

                //

                this.showWorkType();


            },
            showWorkType() {

                this.isShow = 1;


            },
            setWorkType(select_id) {


                this.form.work_type = select_id;

                this.isShow = 0;


                this.isStep1=false;

            }
        }
    })

    function showForm() {


    }
</script>


</body>
</html>
