<!-- Right Sidebar -->
<div class="row">
    <div class="span8">
        @if (!empty($section))
            <h2>{{$section->title}}</h2>
            <p class="lead">{{$section->content}}</p>
            <h5 class="title-bg">{{$section->subtitle}}</h5>
        @endif

        <div class="row">
            @foreach ($posts as $k => $post)
                @if ($k % 4 == 0)
                    </div><div class="row">
                @endif
                <div class="span2">
                    <img src="{{url('assets/img/gallery/gallery-img-1-6col.jpg')}}" alt="Image" class="thumbnail">
                    <h5>{{$post->title}}</h5>
                    <p>{{Illuminate\Support\Str::limit($post->content, 36)}}</p>
                    <button class="btn btn-mini btn-inverse" type="button">Read more</button>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="span12">
                {!! $posts->render() !!}
            </div>
        </div>

        <!-- <h3 class="title-bg"> This is a sub head divider</h3>
        <div class="clearfix">
            <img src="img/gallery/gallery-img-1-4col.jpg" class="thumbnail align-left" alt="Image" />
            <p>Vivamus augue nulla, vestibulum ac ultrices posuere, vehicula ac arcu. Quisque nisi lacus, bibendum quis commodo eget, lobortis eget elit. Cras venenatis mauris eu tortor consequat a convallis nulla molestie. Phasellus malesuada malesuada velit et fermentum. Proin ut leo nec mauris pulvinar volutpat. Sed ac neque nec leo condimentum rhoncus.</p>
            <p>Quisque nisi lacus, bibendum quis commodo eget, lobortis eget elit. Cras venenatis mauris eu tortor consequat a convallis nulla molestie.</p>
            <button class="btn btn-small btn-inverse" type="button">Visit Website</button>
        </div>
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Heads up!</strong> This alert is not super important.
        </div>
        <p>Vivamus augue nulla, vestibulum ac ultrices posuere, vehicula ac arcu. Quisque nisi lacus, bibendum quis commodo eget, lobortis eget elit. Cras venenatis mauris eu tortor consequat a convallis nulla molestie. Phasellus malesuada malesuada velit et fermentum. Proin ut leo nec mauris pulvinar volutpat. Sed ac neque nec leo condimentum rhoncus. Quisque nisi lacus, bibendum quis commodo eget, lobortis eget elit. Cras venenatis mauris eu tortor consequat a convallis nulla molestie.</p> -->

    </div>
    <!--End page content column-->
    <!-- Blog Sidebar
        ================================================== -->
    <div class="span4 sidebar page-sidebar">
        @include('partials.sidebar-1')
    </div>
</div>
</div>
