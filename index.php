<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Solving Linear Equations</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">


    <link rel="stylesheet" href="style.css" media="screen">

    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
    <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<style>
.art-content .art-postcontent-0 .layout-item-0 { background: ;  }
.art-content .art-postcontent-0 .layout-item-1 { padding: 10px;  }
.art-content .art-postcontent-0 .layout-item-2 { margin-top: 20px;margin-bottom: 0px;  }
.art-content .art-postcontent-0 .layout-item-3 { color: #262626; background:  url('images/a242b.png') no-repeat scroll; padding: 0px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

#art-main .art-sheet.clearfix .art-layout-wrapper.clearfix .art-content-layout .art-content-layout-row .art-layout-cell.art-content.clearfix .art-post.art-article .art-postcontent.art-postcontent-0.clearfix .art-content-layout-wrapper.layout-item-2 .art-content-layout .art-content-layout-row .art-layout-cell.layout-item-3 center table tr td #form1 table tr td {
	font-size: 18px;
}
#art-main .art-sheet.clearfix .art-layout-wrapper.clearfix .art-content-layout .art-content-layout-row .art-layout-cell.art-content.clearfix .art-post.art-article .art-postcontent.art-postcontent-0.clearfix .art-content-layout-wrapper.layout-item-2 .art-content-layout .art-content-layout-row .art-layout-cell.layout-item-3 center table tr td #form1 table {
	font-weight: bold;
}
    </style>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="art-main">
<header class="art-header clearfix">


    <div class="art-shapes">
<h1 class="art-headline" data-left="15.52%">
    <a href="#">Solving Linear Eqations in 2 variables!</a>
</h1>


<div class="art-object0" data-left="2.62%"></div>

            </div>

<nav class="art-nav clearfix">
    <div class="art-nav-inner">
    <ul class="art-hmenu">
    <li><a href="index.php" class="active">Home</a></li>
    <li><a href="User.php">How-To-Use</a></li>
    </ul> 
        </div>
    </nav>

                    
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout layout-item-0">
    <div class="art-content-layout-row">
    
    </div>
</div>
<div class="art-content-layout-wrapper layout-item-2">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-3" style="width: 100%" >
        <br style="line-height: 300px"><br><center>
<table width="508" height="76" border="0" align="center">
  <tr>
    <td width="502" align="left" valign="top"><form action="maths.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table width="487" border="0">
        <tr>
          <td colspan="6" align="center">Enter The Equations Below</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="center" valign="middle">x</td>
          <td align="center" valign="middle">&nbsp;</td>
          <td align="center" valign="middle">y</td>
          <td align="center" valign="middle">&nbsp;</td>
          <td align="center" valign="middle">z</td>
        </tr>
        <tr>
          <td width="127" align="center" valign="middle">Equation I:</td>
          <td width="107" align="center" valign="middle"><label for="a1"></label>
            <span id="sprytextfield1">
            <input name="a1" type="text" id="a1" size="5" />
            <span class="textfieldRequiredMsg">required</span><span class="textfieldInvalidFormatMsg">invalid</span></span></td>
          <td width="13" align="center" valign="middle"><label for="b1"></label></td>
          <td width="80" align="center" valign="middle"><span id="sprytextfield2">
          <input name="b1" type="text" id="b1" size="5" />
          <span class="textfieldRequiredMsg">required</span><span class="textfieldInvalidFormatMsg">invalid</span></span></td>
          <td width="52" align="center" valign="middle">= </td>
          <td width="82" align="center" valign="middle"><label for="c1"></label>
            <span id="sprytextfield3">
            <input name="c1" type="text" id="c1" size="5" />
            <span class="textfieldRequiredMsg">required</span><span class="textfieldInvalidFormatMsg">invalid</span></span></td>
        </tr>
        <tr>
          <td height="24" align="center" valign="middle">Equation II:</td>
          <td align="center" valign="middle"><span id="sprytextfield4">
          <input name="a2" type="text" id="a2" size="5" />
          <span class="textfieldRequiredMsg">required</span><span class="textfieldInvalidFormatMsg">invalid</span></span></td>
          <td align="center" valign="middle">&nbsp;</td>
          <td align="center" valign="middle"><span id="sprytextfield5">
          <input name="b2" type="text" id="b2" size="5" />
          <span class="textfieldRequiredMsg">required</span><span class="textfieldInvalidFormatMsg">invalid</span></span></td>
          <td align="center" valign="middle">= </td>
          <td align="center" valign="middle"><span id="sprytextfield6">
          <input name="c2" type="text" id="c2" size="5" />
          <span class="textfieldRequiredMsg">required</span><span class="textfieldInvalidFormatMsg">invalid</span></span></td>
        </tr>
        <tr>
          <td height="67">&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="2"><input name="Attempt" type="submit" class="art-button" id="Attempt" value="Solution" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
</table></center>
    </div>
    </div>
</div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    
    </div>
</div>
</div>
                                
                </article></div>
                    </div>
                </div>
            </div>
    </div>
<footer class="art-footer clearfix">
  <div class="art-footer-inner">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 50%">
        <p>© shivam_007 <i>on topcoder</i> </p>
    </div>
    </div>
</div>

    <p class="art-page-footer">
     
    </p>
  </div>
</footer>

</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "real", {validateOn:["blur", "change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "real", {validateOn:["blur", "change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "real", {validateOn:["blur", "change"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "real", {validateOn:["blur", "change"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "real", {validateOn:["blur", "change"]});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "real", {validateOn:["blur", "change"]});
</script>
</body></html>