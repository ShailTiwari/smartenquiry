
<!DOCTYPE html>
<html>
	<head> <link href="<?php echo base_url('backend_assets/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
<style type="text/css">
	.demo{
height: 100%;
	}
</style>
	</head>
<body style="font-family: ind_hi_1_001; ">
	<!-- <tr>
     <td class="text-left"  rowspan="6" > 
          <img src="<?php echo base_url('backend_assets/plugins/images/company/kumar.png');?>" width="85"  alt="home" class="light-logo" />
       </td>
     </tr> -->

     <?php /*print_r($enquiry_profile);*/  foreach($enquiry_profile  as $key =>$c)  {  ?>
	<form  action="<?php echo base_url('NPDCchart/pdf_file'); ?>" class="form" method="post">
<!-- 		<button type="submit" value="submit" class="btn btn-primary" name="btn_print" style="padding-left: 20px; height: 40px; width: 90px;">PDF</button>
 -->	<div>
		<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 14pt;"><strong><span style=""> <?php echo $company_name  ?></span></strong></p>
		<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 13pt;"><strong><u><span style="">NEW PRODUCT DEVELOPMENT CHECKLIST</span></u></strong></p>
		<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 11pt;"><strong><span style="">(CARD / TUCK / CARTON / CORRUGATION/ RIGID BOX)</span></strong></p>
		<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 5pt;"><span style="">&nbsp;</span></p>
		<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10pt;"><span style="">Format No. : FT/SA/03</span><span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="">Revision No.: 01</span><span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="">Date of Issue: 01.01.2019</span><span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="">Date of Revision: 01.01.2019 </span></p>
	   </div>
	<p style="margin-top: 0pt; margin-bottom: 10pt; line-height: 115%; font-size: 1pt;"><span style="">&nbsp;</span></p>

	<table  style="border-collapse: collapse; width: 100%" cellspacing="0" cellpadding="0">
		<tbody>
			<tr style="line-height: 2.6; height: 8.5pt;">
				<td  style="width: 64.8pt; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" rowspan="3">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><span style="">NPDC</span></p>
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><span style="">Flow Chart</span></p>
				</td>
				<td style="width: 396pt; border-top-style: solid; border-top-width: 0.75pt; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="12">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><em><u><span style=" font-size: 12;">To be Filled By Marketing Person</span></u></em></strong></p>
				</td>
				<td style="width: 71.1pt; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" rowspan="3">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><span style="">Process Flow Chart</span></p>
				</td>
			</tr>
			


			<tr style="line-height: 2.6; height: 26.5pt;">
				<td style="width: 396pt; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="12">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: justify; font-size: 10.5pt;"><strong><span style="">Name of Customer: </span><span style="font-size: 14px; font-weight: bold;"><?php echo $c->CompanyName  ?></span></strong></p>
				</td>
			</tr>




			<tr style="line-height: 2.6; height: 18.4pt;">
				<td style="width: 396pt; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="12">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: justify; font-size: 10.5pt;"><strong><span style="">Name of Job:</span></strong><span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style=""></span><span style="font-size: 14px; font-weight: bold;"><?php echo $c->ProductName  ?></span></p>

				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: justify; font-size: 10.5pt;"><strong><span style="">Client Code:</span></strong><span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style=""></span><span style="font-size: 14px; font-weight: bold;"><?php echo $c->ProductCode  ?></span></p>
				</td>


			</tr>


			



			<tr style="line-height: 2.6; height: 35.5pt;">
				<td style="width: 64.8pt; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" rowspan="23">
				<div style="width: 100%; display: inline-block; overflow: visible;">

				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 11pt;">

				<div style="height: 100px; text-align: left; border-style: 1px solid">
					<img style="margin-top: 10.66pt; margin-left: 4.07pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/a.png"; ?>" alt="" width="83" height="50" />
			        <!-- <input class="demo" type="text" name="sales&mktg" placeholder="SALES&MKTG" value="SALES&MKTG" style="margin-top: -203.66pt; margin-left: 4.07pt; position: absolute; color: #000; width: 122px; height: 50px"> -->
				</div>
				<div style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 5;">
					<img style="margin-top: -2.6pt; margin-left: 30.07pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/h.png"; ?>" alt="" width="8" height="20" />
				  <!-- <div style="margin-top: -166.31pt; margin-left: 31.9pt; position: absolute; width: 8px; height: 28px; font-size: 20px;">&#8595;</div> -->
				</div>
				</p>

				<p style="margin-top: 500pt; margin-bottom: 0pt; font-size: 11pt;">
					<span style="height: 0pt; display: block; position: absolute; z-index: 15;">
						<img style="margin-top: 1.66pt; margin-left: 2.07pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/c.png"; ?>" alt="" width="83" height="40" />
						<!-- <input type="text" name="PREPRES" placeholder="PREPRES" value="PREPRES" style="margin-top: -149.46pt; margin-left: 0.43pt; position: absolute; color: #000; width: 122px; height: 31px"> -->
				  </span>
				<span style="">&nbsp;</span>
			   </p>
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;">
					<span style="">&nbsp;</span>
				</p>
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;">
					<span style="">Initial</span>
				</p>
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;">
					<span style="height: 0pt; display: block; position: absolute; z-index: 37;">
						<img style="margin-top: -40.6pt;  margin-left: 30.07pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/d.png"; ?>" alt="" width="7" height="20" />
						 <!-- <span style="margin-top: -154.39pt; margin-left: 32.9pt; position: absolute; width: 8px; height: 23px; font-size: 20px;">&#8597;</span>	  -->
					</span>
					<span style="height: 0pt; display: block; position: absolute; z-index: 6;">
						<img style="margin-top: -8.66pt; margin-left: 6.07pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/f.png"; ?>" alt="" width="83" height="35" />
                        <!-- <input type="text" name="PRODMEETING" placeholder="PROD.MEETING" value="PROD.MEETING" style="margin-top: -136.96pt;  position: absolute; color: #000; width: 91px; height: 35px"> -->
					</span>
					<span style="">&nbsp;</span>
				</p>
				<!-- <p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;">
					<span style="">Initial</span>
				</p> -->
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;">
					<span style="height: 0pt; display: block; position: absolute; z-index: 3;">
						<img style="margin-top: -110.6pt; margin-left: 64.07pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/e.png"; ?>" alt="" width="8" height="92" />
						<!-- <span style="margin-top: -133.96pt; margin-left: 25.82pt; position: absolute; width: 87px; height: 46px;">&#8595;</span> -->
					</span>
					<span style="">&nbsp;</span>
				</p>
				<!-- <p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;">
					<span style="">&nbsp;</span>
				</p>
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;">
					<span style="">&nbsp;</span>
				</p> -->
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;">
					<span style="height: 0pt; display: block; position: absolute; z-index: 4;">
						<img style="margin-top: -30.6pt; margin-bottom:40.6pt;  margin-left: 2.07pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/g.png"; ?>" alt="" width="83" height="25" />
						<!-- <input type="text" name="Finaloutput" placeholder="FINALOUTPUT" value="FINALOUTPUT" style="margin-top: -160.16pt;  position: absolute; color: #000; width: 122px; height: 47px"> -->
						
					</span>
					<span style="">&nbsp;</span>
				</p>
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;">
					<span style="">&nbsp;</span>
				</p>
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;">
					<span style="height: 0pt; display: block; position: absolute; z-index: 12;">
						<img style="margin-top: -65.6pt; margin-bottom: 50pt; margin-left: 25.07pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/h.png"; ?>" alt="" width="8" />
						<!-- <img style="margin-top: -28.21pt; margin-left: 26.37pt; position: absolute;" src="<?php echo base_url()."/ImageUplode/h.png"; ?>" alt="" width="8" height="2" /> -->
							<!-- <span style="margin-top: -157.21pt; margin-left: 26.37pt; position: absolute; width: 8px; height: 30px;">&#8595;</span> -->
					
					</span><span style="">&nbsp;</span>
				</p>
				<p style="margin-top: 10pt; margin-bottom: 0pt; font-size: 11pt;">
					<span style="">&nbsp;</span>
				</p>
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;">
					<span style="height: 0pt; display: block; position: absolute; z-index: 11;">
						<img style="margin-top: -65.6pt; margin-bottom: 60pt; margin-left: 2.07pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/i.png"; ?>" alt="" width="83" height="20" />
						<!-- <input type="text" name="planning" placeholder="PLANNING" value="PLANNING" style="margin-top: -159.41pt; margin-left: -3.32pt; position: absolute; color: #000; width: 122px; height: 27px"> -->
					
					</span>
					<span style="height: 0pt; display: block; position: absolute; z-index: 8;">
						<img style="margin-top: -63.21pt; margin-bottom: 45pt; margin-left: 28.37pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/h.png"; ?>" alt="" width="8" height="2" />
						<!-- <span style="margin-top: -138.96pt; margin-left: 26.55pt; position: absolute; width: 8px; height: 66px;">&#8595;</span> -->
						
					</span>
					<span style="height: 0pt; display: block; position: absolute; z-index: 7;">
						<img style="margin-top: -60.6pt; margin-bottom: 40pt;  margin-left: 2.07pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/k.png"; ?>" alt="" width="83" height="65" />
						<!-- <input type="text" name="prodprocess(printing)" placeholder="PRODPROCESS(PRINTING)"  value="PRODPROCESS(PRINTING)" style="margin-top: -90.36pt; margin-left: -2.92pt; position: absolute; color: #000; width: 122px; height: 89px"> -->
						
					</span>
					<span style="height: 0pt; display: block; position: absolute; z-index: 10;">
						<img style="margin-top: -43.21pt; margin-bottom: 36pt; margin-left: 26.37pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/h.png"; ?>" alt="" width="8" height="2" />
						<!-- <span style="margin-top: -24.66pt; margin-left: 26.69pt; position: absolute; width: 8px; height: 44px;">&#8595;</span> -->
						
					</span>
					<span style="height: 0pt; display: block; position: absolute; z-index: 9;">
						<img style="margin-top: -40.6pt; margin-bottom: 30pt; margin-left: 2.07pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/m.png"; ?>" alt="" width="90" height="70" />
						<!-- <input type="text" name="QUALITYCONTROL(FINALSIMPLE)" placeholder="QUALITYCONTROL(FINALSIMPLE)" value="QUALITYCONTROL(FINALSIMPLE)" style="margin-top: 9.29pt; margin-left: -2.82pt; position: absolute; color: #000; width: 122px; height: 111px"> -->
						
					<span style="height: 0pt; display: block; position: absolute; z-index: 14;">
						<img style="margin-top: -32.21pt; margin-bottom: 25pt; margin-left: 26.37pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/h.png"; ?>" alt="" width="8" height="2" />
						<!-- <span style="margin-top: 92.69pt; margin-left: 26.35pt; position: absolute; width: 8px; height: 37px;" height="20%">&#8595;</span> -->
						
					</span>
					<span style="height: 0pt; display: block; position: absolute; z-index: 13;">
						<img style="margin-top: -30.6pt; margin-bottom: 30pt; margin-left: 2.07pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/o.png"; ?>" alt="" width="83" height="76" />
						<!-- <input type="text" name="POINTNO1(SALES&MKTG)" placeholder="POINTNO1(SALES&MKTG)" value="POINT NO.1(SALES&MKTG)" style="margin-top: 119.14pt; margin-left: 0.23pt; position: absolute; color: #000; width: 122px; height: 76px"> -->
					
					</span>
					<span style="">&nbsp;</span>
				</p>
				</div>
				</td>
				<td style="width: 76.5pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: middle;" colspan="2">

				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;">
					<strong><span style="">Requested By:</span></strong>
				</p>
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;">
					<strong><span style="">(Mktg.)</span></strong>
				</p>

				</td>
				<td style="width: 106.2pt; padding-right: 5.4pt; padding-left: 5.4pt; vertical-align: bottom;" colspan="3">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;">
					<span style="font-size: 14px; font-weight: bold;"><?php echo $c->empname  ?>..</span>
				</p>
				</td>
				<td style="width: 70.2pt; padding-right: 5.4pt; padding-left: 5.4pt; vertical-align: bottom;" colspan="6">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style="">Approved By: (MD/VP)</span></strong></p>
				</td>
				<td style="width: 110.7pt; border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: bottom;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><span style="font-size: 14px; font-weight: bold;"><?php echo $c->ContactPerson  ?>..</span></p>
				</td>
				<td style="width: 71.1pt; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" rowspan="23">
				<div style="width: 100%; height: 35.5pt; display: inline-block; overflow: visible;">
				<p style="margin-top:-20.0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;">
	               <span style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 24;">
	            	     <img style="margin-top: -20.41pt; margin-left: -0.37pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/p.png"; ?>" alt="" width="94" height="44" />
	               </span>
				
					<span style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 19;">
						<img style="margin-top: -2.44pt; margin-left: 32.35pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/h.png"; ?>" alt="" width="8" height="9" />
					</span>
					<span style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 23;">
						<img style="margin-top: -2.64pt; margin-left: -0.12pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/p.png"; ?>" alt="" width="94" height="44" />
					</span>
					<span style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 18;">
						<img style="margin-top: -2.44pt; margin-left: 32.35pt; position: absolute;" src="<?php echo base_url()."backend_assets/plugins/images/npdcimg/h.png"; ?>" alt="" width="8" height="9" />
						<!-- <span style="margin-top: -172.49pt; margin-left: 32.85pt; position: absolute; width: 8px; height: 19px;">&#8595;</span> -->
						
					</span>
					<span style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 22;">
						<img style="margin-top: -2.64pt; margin-left: -0.12pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/p.png"; ?>" alt="" width="94" height="44" />
						<!-- <input type="text"  value="" style="margin-top: -157.69pt; margin-left: -0.62pt; position: absolute; color: #000; width: 94px; height: 44px"> -->
						
					</span>
					<span style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 17;">
						<img style="margin-top: -2.44pt; margin-left: 32.35pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/h.png"; ?>" alt="" width="8" height="9" />
						<!-- <span style="margin-top: -125.54pt; margin-left: 32.6pt; position: absolute; width: 8px; height: 19px;">&#8595;</span> -->
						
					</span>
					<span style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 21;">
						<img style="margin-top: -2.64pt; margin-left: -0.12pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/p.png"; ?>" alt="" width="94" height="44" />
                       <!-- <input type="text"  value="" style="margin-top: -111.74pt; margin-left: -0.62pt; position: absolute; color: #000; width: 94px; height: 44px">						 -->
                       
					</span>
					<span style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 16;">
						<img style="margin-top: -2.44pt; margin-left: 32.35pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/h.png"; ?>" alt="" width="8" height="9" />
						<!-- <span style="margin-top: -78.59pt; margin-left: 32.1pt; position: absolute; width: 8px; height: 19px;">&#8595;</span> -->
			
					</span>
					<span style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 20;">

						<img style="margin-top: -2.64pt; margin-left: -0.12pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/p.png"; ?>" alt="" width="94" height="44" />
						<!-- <input type="text"  value="" style="margin-top: -63.79pt; margin-left: -0.62pt; position: absolute; color: #000; width: 94px; height: 44px"> -->
				
					</span>
					<span style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 30;">
						<img style="margin-top: -2.44pt; margin-left: 32.35pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/h.png"; ?>" alt="" width="8" height="9" />
						<!-- <span style="margin-top: -29.64pt; margin-left: 32.35pt; position: absolute; width: 8px; height: 19px;">&#8595;</span> -->
						
					</span>
					<span style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 36;">
						<img style="margin-top: -2.64pt; margin-left: -0.12pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/p.png"; ?>" alt="" width="94" height="44" />
						<!-- <input type="text"  value="" style="margin-top: -14.84pt; margin-left: -0.37pt; position: absolute; color: #000; width: 94px; height: 44px"> -->

					</span>
					<span style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 29;">
						<img style="margin-top: -2.44pt; margin-left: 32.35pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/h.png"; ?>" alt="" width="8" height="9" />
						<!-- <span style="margin-top: 17.31pt; margin-left: 31.35pt; position: absolute;width: 8px; height: 19px;">&#8595;</span> -->

					</span>
					<span style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 35;">
						<img style="margin-top: -2.64pt; margin-left: -0.12pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/p.png"; ?>" alt="" width="94" height="44" />
						<!-- <input type="text"  value="" style="margin-top: 32.11pt; margin-left: -0.37pt; position: absolute; color: #000; width: 94px; height: 44px"> -->
						
					</span>
					<span style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 27;">
						<img style="margin-top: -2.44pt; margin-left: 32.35pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/h.png"; ?>" alt="" width="8" height="9" />
						<!-- <span style="margin-top: 65.26pt; margin-left: 30.85pt; position: absolute; width: 8px; height: 19px;">&#8595;</span> -->
						
					</span>
					<span style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 31;">
						<img style="margin-top: -2.64pt; margin-left: -0.12pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/p.png"; ?>" alt="" width="94" height="44" />
                        <!-- <input type="text"  value="" style="margin-top: 79.96pt; margin-left: -0.12pt; position: absolute; color: #000; width: 94px; height: 44px">						 -->
                      
					</span>
					<span style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 28;">
						<img style="margin-top: -2.44pt; margin-left: 32.35pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/h.png"; ?>" alt="" width="8" height="9" />
						<!-- <span style="margin-top: 113.11pt; margin-left: 30.6pt; position: absolute; width: 8px; height: 19px;">&#8595;</span> -->
					
					</span>
					<span style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 34;">
						<img style="margin-top: -2.64pt; margin-left: -0.12pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/p.png"; ?>" alt="" width="94" height="44" />
						<!-- <input type="text"  value="" style="margin-top: 126.91pt; margin-left: 0.38pt; position: absolute; color: #000; width: 94px; height: 44px"> -->
				
					</span>
					<span style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 26;">
						<img style="margin-top: -2.44pt; margin-left: 32.35pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/h.png"; ?>" alt="" width="8" height="9" />
						<!-- <span style="margin-top: 160.79pt; margin-left: 26.37pt; position: absolute; width: 8px; height: 19px;">&#8595;</span> -->
						
					</span>
					<span style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 33;">
						<img style="margin-top: -2.64pt; margin-left: -0.12pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/p.png"; ?>" alt="" width="94" height="44" />
						<!-- <input type="text"  value="" style="margin-top: 172.86pt; margin-left: -0.12pt; position: absolute; color: #000; width: 94px; height: 44px"> -->
					
					</span>
					<!-- <span style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 25;">
						<img style="margin-top: -2.44pt; margin-left: 32.35pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/h.png"; ?>" alt="" width="8" height="9" />
						<span style="margin-top: 207.01pt; margin-left: 30.85pt; position: absolute; width: 8px; height: 19px;">&#8595;</span>
					
					</span>
					<span style="height: 0pt; text-align: left; display: block; position: absolute; z-index: 32;">
						<img style="margin-top: -2.64pt; margin-left: -0.12pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/p.png"; ?>" alt="" width="94" height="44" />
						<input type="text"   value="" style="margin-top: 218.81pt; margin-left: -0.37pt; position: absolute; color: #000; width: 94px; height: 44px">
					
					</span> -->
					<span style="">&nbsp;</span></p>
				</div>
				</td>
			</tr>


			<tr style="line-height: 2.6; height: 30.1pt;">
				
				<td style="width: 85.5pt; border-top-style: solid;border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: bottom;" colspan="3">
				<p style="">
					<strong><span style="">Client Code:</span></strong>
				</p>
				</td>
				<td style="width: 178.2pt; border-top-style: solid; padding-right: 5.4pt; padding-left: 5.4pt; vertical-align: bottom;" colspan="8">
				<p style="">
					<span style="font-size: 14px; font-weight: bold;"><?php echo $c->ProductCode  ?></span>
				</p>
				</td>

				<td style="width: 110.7pt; border-top-style: solid;  border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: bottom;">
				<p style=""><span style="">Client Code: </span>
				<span style="font-size: 14px; font-weight: bold;"><?php echo $c->ProductCode  ?> </span>
			    </p>
				</td>


			</tr>



			<tr style="line-height: 2.6; height: 30.1pt;">
				
				<td style="width: 85.5pt; border-top-style: solid;border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: bottom;" colspan="3">
				<p style="">
					<strong><span style="">Type of Job:</span></strong>
				</p>
				</td>
				<td style="width: 178.2pt; border-top-style: solid; padding-right: 5.4pt; padding-left: 5.4pt; vertical-align: bottom;" colspan="8">
				<p style="">
					<span style="font-size: 14px; font-weight: bold;"><?php echo $c->CartonType  ?></span>
				</p>
				</td>

				<td style="width: 110.7pt; border-top-style: solid;  border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: bottom;">
				<p style=""><span style="">Client Code: </span>
				<span style="font-size: 14px; font-weight: bold;"><?php echo $c->ProductCode  ?> </span>
			    </p>
				</td>


			</tr>





			<tr style="line-height: 2.6; height: 22pt;">
				<td style="width: 85.5pt; border-top-style: solid; border-top-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: bottom;" colspan="3">
				<p style="">
					<strong><span style="">Substrate Detail:</span></strong>
				</p>
				</td>
				<td style="width: 178.2pt; border-top-style: solid; border-top-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.4pt; vertical-align: bottom;" colspan="8">
				<p style="">
					<span style="font-size: 14px; font-weight: bold;"><?php echo $c->PaperType  ?></span>
				</p>
				</td>

				<td style="width: 110.7pt; border-top-style: solid; border-top-width: 0.75pt; border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: bottom;">
				<p style=""><span style="">GSM: </span>
				<span style="font-size: 14px; font-weight: bold;"><?php echo $c->Gsm  ?> </span>
			    </p>
				</td>
			</tr>



			
			<tr style="line-height: 2.6; height: 30.1pt;">
				<td style="width: 85.5pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: middle;" colspan="3">
				<p style=""><strong><span style="">Coating Type:</span></strong></p>
				</td>
				<td style="width: 299.7pt; border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: middle;" colspan="9">
				<p style=""><span style="font-size: 14px; font-weight: bold;"><?php echo $c->coating  ?></span></p>
				</td>
			</tr>




			<tr style="line-height: 2.6; height: 30.1pt;">
				<td style="width: 85.5pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: middle;" colspan="3">
				<p style=""><strong><span style="">Coating Details:</span></strong></p>
				</td>
				<td style="width: 299.7pt; border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: middle;" colspan="9">
				<p style=""><span style="font-size: 14px; font-weight: bold;"><?php echo $c->coating_remarks  ?></span></p>
				</td>
			</tr>




			<tr style="line-height: 2.6; height: 30.1pt;">
				<td style="width: 85.5pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: middle;" colspan="3">
				<p style=""><strong><span style="">Other Process:</span></strong></p>
				</td>



				<td style="width: 299.7pt; border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: middle;" colspan="9">
				<p style=""><span style="font-size: 14px; font-weight: bold;"><?php echo $c->OtherRemark  ?></span></p>
				</td>
			</tr>



			<tr style="line-height: 2.6; height: 22pt;">
				<td style="width: 85.5pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: middle;" colspan="3">
				<p style=""><strong><span style="">Type of Proof:</span></strong></p>
				</td>
				<td style="width: 299.7pt; border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: middle;" colspan="9">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;"><span style="font-size: 14px; font-weight: bold;"><?php echo $c->typeofproof  ?></span></p>
				</td>
			</tr>
			<tr style="line-height: 2.6; height: 22pt;">
				<td style="width: 85.5pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: middle;" colspan="3">
				<p style=""><strong><span style="">Prod. Details</span></strong></p>
				</td>
				<td style="width: 152.1pt; padding-right: 5.4pt; padding-left: 5.4pt; vertical-align: middle;" colspan="6">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;"><span style="font-size: 14px; font-weight: bold;">Qty. Req.<?php echo $c->Quantity  ?>.</span></p>
				</td>
				<td style="width: 136.8pt; border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: middle;" colspan="3">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;">
					<span style="">Delivery Date:</span>
					<span style="font-size: 14px; font-weight: bold;"><?php echo $c->delivery_date  ?></span></p>
				</td>
			</tr>
			<tr style="line-height: 2.6; height: 27.4pt;">
				<td style="width: 85.5pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: middle;" colspan="3">
				<p style=""><strong>
					<span style="">Sample Ref.</span></strong>
				</p>
				</td>

				<td style="width: 299.7pt; border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: middle;" colspan="9">

				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;">
					<span style="font-size: 14px; font-weight: bold;"><?php echo $c->samplereference  ?></span>
				</p>
				</td>
			</tr>


			<tr style="line-height: 2.6; height: 17.5pt;">
				<td style="width: 85.5pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: middle;" colspan="3">
				<p style=""><strong><span style="">Color Reference: </span></strong></p>
				</td>
				<td style="width: 299.7pt; border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: middle;" colspan="9">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;"><span style="font-size: 14px; font-weight: bold;"><?php echo $c->printing  ?></span></p>
				</td>
			</tr>
			<tr style="line-height: 2.6; height: 31pt;">
				<td style="width: 396pt; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="12">
				<p style=""><strong><span style="">Any other comment customer / marketing :</span></strong>
				<span style="font-size: 14px; font-weight: bold;"><?php echo $c->ClientRemark ?></span></p>
				</td>
			</tr>


			<tr style="line-height: 2.6; height: 17.5pt;">
				<td style="width: 85.5pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style=""><strong><span style="">Other Inputs Req.: </span></strong></p>
				</td>
				<td style="width: 299.7pt; border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: middle;" colspan="8">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;"><span style="font-size: 14px; font-weight: bold;"><?php echo $c->printing  ?></span></p>
				</td>
			</tr>



              <tr style="line-height: 2.6; height: 17.5pt;">
				<td style="width: 85.5pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style=""><strong><span style="">Lamination: </span></strong></p>
				</td>
				<td style="width: 299.7pt; border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: middle;" colspan="8">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;"><span style="font-size: 14px; font-weight: bold;"><?php echo $c->lamination  ?></span></p>
				</td>
			</tr>



              <!-- <tr style="line-height: 2.6; height: 17.5pt;">
				<td style="width: 85.5pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style=""><strong><span style="">Lamination Grade: </span></strong></p>
				</td>
				<td style="width: 299.7pt; border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: middle;" colspan="8">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;"><span style="font-size: 14px; font-weight: bold;"><?php echo $c->lamination_remarks  ?></span></p>
				</td>
			</tr> -->




              <!-- <tr style="line-height: 2.6; height: 17.5pt;">
				<td style="width: 85.5pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style=""><strong><span style="">Metpet Lamination: </span></strong></p>
				</td>
				<td style="width: 299.7pt; border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: middle;" colspan="8">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;"><span style="font-size: 14px; font-weight: bold;"><?php echo $c->metpat_lamination  ?></span></p>
				</td>
			</tr> -->


              <tr style="line-height: 2.6; height: 17.5pt;">
				<td style="width: 85.5pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style=""><strong><span style="">Corrugation: </span></strong></p>
				</td>
				<td style="width: 299.7pt; border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: middle;" colspan="8">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;"><span style="font-size: 14px; font-weight: bold;"><?php echo $c->corrugation  ?></span></p>
				</td>
			</tr>



			 <tr style="line-height: 2.6; height: 17.5pt;">
				<td style="width: 85.5pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style=""><strong><span style="">Corrugation Details: </span></strong></p>
				</td>
				<td style="width: 299.7pt; border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: middle;" colspan="8">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;"><span style="font-size: 14px; font-weight: bold;"><?php echo $c->corrugation_remarks  ?></span></p>
				</td>
			</tr>



			 <tr style="line-height: 2.6; height: 17.5pt;">
				<td style="width: 85.5pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style=""><strong><span style="">Punching: </span></strong></p>
				</td>
				<td style="width: 299.7pt; border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: middle;" colspan="8">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;"><span style="font-size: 14px; font-weight: bold;"><?php echo $c->punching  ?></span></p>
				</td>
			</tr>

			 <tr style="line-height: 2.6; height: 17.5pt;">
				<td style="width: 85.5pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style=""><strong><span style="">Punching Details: </span></strong></p>
				</td>
				<td style="width: 299.7pt; border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: middle;" colspan="8">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;"><span style="font-size: 14px; font-weight: bold;"><?php echo $c->punching_remarks  ?></span></p>
				</td>
			</tr>

			
			<tr style="line-height: 2.6; height: 16.6pt;">
				<td style="width: 396pt; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="12">
				<p style=""><span style="">&nbsp;</span></p>
				</td>
			</tr>
			<tr style="line-height: 2.6; height: 16.6pt;">
				<td style="width: 396pt; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="12">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><u><span style="">CORRUGATION FLUTE DIRECTION WITH RESPECT TO FRONT FACE OF DIRECTION </span></u></strong></p>
				</td>
			</tr>
			<tr style="line-height: 2.6; height: 52.15pt;">
				<td style="width: 238.5pt; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="8">
				<div style="width: 100%; height: 52.15pt; display: inline-block; overflow: visible;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 4.5pt;">
					<span style="height: 0pt; display: block; position: absolute; z-index: 0;"><img style="margin-top: 5.56pt; margin-left: 3.53pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/1.png"; ?>" alt="" width="140" height="56" /></span>
					<span style="height: 0pt; display: block; position: absolute; z-index: 1;"><img style="margin-top: 10.21pt; margin-left: 123.93pt; position: absolute;" src="<?php echo base_url()."/backend_assets/plugins/images/npdcimg/2.png"; ?>" alt="" width="140" height="56" /></span>
					<span style="">&nbsp;</span></p>
				</div>
				</td>
				<td style="width: 146.7pt; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style=""><span style="">Quality Approval:</span></p>
				<p style=""><span style="">&nbsp;</span></p>
				<p style=""><span style="">&nbsp;</span></p>
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 2.5pt;"><span style="">&nbsp;</span></p>
				<p style=""><span style="">Sign:</span></p>
				</td>
			</tr>
			<tr style="line-height: 2.6; height: 16.6pt;">
				<td style="width: 238.5pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: middle;" colspan="8">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10pt;"><strong><em><u><span style="">According to this grain should be taken</span></u></em></strong></p>
				</td>
				<td style="width: 146.7pt; border-top-style: solid; border-top-width: 0.75pt; border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: middle;" colspan="4">
				<p style=""><span style="">&nbsp;</span></p>
				</td>
			</tr>
			<tr style="line-height: 2.6; height: 16.6pt;">
				<td style="width: 112.5pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: bottom;" colspan="4">
				<p style=""><span style="">Customer Specific Test</span></p>
				<p style=""><span style="">(If any):</span></p>
				</td>
				<td style="width: 272.7pt; border-right-style: solid; border-right-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: bottom;" colspan="8">
				<p style=""><span style="">&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.</span></p>
				</td>
			</tr>
			<tr style="line-height: 2.6; height: 40.6pt;">
				<td style="width: 112.5pt; border-left-style: solid; border-left-width: 0.75pt; border-bottom-style: solid; border-bottom-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: bottom;" colspan="4">
				<p style=""><span style="">Any Specific Details :</span></p>
				</td>
				<td style="width: 272.7pt; border-right-style: solid; border-right-width: 0.75pt; border-bottom-style: solid; border-bottom-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: bottom;" colspan="8">
				<p style=""><span style="">&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..</span></p>
				</td>
			</tr>
			
			<tr style="line-height: 2.6; height: 0pt;">
				<td style="width: 75.6pt;">&nbsp;</td>
				<td style="width: 42.3pt;">&nbsp;</td>
				<td style="width: 45pt;">&nbsp;</td>
				<td style="width: 9pt;">&nbsp;</td>
				<td style="width: 27pt;">&nbsp;</td>
				<td style="width: 81pt;">&nbsp;</td>
				<td style="width: 4.5pt;">&nbsp;</td>
				<td style="width: 9pt;">&nbsp;</td>
				<td style="width: 31.5pt;">&nbsp;</td>
				<td style="width: 9.9pt;">&nbsp;</td>
				<td style="width: 8.1pt;">&nbsp;</td>
				<td style="width: 18pt;">&nbsp;</td>
				<td style="width: 121.5pt;">&nbsp;</td>
				<td style="width: 81.9pt;">&nbsp;</td>

			</tr>
		</tbody>
	</table>
	<p style="margin-top: 0pt; margin-bottom: 10pt; line-height: 115%; font-size: 5pt;"><span style="">&nbsp;</span></p>
	<p style="margin-top: 0pt; margin-bottom: 10pt; line-height: 115%; font-size: 5pt;"><span style="">&nbsp;</span></p>
	<p style="margin-top: 0pt; margin-bottom: 10pt; line-height: 115%; font-size: 5pt;"><span style="">&nbsp;</span></p>
	<!-- <p style="margin-top: 0pt; margin-bottom: 10pt; line-height: 115%; font-size: 5pt;"><span style="">&nbsp;</span></p> -->
	<p style="margin-top: 0pt; margin-bottom: 10pt; line-height: 115%; font-size: 5pt;"><span style="">&nbsp;</span></p>
      <div>
		<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 14pt;"><strong><span style=""> <?php echo $company_name  ?></span></strong></p>
		<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 13pt;"><strong><u><span style="">NEW PRODUCT DEVELOPMENT CHECKLIST</span></u></strong></p>
		<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 11pt;"><strong><span style="">(CARD / TUCK / CARTON / CORRUGATION/ RIGID BOX)</span></strong></p>
		<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 5pt;"><span style="">&nbsp;</span></p>
		<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10pt;"><span style="">Format No. : KPPL/FT/SA/03</span><span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="">Revision No.: 01</span><span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="">Date of Issue: 15.09.2016</span><span style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span style="">Date of Revision: 07.12.2016 </span></p>
	   </div>
	<p style="margin-top: 0pt; margin-bottom: 10pt; line-height: 115%; font-size: 1pt;"><span style="">&nbsp;</span></p>

	<table style="border-collapse: collapse; width: 100%; height: 100%" cellspacing="0" cellpadding="0">
		<tbody>
			<tr style="line-height: 2.6; height: 50.3pt;">
				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="6">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 11pt;">
				<strong><span style="">Delivery Date (By Marketing): </span></strong><span style="">&hellip;&hellip;&hellip;.&hellip;&hellip;&hellip;&hellip;</span>
			    </p>
				</td>

				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4" rowspan="2">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 11pt;"><strong><span style="">Signature of Marketing: </span></strong><span style="">&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;</span></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 12.15pt;">
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="6">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;"><strong><span style="">Carton Pasting Checking for Machine Run: </span></strong><span style="">YES /NO</span></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 4.25pt;">
				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle; background-color: #bfbfbf;" colspan="10">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 11pt; padding-left: 50.03pt;"><strong><span style=""><center>NEW SPECIAL PROCESS / DEVELOPMENT</center></span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 23.35pt;">
				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="10">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;"><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 4.25pt;">
				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle; background-color: #bfbfbf;" colspan="10">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 11pt;"><strong><span style=""><center>ANY OTHER REMARKS</center></span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 27.4pt;">
				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="10">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;"><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 21.1pt;">
				<td style=" border-top-style: solid; border-top-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; border-bottom-style: solid; border-bottom-width: 0.75pt; padding-right: 5.4pt; padding-left: 5.03pt; vertical-align: middle;" colspan="5">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;"><span style="">Issue Date:&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;</span></p>
				</td>
				<td style=" border-top-style: solid; border-top-width: 0.75pt; border-right-style: solid; border-right-width: 0.75pt; border-bottom-style: solid; border-bottom-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.4pt; vertical-align: middle;" colspan="5">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;"><span style="">Delivery Date: &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.</span></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 8.05pt;">
				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle; background-color: #bfbfbf;" colspan="10">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 11pt;"><strong><span style=""><center>CUSTOMER FEEDBACK</center></span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 27.4pt;">
				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="10">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 11pt;"><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 4.25pt;">
				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle; background-color: #bfbfbf;" colspan="10">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 11pt;"><strong><span style=""><center>DEPARTMENT FEEDBACK</center></span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 14.8pt;">
				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style=""><center>S. No.</center></span></strong></p>
				</td>
				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style=""><center>Deptt.</center></span></strong></p>
				</td>
				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="7">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style=""><center>Feedback</center></span></strong></p>
				</td>
				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style=""><center>Signature</center></span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 20.65pt;">
				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style=""><center>1</center></span></strong></p>
				</td>

				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style=""><center>PRE-PRESS</center></span></strong></p>
				</td>

				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style=""><strong><span style=""><center>Initial</center></span></strong></p>
				</td>

				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="3">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 7.5pt;"><strong><span style="">&nbsp;</span></strong></p>
				</td>

				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style=""><center>Final</center></span></strong></p>
				</td>

				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="2">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 7.5pt;"><strong><span style="">&nbsp;</span></strong></p>
				</td>

				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style=""><strong><span style="">&nbsp;</span></strong></p>
				</td>

				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 44.5pt;">
				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style=""><center>2</center></span></strong></p>
				</td>
				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style=""><center>PLANNING</center></span></strong></p>
				</td>
				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="7">
				<p style=""><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style=""><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 3.9pt;">
				<td style="border-top-style: solid; border-top-width: 0.75pt; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" rowspan="11">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style=""><center>3</center></span></strong></p>
				</td>
				<td style="border-top-style: solid; border-top-width: 0.75pt; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" rowspan="11">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style=""><center>PRINTING</center></span></strong></p>
				</td>
				<td style="border-top-style: solid; border-top-width: 0.75pt; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="2" rowspan="11">
				<p style=""><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style=""><center>POINTS TO BE CHECKED</center></span></strong></p>
				</td>
				<td style="width: 56.7pt; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
					<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style=""><center>RESULT</center></span></strong></p>
				</td>
				<td style="border-top-style: solid; border-top-width: 0.75pt; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" rowspan="11">
				<p style=""><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 13pt;">
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><span style="">Substrate on which job to be print</span></p>
				</td>
				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 15.25pt;">
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><span style="">Job Type UV/ Conventional</span></p>
				</td>
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 16.6pt;">
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><span style="">Colors</span></p>
				</td>
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 14.35pt;">
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><span style="">Separation of all colors</span></p>
				</td>
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 16.6pt;">
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><span style="">Reverse matter</span></p>
				</td>
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 14.35pt;">
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><span style="">Varnish Or Lamination</span></p>
				</td>
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 16.15pt;">
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><span style="">Registration issues</span></p>
				</td>
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 13.9pt;">
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><span style="">Processes</span></p>
				</td>
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 16.15pt;">
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><span style="">Any Special req. of client</span></p>
				</td>
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 13.9pt;">
				<td style=" border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><span style="">Layout / Spot UV</span></p>
				</td>
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<tr style="line-height: 2.6; height: 4.65pt;">
				<td style="border-top-style: solid; border-top-width: 0.75pt; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" rowspan="5">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style="">4</span></strong></p>
				</td>
				<td style="border-top-style: solid; border-top-width: 0.75pt; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" rowspan="5">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style="">POST PRESS</span></strong></p>
				</td>
				<td style="border-top-style: solid; border-top-width: 0.75pt; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="2" rowspan="5">
				<p style=""><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
					<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style="">POINTS TO BE CHECKED</span></strong></p>
				</td>
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style="">RESULT</span></strong></p>
				</td>
				<td style="border-top-style: solid; border-top-width: 0.75pt; border-right-style: solid; border-right-width: 0.75pt; border-left-style: solid; border-left-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" rowspan="5">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><strong><span style="">&nbsp;</span></strong></p>
				</td>
			</tr>
			<tr style="line-height: 2.6; height: 25.6pt;">
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 9.5pt;"><span style="">Text Matter / Foiling / Embossing are not closed from crease or cutting area.</span></p>
				</td>
				<td style="width: 56.7pt; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><strong><span style="">&nbsp;</span></strong></p>
				</td>
			</tr>
			<tr style="line-height: 2.6; height: 16.6pt;">
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 9.5pt;"><span style="">Avoid the fine text matter to embossed</span></p>
				</td>
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><strong><span style="">&nbsp;</span></strong></p>
				</td>
			</tr>
			<tr style="line-height: 2.6; height: 14.35pt;">
				<td style="width: 164.7pt; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><span style="">Checked Process Sequence.</span></p>
				</td>
				<td style="width: 56.7pt; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><strong><span style="">&nbsp;</span></strong></p>
				</td>
			</tr>
			<tr style="line-height: 2.6; height: 16.6pt;">
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="4">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><span style="">Pasting Flap and Lock</span></p>
				</td>
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; font-size: 9.5pt;"><strong><span style="">&nbsp;</span></strong></p>
				</td>
			</tr>
			<tr style="line-height: 2.6; height: 49.9pt;">
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style="">5</span></strong></p>
				</td>
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
					<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style="">LEAFLET</span></strong></p>
				</td>
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="7">
				<p style=""><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style=""><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
				</tr>
				<tr style="line-height: 2.6; height: 40pt;">
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style="">6</span></strong></p>
				</td>
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style="">QUALITY CONTROL</span></strong></p>
				</td>
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="7">
				<p style=""><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style=""><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="vertical-align: top;">
			</tr>
			<tr style="line-height: 2.6; height: 44.5pt;">
				<td style="width: 43.2pt; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style="">7</span></strong></p>
				</td>
				<td style="width: 74.7pt; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style="">FQC</span></strong></p>
				<p style="margin-top: 0pt; margin-bottom: 0pt; text-align: center; font-size: 10.5pt;"><strong><span style="">(SAMPLE PREPARED</span></strong></p>
				</td>
				<td style="width: 322.2pt; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;" colspan="7">
				<p style=""><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="width: 79.2pt; border-style: solid; border-width: 0.75pt; padding-right: 5.03pt; padding-left: 5.03pt; vertical-align: middle;">
				<p style=""><strong><span style="">&nbsp;</span></strong></p>
				</td>
				<td style="vertical-align: top;">&nbsp;</td>
			</tr>
			<!-- <tr style="line-height: 2.6; height: 0pt;">
				<td style="width: 54pt;">&nbsp;</td>
				<td style="width: 85.5pt;">
					<td style="width: 45pt;">&nbsp;</td>
				<td style="width: 45pt;">&nbsp;</td>
				<td style="width: 27pt;">&nbsp;</td>
				<td style="width: 49.5pt;">&nbsp;</td>
				<td style="width: 40.5pt;">&nbsp;</td>
				<td style="width: 58.5pt;">&nbsp;</td>
				<td style="width: 67.5pt;">
				<td style="width: 90pt;">&nbsp;</td>
				<td style="width: 438pt;">&nbsp;</td>
			</tr> -->
		</tbody>
	</table>
	<p style="margin-top: 0pt; margin-bottom: 10pt; line-height: 115%; font-size: 10.5pt;">&nbsp;</p>
	<p>&nbsp;</p>
</body>

<?php   }  ?>
</html>