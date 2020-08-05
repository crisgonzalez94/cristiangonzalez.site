<?php 
    require 'includes/header.php';
?>

<div class="container">
    <br>
    <h1>Contact me</h1>
    <hr>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#whatsapp" role="tab" aria-controls="whatsapp" aria-selected="true">Whatsapp</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#email" role="tab" aria-controls="Email" aria-selected="false">Email</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="whatsapp" role="tabpanel" aria-labelledby="home-tab">
            <!--Content-->
            <br>    
            <form>

                <div class="form-group">

                    <label for="message">Put your message</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                </div>

                <button type="button" class="btn btn-primary btn-lg btn-block">
                    Send message
                </button>

            </form>
            <!------------>

        </div>

        <div class="tab-pane fade" id="email" role="tabpanel" aria-labelledby="profile-tab">
            <!--Content-->
            <br>    
            <form>

                <div class="form-group">

                    <label for="affair">Affair</label>
                    <input type="email" class="form-control" id="affair" aria-describedby="emailHelp">

                    <label for="message">Put your message</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                </div>

                <button type="button" class="btn btn-primary btn-lg btn-block">
                    Send message
                </button>

            </form>
            <!------------>
        </div>

    </div>

    <br>

    <!--Other social networks-->
    <div class="row">
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
    </div>

</div>



<!--This js code is for change class of header link-->
<script>
    let software_link = document.getElementById('contact-link');

    software_link.className += 'active';

</script>

<?php 
    require 'includes/footer.php';
?>