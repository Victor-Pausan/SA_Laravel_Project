<?php

namespace App\Http\Middleware;

use App\Models\Feedback;
use App\Models\MemberFeedback;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMember
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $memberFeedback = MemberFeedback::find($request->id);

        if($request->user()->member->id == $memberFeedback->member->id){
            return $next($request);
        } else {
            return abort(403, 'Forbidden accsess');
        }
    }
}
