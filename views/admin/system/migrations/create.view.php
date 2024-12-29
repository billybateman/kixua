
<div class="container-fluid">
    <h4 class="mb-0">Create New Migration</h1>
    <script type="text/javascript">
        $('#create').submit(function() { // catch the form's submit event

            var formdata = new FormData(this);

            $.ajax({ // create an AJAX call...
                type: 'POST',
                url: $(this).attr('action'),
                data: formdata,
                processData: false,
                contentType: false,
                success: function(response) { // on success..
                    $('#main-content').html('');
                    $('#main-content').html(response); 
                        var body = $("#main-content");
                        body.stop().animate({scrollTop:0}, 500, 'swing', function() {       
                    });// update the DIV
                }
            });
            return false; // cancel original event to prevent form submitting
        });
    </script>
    <form id="create" method="post" action="/admin/system/migrations">
        <input type="hidden" name="action" value="createAction">
        <div class="form-group">
            <label for="migration_name">Migration Name</label>
            <input type="text" class="form-control" id="migration_name" name="migration_name" required>
        </div>
        <div class="form-group">
            <label for="migration_name">Migration Query</label>
            <textarea type="text" class="form-control" id="migration_query" name="migration_query" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Migration</button>
    </form>
</div>