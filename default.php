<?php 
if(isset($_POST["lang"])){
  if($_POST['lang']==''){
    $_POST['lang'] = 'SWE';
  }
}
else
{
    $_POST['lang'] = 'SWE';
}	

if(isset($_POST["key"])){
  if($_POST['key']==''){
    $_POST['key'] = 'hem';
  }
}
else
{
    $_POST['key'] = 'hem';
}


?>
<html> 
<title>Cadizfood AB</title>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
  <link rel="shortcut icon" href="http://www.cadizfood.com/img/favicon.ico">
  <script language="javascript">
  
    function getDocHeight(doc) {
      var docHt = 0, sh, oh;
      if (doc.height) docHt = doc.height;
      else if (doc.body) {
        if (doc.body.scrollHeight) docHt = sh = doc.body.scrollHeight;
        if (doc.body.offsetHeight) docHt = oh = doc.body.offsetHeight;
        if (sh && oh) docHt = Math.max(sh, oh);
      }
      return docHt;
    }
     
    function setIframeHeight(iframeName) {
      var iframeWin = window.frames[iframeName];
      var iframeEl = document.getElementById? document.getElementById(iframeName): document.all? document.all[iframeName]: null;
      if ( iframeEl && iframeWin ) {
        iframeEl.style.height = "auto"; // helps resize (for some) if new doc shorter than previous  
        var docHt = getDocHeight(iframeWin.document);
        // need to add to height to be sure it will all show
        if (docHt) iframeEl.style.height = docHt + 30 + "px";        
      }
    }

    
    function subForm(key,lang){
      document.form1.key.value=key;
      document.form1.lang.value=lang;
      document.form1.submit();
    }
  </script>
  <style type="text/css">

    a:link { color:631417 ; font-size:14px;  text-decoration:none ; font-weight:normal; }

    a.main:visited { color:631417 ; font-size:14px; text-decoration:none ; font-weight:normal; }

    a.main:hover { color:631417 ; font-size:14px; text-decoration:underline; font-weight:normal; }
   
    
    td, div 
    {
      font-family:Verdana;font-size:13px;
    }
    
    ul {
      list-style:circle;
    }
    
    ul.ul2 {
      list-style-type:upper-roman;
    }
    
     ul.ul3 {                             
       list-style-type:circel;       
     }  
                                       
  </style>
</head>
<body style="margin:0;border:0;">
  
  <form name="form1" method="post">
    <input type="hidden" name="key" value="<?php echo $_POST['key'];?>" >
     <input type="hidden" name="lang" value="<?php echo $_POST['lang'];?>" >
  </form>
  
  <table border="0" width="100%" height="100%" >
  <tr>
    <td valign="top" align="center">
    
      <table border="0">
      <tr>
        <td>
            <a onClick="subForm('hem','SWE');" onFocus="blur()" href="javascript:void(0);"><img src="img/cadizfood header salan.gif" border="0"></a>
        </td>
      </tr>
      <tr><td><img src="img/1x1.gif" width="1" height="10"/></td></tr>
      <tr>
        <td align="right">
          <a href="javascript: subForm(document.form1.key.value,'SWE');" onFocus="blur()"><img src="img/Sweden-Flag.png" border="0" /></a>
          <!--a href="?lang=EN" onFocus="blur()"><img src="img/usa flag.png" border="0" /></a-->          
        </td>
      </tr>
      <tr>
        <td>
          <table cellpadding="0" cellspacing="0">
            <tr>
             <td>
                <a <?php if(isset($_POST['key'])) { if($_POST['key']=='hem') echo 'style="font-weight:bold"'; } ?> class="main" href="javascript: subForm('hem',document.form1.lang.value);" border="0" onFocus="blur()">Hem</a>       
              </td>
              <td width="30" align="center">
                <img src="img/1x1 vinrod.gif" width="1" height="15"/>
              </td>
             <td>
                <a <?php if(isset($_POST['key'])) { if($_POST['key']=='omoss') echo 'style="font-weight:bold"';  } ?> class="main" href="javascript: subForm('omoss',document.form1.lang.value);" border="0" onFocus="blur()">Om oss</a>       
              </td>
              <td width="30" align="center">
                <img src="img/1x1 vinrod.gif" width="1" height="15"/>
              </td>
             <td>
                <a <?php if(isset($_POST['key'])) { if($_POST['key']=='vision') echo 'style="font-weight:bold"'; } ?> class="main" href="javascript: subForm('vision',document.form1.lang.value);" border="0" onFocus="blur()">Vision & målsättning</a>       
              </td>
              <td width="30" align="center">
                <img src="img/1x1 vinrod.gif" width="1" height="15"/>
              </td>
             <td>
                <a <?php if(isset($_POST['key'])) { if($_POST['key']=='produkt') echo 'style="font-weight:bold"'; } ?> class="main" href="javascript: subForm('produkt',document.form1.lang.value);" border="0" onFocus="blur()">Produkter</a>       
              </td>
              <td width="30" align="center">
                <img src="img/1x1 vinrod.gif" width="1" height="15"/>
              </td>
             <td>
                <a <?php if(isset($_POST['key'])) { if($_POST['key']=='nedladdningar') echo 'style="font-weight:bold"'; } ?> class="main" href="javascript: subForm('nedladdningar',document.form1.lang.value);" border="0" onFocus="blur()">Nedladdningar</a>       
              </td>
              <td width="30" align="center">
                <img src="img/1x1 vinrod.gif" width="1" height="15"/>
              </td>
             <td>
                <a <?php if(isset($_POST['key'])) { if($_POST['key']=='kontakt') echo 'style="font-weight:bold"'; } ?> class="main" href="javascript: subForm('kontakt',document.form1.lang.value);" border="0" onFocus="blur()">Kontakt</a>       
              </td>
            </tr>
          </table>    
        </td>
      </tr>
      <tr><td><img src="img/1x1.gif" width="1" height="10"/></td></tr>
      <tr>
        <td>     
              <?php
			if(isset($_POST['key'])) { 
			  if($_POST['key']=='hem'){ ?>
              <table width="900">
              <tr>
                <td align="center">
                   <img src="img/dates1.gif" />
                </td>
              </tr>
              </table>                          
              <?php }elseif($_POST['key']=='omoss'){ ?>
              <table width="900">
              <tr>
                <td valign="top">
               
                     <div>
                      <b>Cadiz Food AB</b> är ett bolag som har som affärsidé att sälja högkvalitativa 
                      livsmedelsprodukter från Nordafrika till den svenska marknaden. Produkterna skall 
                      i första hand kännetecknas av att de är nyttiga och bra för hälsan – i många fall 
                      så kommer vi också att erbjuda ekologiska alternativ på våra produkter.
                      </div>

                     <div style="margin-top:20px;">
                     Produkterna som vi erbjuder skall ha en outnyttjad potential hos den breda svenska 
                     befolkningen – men till viss mån vara en inarbetad produkt i andra matkulturer – på 
                     så vis vill vi gärna vara med och bygga affärsmässiga broar mellan olika matkulturer. 
                    </div>
                    
                    <div style="margin-top:20px;">
                    Många utav våra produktgrupper kanske redan idag finns eller säljs i handeln – men 
                    genom att hitta seriösa i Nordafrika, som kan leva upp till den svenska livsmedelsindustrins 
                    krav på socialt ansvar, miljö och kvalitet hoppas vi kunna erbjuda bättre produkter med en 
                    helt annan kontinuitet än vad som finns idag. Kontinuitet och igenkännbarhet skall vara 
                    ledord som utgör kärnan i vår verksamhet.
                    </div>
                    
                     <div style="margin-top:20px;">
                    Som ett resultat av satsningen på ett begränsat antal produkter som vi väljer att 
                    renodla – många importörer vill kunna erbjuda en massa olika produkter - hoppas Cadiz Food AB 
                    vara det <span style="text-decoration:underline">bästa alternativet</span> på den svenska marknaden.
                    </div>
                    
                    <div style="margin-top:20px;">
                    Bolaget ägs och drivs av tre personer med skilda bakgrunder – men som delar övertygelsen 
                    om att högkvalitativa livsmedelsprodukter från Nordafrika skulle vara ett välkommet 
                    tillskott till en svensk matmarknad som hungrar efter god och nyttig mat som spänner 
                    över världens matkulturer. Cadiz Food AB kommer dra sitt strå till stacken och arbeta 
                    ihärdigt för kunna leverera vad marknaden efterfrågar.                    
                    </div>
               </td>
              </tr>
              </table>    
              <?php }elseif($_POST['key']=='vision'){ ?>
              <table width="900">
              <tr>
                <td valign="top">
               
                    <div>
                      <b>Varför skall ni samarbeta med Cadiz Food AB?</b><br>
                      <ul>
                      <li>
                        Vi kommer att leverera produkter som tilltalar befintliga kunder samt lockar nya 
                        kundgrupper. Vår affärsidé är att introducera nya, spännande och högkvalitativa 
                        produkter till våra kunder i konkurrensutsatta branscher i livsmdelesindustrin. 
                      </li> 
                      <li style="margin-top:20px">
                        Cadiz Food AB kan erbjuda en kontinuerlig leverans av Deglet Noor dadlar av bästa 
                        kvalité under lång tid fram över. På så vis kommer era kunder känna igen både smaken 
                        och den goda kvalitén – detta skapar kunder som köper om och om igen.
                      </li> 
                      <li style="margin-top:20px">
                        Samtliga våra produkt är <b>100 % naturliga</b>, dvs. de innehåller inte eller har ej 
                        behandlats med tillsatser såsom socker, glukos eller sockerlösningar. De allra flesta 
                        dadlar som säljs i livsmedelsindustrin idag runt om i Europa är behandlade med 
                        tillsatser av något slag. Vi är mycket stolta av att kunna erbjuda en helt naturlig produkt.
                      </li> 
                      <li style="margin-top:20px">
                        Vår målsättning att specialisera oss på omsorgsfullt utvalda produkter gör oss till 
                        det självklara alternativet på Deglet Noor dadlar inom den europeiska livsmedeksindustri.
                      </li> 
                      </ul>
                    </div>
               </td>
              </tr>
              </table>    
              <?php }elseif($_POST['key']=='produkt'){ ?>
              <table width="900">
              <tr>
                <td valign="top">
               
                  <table border="0">
                    <tr>
                    <td valign="top" width="150">
                      <ul style="position:relative;left:-30px;list-style:circle;">
                      <li >
                          <a onFocus="blur()" href="products.php?key=div1" target="products1" style="text-decoration:none;font-size:13px" >Deglet&#160;Noor&#160;dadlar</a>
                      </li>
                      <li>
                          <a onFocus="blur()" href="products.php?key=div2" target="products1" style="text-decoration:none;font-size:13px" >Dadel&#160;pulver</a>
                      </li>
                      <li>
                          <a onFocus="blur()" href="products.php?key=div3" target="products1" style="text-decoration:none;font-size:13px" >Dadel&#160;massa</a>
                      </li>
                      <li>
                          <a onFocus="blur()" href="products.php?key=div4" target="products1" style="text-decoration:none;font-size:13px" >Certifieringar</a>
                      </li>
                      </ul>
                    </td>
                    <td>
                   <iframe onload="setIframeHeight('products1');" id="products1" name="products1" src="products.php" frameborder="no" width="750"></iframe>
                   </td>
                   </tr>
                  </table>
                                     
                 </td>
              </tr>
              </table>    
              <?php }elseif($_POST['key']=='nedladdningar'){ ?>
              <table width="900">
              <tr>
                <td valign="top">
                    
                    <div>
                      <b>Filer för nedladdning:</b><br> 
                    </div>
                    <ul class="ul3">
                      <li>
                        <a onFocus="blur()" href="img/nutrition-table1.jpg" style="text-decoration:none;color:black;font-size:13px" target="other">Näringstabell >></a>
                      </li>
                      <li style="margin-top:5px">
                        <a onFocus="blur()" href="docs/DateSugar.pdf" style="text-decoration:none;color:black;font-size:13px" target="other">Dadel Socker.pdf >></a>
                      </li>
                      <li style="margin-top:5px">
                        <a onFocus="blur()" href="docs/DatePaste.pdf" style="text-decoration:none;color:black;font-size:13px" target="other">Dadel Massa.pdf >></a>
                      </li>
                    </ul>

                 </td>
              </tr>
              </table>    
              <?php }elseif($_POST['key']=='kontakt'){ ?>
              <table width="900">
              <tr>
                <td valign="top">
                    
                    <div>                    
                      <b>Cadiz Food AB</b><br>
                      Kontaka oss<br>
                      Jim Boujrad<br>

                      Sales Manager <br>+46739346785<br><a href="mailto:sales@cadizfood.com" style="font-style:italic;font-size:13px;color:black">sales@cadizfood.com</a>
                    </div>

                 </td>
              </tr>
              </table>    
			<?php } } ?>
             
        </td>
      </tr>
      <tr><td><img src="img/1x1.gif" width="1" height="20"/></td></tr>      
      <tr>
        <td style="background:#e3dcdc">
             <b>Cadizfood AB</b> FJÄLLBRUDEN 80, 424 50 Angered, Västra Götalands län, Sverige.
             E-mail:
             <a href="mailto:sales@cadizfood.com" style="font-size:13px;color:black">sales@cadizfood.com</a>
        </td>
      </tr>
      </table>  
      
    </td>
  </tr>
  </table>
  
</body>
</html>