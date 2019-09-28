<DOCTYPE html>
    <html lang-en>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <title>Admin Area | Dashboard</title>
        <!-- core css -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
    </head>

    <body>
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Dashboard <small> Manage
                                your site</small></h1>
                    </div>
                    <div class="col-sm col-md-2 text-center" id="login">
                        <a href="login.html" class="">Logout</a>
                    </div>
                </div>
            </div>
        </header>


        <section id="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="active">
                        Dashboard
                    </li>
                </ol>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="list-group">
                            <a href="index.html" class="list-group-item active main-color-bg">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                            </a>
                            <a href="sermon.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt"
                                    aria-hidden="true"></span> Sermons <span class="badge">12</span></a>
                            <a href="event.html" class="list-group-item"><span class=" glyphicon glyphicon-user"
                                    aria-hidden="true"></span> Events <span class="badge">33</span></a>
                            <a href="store.html" class="list-group-item"><span class="glyphicon glyphicon-pencil"
                                    aria-hidden="true"></span> Store <span class="badge">503</span></a>
                            <a href="gallery.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt"
                                    aria-hidden="true"></span> Gallery <span class="badge">12</span></a>
                            <a href="gallery.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt"
                                    aria-hidden="true"></span> Newsletters <span class="badge">42</span></a>
                        </div>
                    </div>
                    <div class="col-md-9">

                        <!-- Website Overview -->
                        <div class="panel panel-default">
                            <div class="panel-heading main-color-bg">
                                <h3 class="panel-title">Website Overview</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-3">
                                    <div class="well dash-box">
                                        <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 503</h2>
                                        <h4>Sermons</h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="well dash-box">
                                        <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 33
                                        </h2>
                                        <h4>Events</h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="well dash-box">
                                        <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 22</h2>
                                        <h4>Books</h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="well dash-box">
                                        <h2><span class="glyphicon glyphicon-list" aria-hidden="true"></span> 42</h2>
                                        <h4>Newsletters</h4>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Latest Users -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Latest Newsletters</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-strip table-hover">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Joined</th>
                                    </tr>
                                    <tr>
                                        <td>Frank Loaf</td>
                                        <td>Frank@gmail.com</td>
                                        <td>Dec 12 2017</td>
                                    </tr>
                                    <tr>
                                        <td>Mike George</td>
                                        <td>Mike@gmail.com</td>
                                        <td>Dec 20 2017</td>
                                    </tr>
                                    <tr>
                                        <td>John Flash</td>
                                        <td>John@gmail.com</td>
                                        <td>Dec 1 2017</td>
                                    </tr>
                                    <tr>
                                        <td>Vivo Nino</td>
                                        <td>Vivo@gmail.com</td>
                                        <td>Dec 22 2017</td>
                                    </tr>
                                    <tr>
                                        <td>Benjamin Caleb </td>
                                        <td>Benjamin@gmail.com</td>
                                        <td>Dec 12 2017</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <!-- Website Overview -->
                        <div class="panel panel-default">
                            <div class="panel-heading main-color-bg">
                                <h3 class="panel-title">Users</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" placeholder="Filter Users">
                                    </div>
                                </div>
                                <br>
                                <table class="table table-strip table-hover">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Joined</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td>Frank Loaf</td>
                                        <td>Frank@gmail.com</td>
                                        <td>Dec 12 2017</td>
                                        <td><a class="btn btn-default" href="edit.html">Edit</a> <a
                                                class="btn btn-danger" href="#">Delete</a>
                                    </tr>
                                    <tr>
                                        <td>Mike George</td>
                                        <td>Mike@gmail.com</td>
                                        <td>Dec 20 2017</td>
                                        <td><a class="btn btn-default" href="edit.html">Edit</a> <a
                                                class="btn btn-danger" href="#">Delete</a>
                                    </tr>
                                    <tr>
                                        <td>John Flash</td>
                                        <td>John@gmail.com</td>
                                        <td>Dec 1 2017</td>
                                        <td><a class="btn btn-default" href="edit.html">Edit</a> <a
                                                class="btn btn-danger" href="#">Delete</a>
                                    </tr>
                                    <tr>
                                        <td>Vivo Nino</td>
                                        <td>Vivo@gmail.com</td>
                                        <td>Dec 22 2017</td>
                                        <td><a class="btn btn-default" href="edit.html">Edit</a> <a
                                                class="btn btn-danger" href="#">Delete</a>
                                    </tr>
                                    <tr>
                                        <td>Benjamin Caleb </td>
                                        <td>Benjamin@gmail.com</td>
                                        <td>Dec 12 2017</td>
                                        <td><a class="btn btn-default" href="edit.html">Edit</a> <a
                                                class="btn btn-danger" href="#">Delete</a>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <footer id="footer">
            <p>Copyright AdminStrap &copy; 2018</p>
        </footer>

        <!-- Modals -->

        <!-- Add Pages -->
        <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add Page</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <lable>Page Title</lable>
                                <input type="text" class="form-control" placeholder="Page Title">
                            </div>
                            <div class="form-group">
                                <label>Page Body</label>
                                <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Published
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Meta Tags</label>
                                <input type="text" class="from-control" placeholder="Add Some Tags...">
                            </div>
                            <div class="form-group">
                                <label>Meta Description</label>
                                <input type="text" class="form control" placeholder="Add Meta Description....">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script>
            CKEDITOR.replace('editor1');
        </script>



        <!-- Bootstrap core Javascript
        ======================================== -->
        <!-- placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>

    </html>