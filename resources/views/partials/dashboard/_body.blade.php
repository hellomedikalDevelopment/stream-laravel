<div id="loading">
    @include('partials.dashboard._body_loader')
</div>
<div class="wrapper">
    @include('partials.dashboard._body_sidebar')
    
    @include('partials.dashboard._body_header')

   

    <div class="content-page" class="content-page">
        {{ $slot }}
    </div>
</div>
@include('partials.dashboard._body_footer')

@include('partials.dashboard._scripts')
