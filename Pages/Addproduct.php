<?php include '../Templates/Header.php'; ?>
<body>
<section id="container" >
    <?php include '../Templates/navbar.php' ?>
    <?php include '../Templates/sidebar.php' ?>
    <section id="main-content">
        <section class="wrapper">


            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h3>Add new product</h3>
                        <small>Please provide details of this product.</small>
                        <form class="form-horizontal style-form" method="get">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Product Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">SKU</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                    <span class="help-block">Enter SKU</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Supplier</label>
                                <div class="col-sm-8">
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                    <span class="help-block">select supplier</span>
                                </div>
                                <div class="col-sm-2">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        New
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">New Supplier</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <form method="post" role="form"  action="../Api/add_customer.php">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="name">Name</label>
                                                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                                            </div>


                                                            <div class="form-group col-md-6">
                                                                <label for="mobile">Title</label>
                                                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="e.g. Owner, Stock Seller">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="address">Email</label>
                                                                <input type="text" class="form-control" id="address" name="address" placeholder="Email">
                                                            </div>
                                                            <div class="form-group col-md-6">

                                                                <label for="exampleFormControlTextarea1">Note</label>
                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>

                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="address">Phone Number</label>
                                                                <input type="text" class="form-control" id="address" name="address" placeholder="Phone number">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="address">Mobile</label>
                                                                <input type="text" class="form-control" id="address" name="address" placeholder="Mobile number">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="address">Address</label>
                                                                <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
                                                            </div>
                                                        </div>

                                                    </form>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Product Type</label>
                                <div class="col-sm-10">
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                    <span class="help-block">select supplier</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Brand</label>
                                <div class="col-sm-10">
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                    <span class="help-block">select supplier</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Product Description</label>
                                <div class="col-sm-10">
                                    <span class="help-block">Write product description</span>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Buy price</label>
                                <div class="col-sm-4">
                                    <input type="password"  class="form-control" placeholder="">
                                    <span class="help-block">Buy price (price from supplier/vendor)</span>
                                </div>
                                <label class="col-sm-2 col-sm-2 control-label">Wholesale Price</label>
                                <div class="col-sm-4">
                                    <input type="password"  class="form-control" placeholder="">
                                    <span class="help-block">Wholesale price (price for business customers)</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Weight</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control">
                                    <span class="help-block">Input weight</span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Product</button>
                        </form>
                    </div>
                </div><!-- col-lg-12-->
            </div><!-- /row -->
    </section>
    </section>

</section>
<?php include '../Templates/Footer.php' ?>
</body>
</html>
