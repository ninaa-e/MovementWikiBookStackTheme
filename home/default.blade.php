@extends('layouts.simple')

@section('body')

    <div class="container px-xl py-s flex-container-row gap-l wrap justify-space-between">
        <div>
            <div class="icon-list inline block">
                @include('common.dark-mode-toggle', ['classes' => 'text-muted icon-list-item text-link'])
            </div>
        </div>
    </div>

    <div class="container" id="home-default">
        <div class="flex-container-column items-center justify-center hide-over-l">
            @if(user()->hasAppAccess())
                @include('layouts.parts.header-search')
            @endif
        </div>

        @include('books.parts.list', ['books' => $books])

        

    </div>

    

@stop