<!-- resources/views/components/cookie-notice.blade.php -->

@if (!request()->cookie('accept_cookies'))
    <div class="cookie-notice">
        <p>This website uses cookies. <a href="{{ route('cookie-policy') }}">Learn more</a></p>
        <button id="accept-cookies">Accept</button>
    </div>
@endif
<!--Hyperiondev Level 4 "Laravel" pdf Resource-->