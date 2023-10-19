@if($message = Session::get('success'))
    <div style="color:green; text-align:center;"> <p> {{ $message }} </p> </div>
@elseif($message = Session::get('danger'))
    <div style="color: crimson; text-align:center;"> <p> {{ $message }} </p> </div>
@elseif($message = Session::get('status'))
    <div style="color:cornflowerblue; text-align:center;"> <p> {{ $message }} </p> </div>
@endif

@if(Illuminate\Support\Facades\Auth::user())
    <div style="text-align: center"> Usuario autenticado </div>
@else
    <div style="text-align: center"> Usuario sin autenticar </div>
@endif