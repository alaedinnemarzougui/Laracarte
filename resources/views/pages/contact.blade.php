@extends('layout.default' , ['title' => 'Contact'])

@section('content')

       <div class="container">

             <div class="row">
                 <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                     <h2> Get in Touch</h2>
                     <p class="text-muted">if you having trouble with this service , please <a href="mailto:alaedinne.marzougui@esprit.tn">ask for Help</a></p>

                     <form action="{{ route('contact_path') }}" method="POST">

                         {{ csrf_field() }}

                         <div class="form-group">
                             <label for="name" class="control-label">Name</label>
                             <input type="text" name="name" id="name" class="form-control" required="required">
                             {!! $errors->first('name' , '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required="required">
                            {!!  $errors->first('email' , '<span class="help-block">:message</span>') !!}

                         </div>

                         <div class="form-group">
                             <label for="message" class="control-label sr-only">Message</label>
                             <textarea name="message"  id="message" class="form-control" cols="30" rows="10" required="required"></textarea>
                             {!!  $errors->first('message' , '<span class="help-block">:message</span>') !!}
                         </div>


                       <div class="form-group">
                           <button class="btn btn-dark btn-block"> Submit Enquiry &raquo;</button>

                       </div>



                     </form>
                 </div>

             </div>

       </div>



@stop
