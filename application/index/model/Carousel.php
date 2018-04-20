<?php
/**
 * Created by PhpStorm.
 * User: SuLinXin
 * Date: 2018/4/18
 * Time: 13:40
 */
namespace app\index\model;
use think\Model;

class Carousel extends Model
{
    protected function getImageAttr($value)
    {
        return "http://localhost/wxshoph/public/upload/banner/".$value;
    }

}