@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 p-lg-5">
            <img src="https://instagram.fbeg4-1.fna.fbcdn.net/vp/fea40a245ed1b61f46254a009c37f3cd/5E20DBBC/t51.2885-19/s150x150/11899454_403213659879109_419394403_a.jpg?_nc_ht=instagram.fbeg4-1.fna.fbcdn.net" class="rounded-circle" alt="Avatar">
        </div>

        <div class="col-lg-9 pt-lg-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                @can('update', $user->profile)
                    <a href="/p/create">Додај нову објаву</a>
                @endcan
            </div>

            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Измени профил</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> објавe</div>
                <div class="pr-5"><strong>23к</strong> пратиоца</div>
                <div class="pr-5"><strong>212</strong> пратим</div>
            </div>

            <div class="pt-3"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" alt="Post" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
