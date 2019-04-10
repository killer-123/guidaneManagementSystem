@extends('master')

@section('page_title')
student
@endsection

@section('content')
<div class="row justify-content-center student-profile">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Register') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="imgUp">
                            <div class="imagePreview">
                                <label class="btn btn-primary">
                                    Upload
                                    <input 
                                        class="uploadFile img" 
                                        name="image" 
                                        style="width: 0px;height: 0px;overflow: hidden;"
                                        type="file" 
                                        value="Upload Photo"
                                    >
                                </label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="w-100 text-center">
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <input 
                                            class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                            name="first_name" 
                                            placeholder="First Name" 
                                            type="type"
                                            value="{{$profile->first_name}}"
                                        >
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input 
                                            class="form-control {{ $errors->has('middle_name') ? ' is-invalid' : '' }}"
                                            name="middle_name" 
                                            placeholder="Middle Name" 
                                            type="type"
                                            value="{{$profile->middle_name}}"
                                        >
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input 
                                            class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                            name="last_name" 
                                            placeholder="Last Name" 
                                            type="type"
                                            value="{{$profile->last_name}}"
                                        >
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input 
                                            type="type" 
                                            name="email" 
                                            placeholder="Email" 
                                            class="form-control text-center {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            value="{{$profile->email}}"
                                        >
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input 
                                            class="form-control text-center {{ $errors->has('contact') ? ' is-invalid' : '' }}"
                                            name="contact" 
                                            placeholder="Contact" 
                                            type="type"
                                            value="{{$profile->contact}}"
                                        >
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input 
                                            class="form-control {{ $errors->has('course') ? ' is-invalid' : '' }}"
                                            name="course" 
                                            placeholder="Course"
                                            type="type"
                                            value="{{$profile->course}}"
                                        >
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input 
                                            class="form-control {{ $errors->has('year') ? ' is-invalid' : '' }}"
                                            name="year" 
                                            placeholder="Year"
                                            type="type"
                                            value="{{$profile->year}}"
                                        >
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input 
                                            class="form-control {{ $errors->has('semester') ? ' is-invalid' : '' }}"
                                            name="semester" 
                                            placeholder="Semester"
                                            type="type"
                                            value="{{$profile->semester}}"
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>


                <div class="row violation">
                    <div class="d-block w-100">
                        <h2 class="text-center text-uppercase">violations:</h2>
                    </div>
                    @foreach($violations as $violation)
                        <div class="card col-md-4 child-card">
                            <img class="card-img-top" src="/storage/{{$violation->image}}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">
                                    {{$violation->description}}
                                </p>
                                <a href="/violation/show/{{$violation->violation_id}}" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script type="text/javascript">
    $('select').on('change', function() {
        var value = $('select').get(0).value;
        var form = $('form').get(1);
        form.setAttribute("action", `/student/update/${value}`);
        form.submit();
    });
</script>
@endsection
