<?php
    include 'main.php';
    $obj = new Main();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filter Product</title>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap-min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ul.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-4 mb-4 head">Advance Ajax Product Filters in PHP</h2>
        <div class="row">
            
            <div class="col-3">
                <div class="list-group mt-2 mb-4">
                    <h2 class="title">price</h2>
                    <input type="hidden" id="hidden_minimum_price" value="0">
                    <input type="hidden" id="hidden_maximum_price" value="65000" />
                    <p id="price_show">1000 - 65000</p>
                    <div id="price_range"></div>
                </div>
                <div class="list-group">
                    <h3 class="title">Brand</h3>
                    <div style="height: 300px; overflow-y: auto; overflow-x: hidden;">
                        <?php
                            $brand = $obj->brand();
                            if($brand->num_rows>0){
                                while($brand_r = $brand->fetch_object()){
                                    ?>
                                        <div class="list-group-item checkbox">
                                            <label><input type="checkbox" class="common_selector brand" value="<?php echo $brand_r->product_brand; ?>" > <?php echo $brand_r->product_brand; ?></label>    
                                        </div>
                                    <?php
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="list-group">
                    <h3 class="title">RAM</h3>
                    <?php
                            $ram = $obj->ram();
                            if($ram->num_rows>0){
                                while($ram_r = $ram->fetch_object()){
                                    ?>
                                        <div class="list-group-item checkbox">
                                            <label><input type="checkbox" class="common_selector ram" value="<?php echo $ram_r->product_ram; ?>" > <?php echo $ram_r->product_ram; ?> GB</label>    
                                        </div>
                                    <?php
                                }
                            }
                        ?>
                </div>

                <div class="list-group mt-4 mb-4">
                    <h3 class="title">Internal Storage</h3>
                    <?php
                            $Storage = $obj->Storage();
                            if($Storage->num_rows>0){
                                while($Storage_r = $Storage->fetch_object()){
                                    ?>
                                        <div class="list-group-item checkbox">
                                            <label><input type="checkbox" class="common_selector storage" value="<?php echo $Storage_r->product_storage; ?>" > <?php echo $Storage_r->product_storage; ?> GB</label>    
                                        </div>
                                    <?php
                                }
                            }
                        ?>
                </div>
            </div>
            <!-- product area -->
            <div class="col-md-9">
                <div class="row filter_data"> 

                </div>
            </div>
        </div>
    </div>
    <!-- js here -->
    <script>
        $(document).ready(function(){
            filter_data();

            function filter_data(){
                $('.filter_data').html('');
                var action = 'fetch_data';
                var minimum_price = $('#hidden_minimum_price').val();
                var maximum_price = $('#hidden_maximum_price').val();
                // alert(minimum_price +  maximum_price);
                var brand = get_filter('brand');
                var ram = get_filter('ram');
                var storage = get_filter('storage');
                $.ajax({
                    url:'fetch_data.php',
                    method:'POST',
                    data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram, storage:storage},
                    success:function(data){
                        $('.filter_data').html(data);
                    }
                });
            }
            //get filter function 
            function get_filter(class_name)
            {
                var filter = [];
                $('.'+class_name+':checked').each(function(){
                    filter.push($(this).val());
                });
                return filter;
            }
            //action function 
            $('.common_selector').click(function(){
                filter_data();
                //alert('ok');
            });

            // range slider
            $('#price_range').slider({
                range:true,
                min:1000,
                max:65000,
                values:[1000, 65000],
                step:500,
                stop:function(event, ui)
                {
                    $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                    $('#hidden_minimum_price').val(ui.values[0]);
                    $('#hidden_maximum_price').val(ui.values[1]);
                    filter_data();
                }
            });
        });
        
    </script>
</body>
</html>