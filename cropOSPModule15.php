<?php 
/* Template name: COM_15EquipmentTransportationStorage */

include('pdfLoader.php');
include('pdfSelectYear.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Organic</title>
</head>
<button id="btnPrint"> Create PDF </button>

<body id="dvContainer" class="canvas_div_pdf">
	<div class="print-wrap" style="background: #fff;padding: 30px;">		
	<div>
		<img src="<?php echo site_url(); ?>/wp-content/themes/Divi-child/pdfForms/head.jpg" style="width:80%;">
		<div style="font-size: 20px;padding-top: 20px;text-align: center;font-weight: bold;">MODULE 15: EQUIPMENT, TRANSPORTATION AND STORAGE  	 	</div>
		<div style="border:1px solid #000;margin-top: 10px;">
			<div style="padding: 5px; background: #000; color:#fff;">SECTION 1 - EQUIPMENT AND TOOLS </div>
			<div style="padding: 5px;"><b>
				To prevent commingling and contamination, all equipment used in organic crop production must be free of non-organic crop material (including residues of) and prohibited materials. Contamination includes that from oil, fuel and hydraulic fluids. Equipment used for both organic and non-organic farming must be cleaned prior to use on organic fields and crops. Records of equipment cleaning, including cleaning by an outside business, must be available during your inspection.</b>  
			</div>
		</div>
	</div>

	<table style="border: 1px solid black; border-collapse: collapse; width: 100%">
		<tr>
			<td style="border-bottom: 1px solid black;text-align:left;" colspan="6">
				<div style="padding-left: 15px; padding-top: 5px; overflow: auto;">
					<div style="width: 100%; float: left;">
						<b>1. Is any equipment owned by the operation loaned out or otherwise used on land not controlled by the operation?</b>
					</div>
					<div style="width: 100%; float: left;">
						<div style="width: 10%; float: left;"><input type="radio" name="section1_1" value="yes"><b>Yes</b></div>
						<div style="width: 10%; float: left;"><input type="radio" name="section1_1" value="no"><b>No</b></div>
						<div style="width: 10%; float: left;">&nbsp;</div>
					</div>
					<div style="width: 100%; float: left;padding-top: 20px"><b>If yes to the above, please explain: </b>
					<input type="textbox" name="section1_text_1" style="border: none;background-color: #dcf1f88c; width: 100%; height: 50px;">
					</div>
				</div>

				<div style="padding-left: 15px; padding-top: 5px; overflow: auto;">
					<div style="width: 70%; float: left;">
						<b>2. Is any equipment used by the operation used on both organic and non-organic fields?</b>
					</div>
					<div style="width: 30%; float: left;">
						<div style="width: 50%; float: left;"><input type="radio" name="section1_2" value="yes"><b>Yes</b></div>
						<div style="width: 50%; float: left;"><input type="radio" name="section1_2" value="no"><b>No</b></div>
					</div>
					<div style="width: 100%; float: left;padding-top: 2px"><b>If yes, please list all equipment used on both organic and non-organic fields: </b>
					<input type="textbox" name="section1_text_2" style="border: none;background-color: #dcf1f88c; width: 100%; height: 50px;">
					</div>
				</div>
				<div style="padding-left: 15px; padding-top: 5px; overflow: auto;">
					<div style="width: 100%; float: left;">
						<b>3. Describe the use of any custom operators/custom equipment that occurs on this operation. Include what type of equipment, which crops, for what purpose (input application, harvest, soil preparation, etc.): </b>
					</div>
					<div style="width: 100%; float: left;padding-top: 2px">
					<input type="textbox" name="section1_text_3" style="border: none;background-color: #dcf1f88c; width: 100%; height: 50px;">
					</div>
				</div>
				<div style="padding-left: 15px; padding-top: 5px; overflow: auto;">
					<div style="width: 100%; float: left;">
						<b>4. List names of any custom operators used by this operation: </b>
					</div>
					<div style="width: 100%; float: left;padding-top: 2px">
					<input type="textbox" name="section1_text_4" style="border: none;background-color: #dcf1f88c; width: 100%; height: 50px;">
					</div>
				</div>
				<div style="padding-left: 15px; padding-top: 5px; overflow: auto;">
					<div style="width: 100%; float: left;">
						<b>5. How is equipment cleaned before use on organic fields (if different for different pieces of equipment, please list all)?</b>
					</div>
					<div style="width: 100%; float: left;padding-top: 2px">
					<input type="textbox" name="section1_text_5" style="border: none;background-color: #dcf1f88c; width: 100%; height: 50px;">
					</div>
				</div>
				<div style="padding-left: 15px; padding-top: 5px; overflow: auto;">
					<div style="width: 60%; float: left;">
						<b>6. Are any products used to clean or sanitize equipment or tools?</b>
					</div>
					<div style="width: 40%; float: left;">
						<div style="width: 15%; float: left;"><input type="radio" name="section1_3" value="yes"><b>Yes</b></div>
						<div style="width: 15%; float: left;"><input type="radio" name="section1_3" value="no"><b>No</b></div>
						<div style="width: 70%; float: left;">&nbsp;</div>
					</div>
					<div style="width: 100%; float: left;padding-top: 2px"><b>If yes, please list the product and the rate used:</b>
					<input type="textbox" name="section1_text_6" style="border: none;background-color: #dcf1f88c; width: 100%; height: 50px;">
					</div>
				</div>
				<div style="padding-left: 15px; padding-top: 5px; overflow: auto;">
					<div style="width: 50%; float: left;">
						<b>7. Is cleaning documentation maintained? </b>
					</div>
					<div style="width: 50%; float: left;">
						<div style="width: 10%; float: left;"><input type="radio" name="section1_4" value="yes"><b>Yes</b></div>
						<div style="width: 10%; float: left;"><input type="radio" name="section1_4" value="no"><b>No</b></div>
						<div style="width: 80%; float: left;">&nbsp;</div>
					</div>
					<div style="width: 100%; float: left;padding-top: 2px"><b>If yes, please list the product and the rate used:</b>
					<input type="textbox" name="section1_text_7" style="border: none;background-color: #dcf1f88c; width: 100%; height: 50px;">
					</div>
				</div>
				<div style="padding-left: 15px; padding-top: 5px; overflow: auto;">
					<div style="width: 50%; float: left;">
						<b>8. Is equipment maintained so that fuel, oil, and hydraulic fluid do not leak? </b>
					</div>
					<div style="width: 50%; float: left;">
						<div style="width: 10%; float: left;"><input type="radio" name="section1_5" value="yes"><b>Yes</b></div>
						<div style="width: 10%; float: left;"><input type="radio" name="section1_5" value="no"><b>No</b></div>
						<div style="width: 80%; float: left;">&nbsp;</div>
					</div>
				</div>
				<div style="padding-left: 15px; padding-top: 5px; overflow: auto;">
					<div style="width: 60%; float: left;">
						<b>9. Could any of the equipment used on the operation be contaminated by previous uses? </b>
					</div>
					<div style="width: 40%; float: left;">
						<div style="width: 10%; float: left;"><input type="radio" name="section1_6" value="yes"><b>Yes</b></div>
						<div style="width: 10%; float: left;"><input type="radio" name="section1_6" value="no"><b>No</b></div>
						<div style="width: 80%; float: left;">&nbsp;</div>
					</div>
					<div style="width: 100%; float: left;padding-top: 2px"><b>If yes, please describe: </b>
					<input type="textbox" name="section1_text_8" style="border: none;background-color: #dcf1f88c; width: 100%; height: 50px;">
					</div>
				</div>

				</td>
			</tr>
	</table>
	
	<div style="width: 50%; float: left;">Operator Review, Initial and Date:<input type="textbox" name="" style="border: none;background-color: #dcf1f88c;width: 250px; height: 37px;" value=""></div>

	<div style="width: 50%; float: left;text-align: right;">Inspector Review, Initial and Date:<input type="textbox" name="" style="border: none;background-color: #dcf1f88c;width: 250px; height: 37px;" value=""></div>

	<div style="width: 100%;">Company Name: :<input type="textbox" name="" style="border: none;background-color: #dcf1f88c;width: 250px; height: 37px;" value="Silver Reef Organic Farms, LLC"></div>

	<div style="width: 100%; overflow: auto;">
		<div style="width: 20%;padding-top: 25px;float: left;">
			<b>F‐E‐213
			<br>
			10/10/2015</b>
		</div>
		<div style="width: 60%;padding-top: 25px;float: left; text-align:center;">
			<b>Crop OSP Module 15 Equipment.Transportation.Storage</b>
		</div>
		<div style="width: 20%;padding-top: 25px;float: left;">
			<b><span style="float: right;">Revision A</span>
			<br>
			  Page 1 of 2</b>
		</div>
	</div>
</div>

	<!----------------------------------------->
	<!--------- PAGE 2 ------------------------>
	<!----------------------------------------->

	 <br>
	 <br>
	 <br>
	 <br>

<div class="print-wrap" style="background: #fff;padding: 30px;">		
	<div style="margin-bottom: 30px">
		<img src="<?php echo site_url(); ?>/wp-content/themes/Divi-child/pdfForms/head.jpg" style="width:80%;">
	</div>


	<table style="border: 1px solid black; border-collapse: collapse; width: 100%">
	<tr>
		<th style="border: 1px solid black; color: white; background-color: black; text-align:left;    padding: 5px;" colspan="6">SECTION 2 - STORAGE AND TRANSPORTATION<span style="float: right;">Module 15, Cont’d </span></th>
	</tr>
	<tr>
		<td style="border: 1px solid black;padding: 10px;text-align:left;" colspan="6">
			<b>
				Commingling and contamination of organic products must be prevented during storage and transport. Storage records and clean truck affidavits must be maintained if applicable.
			</b>
		</td>
	</tr>
		
	<tr>
		<td style="border-bottom: 1px solid black;text-align:left;" colspan="6">

			<div>
				<b>1. Who is responsible for transporting the final product(s)? </b>
			</div>
			<div style="padding: 10px 10px 0px 10px;overflow: auto;">
				<div style="width: 20%; float: left;"><input type="checkbox" name="section2_check_1[]" value="Operation" style="margin-left: 30px;"> Self/Operation</div>
				<div style="width: 20%; float: left;"><input type="checkbox" name="section2_check_1[]" value="Buyer">Buyer</div>
				<div style="width: 20%; float: left;"><input type="checkbox" name="section2_check_1[]" value="Third Party">Third Party</div>
				<div style="width: 20%; float: left;"><input type="checkbox" name="section2_check_1[]" value="Other">Other (specify):</div>
				<div style="width: 20%; float: left;"><input type="checkbox" name="section2_check_1[]" value="Not applicable">Not applicable</div>
			</div>
			<div style="overflow: auto;">
				<div style="width: 60%; float: left;">&nbsp;</div>
				<div style="width: 40%; float: left;"><input type="textbox" name="section2_text_1" style="border: none;background-color: #dcf1f88c; width: 100%; height: 50px;"></div>
			</div>

			<div>
				<b>2. Who is responsible for arranging the final transportation of organic products?</b>
			</div>
			<div style="padding: 10px 10px 0px 10px;overflow: auto;">
				<div style="width: 20%; float: left;"><input type="checkbox" name="section2_check_2[]" value="Operation" style="margin-left: 30px;"> Self/Operation</div>
				<div style="width: 20%; float: left;"><input type="checkbox" name="section2_check_2[]" value="Buyer">Buyer</div>
				<div style="width: 20%; float: left;"><input type="checkbox" name="section2_check_2[]" value="Third Party">Third Party</div>
				<div style="width: 20%; float: left;"><input type="checkbox" name="section2_check_2[]" value="Other">Other (specify):</div>
				<div style="width: 20%; float: left;"><input type="checkbox" name="section2_check_2[]" value="Not applicable">Not applicable</div>
			</div>
			<div style="overflow: auto;">
				<div style="width: 60%; float: left;">&nbsp;</div>
				<div style="width: 40%; float: left;"><input type="textbox" name="section2_text_2" style="border: none;background-color: #dcf1f88c; width: 100%; height: 50px;"></div>
			</div>

			<div>
				<b>3. When do organic crops leave the operation’s custody? </b>
			</div>
			<div style="padding: 10px 10px 0px 10px;overflow: auto;">
				<div style="width: 50%; float: left;"><input type="checkbox" name="section2_check_3[]" value="At the point of sale" style="margin-left: 30px;">At the point of sale </div>
				<div style="width: 50%; float: left;"><input type="checkbox" name="section2_check_3[]" value="After delivery">After delivery to the buyer, transported by this operation</div>
				<div style="width: 50%; float: left;"><input type="checkbox" name="section2_check_3[]" value="After delivery to the buyer" style="margin-left: 30px;">After delivery to the buyer, transported by third party</div>
				<div style="width: 10%; float: left;"><input type="checkbox" name="section2_check_3[]" value="Other">Other (specify):</div>
				<div style="width: 40%; float: left;"><input type="textbox" name="section2_text_3" style="border: none;background-color: #dcf1f88c; width: 100%; height: 50px;"></div>
			</div>

			<div>
				<b>4. What practices are used to protect the integrity of organic crops during transport? </b>
			</div>
			<div style="padding: 10px 10px 0px 10px;overflow: auto;">
				<div style="width: 33.33%; float: left;"><input type="checkbox" name="section2_check_4[]" value="affidavits" style="margin-left: 30px;">Use of clean truck/transport affidavits</div>
				<div style="width: 33.33%; float: left;"><input type="checkbox" name="section2_check_4[]" value="Dedicated">Dedicated organic transport</div>
				<div style="width: 33.33%; float: left;"><input type="checkbox" name="section2_check_4[]" value="Cleaning">Cleaning transport units prior to loading </div>
			</div>

			<div style="padding: 5px 10px 0px 10px;overflow: auto;">
				<div style="width: 33%; float: left;"><input type="checkbox" name="section2_check_4[]" value="Inspecting transport" style="margin-left: 30px;">Inspecting transport prior to loading</div>
				<div style="width: 67%; float: left;"><input type="checkbox" name="section2_check_4[]" value="Letter or contract">Letter or contract with transport agency stating organic requirements</div>
			</div>
			<div style="padding: 5px 10px 0px 10px;overflow: auto;">
				<div style="width: 20%; float: left;"><input type="checkbox" name="section2_check_4[]" value="Other" style="margin-left: 30px;">Other (Specify):</div>
				<div style="width: 80%; float: left;"><input type="textbox" name="section2_text_4" style="border: none;background-color: #dcf1f88c; width: 100%; height: 50px;"></div>
			</div>

			<div style="padding-left: 15px; padding-top: 5px; overflow: auto;">
				<div style="width: 100%; float: left;">
					<b>5. Describe how crops are stored at this operation (where, length of time, climate control, etc.): </b>
				</div>
				<div style="width: 100%; float: left;padding-top: 2px">
				<input type="textbox" name="section2_text_5" style="border: none;background-color: #dcf1f88c; width: 100%; height: 50px;">
				</div>
			</div>
			<div style="padding-top: 5px; overflow: auto;">
				<div style="width: 60%; float: left;">
					<b>6. Are the same storage areas used for organic and non-organic crops?</b>
				</div>
				<div style="width: 40%; float: left;">
					<div style="width: 15%; float: left;"><input type="radio" name="section2_1" value="yes"><b>Yes</b></div>
					<div style="width: 15%; float: left;"><input type="radio" name="section2_1" value="no"><b>No</b></div>
					<div style="width: 70%; float: left;">&nbsp;</div>
				</div>
				<div style="width: 100%; float: left;padding-top: 2px"><b>If yes, how are crops segregated and identified? </b>
				<input type="textbox" name="section2_text_6" style="border: none;background-color: #dcf1f88c; width: 100%; height: 50px;">
				</div>
			</div>
			<div style="padding-top: 5px; overflow: auto;">
				<div style="width: 60%; float: left;">
					<b>7. Are any inputs used to control rodents, insect pests, and or diseases in storage areas?</b>
				</div>
				<div style="width: 40%; float: left;">
					<div style="width: 15%; float: left;"><input type="radio" name="section2_2" value="yes"><b>Yes</b></div>
					<div style="width: 15%; float: left;"><input type="radio" name="section2_2" value="no"><b>No</b></div>
					<div style="width: 70%; float: left;">&nbsp;</div>
				</div>
				<div style="width: 100%; float: left;padding-top: 2px"><b>Please list any materials in Module 17 - Post-Harvest Materials</b>
				</div>
			</div>
			<div style="padding-top: 20px; overflow: auto;">
				<div style="width: 60%; float: left;">
					<b>8. Are any inputs used to clean and/or sanitize storage areas? </b>
				</div>
				<div style="width: 40%; float: left;">
					<div style="width: 15%; float: left;"><input type="radio" name="section2_3" value="yes"><b>Yes</b></div>
					<div style="width: 15%; float: left;"><input type="radio" name="section2_3" value="no"><b>No</b></div>
					<div style="width: 70%; float: left;">&nbsp;</div>
				</div>
				<div style="width: 100%; float: left;padding-top: 2px"><b>Please list any inputs/materials in Module 17 – Post Harvest Materials</b>
				</div>
			</div>
			<div style="padding-top: 20px; overflow: auto;">
				<div style="width: 60%; float: left;">
					<b>9. Is off-site storage utilized? </b>
				</div>
				<div style="width: 40%; float: left;">
					<div style="width: 15%; float: left;"><input type="radio" name="section2_4" value="yes"><b>Yes</b></div>
					<div style="width: 15%; float: left;"><input type="radio" name="section2_4" value="no"><b>No</b></div>
					<div style="width: 70%; float: left;">&nbsp;</div>
				</div>
			</div>
			<div style="padding-left:20px;padding-top: 0px; overflow: auto;">
				<div style="width: 60%; float: left;">
					<b>If yes, is off-site storage controlled exclusively by this operation? </b>
				</div>
				<div style="width: 40%; float: left;">
					<div style="width: 15%; float: left;"><input type="radio" name="section2_5" value="yes"><b>Yes</b></div>
					<div style="width: 15%; float: left;"><input type="radio" name="section2_5" value="no"><b>No</b></div>
					<div style="width: 70%; float: left;">&nbsp;</div>
				</div>
			</div>
			<div style="padding-left:20px;padding-top: 8px; overflow: auto;">
				<div style="width: 60%; float: left;">
					<b>If yes, is the off-site storage facility certified organic?</b>
				</div>
				<div style="width: 40%; float: left;">
					<div style="width: 15%; float: left;"><input type="radio" name="section2_6" value="yes"><b>Yes</b></div>
					<div style="width: 15%; float: left;"><input type="radio" name="section2_6" value="no"><b>No</b></div>
					<div style="width: 70%; float: left;">&nbsp;</div>
				</div>
			</div>
			<div style="padding-left:10px;padding-top: 8px;padding-bottom:10px; overflow: auto;">
				<div style="width: 100%; float: left;">
					<b>In the table below, describe storage locations or structures including off-site storage: </b>
				</div>
			</div>
		</td>
	</tr>
	<tr>
		<td style="border-bottom: 1px solid black;text-align:left;" colspan="6">
			<table style="border: 1px solid black; border-collapse: collapse; width: 100%;" id="table1">
				<tr>
					<td style="border: 1px solid black;background: #ccc;padding: 5px;"><b>Storage Name/ID</b></td>
					<td style="border: 1px solid black;background: #ccc;padding: 5px;"><b>Type</b></td>
					<td style="border: 1px solid black;background: #ccc;padding: 5px;"><b>Capacity</b></td>
					<td style="border: 1px solid black;background: #ccc;padding: 5px;"><b>On Site or address for Off-Site</b></td>
					<td style="border: 1px solid black;background: #ccc;padding: 5px;"><b>Dedicated Organic?</b></td>
				</tr>
			</table>	
		</td>
	</tr>
	</table>

	<div style="width: 50%; float: left;">Operator Review, Initial and Date:<input type="textbox" name="" style="border: none;background-color: #dcf1f88c;width: 250px; height: 37px;" value=""></div>

	<div style="width: 50%; float: left;text-align: right;">Inspector Review, Initial and Date:<input type="textbox" name="" style="border: none;background-color: #dcf1f88c;width: 250px; height: 37px;" value=""></div>

	<div style="width: 100%;">Company Name: :<input type="textbox" name="" style="border: none;background-color: #dcf1f88c;width: 250px; height: 37px;" value="Silver Reef Organic Farms, LLC"></div>

	<div style="width: 100%; overflow: auto;">
		<div style="width: 20%;padding-top: 25px;float: left;">
			<b>F‐E‐213
			<br>
			10/10/2015</b>
		</div>
		<div style="width: 60%;padding-top: 25px;float: left; text-align:center;">
			<b>Crop OSP Module 15 Equipment.Transportation.Storage</b>
		</div>
		<div style="width: 20%;padding-top: 25px;float: left;">
			<b><span style="float: right;">Revision A</span>
			<br>
			  Page 2 of 2</b>
		</div>
	</div>
</div>
<input type='hidden' name='year_temp' id='year_temp'>
</body>
</html>
<script type="text/javascript">
var baseUrl = '<?php echo site_url(); ?>';
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

<script type="text/javascript">

function CreatePDFfromHTML(docTitle) {
	
	var HTML_Width = $(".canvas_div_pdf").width();
	var HTML_Height = $(".canvas_div_pdf").height();
	var top_left_margin = 15;
	var PDF_Width = HTML_Width+(top_left_margin*2);
	var PDF_Height = (PDF_Width*1.5)+(top_left_margin*2);
	var canvas_image_width = HTML_Width;
	var canvas_image_height = HTML_Height;
	var totalPDFPages = Math.ceil(HTML_Height/PDF_Height)-1;
	
	// Section 1 Data get
	var section1_1=$("input[name='section1_1']:checked").val();
	var section1_2=$("input[name='section1_2']:checked").val();
	var section1_3=$("input[name='section1_3']:checked").val();
	var section1_4=$("input[name='section1_4']:checked").val();
	var section1_5=$("input[name='section1_5']:checked").val();
	var section1_6=$("input[name='section1_6']:checked").val();

	var section1_text_1=$("input[name='section1_text_1']").val();
	var section1_text_2=$("input[name='section1_text_2']").val();
	var section1_text_3=$("input[name='section1_text_3']").val();
	var section1_text_4=$("input[name='section1_text_4']").val();
	var section1_text_5=$("input[name='section1_text_5']").val();
	var section1_text_6=$("input[name='section1_text_6']").val();
	var section1_text_7=$("input[name='section1_text_7']").val();
	var section1_text_8=$("input[name='section1_text_8']").val();
	
	// Section 2 Data get

	var section2_1=$("input[name='section2_1']:checked").val();
	var section2_2=$("input[name='section2_2']:checked").val();
	var section2_3=$("input[name='section2_3']:checked").val();
	var section2_4=$("input[name='section2_4']:checked").val();
	var section2_5=$("input[name='section2_5']:checked").val();
	var section2_6=$("input[name='section2_6']:checked").val();

	var section2_text_1=$("input[name='section2_text_1']").val();
	var section2_text_2=$("input[name='section2_text_2']").val();
	var section2_text_3=$("input[name='section2_text_3']").val();
	var section2_text_4=$("input[name='section2_text_4']").val();
	var section2_text_5=$("input[name='section2_text_5']").val();
	var section2_text_6=$("input[name='section2_text_6']").val();
	

	var myCheckboxes1 = new Array(); var myCheckboxes2 = new Array();
	var myCheckboxes3 = new Array(); var myCheckboxes4 = new Array();
	
	$("input[name='section2_check_1[]']:checked").each(function() {
		myCheckboxes1.push($(this).val());
	});

	$("input[name='section2_check_2[]']:checked").each(function() {
		myCheckboxes2.push($(this).val());
	});
	$("input[name='section2_check_3[]']:checked").each(function() {
		myCheckboxes3.push($(this).val());
	});
	$("input[name='section2_check_4[]']:checked").each(function() {
		myCheckboxes4.push($(this).val());
	});


	var year_temp = $('#year_temp').val();
	var farmId = "<?=get_user_meta(get_current_user_id(),'Farm_ID', true); ?>";

	$.ajax({
		type: 'POST',
		url: '<?=get_site_url();?>/wp-content/themes/Divi-child/pdfForms/manualEntry/db_insert15.php',
		data: {myCheckboxes1:myCheckboxes1,myCheckboxes2:myCheckboxes2,myCheckboxes3:myCheckboxes3,myCheckboxes4:myCheckboxes4,section1_1:section1_1,section1_2:section1_2,section1_3:section1_3,section1_4:section1_4,section1_5:section1_5,section1_6:section1_6,section2_1:section2_1,section2_2:section2_2,section2_3:section2_3,section2_4:section2_4,section2_5:section2_5,section2_6:section2_6,section1_text_1:section1_text_1,section1_text_2:section1_text_2,section1_text_3:section1_text_3,section1_text_4:section1_text_4,section1_text_5:section1_text_5,section1_text_6:section1_text_6,section1_text_7:section1_text_7,section1_text_8:section1_text_8,section2_text_1:section2_text_1,section2_text_2:section2_text_2,section2_text_3:section2_text_3,section2_text_4:section2_text_4,section2_text_5:section2_text_5,section2_text_6:section2_text_6,farmId:farmId,year_temp:year_temp,type:"insert"},
		dataType: 'html',
		
		success: function(data) {
						
			$("#loading").fadeOut("slow");
		},
		error: function(data) {
			$('#loading').hide();
			alert('Opps! data adding failed..')
			console.log(data); //Check the console to view error message if any
		}
	});

	html2canvas($(".canvas_div_pdf")[0],{allowTaint:true}).then(function(canvas) {
		canvas.getContext('2d');
		console.log(canvas.height+"  "+canvas.width);
		var imgData = canvas.toDataURL("image/jpeg", 1.0);
		var pdf = new jsPDF('p', 'pt',  [PDF_Width, PDF_Height]);
	    pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin,canvas_image_width,canvas_image_height);

		for (var i = 1; i <= totalPDFPages; i++) { 
			pdf.addPage(PDF_Width, PDF_Height);
			pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
		}
	    pdf.save(docTitle+".pdf");
    });
	
}


$('#year').show();
$('#certificationYear').on('change', function() {

    var certificationYear = this.value;
	$('#year_temp').val(certificationYear);
    $('#year').hide();        
    $('#loading').show();

    var docTitle = 'CDA Crop OSP Module 15 Equipment Transportation Storage '+certificationYear;
	document.title = docTitle;

	$("#btnPrint").on("click", function () {
		$('#btnPrint').hide();
		$('#loading').hide();
		$('#year').hide();
		CreatePDFfromHTML(docTitle);
	    $('#btnPrint').show();
	});

	var year_temp=$('#year_temp').val();
	var farmId = "<?=get_user_meta(get_current_user_id(),'Farm_ID', true); ?>";
	$.ajax({
		type: 'POST',
		url: '<?=get_site_url(); ?>/wp-content/themes/Divi-child/pdfForms/manualEntry/db_insert15.php',
		data: {farmId:farmId,year_temp:year_temp,type:"get_data"},
		dataType: 'json',
		success: function(json) {
			if(json==''){
				$('#loading').hide(1000);
				alert('Opps! No data found for your farm id..');
				return false;
			}
			
			var i;	
			if(json.section2_check_1){		        
				for(i=0;i<json.section2_check_1.length;i++){					
					$("input[name='section2_check_1[]']").each(function() {       
						if($(this).val() == json.section2_check_1[i]){
							$(this).prop('checked', true);
						}   
					});
				}
			}
			if(json.section2_check_2){		        
				for(i=0;i<json.section2_check_2.length;i++){					
					$("input[name='section2_check_2[]']").each(function() {       
						if($(this).val() == json.section2_check_2[i]){
							$(this).prop('checked', true);
						}   
					});
				}
			}
			if(json.section2_check_3){		        
				for(i=0;i<json.section2_check_3.length;i++){					
					$("input[name='section2_check_3[]']").each(function() {       
						if($(this).val() == json.section2_check_3[i]){
							$(this).prop('checked', true);
						}   
					});
				}
			}
			if(json.section2_check_4){		        
				for(i=0;i<json.section2_check_4.length;i++){					
					$("input[name='section2_check_4[]']").each(function() {       
						if($(this).val() == json.section2_check_4[i]){
							$(this).prop('checked', true);
						}   
					});
				}
			}

			if(json.section1_1){		        
				$("input[name='section1_1']").each(function() {       
					if($(this).val() == json.section1_1){
						$(this).prop('checked', true);
					}   
				});
			}
			if(json.section1_2){		        
				$("input[name='section1_2']").each(function() {       
					if($(this).val() == json.section1_2){
						$(this).prop('checked', true);
					}   
				});
			}
			if(json.section1_3){		        
				$("input[name='section1_3']").each(function() {       
					if($(this).val() == json.section1_3){
						$(this).prop('checked', true);
					}   
				});
			}
			if(json.section1_4){		        
				$("input[name='section1_4']").each(function() {       
					if($(this).val() == json.section1_4){
						$(this).prop('checked', true);
					}   
				});
			}
			if(json.section1_5){		        
				$("input[name='section1_5']").each(function() {       
					if($(this).val() == json.section1_5){
						$(this).prop('checked', true);
					}   
				});
			}
			if(json.section1_6){		        
				$("input[name='section1_6']").each(function() {       
					if($(this).val() == json.section1_6){
						$(this).prop('checked', true);
					}   
				});
			}

			if(json.section2_1){		        
				$("input[name='section2_1']").each(function() {       
					if($(this).val() == json.section2_1){
						$(this).prop('checked', true);
					}   
				});
			}
			if(json.section2_2){		        
				$("input[name='section2_2']").each(function() {       
					if($(this).val() == json.section2_2){
						$(this).prop('checked', true);
					}   
				});
			}
			if(json.section2_3){		        
				$("input[name='section2_3']").each(function() {       
					if($(this).val() == json.section2_3){
						$(this).prop('checked', true);
					}   
				});
			}
			if(json.section2_4){		        
				$("input[name='section2_4']").each(function() {       
					if($(this).val() == json.section2_4){
						$(this).prop('checked', true);
					}   
				});
			}
			if(json.section2_5){		        
				$("input[name='section2_5']").each(function() {       
					if($(this).val() == json.section2_5){
						$(this).prop('checked', true);
					}   
				});
			}
			if(json.section2_6){		        
				$("input[name='section2_6']").each(function() {       
					if($(this).val() == json.section2_6){
						$(this).prop('checked', true);
					}   
				});
			}

			
			if(json.section1_text_1){
				$("input[name='section1_text_1']").val(json.section1_text_1);
			}
			if(json.section1_text_2){
				$("input[name='section1_text_2']").val(json.section1_text_2);
			}
			if(json.section1_text_3){
				$("input[name='section1_text_3']").val(json.section1_text_3);
			}
			if(json.section1_text_4){
				$("input[name='section1_text_4']").val(json.section1_text_4);
			}
			if(json.section1_text_5){
				$("input[name='section1_text_5']").val(json.section1_text_5);
			}
			if(json.section1_text_6){
				$("input[name='section1_text_6']").val(json.section1_text_6);
			}
			if(json.section1_text_7){
				$("input[name='section1_text_7']").val(json.section1_text_7);
			}
			if(json.section1_text_8){
				$("input[name='section1_text_8']").val(json.section1_text_8);
			}

			if(json.section2_text_1){
				$("input[name='section2_text_1']").val(json.section2_text_1);
			}
			if(json.section2_text_2){
				$("input[name='section2_text_2']").val(json.section2_text_2);
			}
			if(json.section2_text_3){
				$("input[name='section2_text_3']").val(json.section2_text_3);
			}
			if(json.section2_text_4){
				$("input[name='section2_text_4']").val(json.section2_text_4);
			}
			if(json.section2_text_5){
				$("input[name='section2_text_5']").val(json.section2_text_5);
			}
			if(json.section2_text_6){
				$("input[name='section2_text_6']").val(json.section2_text_6);
			}
			

			$('#loading').hide(1000);
		},
		error: function(data) {
			$('#loading').hide();
			console.log(data); //Check the console to view error message if any
		}
	});

	var farmId = "<?php echo get_user_meta(get_current_user_id(),'Farm_ID', true); ?>";
	var cbIntegrationId = "c6gfs635"; //I have this data
	var clientId = "d0c68652491143557f928bd921baf2754892f40d68dd9132dc"; //I have this data
	var clientSecret = "4b0967779f494981af8b177011f8d2f23ac2e49bd9d74dcc73"; //I have this data
	var tableName = "DB_Storage"; //I have this data

	$.post(
		"https://" + cbIntegrationId + ".caspio.com/oauth/token",
		{
			grant_type: "client_credentials",
			client_id: clientId,
			client_secret: clientSecret
		},function(cbAuth){


        $.ajax({
            url: "https://"+cbIntegrationId+".caspio.com/rest/v2/tables/DBM_Company_Information/records?q.selectt=Farm_ID&q.where=Farm_ID%3D'"+farmId+"'",
            type: 'GET',
            headers: {
                "Authorization": "Bearer " + cbAuth.access_token, 
            }, 
            dataType: 'json',
            success: function (data) {
                var result = data.Result;
                if(result.length > 0){  
                    result = result[0];
                    //alert(123);
                    console.log(result);
                    $('.Company_Name').html(result.Company_Name);
                }
                else{
                	$('#loading').hide(1000);
					alert('no company name found for your farm id');
                }
            },
            error: function(data) {
                $('#loading').hide();
                alert('Something going wrong.2')
                console.log(data.responseJSON); //Check the console to view error message if any
            }
        });


		$.ajax({
			url: "https://"+cbIntegrationId+".caspio.com/rest/v2/tables/"+tableName+"/records?q.selectt=Farm_ID&q.where=Farm_ID%3D'"+farmId+"'",
			type: 'GET',
			headers: {
				"Authorization": "Bearer " + cbAuth.access_token, 
			}, 
			dataType: 'json',
			success: function (data) {
				var result = data.Result;
				if(result.length > 0){
                    $.each(result, function( index, oneResult ) {
                        var certYear = oneResult.Certification_Year;
                            $.each(certYear, function( indexx, valuee ) {

                                if(valuee == certificationYear){
                                	if(oneResult.Dedicated_Organic =='Organic'){
                                		var dedicatedOrganic = 'YES'
                                	}else{
                                		var dedicatedOrganic = ''
                                	}
		                           var tableData = '<tr>'+
									'<td style="border:1px solid black;text-align: center;color: #00007f;"><input type="textbox" name="" style="border: none;background-color: #dcf1f88c;width: 100%; height: 37px;" value="'+oneResult.Storage_Name+'"></td>'+
									'<td style="border:1px solid black;text-align: center;color: #00007f;"><input type="textbox" name="" style="border: none;background-color: #dcf1f88c;width: 100%; height: 37px;" value="'+oneResult.Storage_Type+'"></td>'+
									'<td style="border:1px solid black;text-align: center;color: #00007f;"><input type="textbox" name="" style="border: none;background-color: #dcf1f88c;width: 100%; height: 37px;" value="'+oneResult.Capacity+'"></td>'+
									'<td style="border:1px solid black;text-align: center;color: #00007f;"><input type="textbox" name="" style="border: none;background-color: #dcf1f88c;width: 100%; height: 37px;" value="'+oneResult.On_Off_Farm+ ',' +oneResult.Location_Address+ '"></td>'+
									'<td style="border:1px solid black;text-align: center;color: #00007f;"><input type="textbox" name="" style="border: none;background-color: #dcf1f88c;width: 100%; height: 37px;" value="'+dedicatedOrganic+'"></td>'+
								'</tr>';

		                        $('#table1').append(tableData);
                        	}
                    	});
                    });

					//console.log(result);
					$('#loading').hide(1000);
				}
				else{
                	$('#loading').hide(1000);
					alert('no data found for your farm id');
                }
			},
			error: function(data) {
				$('#loading').hide();
				alert('Something going wrong.2')
				console.log(data.responseJSON); //Check the console to view error message if any
			}
		});
	});

});

	
$("input").on("click", function() {
	if (this.checked) {
		this.setAttribute("checked", "checked");
	} else {
		this.removeAttribute("checked");
	}
	snippet.log(this.parentNode.innerHTML);
});


$('input').bind("change", function() {
	var val = $(this).val();
	$(this).attr('value',val);
});

$('textarea').bind("change", function() {
	var val = $(this).val();
	$(this).attr('value',val);
	$(this).html(val);
});

</script>