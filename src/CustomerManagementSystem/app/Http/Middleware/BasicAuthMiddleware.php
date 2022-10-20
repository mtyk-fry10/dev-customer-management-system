<?php

namespace App\Http\Middleware;

use Closure;

class BasicAuthMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        // ユーザー名
        $username = $request->getUser();
        // パスワード
        $password = $request->getPassword();
        // 条件分岐 (ユーザー名とパスワードが一致していた場合)
        if($username === 'user' && $password === 'pass') {
            return $next($request);
        }
        abort(401, "Enter username and password.", [
            header('WWW-Authenticate: Basic realm="Sample Private Page"'),
            header('Content-Type: text/plain; charset=utf-8')
        ]);
    }
}
