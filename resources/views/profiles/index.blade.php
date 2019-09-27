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
                <a href="#">Додај нову објаву</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> објава</div>
                <div class="pr-5"><strong>23к</strong> пратиоца</div>
                <div class="pr-5"><strong>212</strong> пратим</div>
            </div>
            <div class="pt-3"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="http://{{ $user->profile->url }}">{{ $user->profile->url }}</a></div>
        </div>
        <div class="row pt-5">
            <div class="col-4"><img src="https://instagram.fbeg4-1.fna.fbcdn.net/vp/02c7048c842d9891ffbc020b7e52f87c/5E1AB835/t51.2885-15/e35/41652716_166953537519157_5059919492574613736_n.jpg?_nc_ht=instagram.fbeg4-1.fna.fbcdn.net&_nc_cat=101" alt="Post" class="w-100"></div>
            <div class="col-4"><img src="https://instagram.fbeg4-1.fna.fbcdn.net/vp/24d0d7f30d95b9116d549fd2f6db0956/5E1C6166/t51.2885-15/e35/44265466_520616518350135_5601645302939537121_n.jpg?_nc_ht=instagram.fbeg4-1.fna.fbcdn.net&_nc_cat=103" alt="Post" class="w-100"></div>
            <div class="col-4"><img src="https://instagram.fbeg4-1.fna.fbcdn.net/vp/98e6b70b4fbe2be8141ba8533205267b/5E312735/t51.2885-15/e35/42932596_2325014707722244_1016000751304524010_n.jpg?_nc_ht=instagram.fbeg4-1.fna.fbcdn.net&_nc_cat=104" alt="Post" class="w-100"></div>
        </div>
    </div>
</div>
@endsection
