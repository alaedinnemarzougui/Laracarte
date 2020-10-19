@extends('layout.default' , ['title' => 'Contact'])

@section('content')

       <div class="container">

             <div class="row">
                 <div class="col-md-8 col-sm-10 mx-auto">
                     <h2> Get in Touch</h2>
                     <p class="text-muted">if you having trouble with this service , please <a href="mailto:{{ config('laracarte.admin_support_email') }}">ask for Help</a></p>

                     <form action="{{ route('contact_path') }}" method="POST">

                         @csrf

                         <div class="form-group">
                             <label for="name" class="control-label">Name</label>
                             <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"  value="{{ old('name') }}">
                             {!! $errors->first('name' , '<div class="invalid-feedback">:message</div>') !!}
                        </div>

                        <div class="form-group">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}"  value="{{ old('email') }}">
                            {!!  $errors->first('email' , '<div class="invalid-feedback">:message</div>') !!}

                         </div>

                         <div class="form-group">
                             <label for="message" class="control-label sr-only">Message</label>
                             <textarea name="message"  id="message" class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" cols="30" rows="10">{{ old('message') }}</textarea>
                             {!!  $errors->first('message' , '<div class="invalid-feedback">:message</span>') !!}
                         </div>


                       <div class="form-group">
                           <button class="btn btn-dark btn-block" type="submit"> Submit Enquiry &raquo;</button>

                       </div>



                     </form>
                 </div>

             </div>

       </div>



@stop
