<table>
    <thead>
    <tr>

        <th>申请时间</th>

        <th>编号</th>

        <th>姓名</th>
        <th>年龄</th>
        <th>需求金额</th>
        <th>贷款用途</th>
        <th>申请期数</th>
        <th>手机号</th>

        <th>邀请人</th>

        <th>测算额度</th>
        <th>工作类型</th>

        <th>性别</th>


        <th>经营情况</th>
        <th>单位所在市</th>
        <th>近一年营业额</th>
        <th>最近一年缴税（增值税）</th>
        <th>是否是法人</th>
        <th>本人占股</th>
        <th>公司行业</th>
        <th>公司注册年限</th>

        <th>其他收入</th>
        <th>收入来源</th>
        <th>月收入额</th>
        <th>银行流水</th>

        <th>上班情况</th>

        <th>职位</th>
        <th>单位所在市</th>
        <th>现单位上班年限</th>
        <th>工资发放形式</th>
        <th>代发金额</th>
        <th>工资总额</th>
        <th>社保月扣费</th>
        <th>公积金月扣费</th>


        <th>完善资料</th>

        <th>住房情况</th>
        <th>房产价值</th>
        <th>住房类型</th>
        <th>房产月供</th>
        <th>车辆情况</th>
        <th>车辆价值</th>
        <th>汽车月供</th>
        <th>信用卡总额度</th>
        <th>信用卡已用额度</th>
        <th>保单</th>
        <th>保单年缴费</th>
        <th>其他增加额度方式</th>

    </tr>
    </thead>
    <tbody>
    @foreach($lists as $l)
        <tr>
            <td>{{$l->created_at}}</td>

            <td>{{$l->id}}</td>

            <td>{{$l->name}}</td>
            <td>{{$l->id_card}}</td>

            <td>{{$l->amount}}</td>
            <td>{{$l->json->use ?? ''}}</td>

            <td>{{$l->period}}</td>
            <td>{{$l->phone}}</td>
            <td>{{$l->invite}}</td>
            <td>{{$l->quota}}</td>
            <td>{{$l->work_type}}</td>
            <td>{{$l->json->sex ?? ''}}</td>

            <td>

            </td>



            <td>{{$l->json->company_address ?? ''}}</td>
            <td>{{$l->json->company_sum ?? ''}}</td>
            <td>{{$l->json->company_tax ?? ''}}</td>
            <td>{{$l->json->is_legal ?? ''}}</td>
            <td>{{$l->json->legoal_stock ?? ''}}</td>
            <td>{{$l->json->company_indsutry ?? ''}}</td>
            <td>{{$l->json->year ?? ''}}</td>


            <td>

            </td>

            <td>{{$l->json->income_source ?? ''}}</td>
            <td>{{$l->json->income_month_money ?? ''}}</td>
            <td>{{$l->json->income_month ?? ''}}</td>

            <td>

            </td>

            <td>{{$l->json->company_name ?? ''}}</td>
            <td>{{$l->json->company_address ?? ''}}</td>
            <td>{{$l->json->work_years ?? ''}}</td>
            <td>{{$l->json->pay_method ?? ''}}</td>
            <td>{{$l->json->work_years ?? ''}}</td>
            <td>{{$l->json->daifa ?? ''}}</td>
            <td>{{$l->json->total ?? ''}}</td>
            <td>{{$l->json->social_secruity ?? ''}}</td>
            <td>{{$l->json->provident_fund ?? ''}}</td>



            <td>{{$l->json->house_1 ?? ''}}</td>
            <td>{{$l->json->house_4 ?? ''}}</td>
            <td>{{$l->json->house_2 ?? ''}}</td>
            <td>{{$l->json->house_3 ?? ''}}</td>



         {{--   <td>{{$l->json->work_years ?? ''}}</td>--}}

            <td>{{$l->json->car_1 ?? ''}}</td>
            <td>{{$l->json->car_3 ?? ''}}</td>
            <td>{{$l->json->car_2 ?? ''}}</td>
            <td>{{$l->json->credit_total ?? ''}}</td>
            <td>{{$l->json->credit_used ?? ''}}</td>

            <td>{{$l->json->policy ?? ''}}</td>
            <td>{{$l->json->policy_fee ?? ''}}</td>
            <td>{{$l->json->other ?? ''}}</td>



        </tr>
    @endforeach
    </tbody>
</table>
