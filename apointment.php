<link rel="stylesheet" href="apointment.css" />

<div class="landing-page">
  <div class="form-appointment">
    <div class="wpcf7" id="wpcf7-f560-p590-o1">
      <form
        action="/save_appoinment.php"
        method="GET"
        class="wpcf7-form"
        novalidate="novalidate"
        _lpchecked="1"
      >
        <div class="group">
          <div style="width: 48%; float: left">
            <span class="wpcf7-form-control-wrap text-680"
              ><input
                type="text"
                name="name"
                value=""
                size="45"
                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                aria-required="true"
                placeholder="Name" /></span
            ><br />
            <span class="wpcf7-form-control-wrap email-680"
              ><input
                type="email"
                name="email"
                value=""
                size="45"
                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                aria-required="true"
                placeholder="Email" /></span
            ><br />
            <span class="wpcf7-form-control-wrap tel-630"
              ><input
              maxlength="10"  
                type="tel"
                name="phone"
                value=""
                size="45"
                class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                aria-required="true"
                placeholder="Phone" /></span
            ><br />
            <span class="wpcf7-form-control-wrap textarea-398">
              <textarea
                name="desc"
                cols="40"
                rows="10"
                class="wpcf7-form-control wpcf7-textarea"
                placeholder="Special notes, concerns, or requirements"
              ></textarea>
            </span>
          </div>
          <div style="width: 48%; float: right">
            <h4>What is the best way to reach you?</h4>
            <p>
              <span class="wpcf7-form-control-wrap radio-98"
                ><span class="wpcf7-form-control wpcf7-radio"
                  ><span class="wpcf7-list-item"
                    ><label
                      ><input
                        type="radio"
                        name="reach_type"
                        value="Phone"
                      />&nbsp;<span class="wpcf7-list-item-label"
                        >Phone</span
                      ></label
                    ></span
                  ><span class="wpcf7-list-item"
                    ><label
                      ><input
                        type="radio"
                        name="reach_type"
                        value="Email"
                      />&nbsp;<span class="wpcf7-list-item-label"
                        >Email</span
                      ></label
                    ></span
                  ></span
                ></span
              >
            </p>
            <h4>Days of the week you are available for appointment:</h4>
            <p>
              <span class="wpcf7-form-control-wrap checkbox-465"
                ><span class="wpcf7-form-control wpcf7-checkbox"
                  ><span class="wpcf7-list-item"
                    ><label
                      ><input
                        type="checkbox"
                        name="availability[]"
                        value="Monday"
                      />&nbsp;<span class="wpcf7-list-item-label"
                        >Monday</span
                      ></label
                    ></span
                  ><span class="wpcf7-list-item"
                    ><label
                      ><input
                        type="checkbox"
                        name="availability[]"
                        value="Tuesday"
                      />&nbsp;<span class="wpcf7-list-item-label"
                        >Tuesday</span
                      ></label
                    ></span
                  ><span class="wpcf7-list-item"
                    ><label
                      ><input
                        type="checkbox"
                        name="availability[]"
                        value="Wednesday"
                      />&nbsp;<span class="wpcf7-list-item-label"
                        >Wednesday</span
                      ></label
                    ></span
                  ><span class="wpcf7-list-item"
                    ><label
                      ><input
                        type="checkbox"
                        name="availability[]"
                        value="Thursday"
                      />&nbsp;<span class="wpcf7-list-item-label"
                        >Thursday</span
                      ></label
                    ></span
                  ><span class="wpcf7-list-item"
                    ><label
                      ><input
                        type="checkbox"
                        name="availability[]"
                        value="Friday"
                      />&nbsp;<span class="wpcf7-list-item-label"
                        >Friday</span
                      ></label
                    ></span
                  ></span
                ></span
              >
            </p>
            <h4>Best time of day for your appointment:</h4>
            <p>
              <span class="wpcf7-form-control-wrap checkbox-246"
                ><span class="wpcf7-form-control wpcf7-checkbox"
                  ><span class="wpcf7-list-item"
                    ><label
                      ><input
                        type="checkbox"
                        name="timing[]"
                        value="Morning"
                      />&nbsp;<span class="wpcf7-list-item-label"
                        >Morning</span
                      ></label
                    ></span
                  ><span class="wpcf7-list-item"
                    ><label
                      ><input
                        type="checkbox"
                        name="timing[]"
                        value="Afternoon"
                      />&nbsp;<span class="wpcf7-list-item-label"
                        >Afternoon</span
                      ></label
                    ></span
                  ></span
                ></span
              >
            </p>
          </div>
        </div>
        <div
          style="
            text-align: center;
            padding-top: 2em;
            border-top: 1px solid rgb(153, 202, 129);
            margin-top: 1em;
          "
        >
          <input
            type="submit"
            value="Request My Appointment"
            class="wpcf7-form-control wpcf7-submit"
          /><img
            class="ajax-loader"
            src="http://www.professionalaudiologicalservices.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif"
            alt="Sending ..."
            style="visibility: hidden"
          />
        </div>
        <div class="wpcf7-response-output wpcf7-display-none"></div>
      </form>
    </div>
  </div>
  <script>
    $(document).ready(function () {
      $("input[type=submit]").click(function () {
        $("input[type=submit]").toggleClass("red");
      });
    });
  </script>
</div>
