@if(count($errors) > 0)
    @foreach($errors as $error)
        <div class="msg error">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
<div class="msg success">
    <h4>Success!!!</h4>
    {{session('success')}}
</div>
@endif

@if(session('error'))
    <div class="msg error">
        <h4>Error!!!</h4>
        {{session('error')}}
    </div>
@endif