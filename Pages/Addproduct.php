<?php include '../Templates/Header.php'; ?>
<body>
<section id="container" >
    <?php include '../Templates/navbar.php' ?>
    <?php include '../Templates/sidebar.php' ?>
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Add new product</h3>

            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Product Details</h4>
                        <form class="form-horizontal style-form" method="get">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Default</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Help text</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                    <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Rounder</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control round-form">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Input focus</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="focusedInput" type="text" value="This is focused...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Disabled</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Placeholder</label>
                                <div class="col-sm-10">
                                    <input type="text"  class="form-control" placeholder="placeholder">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password"  class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Static control</label>
                                <div class="col-lg-10">
                                    <p class="form-control-static">email@example.com</p>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>
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
