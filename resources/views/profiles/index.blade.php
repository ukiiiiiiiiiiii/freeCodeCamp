@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 p-lg-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100" alt="Avatar" style="max-width: 250px">
        </div>

        <div class="col-lg-9 pt-lg-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{ $user->username }}</div>

                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="/p/create">Додај нову објаву</a>
                @endcan
            </div>

            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Измени профил</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"><strong>{{ $postCount }}</strong> објавa</div>
                <div class="pr-5"><strong>{{ $followersCount }}</strong> пратилаца</div>
                <div class="pr-5"><strong>{{ $followingCount }}</strong> прати</div>
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
