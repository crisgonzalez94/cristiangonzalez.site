<?php 
    require 'includes/header.php';
?>

<div class="container">
    <br>
    <h1>Videos</h1>
    <hr>

    <div class="card mb-3 bg-steel-blue">
        <div class="row no-gutters">
            <div class="col-md-4 col-sm-4">
                <img src="assets/pictures/software/software-1.gif" class="card-img" alt="...">
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="card-body">
                    <h5 class="card-title white">Software title</h5>
                    <p class="card-text white">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                    <!--Download buttons-->
                    <div class="row">

                        <div class="col-md-3 col-sm-3">
                            <button class="btn btn-outline-light btn-download toolstips" data-toggle="tooltip" data-placement="bottom" title="Download for windows 7 / 8.1 / 10">
                                <i class="fab fa-windows"></i>
                            </button>
                        </div>

                        <div class="col-md-3 col-sm-3">
                            
                            <button class="btn btn-outline-light btn-download toolstips" data-toggle="tooltip" data-placement="bottom" title="Download in PlayStore">
                                <i class="fab fa-google-play"></i>
                            </button>

                        </div>

                        <div class="col-md-3 col-sm-3">
                            
                            <button class="btn btn-outline-light btn-download toolstips" data-toggle="tooltip" data-placement="bottom" title="Download for osx 13.1 or higher">
                                <i class="fab fa-apple"></i>
                            </button>

                        </div>

                        <div class="col-md-3 col-sm-3">
                                <button class="btn btn-outline-light btn-download toolstips" data-toggle="tooltip" data-placement="bottom" title="Download for debian distributions">
                                <i class="fab fa-linux"></i>
                            </button>
                        </div>

                    </div>

                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>

            </div>
        </div>
    </div>

</div>



<!--This js code is for change class of header link-->
<script>
    let youtube_channel_link = document.getElementById('youtube-channel-link');

    youtube_channel_link.className += 'active';

</script>

<?php 
    require 'includes/footer.php';
?>