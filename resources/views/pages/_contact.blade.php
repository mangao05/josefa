
    
<div class="container-fluid" style="background: url('/images/josefa_loc.png'); backgound-position:center; background-repeat:no-repeat; background-size:cover;">
    <h2 class="section-art pt-3">Site Map</h2>
    <div class="row">
        <div class="col sm-12 md-6 site-link m-4 wow fadeInLeft" data-wow-duration="1.5s"  >
            <a class="hvr-grow" href="https://www.google.com/maps/place/Josefa+Slipways+Inc./@14.671159,120.9385033,17z/data=!3m1!4b1!4m5!3m4!1s0x3397b4f63385ade3:0xfa321250e7a25051!8m2!3d14.6711538!4d120.940692" target="_blank">Navotas, Metro Manila Site</a>
        </div>

        <div class="col sm-12 md-6 site-link m-4 wow fadeInRight" data-wow-duration="1.5s" >
            <a class="hvr-grow" href="https://www.google.com.ph/maps/place/Sual,+Pangasinan/@16.0973942,120.0141759,13z/data=!3m1!4b1!4m5!3m4!1s0x3393e75bf7b562f9:0x943e81ec4de08081!8m2!3d16.0976673!4d120.0549683?hl=en" target="_blank">Sual, Pangasinan Site</a>
        </div>
    </div>
</div>

<section id="contact">
    <h2 class="section-art mt-3" id="footer-white">Contact Us</h2>



    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin: 0 auto; display:block;">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                    </div>
                @endif
                <form  method="POST"  action="Contactus/send">
                    @csrf
                    <span>Send us an Email</span>
                    <div class="form-group mt-3">
                        <label class="contact-text" for="exampleInputEmail1">Name</label>
                        @if($errors->has('fname'))
                        <span class="text-danger">({{$errors->first('fname')}}*) </span>
                        @endif
                        <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <label class="contact-text" for="exampleInputPassword1">Email</label>
                        @if($errors->has('email'))
                        <span class="text-danger">({{$errors->first('email')}}*) </span>
                        @endif
                        <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="info@sample.com">
                    </div>
                    <div class="form-group">
                        <label class="contact-text" for="exampleInputPassword1">Subject</label>
                        @if($errors->has('subject'))
                        <span class="text-danger">({{$errors->first('subject')}}*) </span>
                        @endif
                        <input type="text" name="subject" class="form-control" id="exampleInputPassword1" placeholder="Related Concern">
                    </div>
                    <div class="form-group">
                        <label class="contact-text" for="exampleFormControlTextarea1">Message</label>
                        @if($errors->has('message'))
                        <span class="text-danger">({{$errors->first('message')}}*) </span>
                        @endif
                        <textarea class="form-control"  name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-blue_romance">Submit</button>
                </form>


            </div>


        </div>
    </div>

</section>
