<!-- Left Sidebar -->
<div class="row">
    <div class="span4 sidebar page-sidebar">
        @include('partials.sidebar-1')
    </div>

    <div class="span8">
        @if (!empty($section))
            <h2>{{$section->title}}</h2>
            <p class="lead">{{$section->content}}</p>
            <h5 class="title-bg">{{$section->subtitle}}</h5>
        @endif
        <div class="row">
            @foreach ($posts as $post)
                @if ($k % 4 == 0)
                    </div><div class="row">
                @endif
                <div class="span2">
                    <img src="{{url('assets/img/gallery/gallery-img-1-6col.jpg')}}" alt="Image" class="thumbnail">
                    <h5>{{$post->title}}</h5>
                    <p>{{$post->content}}</p>
                    <button class="btn btn-mini btn-inverse" type="button">Read more</button>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="span12">
                {!! $posts->render() !!}
            </div>
        </div>

        {{-- <h2 class="title-bg">Left Sidebar Example</h2>
        <img src="img/gallery/gallery-img-1-full.jpg" alt="Image">
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie.</p>
        <div class="row">
            <div class="span4">
                <h5>2 Column Layout</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>
                <button class="btn btn-mini btn-inverse" type="button">Read more</button>
            </div>
            <div class="span4">
                <h5>2 Column Layout</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>
                <button class="btn btn-mini btn-inverse" type="button">Read more</button>
            </div>
        </div> --}}

    </div>
</div>
