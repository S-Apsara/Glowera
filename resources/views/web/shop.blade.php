<x-web-layout>
    
<!-- <div class="container-fluid bg-img p-page">
            <div class="row w-full text-center pp-div-1">
                <div class="h1 me-auto mb-5 col-12 md:pt-0 pt-16">All Products</div>
                <div class="row w-full flex justify-center">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card text-center product_box_style">
                        <img src="{{asset("/moisturiser.webp")}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title h4">Moisturiser</div>
                            <div class="card-subtitle p">Hydrating</div>    
                            <div class="card-subtitle p">$220</div>
                        </div>
                        <a href="./order" class="btn btn-outline-success product_buy_btn">Buy Now</a>
                        <a href="./productdetails" class="btn btn-outline-success product_buy_btn">Details</a>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="card text-center product_box_style">
                        <img src="{{asset("/sunscreen.webp")}}" alt="" class="card-img-top" >
                        <div class="card-body">
                            <div class="card-title h4">Sun-Screen</div>
                            <div class="card-subtitle p">Gold sunblock with spf 60+</div>
                                <div class="card-subtitle p">$200</div>
                        </div>
                        <a href="./order" class="btn btn-outline-success product_buy_btn">Buy Now</a>
                        <a href="./productdetails" class="btn btn-outline-success product_buy_btn">Details</a>
                    </div>
                    </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="card text-center product_box_style">
                        <img src="{{asset("/quenchh.jpeg")}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title h4">Clear Serum</div>
                            <div class="card-subtitle p">Removes acne scars</div>
                            <div class="card-subtitle p">$250</div>
                        </div>
                        <a href="./order" class="btn btn-outline-success product_buy_btn">Buy Now</a>
                        <a href="./productdetails" class="btn btn-outline-success product_buy_btn">Details</a>
                    </div>
                    </div>
                    </div>
            </div>
        </div> -->
        <div class="bg-img flex flex-col justify-center place-items-center text-center">
            <form class=" mt-28 flex flex-row" role="search">
          <input class="form-control me-2" name="search" id="pro-search"  type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
          <div id="pro-results" class="row mt-0">
                <!-- Results will be displayed here dynamically -->
            </div>
        </form>
        <div class="h1 me-auto mb-5 col-12 md:pt-0 pt-16">Products</div>
        <div class="row w-full flex justify-center ">
            @foreach ($products as $pro)
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card text-center product_box_style">            
            <img src={{asset($pro->Pro_Img)}} alt="" class="rounded-xl h-[75%] w-full object-contain">
                        <div class="card-body text-white flex flex-col gap-1">
                            <div class="card-title h4">{{$pro->Pro_Name}}</div>
                            <div class="card-subtitle p">{{$pro->Pro_Detail}}</div>    
                            <div class="card-subtitle p">{{$pro->Category_Id}}</div>
                        </div>
                        <a href={{url("product/".$pro->id."/detail")}} class="btn product_buy_btn">View</a>
                        <a href="{{url("product/".$pro->id."/order")}}" class="btn product_buy_btn">Buy Now</a>
                    </div>
                    </div>
            @endforeach
                    </div>
                    </div>
        
</x-web-layout>