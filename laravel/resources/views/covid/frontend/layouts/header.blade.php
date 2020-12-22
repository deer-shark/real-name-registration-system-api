<section class="header">
    <header class="jumbotron banner">
        <div class="text-center" id="title">
	    <h1>{{ config('event.string.'.env('EVENT','default').'.banner_title') }}</h1>
<style type="text/css">
@media (max-width: 670px) {
h1{
font-size:2rem;
}
}
</style>

        </div>
        @include('covid.frontend.layouts.navbar-kshs')
    </header>
</section>
