<section class="layout-pt-md layout-pb-md bg-dark-2">
    <div class="container">
        <div class="row y-gap-30 justify-between items-center">
            <div class="col-auto">
                <div class="row y-gap-20 flex-wrap items-center">
                    <div class="col-auto">
                        <div class="icon-newsletter text-60 sm:text-40 text-white"></div>
                    </div>

                    <div class="col-auto">
                        <h4 class="text-26 text-white fw-600">
                            Your Travel Journey Starts Here
                        </h4>
                        <div class="text-white">
                            Drop your email and we would reach out to you.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-auto">
                <div class="single-field -w-410 d-flex x-gap-10 y-gap-20">
                    <form id="subscriptionForm" method="POST" class="single-field -w-410 d-flex x-gap-10 y-gap-20"
                          action="{{route('newsletter.subscribe')}}" style="margin: 0; padding: 0;">
                        @csrf
                        <div>
                            <input class="bg-white h-60" id="email" name="email" type="email" required
                                   placeholder="Your Email"/>
                        </div>

                        <div>
                            <button id="submitButton" class="button -md h-60 bg-blue-1 text-white" type="button">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    jQuery.noConflict();
    (function ($) {
        $(document).ready(function () {
            $('#submitButton').click(function () {
                const email = $('#email').val();
                $(this).text('Loading...');

                $.ajax({
                    type: 'POST',
                    url: $('#subscriptionForm').attr('action'),
                    data: {
                        '_token': $('input[name="_token"]').val(),
                        'email': email
                    },
                    success: function (data) {
                        alert('Subscription successful');
                        $('#submitButton').text('Submit');

                    },
                    error: function (xhr, status, error) {
                        let errorMessage = 'Subscription Failed';
                        if (xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        }

                        alert(errorMessage);
                        $('#submitButton').text('Submit');
                    }
                });
            });
        });
    })(jQuery);

</script>
