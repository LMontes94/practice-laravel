@if($message = Session::get('success'))
<div>
    <p>{{$message}}</p>
</div>
@endif
@if($message = Session::get('danger'))
<div>
    <p>{{$message}}</p>
</div>
@endif