<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    </head>
    <body>
    <div class="container">

        <div class="row">

            <div class="col-md-8"> <div class="well">
                    <img src="http://multimedia.pol.dk/archive/00537/ITALY_CLONED_CHAMPI_537998a.jpg" style="width:50%"/>
                </div></div>
            <div class="col-md-4">

                <div class="well">

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password </label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>

                </div>

            </div>

       </div>

        <div class="row">
            <div class="col-md-3">
                <div class="well">
                    <button type="button" class="btn btn-danger" style="width:50%">Knap 1</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="well"><button type="button" class="btn btn-primary">Knap 2</button></div>
            </div>
            <div class="col-md-3">
                <div class="well"><button type="button" class="btn btn-success">Knap 3</button></div>
            </div>
            <div class="col-md-3">
               <div class="well">
                   <button type="button" class="btn btn-warning">Knap 4</button>

               </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="well" id="log2">test</div>
            </div>
            <div class="col-md-6">
                <div class="well" id="log">test</div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="well">test</div>
            </div>

            <div class="col-md-4">
                <div class="well">test</div>
            </div>

            <div class="col-md-4">
                <div class="well">test</div>
            </div>

        </div>
    </div>


    <script>

        $( "button" ).on( "click", function( event ) {

            console.log( $(this).text() );
            $("#log").html($(this).text()+"<br/>");

            $("#log2").html($(this).text()+"<br/>");

        });


        $(function() {
            $( ".well" ).draggable();

            $( ".well" ).resizable();
        });



    </script>

    </body>
</html>
