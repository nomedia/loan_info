<?php

namespace App\Exports;

use App\Info;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class InfoExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {

        $lists=Info::orderBy("id","desc")->get();

        foreach ($lists as $key=>$l){
            $lists[$key]["json"]=json_decode($l->info);

        }




        return view('exportInfo', [
            'lists' =>$lists
        ]);


    }
}
