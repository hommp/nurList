@extends('master.layout')

@section('title')
Contact
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding-top: 100px;">
<<<<<<< HEAD
            <h1>This contact page</h1>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum."</p>
=======
            <h1>Contact Us</h1>
            <!-- <form action="{{ route('contact') }}" method="POST"> -->
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary my-3">Send Message</button>
            <!-- </form> -->
>>>>>>> f917ba105d7d6495cfbba2f03f9b4da5c70edabb
        </div>
    </div>
</div>
@endsection