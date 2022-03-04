<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <title>Suphan Buri Project</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Sarabun"
    />
    <style>
      body {
        font-family: "Sarabun";
        background-color: #fdf2e7;
      }
      #container {
        box-shadow: 6px 4px 8px 6px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
      #header {
        height: 160px;
        background-image: url("https://spbjc.coj.go.th/th/file/get/file/20201008d41d8cd98f00b204e9800998ecf8427e145656.png");
        background-size:100%;
      }
      #sidebar {
        background-color: #f1f1f1;
        padding: 0px;
      }
      #content {
        padding: 10px;
        background-color: #F5F5F5;
      }
      #footer {
        height: 180px;
        padding: 50px;
        background-color: #C0E4F6;
        border-radius: 0 0 15px 15px;
      }
      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 100%;
        background-color: #f1f1f1;
      }
      li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
      }
      /* Change the link color on hover */
      li a:hover {
        background-color: #555;
        color:#FFFFFF;
      }
      p{
        margin-top: 10px;
      }
    </style>
  </head>
  <body style="background-color:#E3EBFD">
    <!-- คอนเทนเนอร์ -->
    <div class="container">
      <div id="container">
      <div class="row">
        <div class="col-12" id="header">
          <!-- เฮดเดอร์ -->
        </div>
      </div>
      <div class="row">
        <div class="col-2" id="sidebar">
          <!-- ไซด์บาร์ -->
          <ul>
            <li><a href="https://lsw-56411.herokuapp.com/website.php"><div id="font1"><B>หน้าแรก</B></a></li>
            <li><a href="https://lsw-56411.herokuapp.com/page1.php"><div id="font1"><B>แหล่งท่องเที่ยว</B></a></li> 
            <li><a href="https://lsw-56411.herokuapp.com/page2.php"><div id="font1"><B>ประเพณีและวัฒนธรรม</B></a></li> 
            <li><a href="https://lsw-56411.herokuapp.com/page3.php"><div id="font1"><B>อาหารประจำท้องถิ่น</B></a></li> 
            <li><a href="https://lsw-56411.herokuapp.com/page4.php"><div id="font1"><B>ผู้จัดทำ</B></a></li>
         </ul>
        </div>
        <div class="col-10" id="content">
          <!-- คอนเท้นต์ -->
          <h4>
            <font size=5><B>อารหารประจำท้องถิ่น</B></font>
         </h4><br>
          <h5>
            <B>1.ขนมสาลี่สุพรรณ</B>
          </h5><br>
        <center><img src="page3.1.png" class="img-fluid rounded"></center>
          <br>
          <h5>
            <B>2.ปลาสลิดดอนกำยาน</B> 
          </h5><br>
               <center><img src="page3.2.png" class="img-fluid rounded"></center>
          <br>
          <h5>
            <B>3.น้ำตาลสามชุก</B>
          /h5><br>
               <center><img src="page3.3.png" class="img-fluid rounded"></center>
          <br>
          <h5>
            <B>4.ปลาม้า บางปลาม้า</B>
          </h5><br>
               <center><img src="page3.4.png" class="img-fluid rounded"></center>
          <br>
          <h5>
            <B>5.ปลาร้าสองพี่น้อง</B>
          </h5><br>
               <center><img src="page3.5.png" class="img-fluid rounded"></center>
          <br>
          <h5>
            <B>6.เห็ดฟางอู่ทอง</B>
          </h5><br>
               <center><img src="page3.6.png" class="img-fluid rounded"></center>
          <br>
          <h5>
            <B>7.แห้วศรีประจันต์</B>
          </h5><br>
               <center><img src="page3.7.png" class="img-fluid rounded"></center>
          <br>
      </div>
     </div>  
     <div class="row">
        <div class="col-12" id="footer">
          <!-- ฟุตเตอร์ -->
          <center>
            <h3><B>ผลงานนักเรียน</B></h3>
            <hr />
            <p>รายวิชา WebApplication</p>
            <p>โรงเรียนหล่มสักวิทยาคม</p>
          </center>
        </div>
       </div>
     </div>
   </div>   
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
