<?php

namespace App\Http\Controllers;
use App\restaurant;
use App\menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    private $restaurant_model;
    private $menu_model;

    public function __construct(restaurant $restaurant_model, menu $menu_model)
    {
        $this->restaurant_model = $restaurant_model;
        $this->menu_model = $menu_model;

    }
     public function fetch(){
        $data = $this->restaurant_model->select('id','name','address','image')->get();
        return response()->json($data,200);
     }

     public function get_details(Request $request){
        $body = $request->all();
        $id = $body['id'];
        $data =$this->restaurant_model->where('id',$id)->get();
        $data[0]['menu'] = $this->menu_model->select('food','price')->where('menu_id',$id)->get();
        return response()->json($data,200);
     }
}
