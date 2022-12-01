<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DashboradModel;

class DashbroadControlle extends Controller
{
    function index(){
        $cat_model = new DashboradModel();
        $cat_data = $cat_model->orderBy('id', 'DESC')->get();
        return view('index',['data'=>$cat_data]);
    }
    function category(){
        $cat_model = new DashboradModel();
        $cat_data = $cat_model->orderBy('id', 'DESC')->get();
        return view('category',['data'=>$cat_data]);
    }

    function setData(Request $req){
        $data = $req->add_cat;
        $dataModel = new DashboradModel();
        $dataModel->cat_name = $data;
        $dataModel->save();
        return redirect("/");

    }

    function updateid($id){
        $cat_model = new DashboradModel();
        $cat_data = $cat_model->where('id',$id)->get();
        return view('admit\update',['data'=>$cat_data]);
    }

    function update(Request $req){
        $cat_name = $req->add_cat;
        $cat_id= $req->add_id;
        $cat_model = DashboradModel::find($cat_id);
        $cat_model->cat_name = $cat_name;
        $cat_model->save();
        
        return redirect('/');
    }

    function delete($id){
        // $confirm = window("Are You Sure to delete this");
        // if($confirm){
            $cat_model = new DashboradModel();
            $cat_data = $cat_model->where('id', $id)->delete();
            return back();
        // }else{
        //     echo '<script type ="text/JavaScript">alert("JavaScript Alert Box by PHP")</script>';  
        // }

        
    }

}
