<?php 
include_once("../../include/config.php");
include_once("../common/login_check.php");
include("../../include/public_config.php");
//江苏快3

$data=M("c_odds_13",$db_config)->select();
// p($data);

 ?>
<?php require("../common_html/header.php");?>
<script src="../public/js/jquery-1.7.min.js" type="text/javascript"></script>
<script src="../public/js/oddsajax.js" type="text/javascript"></script>
</head>
<body>
<div id="con_wrap">
<div class="input_002">江苏快3即時赔率</div>
<div class="con_menu">

    	&nbsp;&nbsp;<select class="za_select" name="temppid" id="temppid" onchange="var jmpURL=this.options[this.selectedIndex].value;if(jmpURL!=''){window.location=jmpURL;}else{this.selectedIndex=0;}">
        <option value="">请选择彩票类型</option>

        <option value="fc_odds_8.php">六合彩</option> 
		<option value="fc_odds_1.php" >福彩3D</option>
	    <option value="fc_odds_2.php">排列三</option>
        <option value="fc_odds_3.php">重慶時時彩</option>
        <option value="fc_odds_10.php">天津時時彩</option> 
        <option value="fc_odds_11.php">江西時時彩</option> 
        <option value="fc_odds_12.php">新疆時時彩</option>   
        <option value="fc_odds_4.php">北京快乐8</option>
        <option value="fc_odds_5.php">北京PK拾</option>
        <option value="fc_odds_6.php">廣東快樂十分</option>
        <option value="fc_odds_7.php">重慶快樂十分</option>
        <option value="fc_odds_13.php" selected="selected">江苏快3</option> 
        <option value="fc_odds_14.php">吉林快3</option> 
      
			</select>
    	


</div>
<!--
<div class="con_menu">
</div>
-->
</div>
<div class="content" id="13">
			
      <!-- ------------------------------------------------------------------------ -->
						<table width="600" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr class="m_title_over_co">
                  <td> <strong>和值(<span class="font_s2" id="yzzh_total">0/0</span>)</strong></td>
                </tr>
              </tbody></table>
			<table width="600" border="0" cellspacing="0" class="table_line" height="162" id="ball_1">
			
			
            <tbody><tr class="m_title_over_co">
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
    </tr>
          <tr>              
             <td height="32" align="center" class="zdnum">3</td>
              <td height="32" align="center" class="zdnum addinput" id="h1" style="color:#f00;"><?=$data['0']['h1'] ?>
             </td>
              <td height="32" align="center" class="zdnum">4</td>
              <td height="32" align="center" class="zdnum addinput" id="h2" style="color:#f00;"><?=$data['0']['h2'] ?>
             </td>
              <td height="32" align="center" class="zdnum">5</td>
              <td height="32" align="center" class="zdnum addinput" id="h3" style="color:#f00;"><?=$data['0']['h3'] ?>
             </td>
               <td height="32" align="center" class="zdnum">6</td>
              <td height="32" align="center" class="zdnum addinput" id="h4" style="color:#f00;"><?=$data['0']['h4'] ?>
             </td>
                      <td height="32" align="center" class="zdnum">7</td>
              <td height="32" align="center" class="zdnum addinput" id="h5" style="color:#f00;"><?=$data['0']['h5'] ?>
             </td>
          </tr>
			          <tr>              
             <td height="32" align="center" class="zdnum">8</td>
              <td height="32" align="center" class="zdnum addinput" id="h6" style="color:#f00;"><?=$data['0']['h6'] ?>
             </td>
              <td height="32" align="center" class="zdnum">9</td>
              <td height="32" align="center" class="zdnum addinput" id="h7" style="color:#f00;"><?=$data['0']['h7'] ?>
             </td>
              <td height="32" align="center" class="zdnum">10</td>
              <td height="32" align="center" class="zdnum addinput" id="h8" style="color:#f00;"><?=$data['0']['h8'] ?>
             </td>
               <td height="32" align="center" class="zdnum">11</td>
              <td height="32" align="center" class="zdnum addinput" id="h9" style="color:#f00;"><?=$data['0']['h9'] ?>
             </td>
                      <td height="32" align="center" class="zdnum">12</td>
              <td height="32" align="center" class="zdnum addinput" id="h10" style="color:#f00;"><?=$data['0']['h10'] ?>
             </td>
          </tr>
                    <tr>              
             <td height="32" align="center" class="zdnum">13</td>
              <td height="32" align="center" class="zdnum addinput" id="h11" style="color:#f00;"><?=$data['0']['h11'] ?>
             </td>
              <td height="32" align="center" class="zdnum">14</td>
              <td height="32" align="center" class="zdnum addinput" id="h12" style="color:#f00;"><?=$data['0']['h12'] ?>
             </td>
              <td height="32" align="center" class="zdnum">15</td>
              <td height="32" align="center" class="zdnum addinput" id="h13" style="color:#f00;"><?=$data['0']['h13'] ?>
             </td>
               <td height="32" align="center" class="zdnum">16</td>
              <td height="32" align="center" class="zdnum addinput" id="h14" style="color:#f00;"><?=$data['0']['h14'] ?>
             </td>
                      <td height="32" align="center" class="zdnum">17</td>
              <td height="32" align="center" class="zdnum addinput" id="h15" style="color:#f00;"><?=$data['0']['h15'] ?>
             </td>
          </tr>
          <tr>              
             <td height="32" align="center" class="zdnum">18</td>
              <td height="32" align="center" class="zdnum addinput" id="h16" style="color:#f00;"><?=$data['0']['h16'] ?>
             </td>           
               <td height="32" align="center" class="zdnum">大</td>
              <td height="32" align="center" class="zdnum addinput" id="h17" style="color:#f00;"><?=$data['0']['h17'] ?>
             </td>
              <td height="32" align="center" class="zdnum">小</td>
              <td height="32" align="center" class="zdnum addinput" id="h18" style="color:#f00;"><?=$data['0']['h18'] ?>
             </td>
              <td height="32" align="center" class="zdnum">单</td>
              <td height="32" align="center" class="zdnum addinput" id="h19" style="color:#f00;"><?=$data['0']['h19'] ?>
             </td>
               <td height="32" align="center" class="zdnum">双</td>
              <td height="32" align="center" class="zdnum addinput" id="h20" style="color:#f00;"><?=$data['0']['h20'] ?>
             </td>
          </tr>   						           								
          </tbody></table>

                <!-- ------------------------------------------------------------------------ -->
            <table width="600" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr class="m_title_over_co">
                  <td> <strong>独胆 (<span class="font_s2" id="yzzh_total">0/0</span>)</strong></td>
                </tr>
              </tbody></table>
      <table width="600" border="0" cellspacing="0" class="table_line" height="162" id="ball_2">
      
      
            <tbody><tr class="m_title_over_co">
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
    </tr>
             <tr>              
             <td height="32" align="center" class="zdnum">1</td>
              <td height="32" align="center" class="zdnum addinput" id="h1" style="color:#f00;"><?=$data['1']['h1'] ?>
             </td>
              <td height="32" align="center" class="zdnum">2</td>
              <td height="32" align="center" class="zdnum addinput" id="h2" style="color:#f00;"><?=$data['1']['h2'] ?>
             </td>
              <td height="32" align="center" class="zdnum">3</td>
              <td height="32" align="center" class="zdnum addinput" id="h3" style="color:#f00;"><?=$data['1']['h3'] ?>
             </td>
              <td height="32" align="center" class="zdnum">4</td>
              <td height="32" align="center" class="zdnum addinput" id="h4" style="color:#f00;"><?=$data['1']['h4'] ?>
            </td>
              <td height="32" align="center" class="zdnum">5</td>
              <td  height="32" align="center" class="zdnum addinput" id="h5" style="color:#f00;"><?=$data['1']['h5'] ?>
            </td>
          </tr>   


          <tr><td height="32" align="center" class="zdnum">6</td>
              <td  height="32" align="center" class="zdnum addinput" id="h6" style="color:#f00;"><?=$data['1']['h6'] ?>
             </td>
         <td colspan="8"></td>
          </tr>                                             
          </tbody></table>

     


            <!-- ------------------------------------------------------------------------ -->
            <table width="600" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr class="m_title_over_co">
                  <td> <strong>豹子(<span class="font_s2" id="yzzh_total">0/0</span>)</strong></td>
                </tr>
              </tbody></table>
      <table width="600" border="0" cellspacing="0" class="table_line" height="162" id="ball_3">
      
      
            <tbody><tr class="m_title_over_co">
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
    </tr>
             <tr>              
             <td height="32" align="center" class="zdnum">1,1,1</td>
              <td height="32" align="center" class="zdnum addinput" id="h1" style="color:#f00;"><?=$data['2']['h1'] ?>
             </td>
              <td height="32" align="center" class="zdnum">2,2,2</td>
              <td height="32" align="center" class="zdnum addinput" id="h2" style="color:#f00;"><?=$data['2']['h2'] ?>
             </td>
              <td height="32" align="center" class="zdnum">3,3,3</td>
              <td height="32" align="center" class="zdnum addinput" id="h3" style="color:#f00;"><?=$data['2']['h3'] ?>
             </td>
              <td height="32" align="center" class="zdnum">4,4,4</td>
              <td height="32" align="center" class="zdnum addinput" id="h4" style="color:#f00;"><?=$data['2']['h4'] ?>
            </td>
              <td height="32" align="center" class="zdnum">5,5,5</td>
              <td  height="32" align="center" class="zdnum addinput" id="h5" style="color:#f00;"><?=$data['2']['h5'] ?>
             </td>
             
          </tr>   


          <tr>
            <td height="32" align="center" class="zdnum">6,6,6</td>
              <td  height="32" align="center" class="zdnum addinput" id="h6" style="color:#f00;"><?=$data['2']['h6'] ?>
             </td>
            <td height="32" align="center" class="zdnum">全骰</td>
              <td  height="32" align="center" class="zdnum addinput" id="h7" style="color:#f00;"><?=$data['2']['h7'] ?>
             </td>
            <td colspan="6"></td>
          </tr>                                           
          </tbody></table>


            <!-- ------------------------------------------------------------------------ -->
            <table width="600" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr class="m_title_over_co">
                  <td> <strong>两连(<span class="font_s2" id="yzzh_total">0/0</span>)</strong></td>
                </tr>
              </tbody></table>
      <table width="600" border="0" cellspacing="0" class="table_line" height="162" id="ball_4">
      
      
            <tbody><tr class="m_title_over_co">
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
    </tr>
             <tr>              
             <td height="32" align="center" class="zdnum">1,2</td>
              <td height="32" align="center" class="zdnum addinput" id="h1" style="color:#f00;"><?=$data['3']['h1'] ?>
             </td>
              <td height="32" align="center" class="zdnum">1,3</td>
              <td height="32" align="center" class="zdnum addinput" id="h2" style="color:#f00;"><?=$data['3']['h2'] ?>
             </td>
              <td height="32" align="center" class="zdnum">1,4</td>
              <td height="32" align="center" class="zdnum addinput" id="h3" style="color:#f00;"><?=$data['3']['h3'] ?>
             </td>
              <td height="32" align="center" class="zdnum">1,5</td>
              <td height="32" align="center" class="zdnum addinput" id="h4" style="color:#f00;"><?=$data['3']['h4'] ?>
            </td>
              <td height="32" align="center" class="zdnum">1,6</td>
              <td  height="32" align="center" class="zdnum addinput" id="h5" style="color:#f00;"><?=$data['3']['h5'] ?>
            </td>
          </tr>  
                       <tr>              
             <td height="32" align="center" class="zdnum">2,3</td>
              <td height="32" align="center" class="zdnum addinput" id="h6" style="color:#f00;"><?=$data['3']['h6'] ?>
             </td>
              <td height="32" align="center" class="zdnum">2,4</td>
              <td height="32" align="center" class="zdnum addinput" id="h7" style="color:#f00;"><?=$data['3']['h7'] ?>
             </td>
              <td height="32" align="center" class="zdnum">2,5</td>
              <td height="32" align="center" class="zdnum addinput" id="h8" style="color:#f00;"><?=$data['3']['h8'] ?>
             </td>
              <td height="32" align="center" class="zdnum">2,6</td>
              <td height="32" align="center" class="zdnum addinput" id="h9" style="color:#f00;"><?=$data['3']['h9'] ?>
            </td>
              <td height="32" align="center" class="zdnum">3,4</td>
              <td  height="32" align="center" class="zdnum addinput" id="h10" style="color:#f00;"><?=$data['3']['h10'] ?>
            </td>
          </tr> 
                       <tr>              
             <td height="32" align="center" class="zdnum">3,5</td>
              <td height="32" align="center" class="zdnum addinput" id="h11" style="color:#f00;"><?=$data['3']['h11'] ?>
             </td>
              <td height="32" align="center" class="zdnum">3,6</td>
              <td height="32" align="center" class="zdnum addinput" id="h12" style="color:#f00;"><?=$data['3']['h12'] ?>
             </td>
              <td height="32" align="center" class="zdnum">4,5</td>
              <td height="32" align="center" class="zdnum addinput" id="h13" style="color:#f00;"><?=$data['3']['h13'] ?>
             </td>
              <td height="32" align="center" class="zdnum">4,6</td>
              <td height="32" align="center" class="zdnum addinput" id="h14" style="color:#f00;"><?=$data['3']['h14'] ?>
            </td>
              <td height="32" align="center" class="zdnum">5,6</td>
              <td  height="32" align="center" class="zdnum addinput" id="h15" style="color:#f00;"><?=$data['3']['h15'] ?>
            </td>
          </tr> 
                                        
          </tbody></table>


            <!-- ------------------------------------------------------------------------ -->
            <table width="600" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr class="m_title_over_co">
                  <td> <strong>对子(<span class="font_s2" id="yzzh_total">0/0</span>)</strong></td>
                </tr>
              </tbody></table>
      <table width="600" border="0" cellspacing="0" class="table_line" height="162" id="ball_5">
      
      
            <tbody><tr class="m_title_over_co">
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
              <td height="28" align="center" nowrap="nowrap" class="table_bg1">號碼</td>
              <td align="center" nowrap="nowrap" class="table_bg1">赔率</td>
    </tr>
             <tr>              
             <td height="32" align="center" class="zdnum">1,1</td>
              <td height="32" align="center" class="zdnum addinput" id="h1" style="color:#f00;"><?=$data['4']['h1'] ?>
             </td>
              <td height="32" align="center" class="zdnum">2,2</td>
              <td height="32" align="center" class="zdnum addinput" id="h2" style="color:#f00;"><?=$data['4']['h2'] ?>
             </td>
              <td height="32" align="center" class="zdnum">3,3</td>
              <td height="32" align="center" class="zdnum addinput" id="h3" style="color:#f00;"><?=$data['4']['h3'] ?>
             </td>
              <td height="32" align="center" class="zdnum">4,4</td>
              <td height="32" align="center" class="zdnum addinput" id="h4" style="color:#f00;"><?=$data['4']['h4'] ?>
            </td>
              <td height="32" align="center" class="zdnum">5,5</td>
              <td  height="32" align="center" class="zdnum addinput" id="h5" style="color:#f00;"><?=$data['4']['h5'] ?>
            </td>
          </tr>   


          <tr><td height="32" align="center" class="zdnum">6,6</td>
              <td  height="32" align="center" class="zdnum addinput" id="h6" style="color:#f00;"><?=$data['4']['h6'] ?>
             </td>
            <td colspan="6"></td>
             <td colspan="6"></td>


          </tr>                                           
          </tbody></table>
       
        
</div>
		
<script type="text/javascript">
var lx = 1;

function GetData()
{
	$.ajax({
		type:'post',
		data:'qs='+$('#qs').val()+'&zc='+$('#zc').val()+'&ab='+$('#ab').val()+'&lx=' + lx + '&type=0&t='+(new Date()).getTime(),
		dataType:'json',
		url:'../data/server_3d.php?uid='+uid,
		success:GetDataCallBack
	});
	var t=parseFloat($('#tim').val());
	if(t>=1) window.setTimeout("GetData()",t);
}
function GetDataCallBack(r)
{
	try
	{
		var arr=new Array('yzzh','bdw','sdw','gdw');
		for(k=0;k<arr.length;k++){
			var data=r[arr[k]].data;
			var len=data.length;
			for(i=0;i<len;i++)
			{
				var obj=$("#"+arr[k]+"o"+i);
				if(data[i].order!="0/0")
						obj.attr('class','red0');	
				else
						obj.attr('class','');	
				obj.text(data[i].order);	
			}
			$("#"+arr[k]+"_total").text(r[arr[k]].total);	
		}
	}catch(e){
	//	alert(e.message);
	}
}
$(document).ready(function(e) {
	GetData();
});
</script>
<!-- 公共尾部 -->
<?php require("../common_html/footer.php"); ?>