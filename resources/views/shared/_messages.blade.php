@foreach(['success','danger','warning','info'] as $msg)
 @if(session()->has($msg))
   <div class="alert alert-{{$msg}} alert-dismissible fade show" role="alert">
     <span>{{session()->get($msg)}}</span>
   </div>
 @endif
@endforeach
