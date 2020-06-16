<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Exports\InvoicesExport;
use DB;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    	   	$table = DB::table('khachhang')->join('hoadonban','hoadonban.makh','khachhang.makh')->select('khachhang.*','hoadonban.*')->where('xacnhan','=','Chưa duyệt')->get();
    
        return $table;
    }
}
