<?php
declare (strict_types = 1);

namespace app\api\middleware;

class BaseResponse
{
    protected $code = 0;

    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {
        $response = $next($request);
        $this->code = $response->getCode();
        return $response;
    }
}
