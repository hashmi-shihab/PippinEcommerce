 <section class="popular-categories section-padding">
            <div class="container wow animate__animated animate__fadeIn">
                <div class="section-title">
                    <div class="title">
                        <h3>Featured Categories</h3>

                    </div>
                    <div class="slider-arrow slider-arrow-2 flex-right carausel-10-columns-arrow" id="carausel-10-columns-arrows"></div>
                </div>

                <div class="carausel-10-columns-cover position-relative">
                    <div class="carausel-10-columns" id="carausel-10-columns">

                        @php
                            $categories= App\Models\Category::orderBy('name','ASC')->limit(6)->get();
                        @endphp
                        @foreach ($categories as $category)
                            <div class="card-2 bg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <figure class="img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="{{url('image/categories/',$category->image)}}" alt="" /></a>
                            </figure>
                            <h6><a href="shop-grid-right.html">{{$category->name}}</a></h6>

                            @php
                                $products = App\Models\Product::where('cat_id', $category->id)->get();
                            @endphp
                            <span>{{ count($products)}} items</span>
                        </div>
                        @endforeach
                        
                       
                       
                    </div>
                </div>
            </div>
        </section>