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
                        $('#myTabs a[href="#Addnew"]').tab('show') // Select tab by name
                        $('#myTabs a[href="#list"]').tab('show') // Select tab by name
                    </script>
                    <div>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#Addnew" aria-controls="Addnew" role="tab" data-toggle="tab">Add New Supplier</a></li>
                            <li role="presentation"><a href="#list" aria-controls="list" role="tab" data-toggle="tab">List</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="Addnew"><div class="content-panel"><form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">Password</label>
                                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputAddress">Address</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputAddress2">Address 2</label>
                                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCity">City</label>
                                                <input type="text" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState">State</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="inputZip">Zip</label>
                                                <input type="text" class="form-control" id="inputZip">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    Check me out
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary" style=" margin-left:  1%;">Sign in</button>
                                    </form>
                                </div>
                            </div>


                            <div role="tabpanel" class="tab-pane" id="list"><div class="content-panel">
                                    <table class="table table-striped table-advance table-hover">
                                        <h4><i class="fa fa-angle-right"></i> All Suppliers</h4>
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
