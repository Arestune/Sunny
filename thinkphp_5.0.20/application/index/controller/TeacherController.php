<?php

namespace app\index\controller;
use think\Controller;
use app\common\model\Teacher;
class TeacherController extends Controller
{
    // 我的方法名叫index
    public function index()
    {
        $teacherModel= new Teacher();
        $teachers = $teacherModel->select();
        $this->assign('teachers',$teachers);
        $htmls = $this->fetch();
        return $htmls;
    }
}