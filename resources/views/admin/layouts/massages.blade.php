@if (session()->has('error'))
    <div class="alert alert-danger text-center card-body col-8" style="margin-left: auto;margin-right: auto;">
        <span>{!! session('error') !!}</span>
    </div>
@endif

@if (session()->has('success'))
    <div class="alert alert-success text-center card-body col-8" style="margin-left: auto;margin-right: auto;">
        <span>{!! session('success') !!}</span>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger card-body col-8" style="margin-left: auto;margin-right: auto;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
