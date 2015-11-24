<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App;
use App\Contracts\TestContract;
use App\Facades\TestClass;
class TestController extends Controller
{
    //依赖注入
    public function __construct(TestContract $test){
        $this->test = $test;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     * @author LaravelAcademy.org
     */
    public function index()
    {

//        $this->test->callMe('provider');
        TestClass::dosomething();
    }

}