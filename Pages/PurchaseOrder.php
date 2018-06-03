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
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Order Details</h4>
                        <form class="form-horizontal" method="get">
                            <div class="form-group ">
                                <label class="col-sm-2 col-sm-2 control-label">Customer name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Sales order</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Sales order Date</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control">
                                </div>
                                <label class="col-sm-2 col-sm-2 control-label">Expected Shipment Date</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Warehouse Name</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Delivery Method</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <h4><i class="fa fa-angle-right"></i> purchased products</h4>
                            <section id="unseen">
                                <table class="table table-bordered table-striped table-condensed">
                                    <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Category</th>
                                        <th>Brand</th>
                                        <th class="numeric"style="padding-left:  2%;padding-right: 4%;">Price</th>
                                        <th class="numeric"style="padding-left:  2%;padding-right: 4%;">Unit</th>
                                        <th class="numeric">Quantity</th>
                                        <th class="numeric">Discount</th>
                                        <th class="numeric"style="padding-left:  2%;padding-right: 4%;">Total</th>
                                        <th class="numeric">Option</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input type="text" class="form-control col-md-4"></td>
                                        <td><select id="inputState" class="form-control col-sm-8">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                            </select></td>
                                        <td><select id="inputState" class="form-control col-sm-8">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                            </select></td>
                                        <td class="numeric" style="padding-left:  2%;padding-right: 4%;">$3.17</td>
                                        <td class="numeric" style="padding-left:  2%;padding-right: 4%;">Kg</td>
                                        <td class="numeric"><input type="text" class="form-control col-sm-4"></td>
                                        <td class="numeric"><input type="text" class="form-control col-sm-4"></td>
                                        <td class="numeric" style="padding-left:  2%;padding-right: 4%;">$3.11</td>
                                        <td> <button>Add</button></td>
                                    </tr>

                                    <tr>
                                        <td>AGO</td>
                                        <td>ATLAS IRON LIMITED</td>
                                        <td>Asus</td>
                                        <td class="numeric" style="padding-left:  2%;padding-right: 4%;">$3.17</td>
                                        <td class="numeric" style="padding-left:  2%;padding-right: 4%;">Kg</td>
                                        <td class="numeric" style="padding-left:  2%;padding-right: 4%;">-0.02</td>
                                        <td class="numeric" style="padding-left:  2%;padding-right: 4%;">-0.47%</td>
                                        <td class="numeric" style="padding-left:  2%;padding-right: 4%;">$3.11</td>
                                        <td> <button>Edit</button></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </section>

                            <div class="form-group">
                                <label class="col-sm-6 col-sm-6 control-label"></label>
                                <label class="col-lg-2 col-sm-2 control-label">Sub total</label>
                                <div class="col-sm-2">
                                    <p class="form-control-static">00.00</p>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-sm-6 col-sm-6 control-label"></label>
                                <label class="col-sm-2 col-sm-2 control-label">Discount</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-6 col-sm-6 control-label"></label>
                                <label class="col-sm-2 col-sm-2 control-label">Shipping Charges</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-6 col-sm-6 control-label"></label>
                                <label class="col-sm-2 col-sm-2 control-label">Adjustment</label>
                                <div class="col-sm-2">

                                </div>
                            </div>
                            <div class="form-group" style=" background-color: #f9f9f9;">
                                <label class="col-sm-6 col-sm-6 control-label"></label>
                                <label class="col-lg-2 col-sm-2 control-label" style=" background-color: #f9f9f9;">Total</label>
                                <div class="col-sm-2" style=" background-color: #f9f9f9;">
                                    <p class="form-control-static">00.00</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-6 col-sm-6 control-label" for="comment">Comment:</label>
                                <textarea class="form-control col-sm-10 col-sm-10 control-label" rows="5" id="comment"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Order</button>
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
