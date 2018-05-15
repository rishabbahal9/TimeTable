<table class="tbl">
          <tr>
                <th>Days</th>
                <th>8:40-9:35</th>
                <th>9:35-10:30</th>
                <th>10:30-11:25</th>
                <th>11:25-12:20</th>
                <th>12:20-12:50</th>
                <th>12:50-1:45</th>
                <th>1:45-2:40</th>
                <th>2:40-3:35</th>
                <th>3:35-4:30</th>
          </tr>

          <tr>
                <th class="TTD">Monday</th>
                <td class="pp1" id="10"></td>
                <td class="pp1" id="11"></td>
                <td class="ll" id="12"></td>
                <td class="ll" id="13"></td>
                <td class="BREAK" id="14">BREAK</td>
                <td class="ll" id="15"></td>
                <td class="ll" id="16"></td>
                <td class="pp1 pp2" id="17"></td>
                <td class="pp1 pp2" id="18"></td>
          </tr>
          <tr>
                <th class="TTD">Tuesday</th>
                <td class="pp2 pp3" id="20"></td>
                <td class="pp2 pp3" id="21"></td>
                <td class="ll" id="22"></td>
                <td class="ll" id="23"></td>
                <td class="BREAK" id="24">BREAK</td>
                <td class="ll" id="25"></td>
                <td class="TT1" id="26"></td>
                <td class="BREAK" id="27"></td>
                <td class="BREAK" id="28"></td>
          </tr>
          <tr>
                <th class="TTD">Wednesday</th>
                <td class="ll" id="30"></td>
                <td class="ll" id="31"></td>
                <td class="pp3" id="32"></td>
                <td class="pp3" id="33"></td>
                <td class="BREAK" id="34">BREAK</td>
                <td class="BREAK" id="35"></td>
                <td class="BREAK" id="36"></td>
                <td class="BREAK" id="37"></td>
                <td class="BREAK" id="38"></td>
          </tr>
          <tr>
                <th class="TTD">Thursday</th>
                <td class="BREAK" id="40"></td>
                <td class="BREAK" id="41"></td>
                <td class="BREAK" id="42"></td>
                <td class="BREAK" id="43"></td>
                <td class="BREAK" id="44">BREAK</td>
                <td class="BREAK" id="45"></td>
                <td class="BREAK" id="46"></td>
                <td class="BREAK" id="47"></td>
                <td class="BREAK" id="48"></td>
          </tr>
          <tr>
                <th class="TTD">Friday</th>
                <td class="BREAK" id="50"></td>
                <td class="BREAK" id="51"></td>
                <td class="BREAK" id="52"></td>
                <td class="TT2" id="53"></td>
                <td class="BREAK" id="54">BREAK</td>
                <td class="ll" id="55"></td>
                <td class="ll" id="56"></td>
                <td class="ll" id="57"></td>
                <td class="ll" id="58"></td>
          </tr>

          <tr>
                <th class="TTD">Saturday</th>
                <td class="BREAK" id="60"></td>
                <td class="BREAK" id="61"></td>
                <td class="BREAK" id="62"></td>
                <td class="BREAK" id="63"></td>
                <td class="BREAK" id="64">BREAK</td>
                <td class="ll" id="65"></td>
                <td class="ll" id="66"></td>
                <td class="ll" id="67"></td>
                <td class="ll" id="68"></td>
          </tr>

</table>

<script>
      var M=['<span class="p1">SC(p1) A204</span>','<span class="p1">SC(p1) A204</span>','<span class="L">ASN D101</span>','<span class="L">NGN B204</span>','BREAK','<span class="L">SC D301</span>','<span class="L">MC D301</span>','<span class="p1">MC(p1) A203<br></span><span class="p2">SC(p2) A204</span>','<span class="p1">MC(p1) A203<br></span><span class="p2">SC(p2) A204</span>'];
      var T=['<span class="p2">MC(p2) A203<br></span><span class="p3">SC(p3) A204</span>','<span class="p2">MC(p2) A203<br></span><span class="p3">SC(p3) A204</span>','<span class="L">SC D301</span>','<span class="L">MC B203</span>','BREAK','<span class="L">ASN B304</span>','<span class="T1">SC(T1) WS</span>',' ',' '];
      var W=['<span class="L">NGN D301</span>','<span class="L">HVPE B301</span>','<span class="p3">MC(p3) A203</span>','<span class="p3">MC(p3) A203</span>','BREAK',' ',' ',' ',' '];
      var Th=['PROJECT','PROJECT','PROJECT','PROJECT','BREAK','','','',''];
      var Fr=[' ',' ',' ','<span class="T2">SC(T2) A307</span>','BREAK','<span class="L">NGN D101</span>','<span class="L">SC B204</span>','<span class="L">MC B303</span>','<span class="L">ASN B303</span>'];
      var Sa=[' ',' ',' ',' ','BREAK','<span class="L">NGN D101</span>','<span class="L">SC B204</span>','<span class="L">MC B303</span>','<span class="L">ASN B303</span>'];
      var i;
      for(i=0;i<9;i++)
      {
        document.getElementById(i+10).innerHTML=M[i];
        document.getElementById(i+20).innerHTML=T[i];
        document.getElementById(i+30).innerHTML=W[i];
        document.getElementById(i+40).innerHTML=Th[i];
        document.getElementById(i+50).innerHTML=Fr[i];
        document.getElementById(i+60).innerHTML=Sa[i];
      }

      function seconds_maker(hr,mn,sc)
      {
        return ((hr*60*60)+(mn*60)+(sc));
      }

      function present_seconds()
      {
        var ds=new Date();
        return ((ds.getHours()*60*60)+(ds.getMinutes()*60)+(ds.getSeconds()));
      }

      function sec_to_time(t)
      {
        //t is seconds
        return parseInt(t/60/60)+" Hrs "+parseInt(t/60%60)+"  Min "+parseInt(t%60)+" Sec";
      }

      setInterval(clssess,1000);
      function clssess()
      {
      var d=new Date();
      switch (d.getDay())
      {
        case 1:
                if(present_seconds()>=seconds_maker(08,30,00) && present_seconds()<seconds_maker(08,40,00))
                {
                  document.getElementById("present_class").innerHTML=" ";
                  document.getElementById("next_class").innerHTML=M[0];
                  for(var i=10;i<19;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }

                }
                if(present_seconds()>=seconds_maker(08,40,00) && present_seconds()<seconds_maker(09,35,00))
                {
                  document.getElementById("present_class").innerHTML=M[0];
                  document.getElementById("next_class").innerHTML=M[1];
                  for(var i=10;i<19;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("10").style.outline="3px solid black";
                  document.getElementById("10").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(09,35,00)-present_seconds());

                }
                if(present_seconds()>=seconds_maker(09,35,00) && present_seconds()<seconds_maker(10,30,00))
                {
                  document.getElementById("present_class").innerHTML=M[1];
                  document.getElementById("next_class").innerHTML=M[2];
                  for(var i=10;i<19;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("11").style.outline="3px solid black";
                  document.getElementById("11").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(10,30,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(10,30,00) && present_seconds()<seconds_maker(11,25,00))
                {
                  document.getElementById("present_class").innerHTML=M[2];
                  document.getElementById("next_class").innerHTML=M[3];
                  for(var i=10;i<19;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("12").style.outline="3px solid black";
                  document.getElementById("12").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(11,25,00)-present_seconds());
                }
                if(present_seconds()>seconds_maker(11,25,00) && present_seconds()<seconds_maker(12,20,00))
                {
                  document.getElementById("present_class").innerHTML=M[3];
                  document.getElementById("next_class").innerHTML=M[4];
                  for(var i=10;i<19;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("13").style.outline="3px solid black";
                  document.getElementById("13").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(12,20,00)-present_seconds());
                }
                if(present_seconds()>seconds_maker(12,20,00) && present_seconds()<seconds_maker(12,50,00))
                {
                  document.getElementById("present_class").innerHTML=M[4];
                  document.getElementById("next_class").innerHTML=M[5];
                  for(var i=10;i<19;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("14").style.outline="3px solid black";
                  document.getElementById("14").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(12,50,00)-present_seconds());
                }
                if(present_seconds()>seconds_maker(12,50,00) && present_seconds()<seconds_maker(13,45,00))
                {
                  document.getElementById("present_class").innerHTML=M[5];
                  document.getElementById("next_class").innerHTML=M[6];
                  for(var i=10;i<19;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("15").style.outline="3px solid black";
                  document.getElementById("15").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(13,45,00)-present_seconds());
                }
                if(present_seconds()>seconds_maker(13,45,00) && present_seconds()<seconds_maker(14,40,00))
                {
                  document.getElementById("present_class").innerHTML=M[6];
                  document.getElementById("next_class").innerHTML=M[7];
                  for(var i=10;i<19;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("16").style.outline="3px solid black";
                  document.getElementById("16").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(14,40,00)-present_seconds());
                }
                if(present_seconds()>seconds_maker(14,40,00) && present_seconds()<seconds_maker(15,35,00))
                {
                  document.getElementById("present_class").innerHTML=M[7];
                  document.getElementById("next_class").innerHTML=M[8];
                  for(var i=10;i<19;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("17").style.outline="3px solid black";
                  document.getElementById("17").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(15,35,00)-present_seconds());
                }
                if(present_seconds()>seconds_maker(15,35,00) && present_seconds()<seconds_maker(16,30,00))
                {
                  document.getElementById("present_class").innerHTML=M[8];
                  document.getElementById("next_class").innerHTML="OVER";
                  for(var i=10;i<19;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("18").style.outline="3px solid black";
                  document.getElementById("18").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(16,30,00)-present_seconds());
                }

                if(present_seconds()>seconds_maker(16,30,00))
                {
                  document.getElementById("present_class").innerHTML="OVER";
                  for(var i=10;i<19;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("18").style.outline="0px solid black";
                  document.getElementById("time_left").innerHTML="0 Hrs 0 Min 0 Sec";
                }

          break;
        case 2:
                if(present_seconds()>=seconds_maker(08,30,00) && present_seconds()<seconds_maker(08,40,00))
                {
                  document.getElementById("present_class").innerHTML=" ";
                  document.getElementById("next_class").innerHTML=T[0];
                  for(var i=10;i<19;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }

                }
                if(present_seconds()>=seconds_maker(08,40,00) && present_seconds()<seconds_maker(09,35,00))
                {
                  document.getElementById("present_class").innerHTML=T[0];
                  document.getElementById("next_class").innerHTML=T[1];
                  for(var i=20;i<29;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("20").style.outline="3px solid black";
                  document.getElementById("20").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(09,35,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(09,35,00) && present_seconds()<seconds_maker(10,30,00))
                {
                  document.getElementById("present_class").innerHTML=T[1];
                  document.getElementById("next_class").innerHTML=T[2];
                  for(var i=20;i<29;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("21").style.outline="3px solid black";
                  document.getElementById("21").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(10,30,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(10,30,00) && present_seconds()<seconds_maker(11,25,00))
                {
                  document.getElementById("present_class").innerHTML=T[2];
                  document.getElementById("next_class").innerHTML=T[3];
                  for(var i=20;i<29;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("22").style.outline="3px solid black";
                  document.getElementById("22").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(11,25,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(11,25,00) && present_seconds()<seconds_maker(12,20,00))
                {
                  document.getElementById("present_class").innerHTML=T[3];
                  document.getElementById("next_class").innerHTML=T[4];
                  for(var i=20;i<29;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("23").style.outline="3px solid black";
                  document.getElementById("23").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(12,20,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(12,20,00) && present_seconds()<seconds_maker(12,50,00))
                {
                  document.getElementById("present_class").innerHTML=T[4];
                  document.getElementById("next_class").innerHTML=T[5];
                  for(var i=20;i<29;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("24").style.outline="3px solid black";
                  document.getElementById("24").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(12,50,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(12,50,00) && present_seconds()<seconds_maker(13,45,00))
                {
                  document.getElementById("present_class").innerHTML=T[5];
                  document.getElementById("next_class").innerHTML=T[6];
                  for(var i=20;i<29;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("25").style.outline="3px solid black";
                  document.getElementById("25").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(13,45,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(13,45,00) && present_seconds()<seconds_maker(14,40,00))
                {
                  document.getElementById("present_class").innerHTML=T[6];
                  document.getElementById("next_class").innerHTML=T[7];
                  for(var i=20;i<29;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("26").style.outline="3px solid black";
                  document.getElementById("26").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(14,40,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(14,40,00) && present_seconds()<seconds_maker(15,35,00))
                {
                  document.getElementById("present_class").innerHTML=T[7];
                  document.getElementById("next_class").innerHTML=T[8];
                  for(var i=20;i<29;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("27").style.outline="3px solid black";
                  document.getElementById("27").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(15,35,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(15,35,00) && present_seconds()<seconds_maker(16,30,00))
                {
                  document.getElementById("present_class").innerHTML=T[8];
                  document.getElementById("next_class").innerHTML="OVER";
                  for(var i=20;i<29;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("28").style.outline="3px solid black";
                  document.getElementById("28").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(16,30,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(16,30,00))
                {
                  document.getElementById("present_class").innerHTML="OVER";
                  for(var i=20;i<29;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("28").style.outline="0px solid black";
                  document.getElementById("time_left").innerHTML="0 Hrs 0 Min 0 Sec";
                }

          break;
        case 3:   if(present_seconds()>=seconds_maker(08,30,00) && present_seconds()<seconds_maker(08,40,00))
                  {
                    document.getElementById("present_class").innerHTML=" ";
                    document.getElementById("next_class").innerHTML=W[0];
                    for(var i=10;i<19;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }

                  }
                  if(present_seconds()>=seconds_maker(08,40,00) && present_seconds()<seconds_maker(09,35,00))
                  {
                    document.getElementById("present_class").innerHTML=W[0];
                    document.getElementById("next_class").innerHTML=W[1];
                    for(var i=30;i<39;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("30").style.outline="3px solid black";
                    document.getElementById("30").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(09,35,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(09,35,00) && present_seconds()<seconds_maker(10,30,00))
                  {
                    document.getElementById("present_class").innerHTML=W[1];
                    document.getElementById("next_class").innerHTML=W[2];
                    for(var i=30;i<39;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("31").style.outline="3px solid black";
                    document.getElementById("31").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(10,30,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(10,30,00) && present_seconds()<seconds_maker(11,25,00))
                  {
                    document.getElementById("present_class").innerHTML=W[2];
                    document.getElementById("next_class").innerHTML=W[3];
                    for(var i=30;i<39;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("32").style.outline="3px solid black";
                    document.getElementById("32").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(11,25,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(11,25,00) && present_seconds()<seconds_maker(12,20,00))
                  {
                    document.getElementById("present_class").innerHTML=W[3];
                    document.getElementById("next_class").innerHTML=W[4];
                    for(var i=30;i<39;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("33").style.outline="3px solid black";
                    document.getElementById("33").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(12,20,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(12,20,00) && present_seconds()<seconds_maker(12,50,00))
                  {
                    document.getElementById("present_class").innerHTML=W[4];
                    document.getElementById("next_class").innerHTML=W[5];
                    for(var i=30;i<39;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("34").style.outline="3px solid black";
                    document.getElementById("34").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(12,50,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(12,50,00) && present_seconds()<seconds_maker(13,45,00))
                  {
                    document.getElementById("present_class").innerHTML=W[5];
                    document.getElementById("next_class").innerHTML=W[6];
                    for(var i=30;i<39;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("35").style.outline="3px solid black";
                    document.getElementById("35").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(13,45,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(13,45,00) && present_seconds()<seconds_maker(14,40,00))
                  {
                    document.getElementById("present_class").innerHTML=W[6];
                    document.getElementById("next_class").innerHTML=W[7];
                    for(var i=30;i<39;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("36").style.outline="3px solid black";
                    document.getElementById("36").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(14,40,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(14,40,00) && present_seconds()<seconds_maker(15,35,00))
                  {
                    document.getElementById("present_class").innerHTML=W[7];
                    document.getElementById("next_class").innerHTML=W[8];
                    for(var i=30;i<39;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("37").style.outline="3px solid black";
                    document.getElementById("37").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(15,35,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(15,35,00) && present_seconds()<seconds_maker(16,30,00))
                  {
                    document.getElementById("present_class").innerHTML=W[8];
                    document.getElementById("next_class").innerHTML="OVER";
                    for(var i=30;i<39;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("38").style.outline="3px solid black";
                    document.getElementById("38").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(16,30,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(16,30,00))
                  {
                    document.getElementById("present_class").innerHTML="OVER";
                    for(var i=30;i<39;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("38").style.outline="0px solid black";
                    document.getElementById("time_left").innerHTML="0 Hrs 0 Min 0 Sec";
                  }

          break;
        case 4: if(present_seconds()>=seconds_maker(08,30,00) && present_seconds()<seconds_maker(08,40,00))
                  {
                    document.getElementById("present_class").innerHTML=" ";
                    document.getElementById("next_class").innerHTML=Th[0];
                    for(var i=10;i<19;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }

                  }
                if(present_seconds()>=seconds_maker(08,40,00) && present_seconds()<seconds_maker(09,35,00))
                {
                  document.getElementById("present_class").innerHTML=Th[0];
                  document.getElementById("next_class").innerHTML=Th[1];
                  for(var i=40;i<49;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("40").style.outline="3px solid black";
                  document.getElementById("40").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(09,35,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(09,35,00) && present_seconds()<seconds_maker(10,30,00))
                {
                  document.getElementById("present_class").innerHTML=Th[1];
                  document.getElementById("next_class").innerHTML=Th[2];
                  for(var i=40;i<49;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("41").style.outline="3px solid black";
                  document.getElementById("41").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(10,30,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(10,30,00) && present_seconds()<seconds_maker(11,25,00))
                {
                  document.getElementById("present_class").innerHTML=Th[2];
                  document.getElementById("next_class").innerHTML=Th[3];
                  for(var i=40;i<49;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("42").style.outline="3px solid black";
                  document.getElementById("42").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(11,25,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(11,25,00) && present_seconds()<seconds_maker(12,20,00))
                {
                  document.getElementById("present_class").innerHTML=Th[3];
                  document.getElementById("next_class").innerHTML=Th[4];
                  for(var i=40;i<49;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("43").style.outline="3px solid black";
                  document.getElementById("43").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(12,20,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(12,20,00) && present_seconds()<seconds_maker(12,50,00))
                {
                  document.getElementById("present_class").innerHTML=Th[4];
                  document.getElementById("next_class").innerHTML=Th[5];
                  for(var i=40;i<49;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("44").style.outline="3px solid black";
                  document.getElementById("44").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(12,50,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(12,50,00) && present_seconds()<seconds_maker(13,45,00))
                {
                  document.getElementById("present_class").innerHTML=Th[5];
                  document.getElementById("next_class").innerHTML=Th[6];
                  for(var i=40;i<49;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("45").style.outline="3px solid black";
                  document.getElementById("45").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(13,45,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(13,45,00) && present_seconds()<seconds_maker(14,40,00))
                {
                  document.getElementById("present_class").innerHTML=Th[6];
                  document.getElementById("next_class").innerHTML=Th[7];
                  for(var i=40;i<49;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("46").style.outline="3px solid black";
                  document.getElementById("46").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(14,40,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(14,40,00) && present_seconds()<seconds_maker(15,35,00))
                {
                  document.getElementById("present_class").innerHTML=Th[7];
                  document.getElementById("next_class").innerHTML=Th[8];
                  for(var i=40;i<49;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("47").style.outline="3px solid black";
                  document.getElementById("47").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(15,35,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(15,35,00) && present_seconds()<seconds_maker(16,30,00))
                {
                  document.getElementById("present_class").innerHTML=Th[8];
                  document.getElementById("next_class").innerHTML="OVER";
                  for(var i=40;i<49;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("48").style.outline="3px solid black";
                  document.getElementById("48").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(16,30,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(16,30,00))
                {
                  document.getElementById("present_class").innerHTML="OVER";
                  for(var i=40;i<49;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("48").style.outline="0px solid black";
                  document.getElementById("time_left").innerHTML="0 Hrs 0 Min 0 Sec";
                }

          break;
        case 5:
                if(present_seconds()>=seconds_maker(08,30,00) && present_seconds()<seconds_maker(08,40,00))
                  {
                    document.getElementById("present_class").innerHTML=" ";
                    document.getElementById("next_class").innerHTML=Fr[0];
                    for(var i=10;i<19;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }

                  }
                if(present_seconds()>=seconds_maker(08,40,00) && present_seconds()<seconds_maker(09,35,00))
                {
                  document.getElementById("present_class").innerHTML=Fr[0];
                  document.getElementById("next_class").innerHTML=Fr[1];
                  for(var i=50;i<59;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("50").style.outline="3px solid black";
                  document.getElementById("50").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(09,35,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(09,35,00) && present_seconds()<seconds_maker(10,30,00))
                {
                  document.getElementById("present_class").innerHTML=Fr[1];
                  document.getElementById("next_class").innerHTML=Fr[2];
                  for(var i=50;i<59;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("51").style.outline="3px solid black";
                  document.getElementById("51").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(10,30,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(10,30,00) && present_seconds()<seconds_maker(11,25,00))
                {
                  document.getElementById("present_class").innerHTML=Fr[2];
                  document.getElementById("next_class").innerHTML=Fr[3];
                  for(var i=50;i<59;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("52").style.outline="3px solid black";
                  document.getElementById("52").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(11,25,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(11,25,00) && present_seconds()<seconds_maker(12,20,00))
                {
                  document.getElementById("present_class").innerHTML=Fr[3];
                  document.getElementById("next_class").innerHTML=Fr[4];
                  for(var i=50;i<59;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("53").style.outline="3px solid black";
                  document.getElementById("53").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(12,20,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(12,20,00) && present_seconds()<seconds_maker(12,50,00))
                {
                  document.getElementById("present_class").innerHTML=Fr[4];
                  document.getElementById("next_class").innerHTML=Fr[5];
                  for(var i=50;i<59;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("54").style.outline="3px solid black";
                  document.getElementById("54").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(12,50,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(12,50,00) && present_seconds()<seconds_maker(13,45,00))
                {
                  document.getElementById("present_class").innerHTML=Fr[5];
                  document.getElementById("next_class").innerHTML=Fr[6];
                  for(var i=50;i<59;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("55").style.outline="3px solid black";
                  document.getElementById("55").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(13,45,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(13,45,00) && present_seconds()<seconds_maker(14,40,00))
                {
                  document.getElementById("present_class").innerHTML=Fr[6];
                  document.getElementById("next_class").innerHTML=Fr[7];
                  for(var i=50;i<59;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("56").style.outline="3px solid black";
                  document.getElementById("56").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(14,40,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(14,40,00) && present_seconds()<seconds_maker(15,35,00))
                {
                  document.getElementById("present_class").innerHTML=Fr[7];
                  document.getElementById("next_class").innerHTML=Fr[8];
                  for(var i=50;i<59;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("57").style.outline="3px solid black";
                  document.getElementById("57").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(15,35,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(15,35,00) && present_seconds()<seconds_maker(16,30,00))
                {
                  document.getElementById("present_class").innerHTML=Fr[8];
                  document.getElementById("next_class").innerHTML="OVER";
                  for(var i=50;i<59;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("58").style.outline="3px solid black";
                  document.getElementById("58").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(16,30,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(16,30,00))
                {
                  document.getElementById("present_class").innerHTML="OVER";
                  for(var i=50;i<59;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("58").style.outline="0px solid black";
                  document.getElementById("time_left").innerHTML="0 Hrs 0 Min 0 Sec";
                }

          break;
          case 6:
                  if(present_seconds()>=seconds_maker(08,30,00) && present_seconds()<seconds_maker(08,40,00))
                    {
                      document.getElementById("present_class").innerHTML=" ";
                      document.getElementById("next_class").innerHTML=Sa[0];
                      for(var i=10;i<19;i++)
                      {
                          document.getElementById(i).style.outline="0px solid black";
                      }

                    }
                  if(present_seconds()>=seconds_maker(08,40,00) && present_seconds()<seconds_maker(09,35,00))
                  {
                    document.getElementById("present_class").innerHTML=Sa[0];
                    document.getElementById("next_class").innerHTML=Sa[1];
                    for(var i=60;i<69;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("60").style.outline="3px solid black";
                    document.getElementById("60").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(09,35,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(09,35,00) && present_seconds()<seconds_maker(10,30,00))
                  {
                    document.getElementById("present_class").innerHTML=Sa[1];
                    document.getElementById("next_class").innerHTML=Sa[2];
                    for(var i=60;i<69;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("61").style.outline="3px solid black";
                    document.getElementById("61").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(10,30,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(10,30,00) && present_seconds()<seconds_maker(11,25,00))
                  {
                    document.getElementById("present_class").innerHTML=Sa[2];
                    document.getElementById("next_class").innerHTML=Sa[3];
                    for(var i=60;i<69;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("62").style.outline="3px solid black";
                    document.getElementById("62").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(11,25,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(11,25,00) && present_seconds()<seconds_maker(12,20,00))
                  {
                    document.getElementById("present_class").innerHTML=Sa[3];
                    document.getElementById("next_class").innerHTML=Sa[4];
                    for(var i=60;i<69;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("63").style.outline="3px solid black";
                    document.getElementById("63").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(12,20,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(12,20,00) && present_seconds()<seconds_maker(12,50,00))
                  {
                    document.getElementById("present_class").innerHTML=Sa[4];
                    document.getElementById("next_class").innerHTML=Sa[5];
                    for(var i=60;i<69;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("64").style.outline="3px solid black";
                    document.getElementById("64").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(12,50,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(12,50,00) && present_seconds()<seconds_maker(13,45,00))
                  {
                    document.getElementById("present_class").innerHTML=Sa[5];
                    document.getElementById("next_class").innerHTML=Sa[6];
                    for(var i=60;i<69;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("65").style.outline="3px solid black";
                    document.getElementById("65").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(13,45,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(13,45,00) && present_seconds()<seconds_maker(14,40,00))
                  {
                    document.getElementById("present_class").innerHTML=Sa[6];
                    document.getElementById("next_class").innerHTML=Sa[7];
                    for(var i=60;i<69;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("66").style.outline="3px solid black";
                    document.getElementById("66").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(14,40,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(14,40,00) && present_seconds()<seconds_maker(15,35,00))
                  {
                    document.getElementById("present_class").innerHTML=Sa[7];
                    document.getElementById("next_class").innerHTML=Sa[8];
                    for(var i=60;i<69;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("67").style.outline="3px solid black";
                    document.getElementById("67").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(15,35,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(15,35,00) && present_seconds()<seconds_maker(16,30,00))
                  {
                    document.getElementById("present_class").innerHTML=Sa[8];
                    document.getElementById("next_class").innerHTML="OVER";
                    for(var i=60;i<69;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("68").style.outline="3px solid black";
                    document.getElementById("68").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(16,30,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(16,30,00))
                  {
                    document.getElementById("present_class").innerHTML="OVER";
                    for(var i=60;i<69;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("68").style.outline="0px solid black";
                    document.getElementById("time_left").innerHTML="0 Hrs 0 Min 0 Sec";
                  }

            break;

        default:

      }
    }//Ending Function
</script>

<div id="modal_notice_update">
    <span class="closebtn"  onclick="notice_updates_close()" style="font-size: 50px;margin: 20px;position: fixed;">&times;</span>
<div style="margin-top: 50px">

  <div class="alert" style="background-color:#001cc8;">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
No updates.
  </div>

<!--
  <div class="alert" style="background-color:#001cc8;">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    Satellite Communication lectures and tutorials for the week are combined into a set of 4 consecutive lectures on Thursday, A304 from 2:40pm to 6:30pm
  </div>

  <div class="alert" style="background-color:#08a400;">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    ASN QUIZ on next Tuesday (30th Jan 2018).
  </div>
-->
</div>


</div>
<script>
  function notice_updates()
  {
    document.getElementById("modal_notice_update").style.display="block";
  }
  function notice_updates_close()
  {
    document.getElementById("modal_notice_update").style.display="none";
  }
</script>
