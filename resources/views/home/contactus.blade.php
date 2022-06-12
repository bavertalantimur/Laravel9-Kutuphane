@extends('layouts.home')
@section('title',"Contact US")
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="bg-light">
                                <form class="" action="{{route('contactus_message')}}" method="post" >
                                    @csrf
                                    <div class="card p-5">
                                        <div class="row mt-0">
                                            <div class="col-md-12 ">
                                                <h4 class="">Contact Us</h4>
                                                <p>Use the form below to share your questions, ideas, comments and feedback</p>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <div class="col-md-12 mb-0">
                                                <p class="mb-1">Name</p> <input  type="text" placeholder="Enter your name" name="name" class="form-control input-box rm-border">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <div class="col-md-12 mb-0">
                                                <p class="mb-1">Email</p> <input id="e-mail" type="text" placeholder="Enter your email" name="email" class="form-control input-box rm-border">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <div class="col-md-12 mb-0">
                                                <p class="mb-1">Phone</p> <input id="e-mail" type="text" placeholder="Enter your phone" name="phone" class="form-control input-box rm-border">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <div class="col-md-12 mb-0">
                                                <p class="mb-1">Subject</p> <input id="e-mail" type="text" placeholder="Enter your subject" name="subject" class="form-control input-box rm-border">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 mb-2">
                                                <p class="mb-1">Message</p> <textarea id="message" type="text" placeholder="Enter your message" name="message" class="form-control input-box rm-border"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-center mb-0">
                                            <div class="col-md-12 px-3"> <input type="submit" value="Submit" class="btn btn-block btn-purple rm-border"> </div>
                                        </div>
                                    </div>
                                </form>

                </div>
            </div>
            <div class="col-md-4">
                {!!  $data!!}
            </div>
        </div>
    </div>
@endsection
