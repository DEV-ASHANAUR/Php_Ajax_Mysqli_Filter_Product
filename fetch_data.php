<?php
    $mysqli = new mysqli("localhost","root","","filter_product");

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }

    if(isset($_POST["action"])){
        $query = "SELECT * FROM `product` WHERE `product_status` = '1'";
        if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])){
            $query .= "AND product_price BETWEEN  '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."' ";
           
        }
        if(isset($_POST["brand"])){
            
            $brand_filter = implode("','", $_POST["brand"]);
            $query .="AND product_brand IN('".$brand_filter."') ";
        }
        if(isset($_POST["ram"])){
            $ram_filter = implode("','", $_POST["ram"]);
            $query .="AND product_ram IN('".$ram_filter."') ";
        }
        if(isset($_POST["storage"])){
            $storage_filter = implode("','", $_POST["storage"]);
            $query .=" AND product_storage IN('".$storage_filter."') ";
        }
        $result = $mysqli -> query($query);
        $output = '';
        if($result->num_rows>0){
            while($row = $result->fetch_object()){
                $output.='
                <div class="col-sm-4 col-lg-3 col-md-3">
                    <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:auto;">
                        <img src="img/'.$row->product_image.'" alt="" class="img-fluid text-center" >
                        <p align="center"><strong><a href="#">'.$row->product_name.'</a></strong></p>
                        <h4 style="text-align:center;" class="text-danger" >'.$row->product_price.'</h4>
                        <p>Camera : '.$row->product_camera.' MP<br />
                        Brand : '.$row->product_brand.' <br />
                        RAM : '.$row->product_ram.' GB<br />
                        Storage : '.$row->product_storage.' GB </p>
                    </div>
                </div>';
            }
        }else{
            $output = '<h2>No Data Found</h2>';
        }
        echo $output;

    }


    

















?>