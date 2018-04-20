<?php
/**
 * Created by PhpStorm.
 * User: SuLinXin
 * Date: 2018/4/20
 * Time: 7:46
 */

namespace app\index\controller;


use think\Controller;
use app\index\model\Product as ProductModel;

class Product extends Controller
{
    public function index()
    {
        $model = new ProductModel();
        $data = $model->where('index','1')->select();

        return json($data);
    }

}