<?php

namespace app\api\common\model;

use think\model\concern\SoftDelete;

class BaseModel extends \think\Model
{
    use SoftDelete;
}
