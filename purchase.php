<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
 
	<title>purchasae</title>
</head>
<body>





<div class="header">
        <div class="header_inventroy">Stock Management</div>

      

        <div><a href="index.php" class="header_welcome">Logout</a></div>
      </div>

 <div class="body">
      <div class="leftSidebar">
        

   
        </ul>
        <div class="menus">
          <div>
            <a href="item.php">item</a>
          </div>
          <div>
            <a href="purchase.php">purchase</a>
          </div>
          <div>
            <a href="vendor.php">vendor</a>
          </div>
            <div>
            <a href="sales.php">sale</a>
          </div>
          <div>
            <a href="customer.php">customer</a>
          </div>
          <div>
            <a href="">search</a>
          </div>
          <div>
            <a href="">report</a>
          </div>
          <div><a href="dash.php">dashboard</a></div>
      </div>
      </div>
    </div>











 <div className="vendor">
  <div class="positionting">
      <div class="right_top">PurchaseDetails</div>
      <form>
        <div class="leftform">
<div class="sidedform">
          <div class="tworow">
            <label>ItemNumber</label>
            <input
              type="text" 
              placeholder="" 
              size="30" 
              name="itemnumber"
              />
          </div>

          <div class="tworow">
            <label>PurcahseDate</label>
           <input 
           type="date"
            name="PurcahseDate" 
            size="30"
             required
              name="purchasedate" 
              />
          </div>

          <div class="tworow">
            <label>PurchaseID</label>
            <input 
            type="text" 
            placeholder="" 
            size="30" 
            required 
            name="purchaseid"
            />
          </div>
          <div class="rightform"> </div>
      

        </div>

<div class="sidedform">

      
          <div class="tworow">
            <label>ItemName</label>
            <input 
              type="text"
              placeholder="ItemName"
              name="Itemname"
              required
            />
          </div>
          <div class="tworow">
            <label>VendorName</label>
            <input
              type="text"
              placeholder="VendorName"
              name="vendorname"
              required
            />
          </div>
          <div class="tworow">
            <label>Quantity</label>
            <input 
            type="text" 
            placeholder="Quantity" 
            name="quantity"
             required />
          </div>
     
</div>

<div class="sidedform">
        
          <div class="tworow">
            <label>UnitPrice</label>
            <input 
            type="text" 
            name="unitprice" 
            required />
          </div>
          <div class="tworow">
            <label>totol cost</label>
            <input 
            type="text" 
            name="totalcost"
            />
          </div>
          
        
        </div>
     </form>

     <form class="butform">
      <div class="buttons">
        <button class="greens">AddPurchase</button>
        <button class="blues">Update</button>
       
        <button >Clear</button>
      </div>
    </form>


    </div>
</div>

</body>
</html>