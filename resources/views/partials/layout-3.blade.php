<!-- Double Sidebar -->
<div class="row">
    <div class="span3 sidebar page-left-sidebar">
        @include('partials.sidebar-1')
    </div>
    <!--Begin page content column-->
    <div class="span6">
        <h2 class="title-bg">Double Sidebar Example</h2>
        <img src="img/gallery/gallery-img-1-full.jpg" alt="Image">
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie.</p>
        <div class="row">
            <div class="span3">
                <h5>2 Column Layout</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>
                <button class="btn btn-mini btn-inverse" type="button">Read more</button>
            </div>
            <div class="span3">
                <h5>2 Column Layout</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>
                <button class="btn btn-mini btn-inverse" type="button">Read more</button>
            </div>
        </div>
    </div>
    <!--End page content column-->
    <div class="span3 sidebar page-right-sidebar">
        @include('partials.sidebar-2')
    </div>
</div>