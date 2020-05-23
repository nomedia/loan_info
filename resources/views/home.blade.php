@extends('layouts.app')

@section('content')

    <style>


        .card {
            margin-bottom: 20px;
        }
        .header_title{
            margin:10px 0px;
            color: #298fe2;
        }
    </style>
    <div class="container">


        <div class="row justify-content-center">
            <div class="col-md-12">

                <a href="/home/export/">
                <input type="button" class="btn btn-success" value="下载" style="width: 300px;margin-bottom: 50px">

                </a>

            </div>
            <div class="col-md-12">


                @foreach($lists as $key=>$l)
                    <div class="card">
                        <div class="card-header">{{$l->id}} 客户姓名：{{$l->name}} 预测额度：{{$l->quota}}</div>

                        <div class="card-body">

                            <div class="container">

                                <h5 class="header_title">基本信息</h5>
                                <div class="row">


                                    <div class="col-md-3 col-sm-6">申请金额：{{$l->amount}}</div>

                                    <div class="col-md-3 col-sm-6">手机号：{{$l->phone}}</div>
                                    <div class="col-md-3 col-sm-6">期数：{{$l->period}}期</div>
                                    <div class="col-md-3 col-sm-6">邀请人：{{$l->invite}}</div>
                                    <div class="col-md-3 col-sm-6">工作类型：{{$l->workType()}}</div>
                                    <div class="col-md-3 col-sm-6">身份证号：{{$l->id_card}}</div>


                                </div>
                            </div>


                            <div class="container">
                                <h5 class="header_title">工作情况 ( {{$l->workType()}} )</h5>
                                <div class="row">


                                    @if($l->work_type==1)

                                        <div class="col-md-3 col-sm-6">公司名称：{{$l->getInfo('company_name')}}</div>

                                        <div class="col-md-3 col-sm-6">单位所在地：{{$l->getInfo('company_address')}}</div>
                                        <div class="col-md-3 col-sm-6">现单位上班年限：{{$l->getInfo('work_years')}}</div>
                                        <div class="col-md-3 col-sm-6">工资发放形式：{{$l->getInfo('pay_method')}}</div>
                                        <div class="col-md-3 col-sm-6">税收收入：{{$l->getInfo('tax')}}</div>
                                        <div class="col-md-3 col-sm-6">社保缴存金额：{{$l->getInfo('social_secruity')}}</div>
                                        <div class="col-md-3 col-sm-6">公积金缴税金额：{{$l->getInfo('provident_fund')}}</div>
                                    @elseif($l->work_type==2)

                                        <div class="col-md-3 col-sm-6">公司名称：{{$l->getInfo('company_name')}}</div>

                                        <div class="col-md-3 col-sm-6">单位所在地：{{$l->getInfo('company_address')}}</div>
                                        <div class="col-md-3 col-sm-6">
                                            公司注册时间：{{$l->getInfo('company_created_at')}}</div>
                                        <div class="col-md-3 col-sm-6">最近一年营业额：{{$l->getInfo('company_sum')}}</div>
                                        <div class="col-md-3 col-sm-6">最近一年缴税（增值税）：{{$l->getInfo('company_tax')}}</div>
                                        <div class="col-md-3 col-sm-6">法人占股：{{$l->getInfo('legoal_stock')}}</div>


                                    @else

                                        <div class="col-md-3 col-sm-6">收入来源：{{$l->getInfo('income_source')}}</div>

                                        <div class="col-md-3 col-sm-6">每月收入：{{$l->getInfo('income_month')}}</div>


                                    @endif

                                </div>

                            </div>


                            <div class="container">
                                <h5 class="header_title">补充信息</h5>
                                <div class="row">


                                    <div class="col-md-3 col-sm-6">住房情况：{{$l->getInfo('house_1')}}</div>

                                    <div class="col-md-3 col-sm-6">住房抵押：{{$l->getInfo('house_2')}}</div>
                                    <div class="col-md-3 col-sm-6">月供：{{$l->getInfo('house_3')}}</div>
                                    <div class="col-md-3 col-sm-6">车辆情况：{{$l->getInfo('car_1')}}</div>
                                    <div class="col-md-3 col-sm-6">月供：{{$l->getInfo('car_2')}}</div>
                                    <div class="col-md-3 col-sm-6">信用卡总额度：{{$l->getInfo('credit_total')}}</div>
                                    <div class="col-md-3 col-sm-6">信用卡已用额度：{{$l->getInfo('credit_used')}}</div>
                                    <div class="col-md-3 col-sm-6">保单：{{$l->getInfo('policy')}}</div>
                                    <div class="col-md-3 col-sm-6">保单年缴费：{{$l->getInfo('policy_fee')}}</div>

                                </div>

                            </div>

                        </div>
                    </div>

                @endforeach


                {{$lists->render()}}
            </div>
        </div>
    </div>
@endsection
