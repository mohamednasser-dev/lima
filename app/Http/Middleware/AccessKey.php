<?php

namespace App\Http\Middleware;

use App\Http\Controllers\ResponseJson;
use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;

class AccessKey
{
    use ResponseJson;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Get Access Key From Settings
        $accessKey = Setting::where('key','accessKey')->first();
        // Check If Not Existing Access Key Display SomeThing Error
        if(!$accessKey) return $this->errorResponse(__('lang.something_went_wrong'), [], 500);
        // Check The User Has Correct Access Key
        if($request->header('access-key') !== $accessKey->val) {
            return $this->errorResponse(__('lang.dont_have_permission_access'), [], 401);
        }
        return $next($request);
    }
}
