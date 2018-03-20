<!DOCTYPE html>
<html>
<?php require_once('config.php'); ?>
<?php require_once('session_check.php'); ?>
<head>
    <title><?= $page_type; ?> | <?= SITE_TITLE; ?></title>
	<?php include("top-header.php"); ?>
</head>

<body class="mini-navbar">

    <div id="wrapper">
    <!-- Menu -->
	<?php include('left-menu.php'); ?>
        <div id="page-wrapper" class="gray-bg">
        <!-- Header -->
		<?php include('top-navbar.php'); ?>
            <!--<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add New Product</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="active">
                            <strong>Add New Product</strong>
                        </li>
                        
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>-->
        <div class="wrapper wrapper-content animated fadeInRight">
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Add Product Information</h5>
                           
                        </div>
                        <div class="ibox-content">

                            <form method="POST" class="form-horizontal" id="frm1" enctype="multipart/form-data">
                            <input type="hidden" name="page_type" value="<?= $page_type; ?>"/>
								<div class="form-group"><label class="col-sm-2 control-label ">Select Category :</label>
                                    <div class="col-sm-10">
										<select class="form-control" id="productcat" name="productcat" data-live-search="true" >
											<option value="">-Select Category-</option>
											<?php
												$sel_category=mysqli_query($con, "select * from product_type where PT_isDeleted=0 order by PT_name ");
												if(mysqli_num_rows($sel_category)>0)
													{
														$i=1;
														while($fet_category=mysqli_fetch_array($sel_category))
														{
															?>
															<option value="<?php echo $fet_category["PT_ID"];?>" data-item-id="<?php echo $fet_category["PT_name"];?>"><?php echo strtoupper($fet_category["PT_name"]);?> </option>
															<?php
														}
													}
											?>
										</select>
										<span class="help-block m-b-none"></span></div>
                                </div>
								<div class="form-group"><label class="col-sm-2 control-label " >Product :</label>
                                    <div class="col-sm-10">
										<select class="form-control chosen-select " id="producttype" name="producttype" data-live-search="true" >
											<option value="">-Select Product-</option>
										</select>
										<span class="help-block m-b-none"></span></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Product Name:</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" id="productname" name="productname" placeholder="Enter Product Name here.." required ></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Min Price:</label>
                                    <div class="col-sm-10"><input type="number" class="form-control" id="minprice" name="minprice" placeholder="Enter Min Product Price here... " required ></div>
                                </div>
								<div class="form-group"><label class="col-sm-2 control-label">Max Price:</label>
                                    <div class="col-sm-10"><input type="number" class="form-control" id="maxprice" name="maxprice" placeholder="Enter Max Product Price here... " required ></div>
                                </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Sell Quantity:</label>
                                    <div class="col-sm-10"><input type="number" step="0.1"  class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity... " required ></div>
                                </div>
								<div class="form-group"><label class="col-sm-2 control-label">Product Specification:</label>
                                    <div class="col-sm-10">
									<textarea class="form-control" id="Specification" name="Specification" placeholder="Enter Product Specification here.." ></textarea>
									</div>
                                </div>
								<div class="form-group"><label class="col-sm-2 control-label">Product Photo:</label>
                                    <div class="col-sm-10">
										<input type="file" accept="image/jpeg,image/pjpeg,image/bmp,image/gif,image/jpeg,image/png" name="product_image[]" id="product_image" multiple="true"/>
									</div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>								
                                </div>
									<p id="error"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>

        </div>
        </div>
        <?php include("bot-footer.php"); ?>
<script>
$("select[name=productcat]").on("change", function(event){
    //$("#brand_name").select2("val", "");
    var category_id = $('option:selected', this).attr("data-item-id");
    console.log(category_id);
    $.post('global_select.php',{page_type : "<?= $page_type; ?>", get : "category", value: category_id},function(res){
        $('#producttype').html(res);
        console.log(res);
    });
});

$("#frm1").submit(function(event){
    event.preventDefault();
    swal({
        title: "Save this Product",
        type: "info",
        showCancelButton: true,
        confirmButtonColor: '#8CD4F5',
        confirmButtonText: 'Save',
        closeOnConfirm: true
    },
    function( confirmed ) {
        if( confirmed ){
            $('input[type="submit"]').attr('disabled',true);                  
            $.post('global_insert.php', $("#frm1").serialize(), function(data) {
                res = JSON.parse(data);
                if(res.status == 'Success'){
                    swal("Save", "saved successfully.", "success");
                } else {
                    $('input[type="submit"]').attr('disabled',false);
                    swal("Error!", "couldn't be saved.", "error");
                }
                event.preventDefault();
            });
            return true;
        } else {
            return false;
        }
    });
});	
</script>
</body>

</html>
