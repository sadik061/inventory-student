<?php include '../Templates/Header.php'; ?>
    <body>
<section id="container" >
<?php include '../Templates/navbar.php' ?>
<?php include '../Templates/sidebar.php' ?>

    <section id="main-content">
        <section class="wrapper">
            <div class="row mt">
                <div class="col-md-12">
                    <script>
                        $('#myTabs a').click(function (e) {
                            e.preventDefault()
                            $(this).tab('show')
                        })
                        $('#myTabs a[href="#home"]').tab('show') // Select tab by name
                        $('#myTabs a[href="#Show"]').tab('show') // Select tab by name
                    </script>
                    <div>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Create New Category</a></li>
                            <li role="presentation"><a href="#Show" aria-controls="Show" role="tab" data-toggle="tab">Show All Categories</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="content-panel" style="    padding-left: 1%;">


                                                <h3>Main Category</h3>
                                                <small>Please provide Name of the main category</small>
                                                <form class="form-horizontal style-form" method="get">
                                                    <div class="form-group">
                                                        <label class="col-sm-1 col-sm-2 control-label">Category</label>
                                                        <div class="col-sm-2">
                                                            <input type="text" class="form-control" >
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>

                                                    </div>
                                                </form>
                                                <h3>Sub-Category</h3>
                                                <small>Choose main category and enter a sub-category</small>
                                                    <form class="form-horizontal style-form" method="get">
                                                    <div class="form-group">
                                                        <label class="col-sm-1 col-sm-2 control-label">Category</label>
                                                        <div class="col-sm-2">
                                                            <select id="inputState" class="form-control col-sm-2">
                                                                <option selected>Choose...</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                        <label class="col-sm-1 col-sm-2 control-label" style="padding: .5%;">Sub-Category</label>
                                                        <div class="col-sm-2">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                <h3>Brand</h3>
                                                <small>Choose main and sub category and enter a brand name</small>
                                                        <form class="form-horizontal style-form" method="get">
                                                    <div class="form-group">
                                                        <label class="col-sm-1 col-sm-2 control-label">Category</label>
                                                        <div class="col-sm-2">
                                                            <select id="inputState" class="form-control col-sm-2">
                                                                <option selected>Choose...</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                        <label class="col-sm-1 col-sm-2 control-label" style="padding: .5%;">Sub-Category</label>
                                                        <div class="col-sm-2">
                                                            <select id="inputState" class="form-control col-sm-2">
                                                                <option selected>Choose...</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                        <label class="col-sm-1 col-sm-2 control-label">Brand</label>
                                                        <div class="col-sm-2">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>

                                                </form>


                                       <!-- /row -->



                                </div>
                            </div>





                            <div role="tabpanel" class="tab-pane" id="Show"><div class="content-panel">
                                    <table class="table table-striped table-advance table-hover">
                                        <h4><i class="fa fa-angle-right"></i> All categories</h4>
                                        <hr>
                                        <thead>
                                        <tr>
                                            <th><i class="fa fa-bullhorn"></i> Company</th>
                                            <th class="hidden-phone"><i class="fa fa-question-circle"></i> Descrition</th>
                                            <th><i class="fa fa-bookmark"></i> Profit</th>
                                            <th><i class=" fa fa-edit"></i> Status</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="basic_table.html#">Company Ltd</a></td>
                                            <td class="hidden-phone">Lorem Ipsum dolor</td>
                                            <td>12000.00$ </td>
                                            <td><span class="label label-info label-mini">Due</span></td>
                                            <td>
                                                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="basic_table.html#">
                                                    Dashgum co
                                                </a>
                                            </td>
                                            <td class="hidden-phone">Lorem Ipsum dolor</td>
                                            <td>17900.00$ </td>
                                            <td><span class="label label-warning label-mini">Due</span></td>
                                            <td>
                                                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="basic_table.html#">
                                                    Another Co
                                                </a>
                                            </td>
                                            <td class="hidden-phone">Lorem Ipsum dolor</td>
                                            <td>14400.00$ </td>
                                            <td><span class="label label-success label-mini">Paid</span></td>
                                            <td>
                                                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="basic_table.html#">
                                                    Dashgum ext
                                                </a>
                                            </td>
                                            <td class="hidden-phone">Lorem Ipsum dolor</td>
                                            <td>22000.50$ </td>
                                            <td><span class="label label-success label-mini">Paid</span></td>
                                            <td>
                                                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="basic_table.html#">Total Ltd</a></td>
                                            <td class="hidden-phone">Lorem Ipsum dolor</td>
                                            <td>12120.00$ </td>
                                            <td><span class="label label-warning label-mini">Due</span></td>
                                            <td>
                                                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div><!-- /content-panel --></div></div>

                        </div>
                    </div>
                </div><!-- /col-md-12 -->
            </div><!-- /row -->

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

</section>
<?php include '../Templates/Footer.php' ?>
    </body>
</html>
