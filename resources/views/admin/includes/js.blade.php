<!-- Bootstrap JS -->
<script src="{{asset('backend')}}/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{asset('backend')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{asset('backend')}}/assets/plugins/chartjs/js/Chart.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{asset('backend')}}/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/jquery-knob/excanvas.js"></script>
<script src="{{asset('backend')}}/assets/plugins/jquery-knob/jquery.knob.js"></script>
  <script>
      $(function() {
          $(".knob").knob();
      });
  </script>
  <script src="{{asset('backend')}}/assets/js/index.js"></script>
<!--app JS-->
<script src="{{asset('backend')}}/assets/js/app.js"></script>

{{-- admin link proceses js code here  --}}

<script>
    $(document).ready(function () {

        // for website input field and submit button hide
        $('.adminWebsiteLinkInput').hide();
        $('.adminWebsiteLinkUpdateBtn').hide();

        // for github input field and submit button hide
        $('.adminGithubLinkInput').hide();
        $('.adminGithubLinkUpdateBtn').hide();

        // for twitter input field and submit button hide
        $('.adminTwitterLinkInput').hide();
        $('.adminTwitterLinkUpdateBtn').hide();

        // for instagram input field and submit button hide
        $('.adminInstagramLinkInput').hide();
        $('.adminInstagramLinkUpdateBtn').hide();

        // for facebook input field and submit button hide
        $('.adminFacebookLinkInput').hide();
        $('.adminFacebookLinkUpdateBtn').hide();

          // function for socila link update with ajax
        //   let function socilaLinkUpdate($link) {
        //     let Link = $link;
        //     $.ajax({
        //             type: "post",
        //             url: "/admin/social/link",
        //             data: "link",
        //             success: function (response) {
        //                 console.log('data geche');
        //             }
        //         });
        //     }

        // for website link update
        $('.adminWebsiteLinkEditBtn').click(function (e) {
            e.preventDefault();
            $('.adminWebsiteLinkInput').show();
            $('.adminWebsiteLinkUpdateBtn').show();
            $(this).hide();
            $('.adminWebsiteLinkUpdateBtn').click(function (e) {
                let link = $().val('.adminWebsiteLinkInput');

                // social link update function call
                socilaLinkUpdate(link);

            });
        });

        // for github link update
        $('.adminGithubLinkEditBtn').click(function (e) {
            e.preventDefault();
            $('.adminGithubLinkInput').show();
            $('.adminGithubLinkUpdateBtn').show();
            $(this).hide();
            $('.adminGithubLinkUpdateBtn').click(function (e) {
                let link = $().val('.adminGithubLinkInput');

               // social link update function call
               socilaLinkUpdate(link);
            });
        });

         // for Twitter link update
         $('.adminTwitterLinkEditBtn').click(function (e) {
            e.preventDefault();
            $('.adminTwitterLinkInput').show();
            $('.adminTwitterLinkUpdateBtn').show();
            $(this).hide();
            $('.adminTwitterLinkUpdateBtn').click(function (e) {
                let link = $().val('.adminTwitterLinkInput');

               // social link update function call
               socilaLinkUpdate(link);
            });
        });

         // for Instagram link update
         $('.adminInstagramLinkEditBtn').click(function (e) {
            e.preventDefault();
            $('.adminInstagramLinkInput').show();
            $('.adminInstagramLinkUpdateBtn').show();
            $(this).hide();
            $('.adminInstagramLinkEditBtn').click(function (e) {
                let link = $().val('.adminInstagramLinkInput');

               // social link update function call
               socilaLinkUpdate(link);
            });
        });

         // for facebook link update
        $('.adminFacebookLinkEditBtn').click(function (e) {
            e.preventDefault();
            $('.adminFacebookLinkInput').show();
            $('.adminFacebookLinkUpdateBtn').show();
            $(this).hide();
            $('.adminFacebookLinkUpdateBtn').click(function (e) {
                let link = $().val('.adminFacebookLinkInput');

                // social link update function call
                socilaLinkUpdate(link);
            });
        });


    });
</script>
</body>

</html>
