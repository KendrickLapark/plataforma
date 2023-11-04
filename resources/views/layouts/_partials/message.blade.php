
    @if($message = Session::get('success'))
        <div class="container-msg-1" style="color:green; text-align:center;">{{ $message }}</div>
    @elseif($message = Session::get('danger'))
        <div class="container-msg-1" style="color: crimson; text-align:center;">{{ $message }}</div>
    @elseif($message = Session::get('status'))
        <div class="container-msg-1" style="color:cornflowerblue; text-align:center;">{{ $message }}</div>
    @endif

    @if(Illuminate\Support\Facades\Auth::user())
        <div class="container-msg-2" style="text-align: center"> Usuario autenticado </div>
    @else
        <div class="container-msg-2" style="text-align: center"> Usuario sin autenticar </div>
    @endif

    <link rel="stylesheet" href="{{asset('css/_partials/message.css')}}">