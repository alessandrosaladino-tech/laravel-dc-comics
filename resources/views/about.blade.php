@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-md-stretch">
        <div class="col-md-6 m-auto pt-5 pb-5">
            <div
                class="h-100 p-5 bg-primary border rounded-3">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo magni id pariatur ea, recusandae mollitia obcaecati excepturi voluptas dolorem ex aspernatur asperiores! Non natus laudantium recusandae cumque unde molestiae repellendus?Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde fuga perspiciatis, a ullam laborum blanditiis temporibus. Animi, odio eaque? Deserunt laborum quas optio sed doloremque quos unde quidem libero ipsa.</p>
               <a class="bg-dark text-decoration-none" href="{{route('home')}}">Return Home</a>
            </div>
        </div>
    </div>
</div>
@endsection