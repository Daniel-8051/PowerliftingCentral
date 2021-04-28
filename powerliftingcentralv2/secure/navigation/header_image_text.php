<?php
function print_header_image_text($header_text){
    echo "
<!-- Header section w/ image -->
<section id='header' class='container-fluid'>
    <div class='row align-items-center content'>
        <div class='col'>
            <div id='headingGroup' class='text-white text-center mt-5 mb-sm-5'>
                <h1 class='brand align-middle'>$header_text</h1>
            </div>
        </div>
    </div>
</section>
";
};
?>