
<script type="text/javascript" src="https://shahbaazchaviwale.github.io/js-css-library/cw-js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="https://shahbaazchaviwale.github.io/js-css-library/toastr/toastr.min.js"></script>
<script type="text/javascript" src="https://shahbaazchaviwale.github.io/js-css-library/js/jquery.toaster.js"></script>

<script type="text/javascript" src="https://shahbaazchaviwale.github.io/js-css-library/cw-js/modernizrr.js"></script>
<script type="text/javascript" src="https://shahbaazchaviwale.github.io/js-css-library/cw-asset/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://shahbaazchaviwale.github.io/js-css-library/cw-js/jquery.fitvids.js"></script>
<script type="text/javascript" src="https://shahbaazchaviwale.github.io/js-css-library/cw-js/owl.carousel.min.js"></script>
<script type="text/javascript" src="https://shahbaazchaviwale.github.io/js-css-library/cw-js/nivo-lightbox.min.js"></script>
<script type="text/javascript" src="https://shahbaazchaviwale.github.io/js-css-library/cw-js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="https://shahbaazchaviwale.github.io/js-css-library/cw-js/jquery.appear.js"></script>
<script type="text/javascript" src="https://shahbaazchaviwale.github.io/js-css-library/cw-js/count-to.js"></script>

<script type="text/javascript" src="https://shahbaazchaviwale.github.io/js-css-library/cw-js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="https://shahbaazchaviwale.github.io/js-css-library/cw-js/jquery.parallax.js"></script>

<script type="text/javascript" src="https://shahbaazchaviwale.github.io/js-css-library/cw-js/script.js"></script>
<script type="text/javascript" src="https://shahbaazchaviwale.github.io/js-css-library/cw-js/common.js"></script>

<script type="text/javascript">
    //share home page
    function PageShare(click_id)
    {
        var social = click_id;//get id  value of button
        var address_link = window.location;//get the url of this site
        if (social == 'facebook')/*share with facebook*/
        {
            window.open("https://www.facebook.com/sharer/sharer.php?u="+address_link+"&t="+document.title, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
        }
        else if(social == 'google')/*share with google plus */
        {
            window.open("https://plus.google.com/share?url="+address_link+"&t="+document.title, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
        }
        else if (social == 'twitter')/*share with twitter*/
        {
            window.open("https://twitter.com/share?url="+address_link+"&t="+document.title, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
        }
    }//EOF homePageShare
    $(document).ready(function() {
        $('#whatsapp').on("click", function(e) {
            if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                var article = $(this).attr("data-text");
                var weburl = $(this).attr("data-link");
                var whats_app_message = encodeURIComponent(article)+" - "+encodeURIComponent(weburl);
                var whatsapp_url = "whatsapp://send?text="+whats_app_message;
                window.location.href= whatsapp_url;
            }else{
                alert('you are not using mobile device.');
            }
        });
    });
</script>



