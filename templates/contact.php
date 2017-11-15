<?php include "header.php"; ?>
<body class="hide-overlay">
    <nav>
        <ul>
            <li class="list one"></li>
            <!-- <li class="list two"></li>
            <li class="list three"></li>
            <li class="list four"></li>
            <li class="list five"></li>
            <li class="list six"></li> -->
        </ul>
        <ul style="display:none;">
            <li class="list lines">
                <span contenteditable="false" class="l1"></span>
                <span contenteditable="false" class="l2"></span>
                <span contenteditable="false" class="l3"></span>
            </li>
            <!-- <li class="list two"></li>
            <li class="list three"></li>
            <li class="list four"></li>
            <li class="list five"></li>
            <li class="list six"></li> -->
        </ul>
    </nav>
    <div class="overlay">
        <div class="overlay-content">
            <!-- <div id="title">
    <h1>Title</h1>
   </div> -->
            <div id="close"><span>close</span>
            </div>
            <ul id="weblist">
            </ul>
        </div>
    </div>
    <div class="background-content">
        <section class="offset60">
            <h1 contenteditable="false" id="title">Contact</h1>
        </section>
        <section class="offset0">
            <!-- <div id="image" class="imgHero" style="background-image: url()"></div> -->
        </section>
        <section class="offset60">
            <h3></h3>
            <p id="description" contenteditable="false"></p>
            <div id="messages"></div>
            <form id="form-contact" name="form-contact" method="post">
                <fieldset id="person_data">
                <div id="email-group" class="form-group">
                    <label for="email">Email:
                            <input type="email" class="required mail" value="" id="email" name="email" placeholder="Email" required="">
                    </label>
                </div>
                <div id="first-group" class="form-group">
                    <label for="first_name">First Name:
                            <input type="text" class="required" value="" id="first_name" name="first_name" placeholder="First Name" required="">
                    </label>
                </div>
                <div id="last-group" class="form-group">
                    <label for="last_name">Last Name:
                            <input type="text" class="required" value="" id="last_name" name="last_name" placeholder="Last Name" required="">
                    </label>
                <div id="message-group" class="form-group">
                    <label for="message">Message:
                            <textarea placeholder="Message" class="edit required" name="message" id="message" cols="17" rows="2"></textarea>
                    </label>
               </div>
                </fieldset>
                <button type="submit" class="button">Submit</button>
            </form>
        </section>
     
        <!-- <section class="offset40">
            <a id="next" class="next"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </section> -->
        <div id="wrap">
            <div id="block"></div>
        </div>

    </div>
    <div id="contactform"></div> 
    <div id="root"></div>
    
    <div id="load">
        <div><b>Loading ...</b></div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <?php include "footer.php"; ?>
    <script type="text/javascript" src="js/main.js"></script>

    <script type="text/javascript">
    	$(document).ready(function() {

// process the form
$('form').submit(function(event) {

  // remove the past errors
  $('#email-group').removeClass('has-error');
  $('#email-group .help-block').empty();
  $('#first-group').removeClass('has-error');
  $('#first-group .help-block').empty();
  $('#last-group').removeClass('has-error');
  $('#last-group .help-block').empty();
  $('#message-group').removeClass('has-error');
  $('#message-group .help-block').empty();


  // remove success messages
  $('#messages').removeClass('alert alert-success').empty();

  // get the form data
  var formData = {
      'email'              : $('input[name=email]').val(),
      'first_name'    : $('input[name=first_name]').val(),
      'last_name'    : $('input[name=last_name]').val(),
      'message'    : $('#message').val()

  };

  // process the form
  $.ajax({
    type        : 'POST',
    url         : 'contact-form.php',
    data        : formData,
    dataType    : 'json',
    success     : function(data) {

      // log data to the console so we can see
      console.log(data);

      // if validation fails
      // add the error class to show a red input
      // add the error message to the help block under the input
      if ( ! data.success) {

        if (data.errors.email) {
          $('#email-group').addClass('has-error');
          $('#email-group .help-block').html(data.errors.email);
        }

        if (data.errors.first_name) {
          $('#first-group').addClass('has-error');
          $('#first-group .help-block').html(data.errors.first_name);
        }

        if (data.errors.last_name	) {
          $('#last-group').addClass('has-error');
          $('#last-group .help-block').html(data.errors.last_name	);
        }

        if (data.errors.message) {
          $('#message-group').addClass('has-error');
          $('#message-group .help-block').html(data.errors.message);
        }

      } else {

        // if validation is good add success message
        $('#messages').addClass('alert alert-success').append('<p>' + data.message + '</p>');
        $('#form-contact').css('display','none');
      }
    }
  });

  // stop the form from submitting and refreshing
  event.preventDefault();
});

});

</script>

</body>

</html>