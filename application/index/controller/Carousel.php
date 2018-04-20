<?php
/**
 * Created by PhpStorm.
 * User: SuLinXin
 * Date: 2018/4/18
 * Time: 8:56
 */

namespace app\index\controller;


use think\Controller;
use app\index\model\Carousel as CarouselModel;

class Carousel extends Controller
{
    public function index()
    {

        $model = new CarouselModel();
        $data = $model->where('index','1')->select();

//        $data = [
//            'banner_01.png',
//            'banner_02.png',
//            'banner_03.png'
//        ];

        return json($data);
    }


}