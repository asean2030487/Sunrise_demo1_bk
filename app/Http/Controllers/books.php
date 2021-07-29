<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class books extends Controller
{
    // 查詢書名
    function get_books($keywords = ''){
        try{
            // 查詢SQL(模糊查詢關鍵字)
            $data = DB::table('books_list')
                ->select('id','book_name','book_price');
            if(!empty($keywords))
                $data->where('book_name', 'like', "%{$keywords}%");
            return ["code"=>true,"msg"=> "查詢成功","data"=>$data->get()];
        }catch (\Exception $e){
            return ["code"=>false,"msg"=> "查詢失敗","data"=>$e];
        }
    }
    // 新增書本
    function post_books(Request $request){
        try{
            // 新增資料
            $data = DB::table('books_list')
                ->insert([
                    'book_name' => $request->book_name,
                    'book_price' => $request->book_price,
                ]);
            return ["code"=>true,"msg"=> "新增成功","data"=>$data];
        }catch (\Exception $e){
            return ["code"=>false,"msg"=> "新增失敗","data"=>$e];
        }
    }
    // 刪除書本
    function delete_books($id){
        try{
            // 刪除資料
            $data = DB::table('books_list')
                ->where('id',$id)
                ->delete();
            return ["code"=>true,"msg"=> "刪除成功","data"=>$data];
        }catch (\Exception $e){
            return ["code"=>false,"msg"=> "刪除失敗","data"=>$e];
        }
    }
    // 刪除書本
    function patch_books(Request $request){
        try{
            // 編輯資料
            $data = DB::table('books_list')
                ->where('id',$request->id)
                ->update([
                    'book_name' => $request->book_name,
                    'book_price' => $request->book_price,
                ]);
            return ["code"=>true,"msg"=> "編輯成功","data"=>$data];
        }catch (\Exception $e){
            return ["code"=>false,"msg"=> "編輯失敗","data"=>$e];
        }
    }
}
