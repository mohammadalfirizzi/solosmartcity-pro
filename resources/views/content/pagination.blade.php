<div class="row properties-box">
    @foreach ($data as $d)
    <div class="col-lg-4 col-md-6 align-self-center  properties-items {{$d->category_alias}} all">
        <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">{{$d->category_name}}</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">{{$d->title}}</a></h4>
            <h6><a>{{html_entity_decode(strip_tags($d->content))}}</a></h6><br>
            <div class="main-button">
                <a href="{{route('dimensiDetail', $d->id)}}">Selengkapnya</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
{!! $data->links('pagination::bootstrap-4') !!}