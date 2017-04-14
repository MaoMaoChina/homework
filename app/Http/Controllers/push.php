<?php
use Illuminate\Support\Facades\DB;
DB::insert('insert into testlinkedlist(theindex,value) values(?,?)'
           ,    [$,$s]);

/**
 * Created by PhpStorm.
 * User: maomao
 * Date: 2017/4/8
 * Time: 13:30
 */