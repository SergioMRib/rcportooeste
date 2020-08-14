@extends('layouts.app')

@section('body')
    <!-- Masthead -->
    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">Porto Oeste Sérgio</h1>
                </div>
            </div>
        </div>
    </header>

    {{-- contacts --}}
    @component('components.contacts')

    @endcomponent

    {{-- Past projects --}}
    @component('components.past-projects')

    @endcomponent

@endsection
