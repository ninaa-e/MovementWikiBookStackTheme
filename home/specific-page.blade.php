@extends('layouts.tri')

@section('body')
    <div class="mt-m">
        <div class="hide-over-l content-wrap card flex-container-column items-center card" style="margin-bottom: 30px; min-height: unset;">

                @if(setting('app-logo', '') !== 'none')
                    <img style="margin: 10px" class="logo-image" src="{{ setting('app-logo', '') === '' ? url('/logo.png') : url(setting('app-logo', '')) }}" alt="Logo">
                @endif
                @include('layouts.parts.header-search')
     
            
        </div>
        <main class="content-wrap card">
        
            <div component="page-display"
                 option:page-display:page-id="{{ $customHomepage->id }}"
                 class="page-content">
                @include('pages.parts.page-display', ['page' => $customHomepage])
            </div>
        </main>
    </div>
@stop

@section('left')
    @include('home.parts.sidebar')
@stop

@section('right')
    <div class="actions mb-xl">
        <h5>{{ trans('common.actions') }}</h5>
        <div class="icon-list text-link">
            @include('home.parts.expand-toggle', ['classes' => 'text-link', 'target' => '.entity-list.compact .entity-item-snippet', 'key' => 'home-details'])
            @include('common.dark-mode-toggle', ['classes' => 'icon-list-item text-link'])
        </div>
    </div>
@stop