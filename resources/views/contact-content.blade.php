      <section class="ftco-section contact-section">
        <div class="container mt-5">
          <div class="row block-9">
						<div class="col-md-4 order-last contact-info ftco-animate">
							<div class="row">
								<div class="col-md-12 mb-4">
		              <h2 class="h4">Contact Information</h2>
		            </div>
		            <div class="col-md-12 mb-3">
		              <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
		            </div>
		            <div class="col-md-12 mb-3">
		              <p><span>Phone:</span> <a href="tel://23436023213">+ 234 3602 3213</a></p>
		            </div>
		            <div class="col-md-12 mb-3">
		              <p><span>Email:</span> <a href="mailto:info@escalateinnovations.com.ng">info@escalateinnovations.com.ng</a></p>
		            </div>
		            <div class="col-md-12 mb-3">
		              <p><span>Website:</span> <a href="{{url('/')}}">www.escalateinnovations.com.ng</a></p>
		            </div>
							</div>
						</div>
						<div class="col-md-1"></div>
            <div class="col-md-6 order-first ftco-animate">
              <form action="{{url('contact')}}" method="post">
			  {{csrf_field()}}
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="text" name="email" class="form-control" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                  <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <div id="map"></div>