<?php include '../Templates/Header.php'; ?>
<body>
<!-- for calling ajax to handle API -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
                            <div role="tabpanel" class="tab-pane active" id="Addnew">
                                <div class="content-panel">
                                    <form method="post" role="form"  action="../Api/add_supplier.php">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="mobile">Mobile</label>
                                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile No.">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
                                        </div>

                                        <button type="submit" class="btn btn-primary" style=" margin-left:  1%;">Add</button>
                                    </form>
                                </div>
                            </div>


                            <div role="tabpanel" class="tab-pane" id="list"><div class="content-panel">
                                    <table class="table table-striped table-advance table-hover" id="suppliers">
                                        <h4><i class="fa fa-angle-right"></i> All Suppliers</h4>
                                        <hr>

                                    </table>
                                    <script>
                                        //alert("loaded");
                                        $.ajax({
                                            type: 'POST',
                                            url: '../Api/get_supplier.php',
                                            async: false,
                                            data: {
                                            },
                                            error: function (ts) {
                                                alert(ts.responseText);
                                            },
                                            success: function (data) {
                                                //when found names sending them in datalist for suggetions
                                                //alert(data);
                                                var table = document.getElementById("suppliers");
                                                var row = table.insertRow(0);
                                                var cell1 = row.insertCell(0);
                                                var cell2 = row.insertCell(1);
                                                var cell3 = row.insertCell(2);
                                                var cell4 = row.insertCell(3);
                                                var cell5 = row.insertCell(4);
                                                cell1.innerHTML = "Supplier Name";
                                                cell2.innerHTML = "Supplier Address";
                                                cell3.innerHTML ="Supplier Mobile No";
                                                cell4.innerHTML = "Supplier Added By";
                                                cell5.innerHTML = "Operation";
                                                var obj = JSON.parse(data);
                                                var datas=obj.supplier_data;
                                                var i=1;
                                                for (var key in datas) {
                                                    if (datas.hasOwnProperty(key)) {
                                                        //alert(datas[key].TrainName);
                                                        var row = table.insertRow(i);
                                                        var cell1 = row.insertCell(0);
                                                        var cell2 = row.insertCell(1);
                                                        var cell3 = row.insertCell(2);
                                                        var cell4 = row.insertCell(3);
                                                        var cell5 = row.insertCell(4);

                                                        cell1.innerHTML = ""+datas[key].supplier_Name;
                                                        cell2.innerHTML = ""+datas[key].supplier_address;
                                                        cell3.innerHTML = ""+datas[key].supplier_PhoneNo;
                                                        cell4.innerHTML = ""+datas[key].supplier_Entry_By;
                                                        cell5.innerHTML = "" +
                                                            "<button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i></button>\n" +
                                                            "<button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>\n" +
                                                            "<button class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o \"></i></button>\n"+
                                                            "";
                                                        i++;
                                                    }
                                                }

                                            }
                                        });
                                    </script>
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
