<div class="alerts col-12 d-flex justify-content-center">
    <div {{ $attributes->merge(['class' => 'alert alert-'.$type]) }} role="alert">
        @if($title)
        <h6 class="m-0 text-center py-1">
            <strong>{{ $title }}</strong>
        </h6>
        @endif
        <p class="m-0 text-center">
            {{ $message }}
        </p>
    </div>
</div>