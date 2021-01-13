


<div class="row">
    <!-- 1st image -->

    @foreach($categories as $category)
    <div class="col-md-3">
        <div class="card contentC ">

            @php

            $i = 1;
            @endphp
            @foreach($category as $image)
            @if( $i > 0)
            <a href="{!!route('categories.show',$category->id) !!}"><img class="card-img-top feature-img responsive product_img_size " src="{{asset('images/categories/'.$category->image)}}" alt="{{$category->title}}"></a>
            @endif

            @php
            $i--; 
            @endphp
            @endforeach
            <div class="card-body">
                <h4 class="card-title">
                    <a href="{!!route('categories.show',$category->id) !!}"> {{$category->name}}</a>
                </h4>
                
               
            </div>
        </div>

    </div>
    <!-- end 1st image -->
    @endforeach
</div>
<div class="mt-4 pagination">
    
    {{ $categories->links() }}

</div>