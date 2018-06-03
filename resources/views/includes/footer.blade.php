




<!-- Modal -->
<div class="project-holder">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <span class="popup-modal-dismiss transition"><i class="fa fa-times"></i></span>
        <div class="media-content">
            <div id="project-slider" class="owl-carousel owl-theme" style="display: block; opacity: 1;">
                <div class="owl-wrapper-outer autoHeight" style="height: 596px;"><div class="owl-wrapper" style="display: block; width: 5400px; left: 0px; transition: all 0ms ease; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 900px;"><div class="item"><img src="images/foothills.jpg" class="respimg"></div></div><div class="owl-item" style="width: 900px;"><div class="item"><img src="images/foothills.jpg" class="respimg"></div></div><div class="owl-item" style="width: 900px;"><div class="item"><img src="images/foothills.jpg" class="respimg"></div></div></div></div>


                <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev">prev</div><div class="owl-next">next</div></div></div></div>
        </div>
        <div class="clearfix"></div>
        <div class="project-discription">
            <h2>Vestibulum</h2>
            <h4 class="margin">branding / web</h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. Xillum dolore eu fugiat nulla pariatur. olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="#" class="button float-button content-button  transition hide-icon"><i class="fa fa-angle-right transition2"></i> <span class="text transition color-bg">Launch project</span></a>
        </div>
    </div>
</div>

<!-- Main end -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset("js/jpreloader.min.js")}}"></script>
<script type="text/javascript" src="{{asset("js/plugins.js")}}"></script>
<script type="text/javascript" src="{{asset("js/superslides.js")}}"></script>
<script type="text/javascript" src="{{asset("js/initslideshow.js")}}"></script>
<script type="text/javascript" src="{{asset("js/app.js")}}"></script>

<!--Styleswitch-->
{{--<script src="http://mikemagero.co.ke/wealthsmith/js/styleswitch.js" type="text/javascript"></script>--}}

<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
    })
</script>

</body>
</html>