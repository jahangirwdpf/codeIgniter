<?= $this->extend('frontend/header');?>
<?= $this->section('content');?>

<!-- contact section -->
<section class="contact_section mt-4">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-lg-6 ">
          <div class="form_container">
            <div class="heading_container ">
              <h2>
                Contact Us
              </h2>
            </div>
            <form action="">
              <div>
                <input type="text" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5 col-lg-6">
          <div class="subscribe-box">
            <h3>
              Subscribe To Our Newsletter
            </h3>
            <p>
              Neque, omnis? Maiores consectetur molestiae assumenda earum ea exercitationem velit tempora molestias quae, neque voluptas magnam maxime, repudiandae voluptatum quaerat tempore accusamus.
            </p>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

<?= $this->include('frontend/footer');?>
<?= $this->endSection('content');?>