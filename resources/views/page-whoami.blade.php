<div class="pt-nav pt-page pt-page-1">

    <div class="email-background"></div>

    <div class="pt-triggers">
        <div id="dl-menu-whoami" class="dl-menuwrapper">
            <ul class="dl-menu">
                <li data-animation="12" data-destination="0"><h2>works</h2></li>
                <li data-animation="22" data-destination="2"><h1>developer</h1></li>
                <li data-animation="22" data-destination="3"><h1>designer</h1></li>
            </ul>
        </div><!-- /dl-menu-wrapper-->
    </div><!-- /triggers -->

    <div class="pt-triggers trigger-bottom trigger-email">
        <h2>email</h2>
        
        <div class="email-options">
            <a href="mailto:yunha.tonik.seo@gmail.com">open mail app</a>
            <input type="text" value="yunha.tonik.seo@gmail.com" id="copy-my-email" style="opacity: 0; position: absolute; z-index: -1">
            <a onclick="copyEmail()">copy email</a>
        </div>
    </div>

</div>

<script>

    function copyEmail() {
        var copyText = document.getElementById("copy-my-email");
        copyText.select();
        document.execCommand("Copy");
        alert("Copied the text: " + copyText.value);
    }

    $(document).ready(function() {
       $('.email-options').hide();
       $('.email-background').hide();

       // show email options
       $('.trigger-email').click(function() {
           $('.email-options').fadeIn();
           $('.email-background').fadeIn();
       });

       // hide email options when tapped outside of the options
        $('.email-background').click(function() {
            $('.email-options').fadeOut();
            $('.email-background').fadeOut();
        });
    });
    
</script>