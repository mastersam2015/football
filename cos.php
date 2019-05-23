<? ob_start(); ?>
<script type="text/javascript" src="jquery.js"></script>
	<meta name="viewport" content="width=device-width">
<body >

<center>
	 bramka wroga
	<br>
 <canvas id="myCanvas" width="240" height="400"  >
</canvas> <br>
	 
	 		 <?
	 	$resetuj=$_GET["resetuj"];
	if(!empty($resetuj)){
		 $fp = fopen("ready.txt", "w");

// zapisanie danych
fputs($fp, "3a".$ry."a".$rx);

// zamknięcie pliku
fclose($fp);

//echo "<script>$('#ridi').val('ready');</script>";

	}
	?>
	 <script>
		 //----------------------------------var
	var akx=160;
	var aky=100;
	var first=1;
	var str = new Array();
	var dotab;
	var loncz;
	var pom;
	var pom2;
	var rx;
	var ry;
	var tab = new Array();
	var start=0;
	var notway;
	//------------------------------------------------------canvas
var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
		 
ctx.fillStyle = "#000000";
		 for (var i=1;i<=11;i++){
			 for(var j=2;j<=16;j++){
				 ctx.fillRect(i*20,j*20,5,5);
			 }
		 }
	 ctx.fillRect(100,20,5,5);
		  ctx.fillRect(100,20,5,5);
		 ctx.fillRect(120,20,5,5);
		 ctx.fillRect(140,20,5,5);
		  ctx.fillRect(100,340,5,5);
		 ctx.fillRect(120,340,5,5);
		  ctx.fillRect(140,340,5,5);
		  ctx.beginPath();;
		 <? 
		 $akx=$_GET["akx"];
		 $aky=$_GET["aky"]; 

		 if(!empty($akx)){
			 echo "
			 
			
ctx.beginPath();
ctx.rect(".$aky.",".$akx.",5,5);
ctx.fillStyle = \"red\";
ctx.fill();
ctx.stroke();

";
		 }
		 
		 ?>


ctx.beginPath();
ctx.rect(120,180,5,5);
ctx.fillStyle = "red";
ctx.fill();
ctx.stroke();
document.addEventListener("DOMContentLoaded", init, false);

//------------------------cookie



//----------------------------------------init
      function init()
      {
        var canvas = document.getElementById("myCanvas");
        canvas.addEventListener("mousedown", getPosition, false);
      }
//--------------------------------------onclick
	  function getPosition(event)
      {
		  obtocz=$("#obtocz").val();
        var x = new Number();
        var y = new Number();
        var canvas = document.getElementById("canvas");
        if (event.x != undefined && event.y != undefined)
        {
          x = event.x;
          y = event.y;
        }
        else // Firefox method to get the position
        {
          x = event.clientX + document.body.scrollLeft +
              document.documentElement.scrollLeft;
          y = event.clientY + document.body.scrollTop +
              document.documentElement.scrollTop;
        }
        x -= myCanvas.offsetLeft;
        y -= myCanvas.offsetTop;
       rx=x;
		ry=y;
		  rx=rx/20;
		  ry=ry/20;
		  rx=Math.round(rx);
		  ry=Math.round(ry);
		  rx=rx*20;
		  ry=ry*20;
		 /*
		 if(start==1){
		  akx=readCookie("akxc");
		  aky=readCookie("akyc");
		  }
		  */
		 start=1; 
		 first=1;
		 <?
		 

		 
		 
		 $ry=$_GET["ry"];
		 $rx=$_GET["rx"];
		 $akx=$_GET["akx"];
		 $aky=$_GET["aky"];
		 
		 if(empty($_GET["akx"])){
		 
		 $pakax=160;
		 $pakay=100;
		 }else{
			 //if(($ry==$akx-20 and $rx==$aky+20)or($ry==$akx and $rx==$aky+20)or($ry==$akx+20 and $rx==$aky+20)or($ry==$akx+20 and $rx==$aky)or($ry==$akx+20 and $rx==$aky-20)or($ry==$akx and $rx==$aky-20)or($ry==$akx-20 and $rx==$aky-20)or($ry==$akx-20 and $rx==$aky)){
		 $pakax=$_GET["akx"];
		 $pakay=$_GET["aky"];
		 //}
		 }
		 echo "akx=".$pakax.";";
		 echo "aky=".$pakay.";";
		 ?>
		 if((ry==akx-20 && rx==aky+20)||(ry==akx && rx==aky+20)||(ry==akx+20 && rx==aky+20)||(ry==akx+20 && rx==aky)||(ry==akx+20 && rx==aky-20)||(ry==akx && rx==aky-20)||(ry==akx-20 && rx==aky-20)||(ry==akx-20 && rx==aky)){
	<?
	$ready=$_GET["ready"];
	if(empty($ready)){
		echo "window.location.href='cos.php?akx='+". $pakax ."+'&aky='+". $pakay ."+'&rx='+rx+'&ry='+ry;";
	}
		 
		 ?>
		 }
		 

		  	  }
		  
	  <?
	  	 $fp=fopen("slad.txt", "r");
while (!feof($fp)){
$line = fgets($fp);  
  }
	  echo $line;
	 ?>
	 
	 
	 
	  var kolej;
	 function reflesh(){
	 $.get("ready.txt", {  },  function(data) {
kolej=data.split("a");
	// console.log(kolej[0]);	
	 if(kolej[0]==1){
	 window.location.href='cos.php?akx='+kolej[1]+'&aky='+kolej[2]+"&resetuj=1";
	 }
});
	 }
	setInterval(reflesh, 3000); 
	
	 
	 </script>
	 
	 <?



$the_data = file_get_contents("tabela.txt");
$tab = json_decode($the_data);
	 
		  
		  $rx=$_GET["rx"];
		  $ry=$_GET["ry"];
		  $aky=$_GET["aky"];
		  $akx=$_GET["akx"];
		  
		  
		  if (!empty($rx)){
		  
		  
		 //echo "<script>alert('rx');</script>";

	//1 -20 +20
	
		if (($rx == ($aky-20)) and ($ry == ($akx+20))){
		////alert("-20 +20 badane");
		 //echo "<script>alert('rx1');</script>";
		$pom="1".$rx."".$ry;$str2=$tab->$pom;$str=explode("a", $str2);
		//echo "<script>alert('".$str2."');</script>";
	if($str[1] == 1 and $str[5] == 1){
		
			$line.="ctx.beginPath(); ctx.lineWidth=\"2\"; ctx.strokeStyle=\"black\"; ctx.moveTo(".$aky.",".$akx."); ctx.lineTo(".$rx.",".$ry."); ctx.stroke();";
			$dotab="a2"."a".$str[2]."a".$str[3]."a".$str[4]."a2".$str[5]."a".$str[6]."a".$str[7]."a".$str[8]; $pom="1".$rx."".$ry; $tab->$pom=$dotab;
		$dotab="a".$str[1]."a".$str[2]."a".$str[3]."a".$str[4]."a2"."a".$str[6]."a".$str[7]."a".$str[8]; $pom="1".$aky."".$akx;$tab->$pom=$dotab;
		$turn=1;//echo "<script>alert('ends');</script>";
	}
	
	if ($str[1] == "2" ) {
	
	$way=1;//echo "<script>alert('not way');</script>";
	}

	if($str[2] == "2" or $str[3] == "2" or $str[4] == "2" or $str[6] == "2" or $str[7] == "2" or $str[8] == "2" ){
	$line.="ctx.beginPath(); ctx.lineWidth=\"2\"; ctx.strokeStyle=\"black\"; ctx.moveTo(".$aky.",".$akx."); ctx.lineTo(".$rx.",".$ry."); ctx.stroke(); ";
			$dotab="a2"."a".$str[2]."a".$str[3]."a".$str[4]."a2".$str[5]."a".$str[6]."a".$str[7]."a".$str[8]; $pom="1".$rx."".$ry; $tab->$pom=$dotab;
		$dotab="a".$str[1]."a".$str[2]."a".$str[3]."a".$str[4]."a2"."a".$str[6]."a".$str[7]."a".$str[8]; $pom="1".$aky."".$akx;$tab->$pom=$dotab;
	$ping=1;//echo "<script>alert('ping');</script>";
	
	}
	}
	//----------end
	
	//2  0 +20	

	
	
		if ($rx == $aky and $ry == $akx+20){
		////alert(end1);
		 //echo "<script>alert('rx2');</script>";
		$pom="1".$rx."".$ry;$str2=$tab->$pom;$str=explode("a", $str2);
		//echo "<script>alert('".$str2."');</script>";
		
	if($str[2] == "1" and $str[6] == "1"){//-----------------
		
			$line.="ctx.beginPath(); ctx.lineWidth=\"2\"; ctx.strokeStyle=\"black\"; ctx.moveTo(".$aky.",".$akx."); ctx.lineTo(".$rx.",".$ry."); ctx.stroke(); ";
			$dotab="a".$str[1]."a2"."a".$str[3]."a".$str[4]."a".$str[5]."a".$str[6]."a".$str[7]."a".$str[8]; $pom="1".$rx."".$ry; $tab->$pom=$dotab;
		$dotab="a".$str[1]."a".$str[2]."a".$str[3]."a".$str[4]."a".$str[5]."a2"."a".$str[7]."a".$str[8];  $pom="1".$aky."".$akx;$tab->$pom=$dotab;
		$turn=1;//echo "<script>alert('ends');</script>";
	} if ($str[2] == "2" ) {
	
	$way=1;//echo "<script>alert('not way');</script>";
	} if($str[1] == "2" or $str[3] == "2" or $str[4] == "2" or $str[5] == "2" or $str[7] == "2" or $str[8] == "2"){
	$line.="ctx.beginPath(); ctx.lineWidth=\"2\"; ctx.strokeStyle=\"black\"; ctx.moveTo(".$aky.",".$akx."); ctx.lineTo(".$rx.",".$ry."); ctx.stroke(); ";
			$dotab="a".$str[1]."a2"."a".$str[3]."a".$str[4]."a".$str[5]."a".$str[6]."a".$str[7]."a".$str[8]; $pom="1".$rx."".$ry; $tab->$pom=$dotab;
		$dotab="a".$str[1]."a".$str[2]."a".$str[3]."a".$str[4]."a".$str[5]."a2"."a".$str[7]."a".$str[8]; $pom="1".$aky."".$akx;$tab->$pom=$dotab;
	$ping=1;//echo "<script>alert('ping');</script>";
	
	}
	}
	//----------end


	//3 +20 +20
	
		if ($rx == $aky+20 and $ry == $akx+20){
		////alert(end1);
		 //echo "<script>alert('rx3');</script>";
		$pom="1".$rx."".$ry;$str2=$tab->$pom;$str=explode("a", $str2);
		//echo "<script>alert('".$str2."');</script>";
	if($str[3] == "1" and $str[7] == "1"){//-----------------
		
			$line.="ctx.beginPath(); ctx.lineWidth=\"2\"; ctx.strokeStyle=\"black\"; ctx.moveTo(".$aky.",".$akx."); ctx.lineTo(".$rx.",".$ry."); ctx.stroke(); ";
			$dotab="a".$str[1]."a".$str[2]."a2"."a".$str[4]."a".$str[5]."a".$str[6]."a".$str[7]."a".$str[8]; $pom="1".$rx."".$ry; $tab->$pom=$dotab;
		$dotab="a".$str[1]."a".$str[2]."a".$str[3]."a".$str[4]."a".$str[5]."a".$str[6]."a2"."a".$str[8]; $pom="1".$aky."".$akx;$tab->$pom=$dotab;
		$turn=1;//echo "<script>alert('ends');</script>";
	} if ($str[3] == "2" ) {
	
	$way=1;//echo "<script>alert('not way');</script>";
	} if($str[1] == "2" or $str[2] == "2" or $str[4] == "2" or $str[5] == "2" or $str[6] == "2" or $str[8] == "2" ){
		$line.="ctx.beginPath(); ctx.lineWidth=\"2\"; ctx.strokeStyle=\"black\"; ctx.moveTo(".$aky.",".$akx."); ctx.lineTo(".$rx.",".$ry."); ctx.stroke(); ";
			$dotab="a".$str[1]."a".$str[2]."a2"."a".$str[4]."a".$str[5]."a".$str[6]."a".$str[7]."a".$str[8]; $pom="1".$rx."".$ry; $tab->$pom=$dotab;
		$dotab="a".$str[1]."a".$str[2]."a".$str[3]."a".$str[4]."a".$str[5]."a".$str[6]."a2"."a".$str[8]; $pom="1".$aky."".$akx;$tab->$pom=$dotab;
	$ping=1;//echo "<script>alert('ping');</script>";
	
	}
	}
	//----------end
	
	
	//4 +20 0
	
		if ($rx == $aky+20 and $ry == $akx){
		////alert(end1);
		 //echo "<script>alert('rx4');</script>";
		 $pom="1".$rx."".$ry;
		$str2=$tab->$pom;$str=explode("a", $str2);
		//echo "<script>alert('".$str2."');</script>";
	if($str[4] == "1" and $str[8] == "1"){//-----------------
		
			$line.="ctx.beginPath(); ctx.lineWidth=\"2\"; ctx.strokeStyle=\"black\"; ctx.moveTo(".$aky.",".$akx."); ctx.lineTo(".$rx.",".$ry."); ctx.stroke(); ";
			$dotab="a".$str[1]."a".$str[2]."a".$str[3]."a2"."a".$str[5]."a".$str[6]."a".$str[7]."a".$str[8]; $pom="1".$rx."".$ry; $tab->$pom=$dotab;
		$dotab="a".$str[1]."a".$str[2]."a".$str[3]."a".$str[4]."a".$str[5]."a".$str[6]."a".$str[7]."a2"; $pom="1".$aky."".$akx;$tab->$pom=$dotab;
		$turn=1;//echo "<script>alert('ends');</script>";
	} if ($str[4] == "2" ) {
	
	$way=1;//echo "<script>alert('not way');</script>";
	} if($str[1] == "2" or $str[2] == "2" or $str[3] == "2" or $str[5] == "2" or $str[6] == "2" or $str[7] == "2" ){
	
			$line.="ctx.beginPath(); ctx.lineWidth=\"2\"; ctx.strokeStyle=\"black\"; ctx.moveTo(".$aky.",".$akx."); ctx.lineTo(".$rx.",".$ry."); ctx.stroke(); ";
			$dotab="a".$str[1]."a".$str[2]."a".$str[3]."a2"."a".$str[5]."a".$str[6]."a".$str[7]."a".$str[8]; $pom="1".$rx."".$ry; $tab->$pom=$dotab;
		$dotab="a".$str[1]."a".$str[2]."a".$str[3]."a".$str[4]."a".$str[5]."a".$str[6]."a".$str[7]."a2"; $pom="1".$aky."".$akx;$tab->$pom=$dotab;
	$ping=1;//echo "<script>alert('ping');</script>";
	
	}
	}
	//----------end
	
	//5 +20 -20
	
		if (($rx == $aky+20) and (($ry) == $akx-20)){
		//alert(".20 -20");
		 //echo "<script>alert('rx5');</script>";
		$pom="1".$rx."".$ry;$str2=$tab->$pom;$str=explode("a", $str2);
		//echo "<script>alert('".$str2."');</script>";
	if($str[5] == "1" and $str[1] == "1"){//-----------------
		
			$line.="ctx.beginPath(); ctx.lineWidth=\"2\"; ctx.strokeStyle=\"black\"; ctx.moveTo(".$aky.",".$akx."); ctx.lineTo(".$rx.",".$ry."); ctx.stroke(); ";
			$dotab="a".$str[1]."a".$str[2]."a".$str[3]."a".$str[4]."a2"."a".$str[6]."a".$str[7]."a".$str[8]; $pom="1".$rx."".$ry; $tab->$pom=$dotab;
		$dotab="a2"."a".$str[2]."a".$str[3]."a".$str[4]."a".$str[5]."a".$str[6]."a".$str[7]."a".$str[8]; $pom="1".$aky."".$akx;$tab->$pom=$dotab;
		$turn=1;//echo "<script>alert('ends');</script>";
	} if ($str[5] == "2") {
	
	$way=1;//echo "<script>alert('not way');</script>";
	} if($str[2] == "2" or $str[3] == "2" or $str[4] == "2" or $str[6] == "2" or $str[7] == "2" or $str[8] == "2" ){
	$line.="ctx.beginPath(); ctx.lineWidth=\"2\"; ctx.strokeStyle=\"black\"; ctx.moveTo(".$aky.",".$akx."); ctx.lineTo(".$rx.",".$ry."); ctx.stroke(); ";
			$dotab="a".$str[1]."a".$str[2]."a".$str[3]."a".$str[4]."a2"."a".$str[6]."a".$str[7]."a".$str[8]; $pom="1".$rx."".$ry; $tab->$pom=$dotab;
		$dotab="a2"."a".$str[2]."a".$str[3]."a".$str[4]."a".$str[5]."a".$str[6]."a".$str[7]."a".$str[8]; $pom="1".$aky."".$akx;$tab->$pom=$dotab;
	$ping=1;//echo "<script>alert('ping');</script>";
	
	}
	}
	//----------end
	
	
	
	//6 0 -20
	
		if ($rx == $aky and $ry == $akx-20){
		////alert(end1);
		 //echo "<script>alert('rx6');</script>";
		$pom="1".$rx."".$ry;$str2=$tab->$pom;$str=explode("a", $str2);
		//echo "<script>alert('".$str2."');</script>";
	if($str[6] == "1" and $str[2] == "1"){//-----------------
		
			$line.="ctx.beginPath(); ctx.lineWidth=\"2\"; ctx.strokeStyle=\"black\"; ctx.moveTo(".$aky.",".$akx."); ctx.lineTo(".$rx.",".$ry."); ctx.stroke(); ";
			$dotab="a".$str[1]."a".$str[2]."a".$str[3]."a".$str[4]."a".$str[5]."a2"."a".$str[7]."a".$str[8];$pom="1".$rx."".$ry; $tab->$pom=$dotab;
			echo $dotab."<br>";
		$dotab="a".$str[1]."a2"."a".$str[3]."a".$str[4]."a".$str[5]."a".$str[6]."a".$str[7]."a".$str[8]; $pom="1".$aky."".$akx;$tab->$pom=$dotab;
		echo $dotab."<br>";
		$turn=1;//echo "<script>alert('ends');</script>";
	} if ($str[6] == "2" ) {
	
	$way=1;//echo "<script>alert('not way');</script>";
	} if($str[1] == "2" or $str[3] == "2" or $str[4] == "2" or $str[5] == "2" or $str[7] == "2" or $str[8] == "2" ){
	$line.="ctx.beginPath(); ctx.lineWidth=\"2\"; ctx.strokeStyle=\"black\"; ctx.moveTo(".$aky.",".$akx."); ctx.lineTo(".$rx.",".$ry."); ctx.stroke(); ";
			$dotab="a".$str[1]."a".$str[2]."a".$str[3]."a".$str[4]."a".$str[5]."a2"."a".$str[7]."a".$str[8]; $pom="1".$rx."".$ry; $tab->$pom=$dotab;
		$dotab="a".$str[1]."a2"."a".$str[3]."a".$str[4]."a".$str[5]."a".$str[6]."a".$str[7]."a".$str[8]; $pom="1".$aky."".$akx;$tab->$pom=$dotab;
		
	$ping=1;//echo "<script>alert('ping');</script>";
	
	}
	}
	//----------end
	
	
	
	//7 -20 -20
	
		if ($rx == $aky-20 and $ry == $akx-20){
		////alert(end1);
		
		$pom="1".$rx."".$ry;$str2=$tab->$pom;$str=explode("a", $str2);
		//echo "<script>alert('".$str2."');</script>";
	if($str[7] == "1" and $str[3] == "1"){//-----------------
		
			$line.="ctx.beginPath(); ctx.lineWidth=\"2\"; ctx.strokeStyle=\"black\"; ctx.moveTo(".$aky.",".$akx."); ctx.lineTo(".$rx.",".$ry."); ctx.stroke(); ";
			$dotab="a".$str[1]."a".$str[2]."a".$str[3]."a".$str[4]."a".$str[5]."a".$str[6]."a2"."a".$str[8]; $pom="1".$rx."".$ry; $tab->$pom=$dotab;
		$dotab="a".$str[1]."a".$str[2]."a2"."a".$str[4]."a".$str[5]."a".$str[6]."a".$str[7]."a".$str[8]; $pom="1".$aky."".$akx;$tab->$pom=$dotab;
		$turn=1;//echo "<script>alert('ends');</script>";
	} if ($str[7] == "2" ) {
	
	$way=1;//echo "<script>alert('not way');</script>";
	} if($str[1] == "2" or $str[2] == "2" or $str[4] == "2" or $str[5] == "2" or $str[6] == "2" or $str[8] == "2" ){
	$line.="ctx.beginPath(); ctx.lineWidth=\"2\"; ctx.strokeStyle=\"black\"; ctx.moveTo(".$aky.",".$akx."); ctx.lineTo(".$rx.",".$ry."); ctx.stroke(); ";
			$dotab="a".$str[1]."a".$str[2]."a".$str[3]."a".$str[4]."a".$str[5]."a".$str[6]."a2"."a".$str[8]; $pom="1".$rx."".$ry; $tab->$pom=$dotab;
		$dotab="a".$str[1]."a".$str[2]."a2"."a".$str[4]."a".$str[5]."a".$str[6]."a".$str[7]."a".$str[8]; $pom="1".$aky."".$akx;$tab->$pom=$dotab;
		
	$ping=1;//echo "<script>alert('ping');</script>";
	
	}
	}
	//----------end
	
	
	
	//8 -20 0
	
		if ($rx == $aky-20 and $ry == $akx){
		////alert(end1);
		 //echo "<script>alert('rx8');</script>";
		$pom="1".$rx."".$ry;$str2=$tab->$pom;$str=explode("a", $str2);
			//echo "<script>alert('".$str2."');</script>";
	if($str[8] == "1" and $str[4] == "1"){//-----------------
		
			$line.="ctx.beginPath(); ctx.lineWidth=\"2\"; ctx.strokeStyle=\"black\"; ctx.moveTo(".$aky.",".$akx."); ctx.lineTo(".$rx.",".$ry."); ctx.stroke(); ";
			$dotab="a".$str[1]."a".$str[2]."a".$str[3]."a".$str[4]."a".$str[5]."a".$str[6]."a".$str[7]."a2"; $pom="1".$rx."".$ry; $tab->$pom=$dotab;
		$dotab="a".$str[1]."a".$str[2]."a".$str[3]."a2"."a".$str[5]."a".$str[6]."a".$str[7]."a".$str[8]; $pom="1".$aky."".$akx;$tab->$pom=$dotab;
		$turn=1;//echo "<script>alert('ends');</script>";
	} if ($str[8] == "2" ) {
	
	$way=1;//echo "<script>alert('not way');</script>";
	} if($str[1] == "2" or $str[2] == "2" or $str[3] == "2"  or $str[5] == "2" or $str[6] == "2" or $str[7] == "2"){
	$line.="ctx.beginPath(); ctx.lineWidth=\"2\"; ctx.strokeStyle=\"black\"; ctx.moveTo(".$aky.",".$akx."); ctx.lineTo(".$rx.",".$ry."); ctx.stroke(); ";
			$dotab="a".$str[1]."a".$str[2]."a".$str[3]."a".$str[4]."a".$str[5]."a".$str[6]."a".$str[7]."a2"; $pom="1".$rx."".$ry; $tab->$pom=$dotab;
		$dotab="a".$str[1]."a".$str[2]."a".$str[3]."a2"."a".$str[5]."a".$str[6]."a".$str[7]."a".$str[8]; $pom="1".$aky."".$akx;$tab->$pom=$dotab;
	$ping=1;//echo "<script>alert('ping');</script>";
	
	}
	}
	//----------end
		//console.log($dotab."8");				
	
	//console.log($str);
	
	
	
	//console.log(aky." aky".akx." akx".rx." rx".ry." ry");
	//console.log($tab["1".$rx."".$ry]." tab");
	//console.log($str[1]." $str1".$str[5]." $str5");
	
	
	//setCookie("akxc",ry,30);
	//setCookie("akyc",rx,30);

	$notway=0;
	//header("Location: cos.php?akx=".$ry."&aky=".$rx);
	if($ping!=1){
	if($turn==1){
		//echo "<script>alert('kolej przeciwnika');</script>";
		//echo "<script>window.location.href='cos.php?ready=1';</script>";
		 $fp = fopen("ready.txt", "w");

// zapisanie danych
fputs($fp, "2a".$ry."a".$rx);

// zamknięcie pliku
fclose($fp);
echo "<script>window.location.href='cos.php?ready=1';</script>";
	}
	}
	if($way==1){
		echo "<script>window.location.href='cos.php?akx=".$ry."&aky=".$rx."';</script>";
	}else{
	echo "<script>window.location.href='cos.php?akx=".$ry."&aky=".$rx."';</script>";
	}
	
	}
	
	//var_dump($tab);
	/*
	for ($i=0;$i<=10;$i++){
			 for($j=1;$j<=15;$j++){
				 $w1=$i*20;
				 $w2=$j*20;
				 $pomt="1".$w1."".$w2;
				 $str.= "\$tab[1".$w1."".$w2."]=\"".$tab[$pomt]."\";";
			 }
		 }
		 */
		 //$fp = fopen("tabela.txt", "w");

// zapisanie danych
//$str=json_encode($tab, JSON_FORCE_OBJECT);
//fputs($fp, $str);

// zamknięcie pliku
//fclose($fp);


$json_data = json_encode($tab);
file_put_contents("tabela.txt", $json_data);



 $fp = fopen("slad.txt", "w");

// zapisanie danych
fputs($fp, $line);

// zamknięcie pliku
fclose($fp);
echo "<br><input type='text' id='ridi'>";

	?>
	
	
			 <?
	 	$resetuj=$_GET["resetuj"];
	if(!empty($resetuj)){


echo "<script>$('#ridi').val('ready');</script>";

	}
	?>