<div class="content-wrapper">
    {{-- breadcrum section & tittle  --}}
   @include('Layouts.Partials.breadcrum')

    <div class="content">
        <div class="container-fluid">
           @yield('main-section')
        </div>
    </div>

</div>
