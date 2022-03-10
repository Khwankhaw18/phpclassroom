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
        height: 240px;
        background-image: url("https://scontent.fphs1-1.fna.fbcdn.net/v/t1.15752-9/275340428_1125352158230735_244918140109870519_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=ae9488&_nc_ohc=OFs6-dFNmJkAX-KJQhJ&_nc_ht=scontent.fphs1-1.fna&oh=03_AVKezBN5KoLLyjGLbK_FYQUOnRbySvzGbYUGf5uSZlER1A&oe=624FF75D");
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
            <br><center><font size=5><B>ผู้จัดทำ</B></font></center></br>
         </h4>
          <h5>
            <center><B>1.นายปกป้อง สงวนศิลป์ ม.5/13 เลขที่4</B></center>
          </h5><br>
        <center><img src="page4.1.png" class="img-fluid rounded"></center>
          <br>
               <h5>
                 <center><B>2.นางสาวขวัญข้าว เบ้าสกุล ม.5/13 เลขที่18</B></center>
          </h5><br>
               <center><img src="page4.2.png" class="img-fluid rounded"></center>
          <br>
         
          <h5>
            <center><B>3.นางสาวชิษณุชา กระจ่างกิจใจชุ่ม ม.5/13 เลขที่19</B></center>
            </h5><br>
               <center><img src="page4.3.png" class="img-fluid rounded"></center>
          <br>
          
          <h5>
            <center><B>4.นางสาวธัญวรัตม์ รอดน้อย ม.5/13 เลขที่21</B></center>
          </h5><br>
               <center><img src="page4.4.png" class="img-fluid rounded"></center>
          <br>
         
          <h5>
            <center><B>5.นางสาวเหมือนพิมพ์ ยวงคำ ม.5/13 เลขที่26</B></center>
          </h5><br>
               <center><img src="page4.5.png" class="img-fluid rounded"></center>
          <br>
          <h5>
            <center><B>6.นางสาวญาณิศา อารีสุก ม.5/13 เลขที่29</B></center>
          </h5><br>
               <center><img src="page4.6.png" class="img-fluid rounded"></center>
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
