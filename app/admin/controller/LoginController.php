<?php
namespace app\admin\controller;

use app\admin\middleware\BaseResponse;
use app\BaseController;
use app\admin\validate\LoginValidate;

class LoginController extends BaseController
{
    public function index()
    {
        // validate(LoginValidate::class)->check($this->request->post());
        $this->validate($this->request->post(), LoginValidate::class);
        return 123;
    }
}
