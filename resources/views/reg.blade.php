@extends("theme")
@section("content")
<div class="inner-banner"></div>
   <div class="container">
       <div class="row mt-4">
       <div class="col "></div>
           <div class="col col-10 col-sm-10 col-md-8 col-lg-8 col-xl-8 mt-4">
           <div class="row mt-4 ">
           <form action="/storereg" method="post">
            {{csrf_field()}}<h2>Register</h2>
           </div>
           <div class="row mt-4 "><label class="form-field" for="sid">Student ID</label class="form-field" >
                            <input type="text" name="sid" class="form-control" placeholder="eg. IS123" value="{{old('sid')}}" >
                            <span class="text-danger">@error('sid'){{$message}} @enderror  </span></div>
           <div class="row mt-4"><label class="form-field" for="name">Full Name</label class="form-field" >
                            <input type="text" name="name" class="form-control" placeholder="Name" value="{{old('name')}}">
                            <span class="text-danger">@error('name'){{$message}} @enderror  </span></div>
           
           <div class="row mt-4"><label class="form-field" for="email">Email</label class="form-field" >
                            <input type="text" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                            <span class="text-danger">@error('email'){{$message}} @enderror  </span>    </div>
           <div class="row mt-4"><label class="form-field" for="mob">Mobile</label class="form-field" >
                            <input type="text" name="mob" class="form-control" placeholder="Mobile" value="{{old('mob')}}">
                            <span class="text-danger">@error('mob'){{$message}} @enderror  </span></div>
           <div class="row mt-4"> <label class="form-field" for="pass">Password</label class="form-field" >
                            <input type="password" name="pass" class="form-control" placeholder="Password" value="{{old('pass')}}">  
                            <span class="text-danger">@error('pass'){{$message}} @enderror  </span></div>
            <div class="row mt-4"> <label class="form-field" for="repass">Re-password</label class="form-field" >
                            <input type="password" name="repass" class="form-control" placeholder="Re-Password" value="{{old('repass')}}">                    
                            <span class="text-danger">@error('repass'){{$message}} @enderror  </span></div>
            <div class="text-right  mt-4" >
                            <button class="btn btn-style btn-primary submit" type="submit">Submit</button></div>

           </div>
           
           </form>
           <div class="col "></div>
       </div>
       
   </div>
   

@endsection
