<!-- ?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class AdminAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
  
    public function handle($request, Closure $next, $guard = null)
    {
      
        if (Auth::guard($guard)->check()) {
            // var_dump('hhhh'); die;
            if(is_customer()){
                return redirect('/');
               
            }

            
        }
        
        return $next($request);
      
        
    }
    
} -->
