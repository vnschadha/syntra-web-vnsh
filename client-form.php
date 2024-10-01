<!--haed links -->
<?php include"include/head-links.php";?>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<body style=" background-color:#fff;">
  <!-- End Sticky Navbar -->

  <!-- Responsive Navbar For Other devices -->

  <!-- hero area -->
  <form method="post" action="" >


    <div class="form-logo mt-5">
      <a class="" href="#"><img width="74%" src="images/Banner/4.jpg" alt=""></a>
    </div>
    <div class="container mt-3">
      <div class="col-lg-8 text-center offset-lg-2 ">
        <div class="section-heading">
          <!-- <h1 class=" head-heading section-title heading-color mt-5 heading-level" data-aos="fade-down">GET IN TOUCH
          </h1> -->
        </div>
      </div>
      <div class="form-container">

        <h4 class="text-dark sub-headig " style="font-weight: 600;">We’re excited to work with you! Let us know how can we help elevate your
          brand or
          business.
        </h4>
        <h4 class="text-dark sub-headig bg-color-yelow" style="font-weight: 600;">1) Are You?
        </h4>
        <div id="paymentContainer" name="paymentContainer" class="paymentOptions Subbg-color-yelow">
          <div id="payCC" class="sub-headig">
            <label for="paymentCC"> <input id="paymentCC" name="Profiles" type="radio" value="Business"
                class="sub-headig"  required/>
              Business </label>
          </div>

          <div id="payInvoice" class="sub-headig">
            <label for="paymentInv"> <input id="paymentInv" name="Profiles" type="radio" value="Entrepreneur" required/>
              Entrepreneur
            </label>
          </div>

          <div id="pay3rdParty" class="sub-headig">
            <label for="payment3rd"> <input id="payment3rd" name="Profiles" type="radio" value="Individual" required /> Individual </label>
          </div>
          

        </div>

        <h4 class="text-dark sub-headig bg-color-yelow " style="font-weight: 600;">2) What Services Are You Interested
          In?</h4>
        <div class=" mt-3">
          <div class="heading-item">
            <input type="checkbox" id="ad-heading" class="heading-checkbox" required>
            <label for="ad-heading" class="btntwo">Business Strategy Consulting</label>
            <div class="checkbox-container row">
              <div class="form-check col-6 col-md-4 mb-2 ml-4">
                <input class="form-check-input" name="BusinessStrategy[]"
                 value="Marketing_Strategy_Development" type="checkbox" id="secondCheck1" >
                <label class="form-check-label" for="secondCheck1"> Marketing Strategy Development</label>
              </div>
              <div class="form-check col-6 col-md-3 mb-2 ml-4">
                <input class="form-check-input" name="BusinessStrategy[]" value="Positioning_Strategy" type="checkbox" id="secondCheck2">
                <label class="form-check-label" for="secondCheck2">Positioning Strategy</label>
              </div>
              <div class="form-check col-6 col-md-3 mb-2 ml-4">
                <input class="form-check-input" name="BusinessStrategy[]" value="Growth_Strategy_Consulting" type="checkbox" id="secondCheck2">
                <label class="form-check-label" for="secondCheck2">Growth Strategy Consulting</label>
              </div>
              <!-- Add more checkboxes as needed -->
            </div>
          </div>
        </div>

        <div class="mt-3">
          <div class="heading-item">
            <input type="checkbox" id="ad-heading" class="heading-checkbox" required>
            <label for="ad-heading" class="btntwo">Advertisement</label>

            <!-- Checkbox container divided into three columns -->
            <div class="checkbox-container row ">

              <!-- First column -->
              <div class="col-md-4">
                <div class="form-check mb-2 ml-3">
                  <input class="form-check-input" name="Advertisement[]" value="Television_Commercials" type="checkbox" id="adCheck1">
                  <label class="form-check-label" for="adCheck1">Television Commercials</label>
                </div>
                <div class="form-check mb-2 ml-3">
                  <input class="form-check-input" name="Advertisement[]" value="Advertisements_(3D/2D)_Commercials" type="checkbox" id="adCheck2">
                  <label class="form-check-label" for="adCheck2">Advertisements (3D/2D) Commercials</label>
                </div>
                <div class="form-check mb-2 ml-3">
                  <input class="form-check-input"name="Advertisement[]" value="Product_Demos_(2D/3D)" type="checkbox" id="adCheck3" >
                  <label class="form-check-label" for="adCheck3">Product Demos (2D/3D)</label>
                </div>
                <div class="form-check mb-2 ml-3">
                  <input class="form-check-input" name="Advertisement[]" value="Corporate_AV" type="checkbox" id="adCheck4" >
                  <label class="form-check-label" for="adCheck4">Corporate AV</label>
                </div>
              </div>

              <!-- Second column -->
              <div class="col-md-3">
                <div class="form-check mb-2">
                  <input class="form-check-input" name="Advertisement[]" value="Brand_Films" type="checkbox" id="adCheck5" >
                  <label class="form-check-label" for="adCheck5">Brand Films</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" name="Advertisement[]" type="checkbox" value="Teasers_&_Trailers" id="adCheck6" >
                  <label class="form-check-label" for="adCheck6">Teasers & Trailers</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" name="Advertisement[]" type="checkbox" value="Explainer_Videos" id="adCheck7" >
                  <label class="form-check-label" for="adCheck7">Explainer Videos</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" name="Advertisement[]" type="checkbox" value="Reel_Ads" id="adCheck8" >
                  <label class="form-check-label" for="adCheck8">Reel Ads</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" name="Advertisement[]" type="checkbox" value="Sponsored_Content" id="adCheck13" >
                  <label class="form-check-label" for="adCheck13">Sponsored Content</label>
                </div>
              </div>

              <!-- Third column -->
              <div class="col-md-4">
                <div class="form-check mb-2">
                  <input class="form-check-input" name="Advertisement[]" type="checkbox" value="Product_Showcase_Ads" id="adCheck9" >
                  <label class="form-check-label" for="adCheck9">Product Showcase Ads</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" name="Advertisement[]" type="checkbox" value="Social_Media_Ads" id="adCheck10" >
                  <label class="form-check-label" for="adCheck10">Social Media Ads</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" name="Advertisement[]" type="checkbox" value="Video_Ads" id="adCheck11" >
                  <label class="form-check-label" for="adCheck11">Video Ads</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" name="Advertisement[]" type="checkbox" value="Banner_Ads" id="adCheck12" >
                  <label class="form-check-label" for="adCheck12">Banner Ads</label>
                </div>

                <!-- Other checkbox with textarea -->
                <div class="form-check mb-2">
                  <input class="form-check-input" name="Advertisement[]" type="checkbox" value="Other" id="toggleTextarea" >
                  <label class="form-check-label" for="toggleTextarea">Other</label>
                </div>
                <div id="textareaContainer" style="display: none;">
                  <textarea rows="3" name="Advertisement[]" cols="40" placeholder="Please specify..." ></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="mt-3">
          <div class="heading-item">
            <input type="checkbox" id="ad-heading" class="heading-checkbox" required>
            <label for="ad-heading" class="btntwo">Creative Brand Strategy & Positioning</label>

            <div class="checkbox-container row" id="section-7">
              <!-- First Checkbox -->
              <div class="form-check col-6 col-md-3 mb-2 ml-4">
                <input class="form-check-input" name="CreativeBrandStrategy[]" type="checkbox" value="Brand_Audit &_Strategy"  id="secondCheck1" >
                <label class="form-check-label" for="secondCheck1">Brand Audit & Strategy</label>
              </div>

              <!-- Second Checkbox -->
              <div class="form-check col-6 col-md-2 mb-2 ml-4">
                <input class="form-check-input" name="CreativeBrandStrategy[]" type="checkbox" value="Market_Research" id="secondCheck2" >
                <label class="form-check-label" for="secondCheck2">Market Research</label>
              </div>

              <!-- Third Checkbox -->
              <div class="form-check col-6 col-md-2 mb-2 ml-4">
                <input class="form-check-input"name="CreativeBrandStrategy[]" type="checkbox" value="Positioning_Strategy" id="secondCheck3" >
                <label class="form-check-label" for="secondCheck3">Positioning Strategy</label>
              </div>

              <!-- Fourth Checkbox -->
              <div class="form-check col-6 col-md-3 mb-2 ml-4">
                <input class="form-check-input" name="CreativeBrandStrategy[]" type="checkbox" value="Brand_Storytelling" id="secondCheck4">
                <label class="form-check-label" for="secondCheck4">Brand Storytelling</label>
              </div>

            </div>
          </div>
        </div>


        <div class=" mt-3">
          <div class="heading-item">
            <input type="checkbox" id="ad-heading" class="heading-checkbox" required>
            <label for="ad-heading" class="btntwo">Digital Solutions</label>
            <div class="checkbox-container" id="section-2">
              <div class="form-check col-6 col-md-3 mb-2 ml-4">
                <input class="form-check-input" name="DigitalSolutions[]" type="checkbox" value="Website_Development" id="secondCheck1" >
                <label class="form-check-label" for="secondCheck1">Website Development</label>
              </div>
              <div class="form-check col-6 col-md-3 mb-2 ml-4">
                <input class="form-check-input" name="DigitalSolutions[]" type="checkbox" value="Website_App_Development" id="secondCheck2" >
                <label class="form-check-label" for="secondCheck2">Website App Development</label>
              </div>
              <div class="form-check col-6 col-md-3 mb-2 ml-4">
                <input class="form-check-input" name="DigitalSolutions[]" type="checkbox" value="Mobile_App_Development" id="secondCheck2" >
                <label class="form-check-label" for="secondCheck2">Mobile App Development</label>
              </div>
              <div class="form-check col-6 col-md-3 mb-2 ml-4">
                <input class="form-check-input" name="DigitalSolutions[]" type="checkbox" value="UI/UX_Design" id="secondCheck2" >
                <label class="form-check-label" for="secondCheck2">UI/UX Design</label>
              </div>
              <div class="form-check col-6 col-md-3 mb-2 ml-4">
                <input class="form-check-input" name="DigitalSolutions[]" type="checkbox" value="Backend_API_Development" id="secondCheck2" >
                <label class="form-check-label" for="secondCheck2">Backend API Development</label>
              </div>
              <div class="form-check col-6 col-md-4 mb-2 ml-4">
                <input class="form-check-input" name="DigitalSolutions[]" type="checkbox" 
                value="Digital_Transformation_for_Marketing" id="secondCheck2" >
                <label class="form-check-label" for="secondCheck2">Digital Transformation for
                  Marketing</label>
              </div>
              <!-- Add more checkboxes as needed -->
            </div>
          </div>
        </div>


        <div class=" mt-3">
          <div class="heading-item">

            <input type="checkbox" id="ad-heading" class="heading-checkbox" required>
            <label for="ad-heading" class="btntwo">Marketing Analytics & Data Science Solutions</label>
            <div class="checkbox-container" id="section-8">
              <div class="form-check col-6 col-md-5 mb-2 ml-4">
                <input class="form-check-input" name="MarketingAnalytics[]" type="checkbox" 
                value="Data-Driven_Marketing_Insights" id="secondCheck1" >
                <label class="form-check-label" for="secondCheck1">Data-Driven Marketing Insights</label>
              </div>
              <div class="form-check col-6 col-md-3 mb-2 ml-4">
                <input class="form-check-input" name="MarketingAnalytics[]" type="checkbox" 
                value="Predictive_Analytics" id="secondCheck2" >
                <label class="form-check-label" for="secondCheck2">Predictive Analytics</label>
              </div>
              <div class="form-check col-6 col-md-5 mb-2 ml-4">
                <input class="form-check-input" name="MarketingAnalytics[]" type="checkbox" 
                value="Marketing_Campaign_Analytics" id="secondCheck2" >
                <label class="form-check-label" for="secondCheck2">Marketing Campaign Analytics</label>
              </div>
              <div class="form-check col-6 col-md-5 mb-2 ml-4">
                <input class="form-check-input" name="MarketingAnalytics[]"  
                type="checkbox" value="Customer_Insights_&_Segmentation" id="secondCheck2" >
                <label class="form-check-label" for="secondCheck2">Customer Insights &
                  Segmentation</label>
              </div>
           
              <!-- <div class="form-check col-6 col-md-4 mb-2">
            <input class="form-check-input" type="checkbox" id="secondCheck2">
            <label class="form-check-label" for="secondCheck2"> Illustrations</label>
        </div> -->
              <!-- Add more checkboxes as needed -->
            </div>
          </div>
        </div>
        <div class=" mt-3">
          <div class="heading-item">
            <input type="checkbox" id="ad-heading" class="heading-checkbox" required>
            <label for="ad-heading" class="btntwo">Design Services</label>
            <div class="checkbox-container" id="section-3">
              <div class="form-check col-12 col-md-4 mb-2 ml-4">
                <input class="form-check-input" name="DesignServices[]" type="checkbox" 
                value="Brand_Identity_&_Visual Design" id="secondCheck1" >
                <label class="form-check-label" for="secondCheck1">Brand Identity & Visual Design</label>
              </div>
              <div class="form-check col-6 col-md-2 mb-2">
                <input class="form-check-input" name="DesignServices[]" type="checkbox" value="Graphic_Design" id="secondCheck2">
                <label class="form-check-label" for="secondCheck2">Graphic Design</label>

              </div>
              <div class="form-check col-6 col-md-3 mb-2 ml-4">
                <input class="form-check-input"name="DesignServices[]" type="checkbox" value="Illustrations" id="secondCheck2">
                <label class="form-check-label" for="secondCheck2"> Illustrations</label>
              </div>
              <div class="form-check col-6 col-md-4 mb-2 ml-4">
                <input class="form-check-input" name="DesignServices[]" type="checkbox" value="2D Animations" id="secondCheck2">
                <label class="form-check-label" for="secondCheck2">2D Animations</label>
              </div>
              <div class="form-check col-6 col-md-3 mb-2">
                <input class="form-check-input"  type="checkbox" value="3D Animations" id="secondCheck2">
                <label class="form-check-label" for="secondCheck2">3D Animations</label>
              </div>

              <!-- Add more checkboxes as needed -->
            </div>
          </div>
        </div>

        <div class=" mt-3">
          <div class="heading-item">

            <input type="checkbox" id="ad-heading" class="heading-checkbox" required>
            <label for="ad-heading" class="btntwo">Packaging & Printing Services</label>
            <div class="checkbox-container" id="section-5">
              <div class="form-check col-6 col-md-3 mb-2 ml-4">
                <input class="form-check-input" name="PackagingandPrinting[]" type="checkbox" 
                value="Product Packaging Design" id="secondCheck1" >
                <label class="form-check-label" for="secondCheck1"> Product Packaging Design</label>
              </div>
             
              <div class="form-check col-6 col-md-6 mb-2 ml-4">
                <input class="form-check-input" type="checkbox" name="PackagingandPrinting[]" value="Corporate Printing (Brochures,
                Flyers,
                etc.)" id="secondCheck2" >
                <label class="form-check-label" for="secondCheck2">Corporate Printing (Brochures,
                  Flyers,
                  etc.)</label>
              </div>
              <div class="form-check col-6 col-md-3 mb-2 ml-4">
                <input class="form-check-input" type="checkbox" name="PackagingandPrinting[]"  
                value="Graphic Design" id="secondCheck2" >
                <label class="form-check-label" for="secondCheck2">Graphic Design</label>
              </div>
              <div class="form-check col-6 col-md-2 mb-2 ml-4">
                <input class="form-check-input" type="checkbox" name="PackagingandPrinting[]" value="Custom Printing" id="secondCheck2" >
                <label class="form-check-label" for="secondCheck2">Custom Printing</label>
              </div>
              <!-- Add more checkboxes as needed -->
            </div>
          </div>
        </div>
        <div class=" mt-3">
          <div class="heading-item"> 
            <input type="checkbox" id="ad-heading" class="heading-checkbox" required>
            <label for="ad-heading" class="btntwo">Social Media Services</label>
            <div class="checkbox-container" id="section-4">
              <div class="form-check col-6 col-md-3 mb-2 ml-4">
                <input class="form-check-input" name="SocialMediaManagement[]" type="checkbox" value="Social Media Management" id="secondCheck1" >
                <label class="form-check-label" for="secondCheck1">Social Media Management</label>
              </div>
              <div class="form-check col-6 col-md-2 mb-2 ml-4">
                <input class="form-check-input" name="SocialMediaManagement[]" type="checkbox" value="Content Creation" id="secondCheck2" >
                <label class="form-check-label" for="secondCheck2">Content Creation</label>
              </div>
              <div class="form-check col-6 col-md-3 mb-2 ml-4">
                <input class="form-check-input" name="SocialMediaManagement[]" type="checkbox" value="Engagement Strategies" id="secondCheck2" >
                <label class="form-check-label" for="secondCheck2">Engagement Strategies</label>
              </div>
              <div class="form-check col-6 col-md-3 mb-2 ml-4">
                <input class="form-check-input"  name="SocialMediaManagement[]"type="checkbox" value="Social Media Ads" id="secondCheck2" >
                <label class="form-check-label" for="secondCheck2">Social Media Ads</label>
              </div>
              <div class="form-check col-6 col-md-3 mb-2 ml-4">
                <input class="form-check-input" name="SocialMediaManagement[]" type="checkbox" value="LinkedIn Marketing" id="secondCheck2" >
                <label class="form-check-label" for="secondCheck2"> LinkedIn Marketing</label>
              </div>
              <!-- Add more checkboxes as needed -->
            </div>
          </div>
        </div>
        <div class=" mt-3">
          <div class="heading-item">

            <input type="checkbox" id="ad-heading" class="heading-checkbox" required>
            <label for="ad-heading" class="btntwo">Music & Video Production Services</label>
            <div class="checkbox-container" id="section-6">
              <div class="form-check col-6 col-md-3 mb-2 ml-5">
                <input class="form-check-input" name="MusicandVideoProduction[]" type="checkbox" value=" Jingles and Brand Anthems" id="  "
                >
                <label class="form-check-label" for="secondCheck1"> Jingles and Brand Anthems</label>
              </div>
              <div class="form-check col-6 col-md-4 mb-2  ">
                <input class="form-check-input" name="MusicandVideoProduction[]" type="checkbox" value="Background Music for Digital
                Content" id="secondCheck2" >
                <label class="form-check-label" for="secondCheck2">Background Music for Digital
                  Content</label>

              </div>
              <div class="form-check col-6 col-md-3 mb-2 ml-5">
                <input class="form-check-input"name="MusicandVideoProduction[]" type="checkbox" 
                 value="Music Production"  id="secondCheck2" >
                <label class="form-check-label" for="secondCheck2">Music Production</label>
              </div>
              <div class="form-check col-6 col-md-3 mb-2 ml-5">
                <input class="form-check-input" name="MusicandVideoProduction[]" type="checkbox" 
                value="Voiceover Production" id="secondCheck2" >
                <label class="form-check-label" for="secondCheck2">Voiceover Production</label>
              </div>
              <div class="form-check col-6 col-md-4 mb-2 ">
                <input class="form-check-input"name="MusicandVideoProduction[]" type="checkbox" 
                value="Audio Branding" id="secondCheck2" >
                <label class="form-check-label" for="secondCheck2"> Audio Branding</label>
              </div>
              <div class="form-check col-6 col-md-3 mb-2  ml-5 ">
                <input class="form-check-input" name="MusicandVideoProduction[]" type="checkbox" value="Video Editing" id="secondCheck2">
                <label class="form-check-label" for="secondCheck2"> Video Editing</label>
              </div>
              <!-- Add more checkboxes as needed -->
            </div>
          </div>
        </div>
        <!-- Repeat for each heading (1-9) -->

        <h4 class="text-dark sub-headig bg-color-yelow" style="font-weight: 600;">3) Preferred Contact Method</h4>
        <div class=" Subbg-color-yelow">

          <div class="input__box ">
            <label class="pere-con">
              <input type="checkbox" class="" id="email-checkbox" onclick="toggleInput('email-input')"  /> Email
            </label>
            <div class="input-container" id="email-input" style="display: none;">
              <input type="email"  name="Email" placeholder="Enter your email" required/>
            </div>
            <label class="pere-con">
              <input type="checkbox" name="PhoneNumber" id="phone-checkbox"  onclick="toggleInput('phone-input')" /> Phone Number
            </label>
            <div class="input-container" id="phone-input" style="display: none;">
              <input type="tel" maxlength="10" name="PhoneNumber" placeholder="Enter your phone number" required/>
            </div>
            <label class="pere-con">
              <input type="checkbox"   id="whatsapp-checkbox" onclick="toggleInput('whatsapp-input')" /> WhatsApp
            </label>
            <div class="input-container" id="whatsapp-input" style="display: none;">
              <input type="text" maxlength="10" name="WhatsApp" placeholder="Enter your WhatsApp number" />
            </div>


          </div>
        </div>

        <!-- <div class="input-box">
 
      <span class="details">Password</span>
  <input type="text" name="" id="" placeholder="Enter your password"  />
</div> -->
        <!-- <div class="input-box">
  <span class="details">Confirm Password</span>
  <input type="text" name="" id="" placeholder="Confirm your password"  />
</div> -->

        <h4 class="text-dark sub-headig bg-color-yelow" style="font-weight: 600;">4) How Soon Do You Want to Get
          Started? </h4>
          <div id="paymentContainer" name="paymentContainer" class="paymentOptions Subbg-color-yelow">
  <div class="d-flex flex-wrap align-items-center">
    <!-- First radio button -->
    <div id="payCC" class="mr-3 sub-headig">
      <label for="paymentCC">
        <input id="paymentCC" name="get_Started" type="radio" value="Immediately" required />
        Immediately
      </label>
    </div>

    <!-- Second radio button -->
    <div id="payInvoice" class="mr-3 sub-headig">
      <label for="paymentInv">
        <input id="paymentInv" name="get_Started" type="radio" value="In 1-2 weeks" required />
        In 1-2 weeks
      </label>
    </div>

    <!-- Third radio button -->
    <div id="pay3rdParty" class="mr-3 sub-headig">
      <label for="payment3rd">
        <input id="payment3rd" name="get_Started" type="radio" value="In 1 month" />
        In 1 month
      </label>
    </div>

    <!-- Fourth radio button -->
    <div id="payExploring" class="mr-3 sub-headig">
      <label for="paymentExploring">
        <input id="paymentExploring" name="get_Started" type="radio" value="Just exploring for now" required />
        Just exploring for now
      </label>
    </div>
  </div>
</div>


 
        <h4 class="text-dark sub-headig bg-color-yelow" style="font-weight: 600;">5) Tell Us About Your Business or
          Project Goals</h4>
        <div class="form_con">
          <textarea class="Subbg-color-yelow" name="tell_Us_About" id="" cols="50" rows="2" placeholder="Optional" required ></textarea>
          <div class="user__details">
            <div class="input__box">
            </div>
          </div>
          <h4 class="text-dark sub-headig bg-color-yelow" style="font-weight: 600;">6) Anything Else We Should Know?
          </h4>
          <div class="form_con">
            <textarea class="Subbg-color-yelow" name="anything_Else" id="" cols="50" rows="2" placeholder="Optional" required></textarea>
            <div class="user__details">
              <div class="input__box">
              </div>
            </div>

            <!-- <button class="btn btn-secondary btn-lg"> </button> -->
          </div>
          <input class="btn btn-secondary btn-lg  mb-5" type="submit" value="Wait For The Magic" name="submit">
        </div>
      </div>
    </div>

    </div>
  </form>

  <!-- Function used to shrink nav bar removing paddings and adding black background -->
  <script>
    $(window).scroll(function () {
      if ($(document).scrollTop() > 50) {
        $('.nav').addClass('affix');
        console.log("OK");
      } else {
        $('.nav').removeClass('affix');
      }
    });
  </script>


  <script>

    const headings = document.querySelectorAll('.heading-checkbox');

    headings.forEach(heading => {
      heading.addEventListener('change', (e) => {
        // Close other headings
        headings.forEach(h => {
          // if (h !== e.target) {
          //   h.checked = false;
          //   h.parentElement.querySelector('.checkbox-container').style.display = 'none';
          // }
        });

        // Toggle checkboxes visibility
        const checkboxes = e.target.parentElement.querySelector('.checkbox-container');
        checkboxes.style.display = e.target.checked ? 'flex' : 'none';
      });
    });

  </script>
  <script>
    const checkbox = document.getElementById('toggleTextarea');
    const textareaContainer = document.getElementById('textareaContainer');

    checkbox.addEventListener('change', function () {
      if (this.checked) {
        textareaContainer.style.display = 'block'; // Show textarea
      } else {
        textareaContainer.style.display = 'none'; // Hide textarea
      }
    });
  </script>
  <script>
    function toggleInput(inputId) {
      const inputField = document.getElementById(inputId);
      if (inputField.style.display === "none") {
        inputField.style.display = "flex";
      } else {
        inputField.style.display = "none";
      }
    }

  </script>
</body>

</html>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Establish database connection
$conn = mysqli_connect("localhost", "root", "", "syntra-web-db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit"]) && !isset($_SESSION['form_submitted'])) {
    $_SESSION['form_submitted'] = true; // Mark form as submitted

    // Capture and sanitize form inputs
    $Profiles = mysqli_real_escape_string($conn, $_POST["Profiles"] ?? '');
    $BusinessStrategy = isset($_POST["BusinessStrategy"]) ? implode(", ", $_POST["BusinessStrategy"]) : '';
    $Advertisement = isset($_POST["Advertisement"]) ? implode(", ", $_POST["Advertisement"]) : '';
    $CreativeBrandStrategy = isset($_POST["CreativeBrandStrategy"]) ? implode(", ", $_POST["CreativeBrandStrategy"]) : '';
    $DigitalSolutions = isset($_POST["DigitalSolutions"]) ? implode(", ", $_POST["DigitalSolutions"]) : '';
    $MarketingAnalytics = isset($_POST["MarketingAnalytics"]) ? implode(", ", $_POST["MarketingAnalytics"]) : '';
    $DesignServices = isset($_POST["DesignServices"]) ? implode(", ", $_POST["DesignServices"]) : '';
    $PackagingandPrinting = isset($_POST["PackagingandPrinting"]) ? implode(", ", $_POST["PackagingandPrinting"]) : '';
    $SocialMediaManagement = isset($_POST["SocialMediaManagement"]) ? implode(", ", $_POST["SocialMediaManagement"]) : '';
    $MusicandVideoProduction = isset($_POST["MusicandVideoProduction"]) ? implode(", ", $_POST["MusicandVideoProduction"]) : '';
    
    $Email = mysqli_real_escape_string($conn, $_POST['Email'] ?? '');
    $PhoneNumber = mysqli_real_escape_string($conn, $_POST["PhoneNumber"] ?? '');
    $WhatsApp = mysqli_real_escape_string($conn, $_POST["WhatsApp"] ?? '');
    $get_Started = mysqli_real_escape_string($conn, $_POST["get_Started"] ?? '');
    $tell_Us_About = mysqli_real_escape_string($conn, $_POST["tell_Us_About"] ?? '');
    $anything_Else = mysqli_real_escape_string($conn, $_POST["anything_Else"] ?? '');

    // Check if the email already exists
    $email_check_query = "SELECT * FROM syntraform WHERE Email='$Email' LIMIT 1";
    $result = mysqli_query($conn, $email_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        echo "<script>alert('Email already exists. Please use a different email.');</script>";
    } else {
        // Prepare the SQL query using placeholders
        $stmt = $conn->prepare("INSERT INTO syntraform 
            (Profiles, BusinessStrategy, Advertisement, CreativeBrandStrategy, DigitalSolutions, 
            MarketingAnalytics, DesignServices, PackagingandPrinting, SocialMediaManagement, 
            MusicandVideoProduction, Email, PhoneNumber, WhatsApp, get_Started, tell_Us_About, anything_Else) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        // Bind parameters
        // "ssssssssssssssss" means 16 string parameters are being bound
        $stmt->bind_param("ssssssssssssssss", 
            $Profiles, $BusinessStrategy, $Advertisement, $CreativeBrandStrategy, $DigitalSolutions, 
            $MarketingAnalytics, $DesignServices, $PackagingandPrinting, $SocialMediaManagement, 
            $MusicandVideoProduction, $Email, $PhoneNumber, $WhatsApp, $get_Started, $tell_Us_About, $anything_Else
        );

        // Execute the statement
        if ($stmt->execute()) {
            echo "<script>alert('Data Inserted Successfully');</script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "');</script>";
        }

        $stmt->close(); // Close the prepared statement
    }

    // Clear the form_submitted status after a successful submission
    unset($_SESSION['form_submitted']);
}
?>

