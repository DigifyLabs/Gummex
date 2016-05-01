<?php

namespace Gummex;

use Illuminate\Database\Eloquent\Model;

class PostCode extends Model
{
    //
public static function showallcodes(){

   return  $getall= \DB::table('codes')->orderby('id','desc')->paginate(10);



}

    public  static function showcode($id)
    {



            $show=\DB::table('codes')->where('id','=',$id)->first();

        return $show;
    }

    public static function editcode($request){
        $editcode= \DB::table('codes')
            ->where('id',$request->id)
            ->update(['price'=>$request->price,'code'=>$request->code]);
    return $editcode;
    }


    public static function deletecode($id){

            //delete code
            $delarticle=\DB::table('codes')->where('id','=',$id)->delete();


        return $delarticle;
    }

public static function addcode($request){

   return $add =\DB::table('codes')->insert(['code' => $request->code, 'price' => $request->price]);


}

    public static function getcodes(){
        $getall= \DB::table('codes')->orderby('id','desc')->get();
        return $getall;
    }

}
