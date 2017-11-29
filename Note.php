<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.3/toastr.css" rel="stylesheet" />
    <script type="text/javascript">
    	 var url = "http://localhost:88/";
    </script>
    <script src="/js/note-ajax.js"></script>
    <link href="design.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb" style="margin-top:10px">
                <div class="pull-left">
                    <h2>Note</h2>
                </div>
                <div class="pull-right">

                </div>
            </div>
        </div>
        <div class="lala" id="complete">
            <input type="hidden" name="markdone" class="markdonecheck" />
        </div>
        
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createnote" style="padding-bottom:10px;margin-bottom:15px;">
            Add Note
        </button>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Note Title</th>
                    <th width="320px">Description</th>
                    <th width="50px">Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        <!-- Create -->
        <div class="modal fade" id="createnote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">กั</span></button>
                        <h3 class="modal-title" id="myModalLabel">Add Note</h3>
                    </div>

                    <div class="modal-body">
                        <form data-toggle="validator" action="user/usercreatenote.php" method="POST">

                            <div class="form-group">
                                <label class="control-label" for="title">Title:</label>
                                <input type="text" name="title" class="form-control" data-error="Please enter title." required />
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="title">Description:</label>
                                <textarea name="description" class="form-control" data-error="Please enter description." required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="Create_Noteclass">Add</button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

        <!-- Edit -->
        <div class="modal fade" id="editnote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">กั</span></button>
                        <h3 class="modal-title" id="myModalLabel">Edit Note</h3>
                    </div>

                    <div class="modal-body">
                        <form data-toggle="validator" action="user/usereditnote.php" method="put">
                            <input type="hidden" name="id" class="edit-id">

                            <div class="form-group">
                                <label class="control-label" for="title">Title:</label>
                                <input type="text" name="title" class="form-control" data-error="Please enter title." required />
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="title">Description:</label>
                                <textarea name="description" class="form-control" data-error="Please enter description." required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success submitedit">Submit</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
