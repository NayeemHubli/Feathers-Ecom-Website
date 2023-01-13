/*GLOBAL VARIABLES adnes*/
var global_text = [
    'Please enter your chicken quantity',
    'Please enter your first name',
    'Please enter your mobile number',
    'Sorry this quantity not accepted here '
];
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

/*-----------------------------------------------------------------------*/
/*Error pop-up*/
function pass_msg(color, msg_1, msg_2){
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
        };
        if(color == 'warning'){
            toastr.warning(msg_1, msg_2);
        }else if(color == 'error'){
            toastr.error(msg_1, msg_2);
        }else if(color == 'info'){
            toastr.info(msg_1, msg_2);
        }
    }, 50);
}
/*This below function will accept only Alphabets values */
function onlyAlphabets(e, t) {
    try {
        if (window.event) {
            var charCode = window.event.keyCode;
        }
        else if (e) {
            var charCode = e.which;
        }
        else { return true; }
        if ( (charCode >= 08 && charCode <= 16) || (charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
            return true;
        else
            return false;
    }
    catch (err) {
        alert(err.Description);
    }
}
/*This below function will accept only number values */
function isNumberKey(e, t) {
    try {
        if (window.event) {
            var charCode = window.event.keyCode;
        }
        else if (e) {
            var charCode = e.which;
        }
        else { return true; }
        if ((charCode > 47  && charCode < 58) || (charCode >= 08 && charCode <= 16))
            return true;
        else
            return false;
    }
    catch (err) {
        alert(err.Description);
    }
}
