@extends('layouts.simple')

@section('body')

    <div class="container px-xl py-s flex-container-row gap-l wrap justify-space-between">
        <div class="icon-list inline block">
            @include('home.parts.expand-toggle', ['classes' => 'text-muted text-link', 'target' => '.entity-list.compact .entity-item-snippet', 'key' => 'home-details'])
        </div>
        <div>
            <div class="icon-list inline block">
                @include('common.dark-mode-toggle', ['classes' => 'text-muted icon-list-item text-link'])
            </div>
        </div>
    </div>

    <div class="container" id="home-default">
        <div class="flex-container-column items-center justify-center hide-under-l">
            @if(user()->hasAppAccess())
                @include('layouts.parts.header-search')
            @endif
        </div>
       
        <div class="actions mb-xl">
            <h5>{{ trans('common.actions') }}</h5>
            <div class="icon-list text-link">
                @if(user()->can('book-create-all'))
                    <a href="{{ url("/create-book") }}" class="icon-list-item">
                        <span>@icon('add')</span>
                        <span>{{ trans('entities.books_create') }}</span>
                    </a>
                @endif
                @include('entities.view-toggle', ['view' => $view, 'type' => 'books'])
                <a href="{{ url('/tags') }}" class="icon-list-item">
                    <span>@icon('tag')</span>
                    <span>{{ trans('entities.tags_view_tags') }}</span>
                </a>
                @include('home.parts.expand-toggle', ['classes' => 'text-link', 'target' => '.entity-list.compact .entity-item-snippet', 'key' => 'home-details'])
                @include('common.dark-mode-toggle', ['classes' => 'icon-list-item text-link'])
            </div>
        </div>
    </div>

@stop