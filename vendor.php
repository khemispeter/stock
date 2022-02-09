<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
  
	<title>vendor</title>
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













 <div class="vendor">
  <div class="positionting">

      <div class="right_top">VendorDetails</div>

      <form>
        <div class="leftform">
          
<div class="sidedform">
          <div class="tworow">
            <label>FullName</label>
            <input  type="text" placeholder="0" size="30" name="fullname"></input>
          </div>

          <div class="tworow">
            <label>Status</label>
            <select class="selectoption">
              <option>Active</option>
              <option>Disabled</option>
            </select>
          </div>
          <div class="tworow">
            <label>VendorID</label>
            <input type="text" placeholder="0" size="30" required name="vendorid"></input>
          </div>
          <div class="rightform"> </div>
      

        </div>

<div class="sidedform">

      
          <div class="tworow">
            <label>MobilePhone</label>
            <input 
              type="number"
              placeholder="mobilenumber"
              name="mobilephone"
              required
            />
          </div>
          <div class="tworow">
            <label>CellPhone</label>
            <input
              type="number"
              placeholder="Cellphone"
              name="CellPhone"
              required
            />
          </div>
          <div class="tworow">
            <label>Email</label>
            <input type="text" placeholder="email" name="email" required />
          </div>
     
</div>

<div class="sidedform">
        
          <div class="tworow">
            <label>State</label>
            <select class="selectoption">
              <option>select the state your from</option>
              <option>Central Equatoria</option>
              <option>Western Equatoria</option>
              <option>Eastern Equatoria</option>
              <option>Lake state</option>
              <option>Upper Nile</option>
              <option>Unity</option>
              <option>Northern Bar-el-gahzel</option>
              <option>Western Bar-el-Gahzel</option>
              <option>Jongolei</option>
              <option>Warrap</option>
            </select>
          </div>
          <div class="tworow">
            <label>City</label>
            <select class="selectoption">
              <option>select the city </option>
              <option>Juba</option>
              <option>Yambio</option>
              <option>Torit</option>
              <option>Rumbek</option>
              <option>Malakal</option>
              <option>Bentiue</option>
              <option>Aweil</option>
              <option>Wau</option>
              <option>Bor</option>
              <option>Kuajok</option>
            </select>
          </div>
          <div class="tworow">
            <label>Address</label>
            <input type="text" placeholder="address" name="address" required />
          </div>
        
        </div>
     </form>

     <form class="butform">
      <div class="buttons">
        <button class="greens">AddVendor</button>
        <button class="blues">Update</button>
        <button class="reds">Delete</button>
        <button >Clear</button>
      </div>
    </form>


    </div>
  </div>

</body>
</html>