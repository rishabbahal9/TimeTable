<table class="tbl">
          <tr>
                <th>Days</th>
                <th>12:50-01:45</th>
                <th>01:45-02:40</th>
                <th>02:40-03:35</th>
                <th>03:35-04:30</th>
                <th>04:30-04:40</th>
                <th>04:40-5:35</th>
                <th>5:35-6:30</th>
          </tr>

          <tr>
                <th class="TTD">Monday</th>
                <td class="pp2" id="10"></td>
                <td class="pp2" id="11"></td>
                <td class="ll" id="12"></td>
                <td class="ll" id="13"></td>
                <td class="BREAK" id="14">BREAK</td>
                <td class="ll" id="15"></td>
                <td class="ll" id="16"></td>
          </tr>
          <tr>
                <th class="TTD">Tuesday</th>
                <td class="BREAK" id="20"></td>
                <td class="BREAK" id="21"></td>
                <td class="ll" id="22"></td>
                <td class="ll" id="23"></td>
                <td class="BREAK" id="24">BREAK</td>
                <td class="pp2 pp3" id="25"></td>
                <td class="pp2 pp3" id="26"></td>
          </tr>
          <tr>
                <th class="TTD">Wednesday</th>
                <td class="TT1" id="30"></td>
                <td class="ll" id="31"></td>
                <td class="ll" id="32"></td>
                <td class="ll" id="33"></td>
                <td class="BREAK" id="34">BREAK</td>
                <td class="pp1 pp3" id="35"></td>
                <td class="pp1 pp3" id="36"></td>
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
          </tr>
          <tr>
                <th class="TTD">Friday</th>
                <td class="pp1" id="50"></td>
                <td class="pp1" id="51"></td>
                <td class="ll" id="52"></td>
                <td class="ll" id="53"></td>
                <td class="BREAK" id="54">BREAK</td>
                <td class="ll" id="55"></td>
                <td class="ll" id="56"></td>
          </tr>

</table>

<script>
      var M=['<span class="p2">SC(p2) A204</span>','<span class="p2">SC(p2) A204</span>','<span class="L">NGN D301</span>','<span class="L">MC B303</span>','BREAK','<span class="L">SC D301</span>','<span class="L">MC D301</span>'];
      var T=[' ',' ','<span class="L">ASN B104</span>','<span class="L">NGN B104</span>','BREAK','<span class="p3">SC(p3) A204<br></span><span class="p2">MC(p2) A203</span>','<span class="p3">SC(p3) A204<br></span><span class="p2">MC(p2) A203</span>'];
      var W=['<span class="T1">SC(T1) A304</span>','<span class="L">HVPE B304</span>','<span class="L">SCR D301</span>','<span class="L">ASN B303</span>','BREAK','<span class="p1">SC(p1) A204<br></span><span class="p3">MC(p3) A203</span>','<span class="p1">SC(p1) A204<br></span><span class="p3">MC(p3) A203</span>'];
      var Th=['PROJECT','PROJECT','PROJECT','PROJECT','BREAK','',''];
      var Fr=['<span class="p1">MC(p1) A203</span>','<span class="p1">MC(p1) A203<br></span><span class="T2" style="background-color: #debc00;color: #000000;padding: 5px 0px;outline-radius: 3px;">SC(T2) C304</span>','<span class="L">ASN D301</span>','<span class="L">MC D301</span>','BREAK','<span class="L">SC B303</span>','<span class="L">NGN B303</span>'];
      var i;
      for(i=0;i<7;i++)
      {
        document.getElementById(i+10).innerHTML=M[i];
        document.getElementById(i+20).innerHTML=T[i];
        document.getElementById(i+30).innerHTML=W[i];
        document.getElementById(i+40).innerHTML=Th[i];
        document.getElementById(i+50).innerHTML=Fr[i];
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
                if(present_seconds()>=seconds_maker(12,30,00) && present_seconds()<seconds_maker(12,50,00))
                {
                  document.getElementById("present_class").innerHTML=" ";
                  document.getElementById("next_class").innerHTML=M[0];
                  for(var i=10;i<17;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }

                }
                if(present_seconds()>=seconds_maker(12,50,00) && present_seconds()<seconds_maker(13,45,00))
                {
                  document.getElementById("present_class").innerHTML=M[0];
                  document.getElementById("next_class").innerHTML=M[1];
                  for(var i=10;i<17;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("10").style.outline="3px solid black";
                  document.getElementById("10").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(13,45,00)-present_seconds());

                }
                if(present_seconds()>=seconds_maker(13,45,00) && present_seconds()<seconds_maker(14,40,00))
                {
                  document.getElementById("present_class").innerHTML=M[1];
                  document.getElementById("next_class").innerHTML=M[2];
                  for(var i=10;i<17;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("11").style.outline="3px solid black";
                  document.getElementById("11").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(14,40,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(14,40,00) && present_seconds()<seconds_maker(15,35,00))
                {
                  document.getElementById("present_class").innerHTML=M[2];
                  document.getElementById("next_class").innerHTML=M[3];
                  for(var i=10;i<17;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("12").style.outline="3px solid black";
                  document.getElementById("12").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(15,35,00)-present_seconds());
                }
                if(present_seconds()>seconds_maker(15,35,00) && present_seconds()<seconds_maker(16,30,00))
                {
                  document.getElementById("present_class").innerHTML=M[3];
                  document.getElementById("next_class").innerHTML=M[4];
                  for(var i=10;i<17;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("13").style.outline="3px solid black";
                  document.getElementById("13").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(16,30,00)-present_seconds());
                }
                if(present_seconds()>seconds_maker(16,30,00) && present_seconds()<seconds_maker(16,40,00))
                {
                  document.getElementById("present_class").innerHTML=M[4];
                  document.getElementById("next_class").innerHTML=M[5];
                  for(var i=10;i<17;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("14").style.outline="3px solid black";
                  document.getElementById("14").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(16,40,00)-present_seconds());
                }
                if(present_seconds()>seconds_maker(16,40,00) && present_seconds()<seconds_maker(17,35,00))
                {
                  document.getElementById("present_class").innerHTML=M[5];
                  document.getElementById("next_class").innerHTML=M[6];
                  for(var i=10;i<17;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("15").style.outline="3px solid black";
                  document.getElementById("15").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(17,35,00)-present_seconds());
                }
                if(present_seconds()>seconds_maker(17,35,00) && present_seconds()<seconds_maker(18,30,00))
                {
                  document.getElementById("present_class").innerHTML=M[6];
                  document.getElementById("next_class").innerHTML="OVER";
                  for(var i=10;i<17;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("16").style.outline="3px solid black";
                  document.getElementById("16").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(18,30,00)-present_seconds());
                }
                if(present_seconds()>seconds_maker(18,30,00))
                {
                  document.getElementById("present_class").innerHTML="OVER";
                  for(var i=10;i<17;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("16").style.outline="0px solid black";
                  document.getElementById("time_left").innerHTML="0 Hrs 0 Min 0 Sec";
                }

          break;
        case 2:
                if(present_seconds()>=seconds_maker(12,30,00) && present_seconds()<seconds_maker(12,50,00))
                {
                  document.getElementById("present_class").innerHTML=" ";
                  document.getElementById("next_class").innerHTML=T[0];
                  for(var i=10;i<17;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }

                }
                if(present_seconds()>=seconds_maker(12,50,00) && present_seconds()<seconds_maker(13,45,00))
                {
                  document.getElementById("present_class").innerHTML=T[0];
                  document.getElementById("next_class").innerHTML=T[1];
                  for(var i=20;i<27;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("20").style.outline="3px solid black";
                  document.getElementById("20").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(13,45,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(13,45,00) && present_seconds()<seconds_maker(14,40,00))
                {
                  document.getElementById("present_class").innerHTML=T[1];
                  document.getElementById("next_class").innerHTML=T[2];
                  for(var i=20;i<27;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("21").style.outline="3px solid black";
                  document.getElementById("21").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(14,40,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(14,40,00) && present_seconds()<seconds_maker(15,35,00))
                {
                  document.getElementById("present_class").innerHTML=T[2];
                  document.getElementById("next_class").innerHTML=T[3];
                  for(var i=20;i<27;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("22").style.outline="3px solid black";
                  document.getElementById("22").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(15,35,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(15,35,00) && present_seconds()<seconds_maker(16,30,00))
                {
                  document.getElementById("present_class").innerHTML=T[3];
                  document.getElementById("next_class").innerHTML=T[4];
                  for(var i=20;i<27;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("23").style.outline="3px solid black";
                  document.getElementById("23").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(16,30,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(16,30,00) && present_seconds()<seconds_maker(16,40,00))
                {
                  document.getElementById("present_class").innerHTML=T[4];
                  document.getElementById("next_class").innerHTML=T[5];
                  for(var i=20;i<27;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("24").style.outline="3px solid black";
                  document.getElementById("24").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(16,40,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(16,40,00) && present_seconds()<seconds_maker(17,35,00))
                {
                  document.getElementById("present_class").innerHTML=T[5];
                  document.getElementById("next_class").innerHTML=T[6];
                  for(var i=20;i<27;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("25").style.outline="3px solid black";
                  document.getElementById("25").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(17,35,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(17,35,00) && present_seconds()<seconds_maker(18,30,00))
                {
                  document.getElementById("present_class").innerHTML=T[6];
                  document.getElementById("next_class").innerHTML="OVER";
                  for(var i=20;i<27;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("26").style.outline="3px solid black";
                  document.getElementById("26").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(18,30,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(18,30,00))
                {
                  document.getElementById("present_class").innerHTML="OVER";
                  for(var i=20;i<27;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("26").style.outline="0px solid black";
                  document.getElementById("time_left").innerHTML="0 Hrs 0 Min 0 Sec";
                }

          break;
        case 3:   if(present_seconds()>=seconds_maker(12,30,00) && present_seconds()<seconds_maker(12,50,00))
                  {
                    document.getElementById("present_class").innerHTML=" ";
                    document.getElementById("next_class").innerHTML=W[0];
                    for(var i=10;i<17;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }

                  }
                  if(present_seconds()>=seconds_maker(12,50,00) && present_seconds()<seconds_maker(13,45,00))
                  {
                    document.getElementById("present_class").innerHTML=W[0];
                    document.getElementById("next_class").innerHTML=W[1];
                    for(var i=30;i<37;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("30").style.outline="3px solid black";
                    document.getElementById("30").style.outlineOffset="-3px";
                    setInterval(document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(13,45,00)-present_seconds()),1000);
                  }
                  if(present_seconds()>=seconds_maker(13,45,00) && present_seconds()<seconds_maker(14,40,00))
                  {
                    document.getElementById("present_class").innerHTML=W[1];
                    document.getElementById("next_class").innerHTML=W[2];
                    for(var i=30;i<37;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("31").style.outline="3px solid black";
                    document.getElementById("31").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(14,40,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(14,40,00) && present_seconds()<seconds_maker(15,35,00))
                  {
                    document.getElementById("present_class").innerHTML=W[2];
                    document.getElementById("next_class").innerHTML=W[3];
                    for(var i=30;i<37;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("32").style.outline="3px solid black";
                    document.getElementById("32").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(15,35,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(15,35,00) && present_seconds()<seconds_maker(16,30,00))
                  {
                    document.getElementById("present_class").innerHTML=W[3];
                    document.getElementById("next_class").innerHTML=W[4];
                    for(var i=30;i<37;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("33").style.outline="3px solid black";
                    document.getElementById("33").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(16,30,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(16,30,00) && present_seconds()<seconds_maker(16,40,00))
                  {
                    document.getElementById("present_class").innerHTML=W[4];
                    document.getElementById("next_class").innerHTML=W[5];
                    for(var i=30;i<37;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("34").style.outline="3px solid black";
                    document.getElementById("34").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(16,40,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(16,40,00) && present_seconds()<seconds_maker(17,35,00))
                  {
                    document.getElementById("present_class").innerHTML=W[5];
                    document.getElementById("next_class").innerHTML=W[6];
                    for(var i=30;i<37;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("35").style.outline="3px solid black";
                    document.getElementById("35").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(17,35,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(17,35,00) && present_seconds()<seconds_maker(18,30,00))
                  {
                    document.getElementById("present_class").innerHTML=W[6];
                    document.getElementById("next_class").innerHTML="OVER";
                    for(var i=30;i<37;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("36").style.outline="3px solid black";
                    document.getElementById("36").style.outlineOffset="-3px";
                    document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(18,30,00)-present_seconds());
                  }
                  if(present_seconds()>=seconds_maker(18,30,00))
                  {
                    document.getElementById("present_class").innerHTML="OVER";
                    for(var i=30;i<37;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }
                    document.getElementById("36").style.outline="0px solid black";
                    document.getElementById("time_left").innerHTML="0 Hrs 0 Min 0 Sec";
                  }

          break;
        case 4: if(present_seconds()>=seconds_maker(12,30,00) && present_seconds()<seconds_maker(12,50,00))
                  {
                    document.getElementById("present_class").innerHTML=" ";
                    document.getElementById("next_class").innerHTML=Th[0];
                    for(var i=10;i<17;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }

                  }
                if(present_seconds()>=seconds_maker(12,50,00) && present_seconds()<seconds_maker(13,45,00))
                {
                  document.getElementById("present_class").innerHTML=Th[0];
                  document.getElementById("next_class").innerHTML=Th[1];
                  for(var i=40;i<47;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("40").style.outline="3px solid black";
                  document.getElementById("40").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(13,45,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(13,45,00) && present_seconds()<seconds_maker(14,40,00))
                {
                  document.getElementById("present_class").innerHTML=Th[1];
                  document.getElementById("next_class").innerHTML=Th[2];
                  for(var i=40;i<47;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("41").style.outline="3px solid black";
                  document.getElementById("41").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(14,40,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(14,40,00) && present_seconds()<seconds_maker(15,35,00))
                {
                  document.getElementById("present_class").innerHTML=Th[2];
                  document.getElementById("next_class").innerHTML=Th[3];
                  for(var i=40;i<47;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("42").style.outline="3px solid black";
                  document.getElementById("42").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(15,35,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(15,35,00) && present_seconds()<seconds_maker(16,30,00))
                {
                  document.getElementById("present_class").innerHTML=Th[3];
                  document.getElementById("next_class").innerHTML=Th[4];
                  for(var i=40;i<47;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("43").style.outline="3px solid black";
                  document.getElementById("43").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(16,30,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(16,30,00) && present_seconds()<seconds_maker(16,40,00))
                {
                  document.getElementById("present_class").innerHTML=Th[4];
                  document.getElementById("next_class").innerHTML=Th[5];
                  for(var i=40;i<47;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("44").style.outline="3px solid black";
                  document.getElementById("44").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(16,40,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(16,40,00) && present_seconds()<seconds_maker(17,35,00))
                {
                  document.getElementById("present_class").innerHTML=Th[5];
                  document.getElementById("next_class").innerHTML=Th[6];
                  for(var i=40;i<47;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("45").style.outline="3px solid black";
                  document.getElementById("45").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(17,35,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(17,35,00) && present_seconds()<seconds_maker(18,30,00))
                {
                  document.getElementById("present_class").innerHTML=Th[6];
                  document.getElementById("next_class").innerHTML="OVER";
                  for(var i=40;i<47;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("46").style.outline="3px solid black";
                  document.getElementById("46").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(18,30,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(18,30,00))
                {
                  document.getElementById("present_class").innerHTML="OVER";
                  for(var i=40;i<47;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("46").style.outline="0px solid black";
                  document.getElementById("time_left").innerHTML="0 Hrs 0 Min 0 Sec";
                }

          break;
        case 5:
                if(present_seconds()>=seconds_maker(12,30,00) && present_seconds()<seconds_maker(12,50,00))
                  {
                    document.getElementById("present_class").innerHTML=" ";
                    document.getElementById("next_class").innerHTML=Fr[0];
                    for(var i=10;i<17;i++)
                    {
                        document.getElementById(i).style.outline="0px solid black";
                    }

                  }
                if(present_seconds()>=seconds_maker(12,50,00) && present_seconds()<seconds_maker(13,45,00))
                {
                  document.getElementById("present_class").innerHTML=Fr[0];
                  document.getElementById("next_class").innerHTML=Fr[1];
                  for(var i=50;i<57;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("50").style.outline="3px solid black";
                  document.getElementById("50").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(13,45,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(13,45,00) && present_seconds()<seconds_maker(14,40,00))
                {
                  document.getElementById("present_class").innerHTML=Fr[1];
                  document.getElementById("next_class").innerHTML=Fr[2];
                  for(var i=50;i<57;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("51").style.outline="3px solid black";
                  document.getElementById("51").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(14,40,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(14,40,00) && present_seconds()<seconds_maker(15,35,00))
                {
                  document.getElementById("present_class").innerHTML=Fr[2];
                  document.getElementById("next_class").innerHTML=Fr[3];
                  for(var i=50;i<57;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("52").style.outline="3px solid black";
                  document.getElementById("52").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(15,35,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(15,35,00) && present_seconds()<seconds_maker(16,30,00))
                {
                  document.getElementById("present_class").innerHTML=Fr[3];
                  document.getElementById("next_class").innerHTML=Fr[4];
                  for(var i=50;i<57;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("53").style.outline="3px solid black";
                  document.getElementById("53").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(16,30,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(16,30,00) && present_seconds()<seconds_maker(16,40,00))
                {
                  document.getElementById("present_class").innerHTML=Fr[4];
                  document.getElementById("next_class").innerHTML=Fr[5];
                  for(var i=50;i<57;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("54").style.outline="3px solid black";
                  document.getElementById("54").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(16,40,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(16,40,00) && present_seconds()<seconds_maker(17,35,00))
                {
                  document.getElementById("present_class").innerHTML=Fr[5];
                  document.getElementById("next_class").innerHTML=Fr[6];
                  for(var i=50;i<57;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("55").style.outline="3px solid black";
                  document.getElementById("55").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(17,35,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(17,35,00) && present_seconds()<seconds_maker(18,30,00))
                {
                  document.getElementById("present_class").innerHTML=Fr[6];
                  document.getElementById("next_class").innerHTML="OVER";
                  for(var i=50;i<57;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("56").style.outline="3px solid black";
                  document.getElementById("56").style.outlineOffset="-3px";
                  document.getElementById("time_left").innerHTML=sec_to_time(seconds_maker(18,30,00)-present_seconds());
                }
                if(present_seconds()>=seconds_maker(18,30,00))
                {
                  document.getElementById("present_class").innerHTML="OVER";
                  for(var i=50;i<57;i++)
                  {
                      document.getElementById(i).style.outline="0px solid black";
                  }
                  document.getElementById("56").style.outline="0px solid black";
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

  <div class="alert" style="background: none;padding: 0px;margin-bottom: 10px;margin-top: 0px;">
    This section gets updated at 11:30pm.
  </div>

  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      <strong>Major Project!</strong><br>
      [18/04, 14:38] Saurabh Rana Sir: Your final project presentation is scheduled on 26/4/18 I.e Thursday. So be prepared and meet your mentors<br>
[18/04, 15:28] Saurabh Rana Sir: For final presentation students should have a ppt and spiral binded report.<br>
Based on scrutiny of that report by your mentor and panel you should make a hard bound mahroon colour report which should be submitted within 3 days after the final presentation..<br>
[18/04, 15:30] Saurabh Rana Sir: You need to submit the spiral bound report duly signed by your mentor by 25/4/18i.e Wednesday  to me...<br>

<a href="DOWNLOADS/MAJOR_PROJECT_REPORT_FORMAT_GGSIPU.PDF" download>Project Format pdf</a><br>

<a href="DOWNLOADS/MAJOR_PROJECT_REPORT_FORMAT_GGSIPU.docx" download>Project Format docx</a><br>

    <div style="margin-bottom: 20px">
        <div class="update_date">18/04/2018</div>
    </div>
  </div>


  <div class="alert" style="background-color:#08a400;">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
<del>    3 ASN QUIZZES on next Tuesday (20th March 2018).<br><strong>Topics:</strong> Classification of Transport Layer Protocols.
        <div style="margin-bottom: 20px">
            <div class="update_date">13/03/2018</div>
        </div>
</del>
  </div>



    <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
<del>      <strong>Major Project!</strong> briefing will be held on 20th February 2018 ie. Tuesday in front of HOD mam at 1:30pm.<br>
</del>
      <div style="margin-bottom: 20px">
          <div class="update_date">19/02/2018</div>
      </div>
    </div>

  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
<del>
    <strong>Synopsis!</strong> has some minor changes. So collect them from mentor and resubmit them till Thursday, 15th February 2018. <br>
</del>
    <div style="margin-bottom: 20px">
        <div class="update_date">12/02/2018</div>
    </div>
  </div>

  <div class="alert" style="background-color:#001cc8;">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <del>        Meet respective class advisors to fill examination registration chart.
  </del>
      <div style="margin-bottom: 20px">
          <div class="update_date">12/02/2018</div>
      </div>
  </div>


    <div class="alert" style="background-color:#08a400;">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <del>    Three quiz tomorrow (13th Feb 2018), two for NGN and one for MC.<br><strong>Topics:</strong> WAP, VPN & IP routing.
  </del>
          <div style="margin-bottom: 20px">
              <div class="update_date">12/02/2018</div>
          </div>

    </div>


  <div class="alert" style="background-color:#08a400;">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
		<del>MC QUIZ on Monday (12th Feb 2018) at 3:35PM, only those students can give who will attend 2:40PM lecture.<br><strong>Topic:</strong> GSM
  </del>
        <div style="margin-bottom: 20px">
            <div class="update_date">06/02/2018</div>
        </div>

  </div>

  <div class="alert" style="background-color:#08a400;">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
	<del>
		NGN QUIZ on Tuesday (6th Feb 2018).<br><strong>Topics:</strong> SIP and H.323 protocols.
    </del>
		<div style="margin-bottom: 20px">
            <div class="update_date">05/02/2018</div>
        </div>
  </div>

  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
	<del>
    <strong style="font-size: 20px">Assignment!</strong> ASN assignment to be submitted on Tuesday (06/02/2018)<br>
    <div style="background-color: #ffffff;font-family: Sans-serif;color: #000000;padding: 10px;font-size: 15px;text-align: left;line-height: 23px;">
      <div style="text-align: center"><strong>ASN Assignment</strong></div>
      Write short note about following protocols:
      <ol>
        <li>BTMA</li>
        <li>D-BTMA</li>
        <li>ICSMA</li>
      </ol>
      <br>
      <a href="https://drive.google.com/open?id=1b3xie8NdE_uG4IBE0gaGv6vmjrLUSRJj" target="_blank">Solution</a>
    </div>
	</del>
    <div style="margin-bottom: 20px">
        <div class="update_date">30/01/2018</div>
    </div>
  </div>

  <div class="alert" style="background-color:#001cc8;">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
<del>    Again, this week also Satellite Communication lectures and tutorials for the week are combined into a set of 4 consecutive lectures on Thursday, A304 from 2:40pm to 6:30pm.</del>
      <div style="margin-bottom: 20px">
          <div class="update_date">30/01/2018</div>
      </div>
  </div>

  <div class="alert" style="background-color:#08a400;">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <del>ASN QUIZ on next Tuesday (30th Jan 2018).</del>
        <div style="margin-bottom: 20px">
            <div class="update_date">28/01/2018</div>
        </div>
  </div>


  <div class="alert" style="background-color:#001cc8;">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <del>Satellite Communication lectures and tutorials for the week are combined into a set of 4 consecutive lectures on Thursday, A304 from 2:40pm to 6:30pm.</del>
      <div style="margin-bottom: 20px">
          <div class="update_date">26/01/2018</div>
      </div>
  </div>

  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <del><strong>Synopsis!</strong> Last date for Synopsis submission to respective mentors is 25/01/2018(Thursday).<br>

    Get 2 copies of synopsis.</del>
    <div style="margin-bottom: 20px">
        <div class="update_date">26/01/2018</div>
    </div>
  </div>

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
