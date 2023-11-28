
<style>
    #ageWrapper {

 opacity:1;
 position: fixed;
 top: 0;
 bottom: 0;
 left: 0;
 right: 0;
 z-index: 9000;
 background-color: rgba(32,23,19,.7);
 transition: visibility 0s ease-in-out .5s, opacity .5s ease-in-out;
}

#ageWrapper.ageUnknown {
 visibility: visible;
 opacity: 1;
}

#agePopUp {
 position: fixed;
 top: 50%;
 left: 50%;
 background-color: #fff;
 text-align: center;
 padding: 30px;
 width: 360px;
 height: 150px;
 margin-top: -105px;
 margin-left: -185px;
 box-sizing: border-box;
}

#agePopUp a {
 background-color: black;
 color: white;
 padding: 10px 20px;
 margin-top: 10px;
 display: inline-block;
}

.ageConfirmed{
 z-index:-1;
 visibility:hidden;
}
</style>

<div id="ageWrapper">
    <div id="agePopUp">
      <h2>Are you over 18?</h2>
      <a href="#" id="ageOkay">Yes</a>
      <a href="http://www.google.com/" id="ageBad">No</a>
    </div>
</div>

<script>
    $(document).ready(function(){
        // put the popup at the start of the body
        $('#ageWrapper').prependTo($('body'));

        // check if the age has already been verified
        if (($.cookie('age')) !== 'true') { $('#ageWrapper').addClass('ageConfirmed'); }

        // if the "yes" button is clicked, add a cookie and hide the popup
        $('#ageOkay').click(function() {
            alert('y')
            $.cookie('age', 'true', { expires: 1, path: '/' });
            $('#ageWrapper').removeClass('ageUnknown');
        });

        // if the "no" button is clicked, take the user elsewhere
        $('#ageBad').click(function() {
            window.location.href='http://www.google.com/';
        });
    });
</script>
