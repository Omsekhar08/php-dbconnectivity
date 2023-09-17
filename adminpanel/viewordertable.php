<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
     crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" 
  crossorigin="anonymous"></script>
<div id="ordersBtn" >
  <h2>Order Details</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ORDERS</th>
        <th>Customer</th>
        <th>Contact</th>
        <th>OrderDate</th>
        <th>DeleveryAddress</th>
        <th>Payment Method</th>
        <th>Order Status</th>
        <th>Payment Status</th>
        <th>More Details</th>
     </tr>
    </thead>
     <?php
    $conn=mysqli_connect('localhost','root','root','productsitems');
    $sql="SELECT * from orders";
      $result=$conn-> query($sql);
      
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
       <tr>
          <td><?=$row["orderid"]?></td>
          <td><?=$row["userid"]?></td>
          <td><?=$row["phoneno"]?></td>
          <td><?=$row["orderdate"]?></td>
          <td><?=$row["deliverydto"]?></td>
          <td><?=$row["paymentmethod"]?></td>
           <?php 
                if($row["orderstatus"]==0){
                            
            ?>
                <td><button class="btn btn-danger" onclick="ChangeOrderStatus('<?=$row['orderid']?>')">Pending </button></td>
            <?php
                        
                }else{
            ?>
                <td><button class="btn btn-success" onclick="ChangeOrderStatus('<?=$row['orderid']?>')">Delivered</button></td>
        
            <?php
            }
                if($row["paymentstatus"]==0){
            ?>
                <td><button class="btn btn-danger"  onclick="ChangePay('<?=$row['orderid']?>')">Unpaid</button></td>
            <?php
                        
            }else if($row["paymentstatus"]==1){
            ?>
                <td><button class="btn btn-success" onclick="ChangePay('<?=$row['orderid']?>')">Paid </button></td>
            <?php
                }
            ?>
              
        <td><a class="btn btn-primary openPopup" data-href="./adminView/viewEachOrder.php?orderID=<?=$row['orderid']?>" href="#;">View</a></td>
        </tr>
    <?php
            
        }
      }
    ?>
     
  </table>
   
</div>
 
<div class="modal fade" id="viewModal" role="dialog">
    <div class="modal-dialog modal-lg">
  
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Order Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="order-view-modal modal-body">
        
        </div>
      </div> 
    </div> 
  </div>
<script>
     
    $(document).ready(function(){
      $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
    
        $('.order-view-modal').load(dataURL,function(){
          $('#viewModal').modal({show:true});
        });
      });
    });
 </script>
 </body>
</html>