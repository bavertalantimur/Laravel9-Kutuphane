@extends('layouts.admin')
@section('title','Book İmage List')
@section('content')
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
   <div class="content-wrap">
        <div class="main">
            <div class="content">
            <div class="w-100 h-auto">
                <form role="form" action="{{route('admin.settings.update')}}" method="post" class="bg-light rounded h-100 p-4" enctype="multipart/form-data">
                    @csrf
                    <h6 class="mb-4">Settings</h6>
                    <input type="hidden" name="id" value="{{$data->id}}" class="form-control"/>


                    <!-- smtp  -->
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Company Settings</button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="form-floating mb-3">
                                        <input name="title" value="{{$data->title}}" type="text" class="form-control" id="title">
                                        <label for="title">Title</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input name="keywords" value="{{$data->keywords}}" type="text" class="form-control" id="keywords">
                                        <label for="keywords">Keywords</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input name="description" value="{{$data->description}}" type="text" class="form-control" id="description">
                                        <label for="description">Description</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input name="company" value="{{$data->company}}" type="text" class="form-control" id="company">
                                        <label for="company">Company</label>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Contact Settings</button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="form-floating mb-3">
                                            <input name="phone" value="{{$data->phone}}" type="text" class="form-control" id="phone">
                                            <label for="phone">Phone</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input name="fax" value="{{$data->fax}}" type="text" class="form-control" id="fax">
                                            <label for="fax">Fax</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input name="email" value="{{$data->email}}" type="text" class="form-control" id="email">
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input name="facebook" value="{{$data->facebook}}" type="text" class="form-control" id="facebook">
                                            <label for="facebook">Facebook</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input name="instagram" value="{{$data->instagram}}" type="text" class="form-control" id="instagram">
                                            <label for="email">instagram</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select name="status" class="form-select" id="floatingSelect"
                                                    aria-label="Floating label select example">
                                                <option value="{{$data->status}}">Seçili: {{$data->status}}</option>
                                                <option value="1">True</option>
                                                <option value="0">False</option>
                                            </select>
                                            <label for="floatingSelect">Status</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            SMTP Settings</button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="form-floating mb-3">
                                                <input name="smtpserver" value="{{$data->smtpserver}}" type="text" class="form-control" id="smtpserver">
                                                <label for="smtpserver">Smtpserver</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="smtpemail" value="{{$data->smtpemail}}" type="text" class="form-control" id="smtpemail">
                                                <label for="smtpemail">Smtpemail</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="smtppassword" value="{{$data->smtppassword}}" type="text" class="form-control" id="smtppassword">
                                                <label for="smtppassword">Smtppassword</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="smtpport" value="{{$data->smtpport}}" type="text" class="form-control" id="smtpport">
                                                <label for="smtpport">Smtpport</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                                Information Settings</button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <div class="form-floating">
                                                    <div>
                                                        <label for="address">Adress</label>
                                                        <textarea class="form-control summernote mb-3" name="address"  id="address" style="height: 150px;">{{$data->address}}</textarea>
                                                        <script>
                                                            ClassicEditor
                                                                .create( document.querySelector( '#address' ) )
                                                                .then( editor => {
                                                                    console.log( editor );
                                                                } )
                                                                .catch( error => {
                                                                    console.error( error );
                                                                } );
                                                        </script>
                                                    </div>
                                                </div>

                                                <div class="form-floating">
                                                    <div>

                                                        <label for="references">references</label>
                                                        <textarea class="form-control summernote mb-3" name="references"  id="references" style="height: 150px;">{{$data->references}}</textarea>
                                                        <script>
                                                            ClassicEditor
                                                                .create( document.querySelector( '#references' ) )
                                                                .then( editor => {
                                                                    console.log( editor );
                                                                } )
                                                                .catch( error => {
                                                                    console.error( error );
                                                                } );
                                                        </script>
                                                    </div>
                                                </div>


                                                <div class="form-floating">
                                                    <div>
                                                        <label for="contact">contact</label>
                                                        <textarea class="form-control summernote mb-3" name="contact"  id="contact" style="height: 150px;">{{$data->contact}}</textarea>
                                                        <script>
                                                            ClassicEditor
                                                                .create( document.querySelector( '#contact' ) )
                                                                .then( editor => {
                                                                    console.log( editor );
                                                                } )
                                                                .catch( error => {
                                                                    console.error( error );
                                                                } );
                                                        </script>
                                                    </div>
                                                </div>

                                                <div class="form-floating">
                                                    <div>
                                                        <label for="aboutus">aboutus</label>
                                                        <textarea class="form-control summernote mb-3" name="aboutus"  id="aboutus" style="height: 150px;">{{$data->aboutus}}</textarea>
                                                        <script>
                                                            ClassicEditor
                                                                .create( document.querySelector( '#aboutus' ) )
                                                                .then( editor => {
                                                                    console.log( editor );
                                                                } )
                                                                .catch( error => {
                                                                    console.error( error );
                                                                } );
                                                        </script>
                                                    </div>






                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-dark w-100 m-2">Update Settings</button>

                </form>
            </div>
        </div>
   </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@endsection
