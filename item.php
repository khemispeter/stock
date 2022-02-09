<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<title>
		item
	</title>
</head>
<body>




<div class="header">
        <div class="header_inventroy">Stock Management</div>


 <div><a href="index.php" class="header_welcome">Logout</a></div>
      </div>

 <div class="body">
      <div class="leftSidebar">
        
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










<div>
  <div class="positionting">
      <div class="rightSidebar">
        <div class="right_top">ItemsDetails</div>

     

<form method="POST" action="additem.php">
        <div class="leftform">
          
<div class="sidedform">
          <div class="tworow">
            <label>ItemNumber</label>
            <input 
             type="text"
              placeholder=""
               size="30" 
               name="itemnumber"
                required 
                />
          </div>

          <div class="tworow">
            <label>ProductID</label>
              <input 
                type="text"
                placeholder="productid"
                size="30"
                required
                name="productid"
              />

          </div>
          <div class="tworow">
            <label>ItemName</label>
            <input
             type="text" 
             placeholder="itemname" 
             size="30" 
             required
              name="itemname"
              />
          </div>
          <div class="rightform"> </div>
      

        </div>

<div class="sidedform">

      
          <div class="tworow">
            <label>Status</label>
              <select class="selectoption">
                <option></option>
                <option>Active</option>
                <option>Disable</option>
              </select>

          </div>




                    <textarea 
            rows="5"
            cols="75"
            placeholder="Items describtion"
            required name="describtion"
          ></textarea>

     




</div>

<div class="sidedform">
        
          <div class="tworow">
                          <label>Quantity</label>
              <input 
              type="text"
               placeholder=""
                size="30" 
                required 
                name="quantity"
                />

          </div>
          <div class="tworow">
            <label>UnitPrice</label>
              <input 
              type="text" 
              placeholder="0"
               size="30"
                required
                name="unitprice"
                />

          </div>
          <div class="tworow">
           <label>TotalStock</label>
              <input
               type="text" 
               placeholder=""
                size="30" 
                name="totalstock" 
                />

          </div>
        
        </div>
     </form>

     <form class="butform">
      <div class="buttons">
        <button class="greens">Additem</button>
        <button class="blues">Update</button>
        <button class="reds">Delete</button>
        <button >Clear</button>
      </div>
    </form>

   




</div>




</body>

</html>