
<div class="box" id="selection_ECE">
  <h2>BVCOE VIII semester
    <?php
        if(isset($_COOKIE['cls']))
        echo " ".$_COOKIE['cls'];
        if(isset($_COOKIE['p']))
        echo " ".$_COOKIE['p'];
        if(isset($_COOKIE['t']))
        echo " ".$_COOKIE['t'];
    ?>
  </h2>

<div id="oupts">
  <div style="font-family: Sans-serif;font-size: 16px;line-height: 25px;background-color: #ffffff;color: #000000;padding: 20px 10px;border-radius: 5px">
      <span id="ddate"></span> <span id="dayu"></span> <span id="tm"></span><br><br>
      Ongoing class-> <strong><span id="present_class"></span></strong><br>
      <span>Time Left-> <span id="time_left"></span></span><br>
      Next class-> <strong><span id="next_class"></span></strong><br>
      <br>
  </div>

  <script>
      //updating Date
      var d=new Date();
        document.getElementById('ddate').innerHTML=d.getDate()+"/"+d.getMonth()+1+"/"+d.getFullYear();
      //updating Time
			setInterval(update,1000);
			function update()
			{
				var d=new Date();
				document.getElementById('tm').innerHTML=d.getHours()+":"+d.getMinutes()+":"+d.getSeconds();
			}
      //Updating day
      switch (d.getDay()) {
        case 0:
          document.getElementById('dayu').innerHTML="Sunday";
          break;
        case 1:
          document.getElementById('dayu').innerHTML="Monday";
          break;
        case 2:
          document.getElementById('dayu').innerHTML="Tuesday";
          break;
        case 3:
          document.getElementById('dayu').innerHTML="Wednesday";
          break;
        case 4:
          document.getElementById('dayu').innerHTML="Thursday";
          break;
        case 5:
          document.getElementById('dayu').innerHTML="Friday";
          break;
        case 6:
          document.getElementById('dayu').innerHTML="Saturday";
          break;

        default:
          document.getElementById('dayu').innerHTML="Don't Know";
      }
  </script>
<div style="display: flex;">
        <div style="cursor:pointer;display: flex;margin: 20px;background-color: #bcbcbc;padding: 5px 7px 0px 7px;border-radius: 30px;width: 35%" onclick="show_inpts()">
          <img src="Images/settings.png" style="width: 30px;height: 30px"/>
          <div style="font-family: Sans-serif;color: #000000;font-size: 19px">Settings</div>
        </div>
        <div style="cursor:pointer;padding: 0px 10px;font-size:19px;color: #000000;background-color:#bcbcbc;border-radius: 30px;margin: 20px;width: 35%;text-align: center;font-family:Sans-serif" onclick="notice_updates()">
          <span>Updates</span>
        </div>



</div>
  <script>
      var p=0;
      function show_inpts()
      {

          if(p==0)
          {
          document.getElementById("inpts").style.display="block";
          p=1;
          }
          else if(p==1)
          {
          document.getElementById("inpts").style.display="none";
          p=0;
          }
      }
  </script>
</div><!--oupts Ends-->
<?php
if(!isset($_COOKIE['cls']))
{
  echo '
    <script>
        document.getElementById("oupts").style.display="none";
    </script>
  ';
}
?>

<div id="inpts">
<?php include "TTform.php"; ?>
</div><!--inpts Ends-->
<?php
  if(isset($_COOKIE['cls']))
  {
    echo '
      <script>
          document.getElementById("inpts").style.display="none";
      </script>
    ';
  }
 ?>

</div><!--Box Ends-->

<div class="box" id="time_table">
  <h2 style="text-align: center">Time Table
    <?php
    if(isset($_COOKIE['cls']))
    echo " ".$_COOKIE['cls'];
    if(isset($_COOKIE['p']))
    echo " ".$_COOKIE['p'];
    if(isset($_COOKIE['t']))
    echo " ".$_COOKIE['t'];
    ?>
  </h2>

  <?php
if(!isset($_COOKIE['cls']))
{

      echo "Select Class first.";
}

else
        {
            switch ($_COOKIE["cls"])
            {
              case 'ECE1':
                include 'TimeTable/ECE1.php';
                break;

              case 'ECE2':
                include 'TimeTable/ECE2.php';
                break;

              case 'ECE3':
                include 'TimeTable/ECE3.php';
                break;

              default:
                echo "Empty Form.";
                break;
            }

        }
?>
</div>
<?php
  if(isset($_COOKIE['p']))
  {
    switch ($_COOKIE['p'])
    {
      case 'P1':
            echo '
            <script>
              setInterval(remove,1000);
              function remove()
              {
                var i;
                var d=document.getElementsByClassName("p2");
                for(i=0;i<d.length;i++)
                {
                  d[i].innerHTML="";
                }
                var df=document.getElementsByClassName("pp2");
                for(i=0;i<df.length;i++)
                {
                  df[i].style.backgroundColor="#888888";
                }

                d=document.getElementsByClassName("p3");
                for(i=0;i<d.length;i++)
                {
                  d[i].innerHTML="";
                }
                df=document.getElementsByClassName("pp3");
                for(i=0;i<df.length;i++)
                {
                  df[i].style.backgroundColor="#888888";
                }

                d=document.getElementsByClassName("pp1");
                for(i=0;i<d.length;i++)
                {
                  d[i].style.backgroundColor="#54008a";
                }
              }
          </script>
            ';
        break;

      case 'P2':
      echo '
            <script>
            setInterval(remove,1000);
            function remove()
            {
                var i;
                var d=document.getElementsByClassName("p1");
                for(i=0;i<d.length;i++)
                {
                  d[i].innerHTML="";
                }
                var df=document.getElementsByClassName("pp1");
                for(i=0;i<df.length;i++)
                {
                  df[i].style.backgroundColor="#888888";
                }

                d=document.getElementsByClassName("p3");
                for(i=0;i<d.length;i++)
                {
                  d[i].innerHTML="";
                }
                df=document.getElementsByClassName("pp3");
                for(i=0;i<df.length;i++)
                {
                  df[i].style.backgroundColor="#888888";
                }

                d=document.getElementsByClassName("pp2");
                for(i=0;i<d.length;i++)
                {
                  d[i].style.backgroundColor="#54008a";
                }
              }

          </script>
            ';
        break;

      case 'P3':
      echo '
              <script>
              setInterval(remove,1000);
              function remove()
              {
                  var i;
                  var d=document.getElementsByClassName("p2");
                  for(i=0;i<d.length;i++)
                  {
                    d[i].innerHTML="";
                  }
                  var df=document.getElementsByClassName("pp2");
                  for(i=0;i<df.length;i++)
                  {
                    df[i].style.backgroundColor="#888888";
                  }

                  d=document.getElementsByClassName("p1");
                  for(i=0;i<d.length;i++)
                  {
                    d[i].innerHTML="";
                  }
                  df=document.getElementsByClassName("pp1");
                  for(i=0;i<df.length;i++)
                  {
                    df[i].style.backgroundColor="#888888";
                  }
                  d=document.getElementsByClassName("pp3");
                  for(i=0;i<d.length;i++)
                  {
                    d[i].style.backgroundColor="#54008a";
                  }
                }
            </script>
              ';
        break;

      default:

        break;
    }
  }

  if(isset($_COOKIE['t']))
  {
    switch ($_COOKIE['t'])
    {
      case 'T1':
            echo '
            <script>
            setInterval(removet,1000);
            function removet()
            {
                var i;
                var d=document.getElementsByClassName("T2");
                for(i=0;i<d.length;i++)
                {
                  d[i].innerHTML="";
                }
                var df=document.getElementsByClassName("TT2");
                for(i=0;i<df.length;i++)
                {
                  df[i].style.backgroundColor="#888888";
                }
                var d=document.getElementsByClassName("TT1");
                for(i=0;i<d.length;i++)
                {
                  d[i].style.backgroundColor="#debc00";
                }
              }
            </script>
            ';
        break;

      case 'T2':
      echo '
            <script>
            setInterval(removet,1000);
            function removet()
            {
                var i;
                var d=document.getElementsByClassName("T1");
                for(i=0;i<d.length;i++)
                {
                  d[i].innerHTML="";
                }
                var df=document.getElementsByClassName("TT1");
                for(i=0;i<df.length;i++)
                {
                  df[i].style.backgroundColor="#888888";
                }
                var d=document.getElementsByClassName("TT2");
                for(i=0;i<d.length;i++)
                {
                  d[i].style.backgroundColor="#debc00";
                }
              }
          </script>
            ';
        break;



      default:

        break;
    }
  }
?>
