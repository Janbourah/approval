<div class="services_section layout_padding">
    <div class="container">
        <h1 class="services_taital">Users Suggestions </h1>

        <div class="services_section_2">
            <div class="row">
                @foreach ($post as $post)
                    <div class="col-md-4"
                        style="text-align: center; border: 1px solid gray; margin:2px; max-width:30.333333%; padding:15px;">
                        {{-- <div><img src="images/img-1.png" class="services_img"></div> --}}
                        <h4>{{ $post->title }}</h4>
                        <p>post by <b>{{ $post->name }}</b></p>
                        <div class="btn_main" style="display: contents"><a href="{{ url('post_details', $post->id) }}">more
                                info</a></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
