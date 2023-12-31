@extends('layouts.app')

@section('content')
    <div>
        <div class="container m-4">
             <h1>Home</h1>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur molestias perferendis, eligendi atque enim corporis perspiciatis. Quos voluptatem odio consequuntur aspernatur numquam, similique aliquam deleniti nihil veritatis doloremque temporibus deserunt omnis consequatur voluptas consectetur labore earum id eaque, dolorum ea molestias quis provident facere illo. Eaque modi provident mollitia asperiores quibusdam in pariatur corrupti obcaecati veniam quas, quia voluptates corporis iure magnam incidunt laborum doloremque maxime, labore beatae inventore fugit. Placeat minus similique dolorum incidunt, animi mollitia excepturi illum doloribus expedita dignissimos, adipisci quo voluptatum commodi vitae eveniet neque quos deserunt aliquid. Eligendi accusamus sint adipisci reiciendis totam vitae corporis.</p>
            <a href="{{ route('comics') }}" class="btn btn-primary btn-lg" type="button">See our Comics</a>
        </div>

        <div class="container my-4">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" style="height:300px">
                <div class="carousel-inner h-100">
                  <div class="carousel-item active">
                    <img src="https://m.media-amazon.com/images/I/71jbdtRQ9zL.jpg" class="d-block w-100 object-fit-contain" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="https://m.media-amazon.com/images/I/A1F1VNO-46L._AC_UF1000,1000_QL80_.jpg" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="https://images.thedirect.com/media/article_full/dc-new-justice-league.jpg" class="d-block w-100" alt="">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
