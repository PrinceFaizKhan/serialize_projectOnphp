<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
         <script type="text/javascript">
        // add navbar menu form  row
        $("#addRow").click(function() {
            var html = '';
            html += '<div id="inputFormRow">';
            html += '<label for="title" >Menu Name</label>';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" name="menuName[]" class="form-control m-input" placeholder="Enter menu name" autocomplete="off" required!>';
            html += '</div>';
            html += '<label for="title" >Menu Url</label>';
            html += '<div class="input-group mb-3">';
            html += '<input type="url" name="menuUrl[]" class="form-control m-input" placeholder="Enter menu url" autocomplete="off" >';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
        });

        // remove menu form  row
        $(document).on('click', '#removeRow', function() {
            $(this).closest('#inputFormRow').remove();
        });
        //add Slide menu form  row
             $("#addSliderow").click(function() {
           var html = '';
             html += '<div id="inputSlideformRow">';
            html += '<label for="title" >Title</label>';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" name="Title[]" class="form-control m-input" placeholder="Enter Title" autocomplete="off" required!>';
            html += '</div>';
            html += '<label for="title" >Contant</label>';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" name="Contant[]" class="form-control m-input" placeholder="Enter Content" autocomplete="off" >';
            html += '<div class="input-group-append">';
            html += '<button id="removeSliderow" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newSliderow').append(html);
        });
        // remove menu form  row
        $(document).on('click', '#removeSliderow', function() {
            $(this).closest('#inputSlideformRow').remove();
        });
       // add service menu form  row
        $("#addServicerow").click(function() {
            var html = '';
            html += '<div id="inputServiceformRow">';
            html += '<input type="file" name="image[]" class="form-control mt-3 mb-3">';
            html += '<label for="title" > Service Title</label>';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" name="Stitle[]" class="form-control m-input" placeholder="Enter Title" autocomplete="off" required!>';
            html += '</div>';
            html += '<label for="title" >Service Contant</label>';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" name="Scontant[]" class="form-control m-input" placeholder="Enter Content" autocomplete="off" >';
            html += '<div class="input-group-append">';
            html += '<button id="removeServicerow" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newServicerow').append(html);
        });
        // remove service form  row
        $(document).on('click', '#removeServicerow', function() {
            $(this).closest('#inputServiceformRow').remove();
        });
        // add service menu form  row
        $("#addClientrow").click(function() {
            var html = '';
            html += '<div id="inputClientformRow">';
            html += '<label for="title" class="mb-2 mt-2">Slider Heading</label>';
            html += '<div class="row">';
            html += '<div class="col-sm-6">';
            html += '<input type="text" class="form-control" name="slidehead[]" placeholder="Button Title ">';
            html += '</div>';
            html += '<div class="col-sm-6">';
            html += '<input type="text" class="form-control" name="tagline[]" placeholder="Button URL">';
            html += '</div>';
            html += '</div>';
            html += '<label for="title" class="mb-2">Contant</label>';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" name="Ccontant[]" class="form-control m-input"  autocomplete="off">';
            html += '<div class="input-group-append">';
            html += '<button id="removeSlideow" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newClientrow').append(html);
        });
        // remove service form  row
        $(document).on('click', '#removeClientrow', function() {
            $(this).closest('#inputClientformRow').remove();
        });
    </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>