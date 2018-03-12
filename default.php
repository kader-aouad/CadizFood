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
                <a <?php if(isset($_POST['key'])) { if($_POST['key']=='vision') echo 'style="font-weight:bold"'; } ?> class="main" href="javascript: subForm('vision',document.form1.lang.value);" border="0" onFocus="blur()">Vision & m�ls�ttning</a>       
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
                      <b>Cadiz Food AB</b> �r ett bolag som har som aff�rsid� att s�lja h�gkvalitativa 
                      livsmedelsprodukter fr�n Nordafrika till den svenska marknaden. Produkterna skall 
                      i f�rsta hand k�nnetecknas av att de �r nyttiga och bra f�r h�lsan � i m�nga fall 
                      s� kommer vi ocks� att erbjuda ekologiska alternativ p� v�ra produkter.
                      </div>

                     <div style="margin-top:20px;">
                     Produkterna som vi erbjuder skall ha en outnyttjad potential hos den breda svenska 
                     befolkningen � men till viss m�n vara en inarbetad produkt i andra matkulturer � p� 
                     s� vis vill vi g�rna vara med och bygga aff�rsm�ssiga broar mellan olika matkulturer. 
                    </div>
                    
                    <div style="margin-top:20px;">
                    M�nga utav v�ra produktgrupper kanske redan idag finns eller s�ljs i handeln � men 
                    genom att hitta seri�sa i Nordafrika, som kan leva upp till den svenska livsmedelsindustrins 
                    krav p� socialt ansvar, milj� och kvalitet hoppas vi kunna erbjuda b�ttre produkter med en 
                    helt annan kontinuitet �n vad som finns idag. Kontinuitet och igenk�nnbarhet skall vara 
                    ledord som utg�r k�rnan i v�r verksamhet.
                    </div>
                    
                     <div style="margin-top:20px;">
                    Som ett resultat av satsningen p� ett begr�nsat antal produkter som vi v�ljer att 
                    renodla � m�nga import�rer vill kunna erbjuda en massa olika produkter - hoppas Cadiz Food AB 
                    vara det <span style="text-decoration:underline">b�sta alternativet</span> p� den svenska marknaden.
                    </div>
                    
                    <div style="margin-top:20px;">
                    Bolaget �gs och drivs av tre personer med skilda bakgrunder � men som delar �vertygelsen 
                    om att h�gkvalitativa livsmedelsprodukter fr�n Nordafrika skulle vara ett v�lkommet 
                    tillskott till en svensk matmarknad som hungrar efter god och nyttig mat som sp�nner 
                    �ver v�rldens matkulturer. Cadiz Food AB kommer dra sitt str� till stacken och arbeta 
                    ih�rdigt f�r kunna leverera vad marknaden efterfr�gar.                    
                    </div>
               </td>
              </tr>
              </table>    
              <?php }elseif($_POST['key']=='vision'){ ?>
              <table width="900">
              <tr>
                <td valign="top">
               
                    <div>
                      <b>Varf�r skall ni samarbeta med Cadiz Food AB?</b><br>
                      <ul>
                      <li>
                        Vi kommer att leverera produkter som tilltalar befintliga kunder samt lockar nya 
                        kundgrupper. V�r aff�rsid� �r att introducera nya, sp�nnande och h�gkvalitativa 
                        produkter till v�ra kunder i konkurrensutsatta branscher i livsmdelesindustrin. 
                      </li> 
                      <li style="margin-top:20px">
                        Cadiz Food AB kan erbjuda en kontinuerlig leverans av Deglet Noor dadlar av b�sta 
                        kvalit� under l�ng tid fram �ver. P� s� vis kommer era kunder k�nna igen b�de smaken 
                        och den goda kvalit�n � detta skapar kunder som k�per om och om igen.
                      </li> 
                      <li style="margin-top:20px">
                        Samtliga v�ra produkt �r <b>100 % naturliga</b>, dvs. de inneh�ller inte eller har ej 
                        behandlats med tillsatser s�som socker, glukos eller sockerl�sningar. De allra flesta 
                        dadlar som s�ljs i livsmedelsindustrin idag runt om i Europa �r behandlade med 
                        tillsatser av n�got slag. Vi �r mycket stolta av att kunna erbjuda en helt naturlig produkt.
                      </li> 
                      <li style="margin-top:20px">
                        V�r m�ls�ttning att specialisera oss p� omsorgsfullt utvalda produkter g�r oss till 
                        det sj�lvklara alternativet p� Deglet Noor dadlar inom den europeiska livsmedeksindustri.
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
                      <b>Filer f�r nedladdning:</b><br> 
                    </div>
                    <ul class="ul3">
                      <li>
                        <a onFocus="blur()" href="img/nutrition-table1.jpg" style="text-decoration:none;color:black;font-size:13px" target="other">N�ringstabell >></a>
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
             <b>Cadizfood AB</b> FJ�LLBRUDEN 80, 424 50 Angered, V�stra G�talands l�n, Sverige.
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