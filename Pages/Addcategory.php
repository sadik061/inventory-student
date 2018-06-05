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
                                                <form class="form-horizontal style-form"  method="post" role="form"  action="../Api/add_catagory.php">
                                                    <div class="form-group">
                                                        <label class="col-sm-1 col-sm-2 control-label">Category</label>
                                                        <div class="col-sm-2">
                                                            <input id="main_catagory" name="main_catagory" type="text" class="form-control" >
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>

                                                    </div>
                                                </form>
                                                <h3>Sub-Category</h3>
                                                <small>Choose main category and enter a sub-category</small>
                                                    <form class="form-horizontal style-form"  method="post" role="form"  action="../Api/add_sub_catagory.php">
                                                    <div class="form-group">
                                                        <label class="col-sm-1 col-sm-2 control-label">Category</label>
                                                        <div class="col-sm-2">
                                                            <select id="sub_main_catagory" name="sub_main_catagory" class="form-control col-sm-2">
                                                                <option selected>Choose...</option>

                                                            </select>
                                                        </div>
                                                        <label class="col-sm-1 col-sm-2 control-label" style="padding: .5%;">Sub-Category</label>
                                                        <div class="col-sm-2">
                                                            <input id="sub_catagory" name="sub_catagory" type="text" class="form-control">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                <h3>Brand</h3>
                                                <small>Choose main and sub category and enter a brand name</small>
                                                        <form class="form-horizontal style-form"  method="post" role="form"  action="../Api/add_brand.php">
                                                    <div class="form-group">
                                                        <label class="col-sm-1 col-sm-2 control-label">Category</label>
                                                        <div class="col-sm-2">
                                                            <select id="brand_main_catagory" name="brand_main_catagory" class="form-control col-sm-2">
                                                                <option selected>Choose...</option>
                                                            </select>
                                                        </div>
                                                        <label class="col-sm-1 col-sm-2 control-label" style="padding: .5%;">Sub-Category</label>
                                                        <div class="col-sm-2">
                                                            <select id="brand_sub_catagory" name="brand_sub_catagory" class="form-control col-sm-2">
                                                                <option selected>Choose...</option>
                                                            </select>
                                                        </div>
                                                        <label class="col-sm-1 col-sm-2 control-label">Brand</label>
                                                        <div class="col-sm-2">
                                                            <input type="text" id="brand_name" name="brand_name" class="form-control">
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
    <script>

        $(document).ready(function() {

            var sub_main_catagory = document.getElementById("sub_main_catagory");
            var brand_main_catagory = document.getElementById("brand_main_catagory");
            var brand_sub_catagory = document.getElementById("brand_sub_catagory");

            //for adding main catagory in subcatagory and brand name
           // alert("kh");
            $.ajax({
                type: 'POST',
                url: '../Api/get_catagory.php',
                async:false,
                data: {
                },
                error: function (xhr, status) {
                    alert(status);
                },
                success: function(data) {
                    //when found names sending them in datalist for suggetions
                    //alert(data);
                    var obj = JSON.parse(data);

                    var datas=obj.catagory_data;

                    //for catagory adding in sub catagory
                    for (var key in datas) {
                        if (datas.hasOwnProperty(key)) {
                            var option = document.createElement("option");
                            option.text = datas[key].catagory_Name;
                            option.value=datas[key].catagory_id;
                            sub_main_catagory.add(option);


                        }
                    }
                    //for catagory adding in brand
                    for (var key in datas) {
                        if (datas.hasOwnProperty(key)) {
                            var option = document.createElement("option");
                            option.text = datas[key].catagory_Name;
                            option.value=datas[key].catagory_id;

                            brand_main_catagory.add(option);

                        }
                    }

                }
            });
            $.ajax({
                type: 'POST',
                url: '../Api/get_sub_catagory.php',
                async:false,
                data: {
                },
                error: function (xhr, status) {
                    alert(status);
                },
                success: function(data) {
                    //when found names sending them in datalist for suggetions
                    //alert(data);
                    var obj = JSON.parse(data);

                    var datas=obj.sub_catagory_data;

                    //for sub catagory adding in brand
                    for (var key in datas) {
                        if (datas.hasOwnProperty(key)) {
                            var option = document.createElement("option");
                            option.text = datas[key].sub_catagory_Name;
                            option.value=datas[key].sub_catagory_id;

                            brand_sub_catagory.add(option);

                        }
                    }

                }
            });

            //on catagory option selected
            $("#brand_main_catagory").change(function() {
                var select = $("#brand_main_catagory option:selected").val();

                $('#brand_sub_catagory')
                    .empty()
                    .append('<option selected>Choose...</option>');


               // alert(select);
                $.ajax({
                    type: 'POST',
                    url: '../Api/get_sub_catagory_by_catagory.php',
                    async:false,
                    data: {
                        main_catagory:select
                    },
                    error: function (xhr, status) {
                        alert(status);
                    },
                    success: function(data) {
                        //when found names sending them in datalist for suggetions
                        //alert(data);
                        var obj = JSON.parse(data);

                        var datas=obj.sub_catagory_data;

                        //for sub catagory adding in brand
                        for (var key in datas) {
                            if (datas.hasOwnProperty(key)) {
                                var option = document.createElement("option");
                                option.text = datas[key].sub_catagory_Name;
                                option.value=datas[key].sub_catagory_id;
                                brand_sub_catagory.add(option);

                            }
                        }

                    }
                });
            });

        });

    </script>
</section>
<?php include '../Templates/Footer.php' ?>
    </body>
</html>
