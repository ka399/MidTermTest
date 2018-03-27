@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-title ml-3">
                <h1>Contact Mark Automobiles</h1>
                <p>Please use this form to contact us for any queries.</p>
            </div>
            <div class="card-body">
                <form action="" method="">
                    {{csrf_field()}}
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="full name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input name="email" type="email" class="form-control" id="email"
                                       placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input name="subject" type="text" class="form-control" id="subject"
                                       placeholder="subject">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="body">Message</label>
                                <textarea name="body" class="form-control" id="body" rows="3" placeholder="write your message here"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Send Message</button>
                </form>
            </div>
        </div>
    </div>
@endsection
