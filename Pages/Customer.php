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
                            <li role="presentation" class="active"><a href="#Addnew" aria-controls="Addnew" role="tab" data-toggle="tab">Add New Customer</a></li>
                            <li role="presentation"><a href="#list" aria-controls="list" role="tab" data-toggle="tab">List</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="Addnew">
                                <div class="content-panel">
                                    <form class="form-horizontal" method="post" role="form"  action="../Api/add_customer.php">
                                        <div class="col-md-12" style="background-color:  #fbfafa;padding-top:  20px; padding-bottom: 15px;">
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="col-sm-2 col-sm-2 control-label">Name*</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="name" name="name" required>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 col-sm-2 control-label">Company Name*</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="companyName" name="companyName" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 col-sm-2 control-label">Contact Title</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="title" name="title" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 col-sm-2 control-label">Email*</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="email" name="email" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 col-sm-2 control-label">Contact Type*</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="contactType" name="contactType" required>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-12" style="border: 1px; border: #0a0b0b;     padding-top: 20px;">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-sm-2 col-sm-2 control-label" style="width: 9%;">Mobile*</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control" id="mobile" name="mobile" required>
                                                    </div>
                                                    <label class="col-sm-2 col-sm-2 control-label" style="width: 9%;">Phone</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control" id="phone" name="phone">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12" style="border: 1px; border: #0a0b0b;     padding-top: 20px;">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-sm-2 col-sm-2 control-label" style="width: 9%;">Address*</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="address" name="address" required>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>



                                        <button type="submit" class="btn btn-primary" style="margin-left: 28px; margin-top: 2%">Add Customer</button>
                                    </form>
                                </div>
                            </div>


                            <div role="tabpanel" class="tab-pane" id="list"><div class="content-panel">
                                    <table class="table table-striped table-advance table-hover" id="suppliers">
                                        <h4><i class="fa fa-angle-right"></i> All Customer</h4>
                                        <hr>

                                    </table>
                                    <script>
                                        //alert("loaded");
                                        $.ajax({
                                            type: 'POST',
                                            url: '../Api/get_customer.php',
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
                                                cell1.innerHTML = "Customer Name";
                                                cell2.innerHTML = "Customer Address";
                                                cell3.innerHTML ="Customer Mobile No";
                                                cell4.innerHTML = "Customer Added By";
                                                cell5.innerHTML = "Operation";
                                                var obj = JSON.parse(data);
                                                var datas=obj.customer_data;

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

                                                        cell1.innerHTML = ""+datas[key].customer_Name;
                                                        cell2.innerHTML = ""+datas[key].customer_address;
                                                        cell3.innerHTML = ""+datas[key].customer_PhoneNo;
                                                        cell4.innerHTML = ""+datas[key].customer_Entry_By;
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
