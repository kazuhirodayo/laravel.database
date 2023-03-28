<x-layout>
    <x-slot name="title">
        {{ $post }} - My BBS
    </x-slot>

    <div class="back-link">
        &laquo; <a href="{{ route('posts.index')}}">Back</a>

        <h1>{{$post}}</h1>

    </div>
</x-layout>

