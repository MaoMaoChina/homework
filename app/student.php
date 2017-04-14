<?php
namespace  App;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    // 指定表名
    protected $table='testlinkedlist';
    protected $primaryKey ='theindex';
    public  $timestamps=true;
    //指定允许批量赋值的字段
   // protected $fillable=['***','***'] *内是表单内的变量名

    //不允许批量赋值的字段
    //protected $guarded= []
    protected function getDateFormat()
    {
        return time();
    }
}
/**
 * Created by PhpStorm.
 * User: maomao
 * Date: 2017/4/8
 * Time: 9:34
 */