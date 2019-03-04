function getclient(drp_clientname)
{
 var mat="<?php echo base_url('production/getexecutive');?>";
 //alert(drp_clientname);
 $.ajax({
      url:mat,
      type:"POST",
      async:false,
      data:{ 
    "client":drp_clientname, 
 },
 success:function(data){
   // alert(data);
 $('#drp_MarketingExe').html(data);

 } }); }


function getcontact(drp_clientname)
{
 var mat="<?php echo base_url('production/contectperson');?>";
 //alert(mat);
 $.ajax({
      url:mat,
      type:"POST",
      async:false,
      data:{ 
    "client":drp_clientname, 
 },
 success:function(data){
   //alert(data);
 $('#drp_contectperson').html(data);

 } }); }



 function Qtyval(Row) {

                //alert(Row);
                var Qty = $("input[type='text'][name='txt_Quantity\\[" + Row + "\\]']").val();
                var rate = $("input[type='text'][name='txt_Rate\\[" + Row + "\\]']").val();
                var Unit = $("select[name='txt_RateUnit\\[" + Row + "\\]']").val();
//    alert("Qty" + Qty);
                //    alert("rate" + rate);
                if (Qty != '' && rate != '') {
                    if (Unit === 'Rate Per Thousand') {
                        rate = parseFloat(rate); //  1000;
                        var varIntOrderquantity = parseInt(Qty);
                        var varFloatvarRate = parseFloat(rate);
                        var total = ((varIntOrderquantity / 1000) * varFloatvarRate);

                        // var total =0;

                        $("input[type='text'][name='txt_Amount\\[" + Row + "\\]']").val(total.toFixed(3));
                    } else {
                        var rate = $("input[type='text'][name='txt_Rate\\[" + Row + "\\]']").val();
                        var varIntOrderquantity = parseInt(Qty);
                        var varFloatvarRate = parseFloat(rate);
                        var total = (varIntOrderquantity * varFloatvarRate);
                        //var total = (Qty * rate);
                        // alert(total);
                        // $('#txt_RateUnit').val('Rate Per Unit');
                        $("input[type='text'][name='txt_Amount\\[" + Row + "\\]']").val(total.toFixed(3));
                    }

                }
            }


/*Dynemic Table Add*/

     function addRowAfter(theRow) {

            var row = theRow.parentNode.parentNode;
            var customerId = '';
            $('#tbl_workorder tr').each(function () {
                customerId = $(this).find(".TextGrid_product").val();
            });
           // alert(customerId);
            if (customerId != '' && customerId != 'undefined')
             {
                var woid = $("#hdn_Wo_id").val();
                var dis = '';
                if (woid == '')
                 {
                    dis = 'none';
                } 
                else
                 {
                    dis = 'show';
                }
                var current_row = $("#hdn_Rowcount_main").val();
                if (current_row == 1) {
                    current_row = parseInt(current_row) + 1;
                }
               // alert(current_row);
                var onetomanyval = '<?php echo $onetomany ?>';
                 alert(onetomanyval);
                if (onetomanyval == 'Yes')
                 {

                    html = "<tr class='mousehoverr'><td class='border' align='left'  style='width: 0.2%' NOWRAP>\n\
                            <input type='hidden' name='hdn_companyRecorId[" + current_row + "]' id='hdn_companyRecorId[" + current_row + "]'>\n\
                            <input type='hidden' name='hdn_companyAutoUniqueID[" + current_row + "]' id='hdn_companyAutoUniqueID[" + current_row + "]'>\n\
                            <input type='hidden' name='hdn_delrecorid[" + current_row + "]' id='hdn_delrecorid[" + current_row + "]'>\n\
                            <input type='hidden' name='hdn_compidval[" + current_row + "]' id='hdn_compidval[" + current_row + "]'>\n\
                            <input type='hidden' name='hdn_compQtyDelivered[" + current_row + "]' id='hdn_compQtyDelivered[" + current_row + "]'>\n\
                            <input type='hidden' name='txt_Qtyval[" + current_row + "]' id='txt_Qtyval[" + current_row + "]'>\n\
                            <input type='hidden' name='del_reqdate[" + current_row + "]' id='del_reqdate[" + current_row + "]'>\n\
                            <input type='hidden' name='del_commitdate[" + current_row + "]' id='del_commitdate[" + current_row + "]'>\n\
<input type='hidden' name='hdn_recordid[" + current_row + "]' id='hdn_recordid[" + current_row + "]'><input type='hidden' id='hdn_rowno[" + current_row + "]' name='hdn_rowno[" + current_row + "]' value = " + current_row + "><input type='hidden' value='0' id='hdn_item_id[" + current_row + "]'  name='hdn_item_id[" + current_row + "]'><input type='hidden' value='0' id='app_Approved[" + current_row + "]'  name='app_Approved[" + current_row + "]'><input type='hidden' id='hdn_Spec_id[" + current_row + "]'  name='hdn_Spec_id[" + current_row + "]' ><input type='hidden'  id='hdn_Approvedbyid[" + current_row + "]'  name='hdn_Approvedbyid[" + current_row + "]'>&nbsp;<button type='button' class='btn btn-info btn-outline btn-circle btn-sm m-r-2' onclick='return DeleteRowfromtablemain(this," + current_row + ");' ><i class='icon-trash'></i></button>\n\
<button type='button' class='btn btn-info btn-outline btn-circle btn-sm m-r-2' onclick='addRowAfter(this);'' ><i class='icon-plus'></i></button>\n\
<input type='hidden' name='hdn_ct3idval[" + current_row + "]' id='hdn_ct3idval[" + current_row + "]'>\n\
<input type='button' class='btn btn-primary btn-circle'  id='btn_F11' onclick='return F11Click(" + current_row + ")' name='btn_F11' value='F11'>\n\
<input type='hidden' name='hdn_lotdetail[" + current_row + "]' id='hdn_lotdetail[" + current_row + "]' value='0'>\n\
<input type='hidden' name='hdn_lotdetailval[" + current_row + "]' id='hdn_lotdetailval[" + current_row + "]'></td>\n\
<td class='border' style='width: 1%;' align='center'><input type='text' class='form-control' readonly='true'  id='txt_JobNo[" + current_row + "]' name='txt_JobNo[" + current_row + "]'></td>\n\
<td class='border' style='width: 1.8%;display: none;'><input type='text' class='form-control' id='txt_ct3no[" + current_row + "]'  class='TextGrid' name='txt_ct3no[" + current_row + "]'><input type='button' style='font-size: 10px;width: 20px;border: 0px; background: #4b96ed; color: white; height: 22px; cursor: pointer; border-radius: 8px;'   id='btn_ct3' onclick='return CT3Click(" + current_row + ")' name='btn_ct3' value='CT3'></td>\n\
<td class='border' style='width: 1%;'><input type='text' class='form-control' id='txt_MisCode[" + current_row + "]'  class='TextGrid' name='txt_MisCode[" + current_row + "]'> </td>\n\
<td class='border'  style='width: 5%'><input type='text' class='form-control' id='txt_ProductName[" + current_row + "]'  class='TextGrid_product' name='txt_ProductName[" + current_row + "]'>\n\
<input type='button' class='btn btn-info btn-circle' id='btn_F10' onclick='return F10Click(" + current_row + ");' name='btn_F10' value='F10'>\n\
<input type='button' class='btn btn-info btn-circle' id='btn_est' onclick='return EstClick(" + current_row + ");' name='btn_est' value='Est'>\n\
</td>\n\
<td class='border' align='center'  style='width: 1%'><input type='text'  class='form-control' id='txt_ProductCodeNo[" + current_row + "]'  class='TextGrid' name='txt_ProductCodeNo[" + current_row + "]'></td>\n\
<td class='border' style='width: 1%;'><input type='text'  class='form-control' id='txt_Quantity[" + current_row + "]'  onclick='return Qtyval(" + current_row + ")' onkeypress='return Qtyval(" + current_row + ")' onmousemove='return Qtyval(" + current_row + ");' onkeydown='return Qtyval(" + current_row + ");' onkeyup='return Qtyval(" + current_row + ");' class='TextGridnumonly' name='txt_Quantity[" + current_row + "]'></td>\n\
<td class='border' style='width: 1%;display:none'><input type='text'  class='form-control'  id='txt_Unit[" + current_row + "]'  class='TextGrid' name='txt_Unit[" + current_row + "]'></td>\n\
<td class='border'  style='width: 1%'>\n\
                                                            <select  name='txt_RateUnit[" + current_row + "]' onchange='Rate_Per_Unit(" + current_row + ")' id='txt_RateUnit[" + current_row + "]' class='form-control'>\n\
                                                                    <option value='Rate Per Unit' class=Selected>Per Unit</option>\n\
                                                                    <option value='Rate Per Thousand' class=Selected>Per Thousand</option>\n\
                                                                    <option value='Rate PER LOT' class=Selected>Per LOT</option>\n\
                                                            </select>\n\
                                                    </td>\n\
<td class='border'  style='width: 0.4%'><input type='text'   class='form-control' onclick='return Qtyval(" + current_row + ")' onkeypress='return Qtyval(" + current_row + ")' onmousemove='return Qtyval(" + current_row + ");' onkeydown='return Qtyval(" + current_row + ");' onkeyup='return Qtyval(" + current_row + ");' ondblclick='return ratelastfive(" + current_row + ")' id='txt_Rate[" + current_row + "]' class='TextGridnumonly' name='txt_Rate[" + current_row + "]'></td>\n\
<td class='border'  style='width: 1.5%;display: none;'><input type='text'   class='form-control' id='txt_prcoesscharge[" + current_row + "]'  name='txt_prcoesscharge[" + current_row + "]'></td>\n\
<td class='border'  style='width: 1%'>  <input type='text'   class='form-control' id='txt_Amount[" + current_row + "]'   name='txt_Amount[" + current_row + "]'></td>\n\
<td class='border'  style='width: 1%'>\n\
    <input type='text' class='form-control'  id='txt_deladdress[" + current_row + "]'   name='txt_deladdress[" + current_row + "]'>\n\
    <input type='button' name='btn_del_dialog_open[" + current_row + "]' id='btn_del_dialog_open[" + current_row + "]' value='....'  onclick='return deladdresswindow(" + current_row + ");' class='btn btn-info btn-circle'></td>\n\
<td class='border'  style='width: 1%' hidden>\n\
    <input type='hidden' name='hdn_templaetid[" + current_row + "]' id='hdn_templaetid[" + current_row + "]'><input type='text' class='form-control'  id='txt_exice[" + current_row + "]'  readonly  name='txt_exice[" + current_row + "]' placeholder='Click me'>\n\
</td>\n\
<td class='border'  style='width: 1%'>   <input type='text'  class='form-control'  id='txt_LotDetail[" + current_row + "]' onclick='return LotDetail(" + current_row + ")'   name='txt_LotDetail[" + current_row + "]'>\n\
<input type='button' name='btn_lotdetail' id='btn_lotdetail' value='...' onclick='return Lotdetailwindow(" + current_row + ");' style='width: 13px;display: none;'></td>\n\
<td class='border'  style='width: 1%;display: " + dis + ";'>    <input type='text'  class='form-control' id='txt_QtyDispatch[" + current_row + "]'   class='TextGrid' name='txt_QtyDispatch[" + current_row + "]'></td>\n\
<td class='border' align='center'  style='width: 1%;display: none;'>     <input type='text'  style='width: 88%;border: 0px solid #d1c7ac;' id='txt_DespatchUnit[" + current_row + "]'   class='TextGrid' name='txt_DespatchUnit[" + current_row + "]'></td>\n\
<td class='border'  style='width: 0.4%;display: none;'> <input type='text'  tooltip='Only Number !' style='width: 90%;border: 0px solid #d1c7ac;' id='txt_DelivaryAddress[" + current_row + "]' class='TextGrid' name='txt_DelivaryAddress[" + current_row + "]'> </td>\n\
<td class='border' style='width: 0.4%;display: none;display: none;'> <input type='text'  style='width: 88%;border: 0px solid #d1c7ac;'  id='txt_KindOfJob[" + current_row + "]'  class='TextGrid' name='txt_KindOfJob[" + current_row + "]'> </td>\n\
<td class='border' style='width: 3%;'><input  type='text' class='form-control'   id='txt_Remarks[" + current_row + "]'  class='TexGrid' name='txt_Remarks[" + current_row + "]'> </td>\n\
<td class='border'  style='width: 1%'> <input type='checkbox' id='txt_DonShow[" + current_row + "]' style='width: 90%;border: 0px solid #d1c7ac;' class='TextGrid' name='txt_DonShow[" + current_row + "]'> </td>\n\
<td class='border' style='width: 1%;'> <input type='checkbox' disabled readonly style='width: 90%;border: 0px solid #d1c7ac;' id='hdn_Approved[" + current_row + "]'  class='TextGrid' name='hdn_Approved[" + current_row + "]'> </td>\n\
<td class='border' style='width: 1%;'><input type='text'  class='form-control' id='txt_ApprovedBy[" + current_row + "]'  class='TextGrid' name='txt_ApprovedBy[" + current_row + "]'> </td>\n\
<td class='border' style='width: 1%;'> <input type='text'  class='form-control' id='txt_ApprovalDate[" + current_row + "]'  class='TextGrid' name='txt_ApprovalDate[" + current_row + "]'> </td>\n\
<td class='border' style='width: 1%;'><input type='text' class='form-control' id='txt_AppRemarks[" + current_row + "]'  class='TextGrid' name='txt_AppRemarks[" + current_row + "]'> </td>\n\
<td class='border' style='width: 1%;'><input type='text' class='form-control' id='txt_Variation[" + current_row + "]'  class='TextGrid' name='txt_Variation[" + current_row + "]'></td>\n\
<td class='border' style='width: 1%;display: none;'> <input type='text' style='width: 90%;border: 0px solid #d1c7ac;' id='txt_ClientReqDate[" + current_row + "]'  class='TextGrid' name='txt_ClientReqDate[" + current_row + "]'> </td>\n\
<td class='border' style='width: 1%;display: none;'><input type='text' style='width: 90%;border: 0px solid #d1c7ac;' id='txt_PackingAmount[" + current_row + "]'  class='TextGrid' name='txt_PackingAmount[" + current_row + "]'> </td>\n\
<td class='border' style='width: 1%;display: none;'><input type='text' style='width: 90%;border: 0px solid #d1c7ac;' id='txt_FreightAmount[" + current_row + "]'  class='TextGrid' name='txt_FreightAmount[" + current_row + "]'> </td>\n\
<td class='border' style='width: 1.5%;display: none;'><input type='text' style='width: 90%;border: 0px solid #d1c7ac;' id='txt_SalesType[" + current_row + "]'  class='TextGrid' name='txt_SalesType[" + current_row + "]'> </td>\n\
<td class='border' style='width: 1%;display: none;'><input type='text' style='width: 90%;border: 0px solid #d1c7ac;' id='txt_ModeOfTrasation[" + current_row + "]'  class='TextGrid' name='txt_ModeOfTrasation[" + current_row + "]'> </td>\n\
<td class='border' style='width: 1%; display:none;'><input type='text' class='form-control' id='txt_StockAllocation [" + current_row + "]'  class='TextGrid' name='txt_StockAllocation[" + current_row + "]'> </td>\n\
<td class='border' style='width: 1%; display:none;'><input type='text' class='form-control' id='txt_InternalJobNo[" + current_row + "]'  class='TextGrid' name='txt_InternalJobNo[" + current_row + "]'> </td>\n\
<td class='border' style='width: 1%;  display:none;'><input type='text' class='form-control' id='txt_InternalJobDate[" + current_row + "]'  class='TextGrid' name='txt_InternalJobDate[" + current_row + "]'> </td>\n\
<td class='border' style='width: 1%;display: none;'><input type='text' class='form-control' id='txt_InternalEstimateNo[" + current_row + "]'  class='TextGrid' name='txt_InternalEstimateNo[" + current_row + "]'> </td>\n\
<td class='border' style='width: 1%;display: none;'><input type='text' class='form-control' id='txt_InternalEstimateDate[" + current_row + "]'  class='TextGrid' name='txt_InternalEstimateDate[" + current_row + "]'> </td>\n\
<td class='border' style='width: 1%; display:none;'><input type='text' class='form-control' id='txt_RatePerThousand[" + current_row + "]'  class='TextGrid' name='txt_RatePerThousand[" + current_row + "]'> </td>\n\
<td class='border' style='width: 1%; display:none;'><input type='text' class='form-control' id='txt_ReceivedAmount[" + current_row + "]'  class='TextGrid' name='txt_ReceivedAmount[" + current_row + "]'> </td>\n\
<td class='border' style='width: 1%;display: none;'><input type='text' class='form-control' id='txt_Discount[" + current_row + "]'  class='TextGrid' name='txt_Discount[" + current_row + "]'> </td>\n\
<td class='border' style='width: 1%;display: none;'><input type='text' class='form-control' id='txt_QAID[" + current_row + "]'  class='TextGrid' name='txt_QAID[" + current_row + "]'></td>\n\
<td class='border' style='width: 1%;display: none;'><input type='text' class='form-control' id='txt_QAQty[" + current_row + "]'  class='TextGrid' name='txt_QAQty[" + current_row + "]'> </td>\n\
<td class='border' style='width: 1%;display: none;'><input type='text' class='form-control' id='txt_Old[" + current_row + "]'  class='TextGrid' name='txt_Old[" + current_row + "]'></td>\n\
<td class='border' style='width: 1%;display: none;'><input type='text' class='form-control' id='txt_PONo[" + current_row + "]'  class='TextGrid' name='txt_PONo[" + current_row + "]'> </td>\n\
<td class='border' style='width: 1%;'><input type='text'  class='form-control' id='txt_estno[" + current_row + "]'  class='TextGrid' name='txt_estno[" + current_row + "]'></td>\n\
<td class='border' style='width: 1%; display:none;'><input type='text' class='form-control' id='txt_InvoiceQty [" + current_row + "]'  class='TextGrid' name='txt_InvoiceQty[" + current_row + "]'></td>\n\
<td class='border' style='width: 1%;'>\n\
    <input type='checkbox' style='width: 90%;border: 0px solid #d1c7ac;' id='chk_hold[" + current_row + "]'     class='TextGrid' name='chk_hold[" + current_row + "]'> </td>\n\
<td class='border' style='width: 1%;'>\n\
    <input type='checkbox' style='width: 90%;border: 0px solid #d1c7ac;' id='chk_artworkreceive[" + current_row + "]'     class='TextGrid' name='chk_artworkreceive[" + current_row + "]'> </td>\n\
    </tr>";
                    var countrow = parseInt(current_row) + 1;
                    $("#hdn_Rowcount_main").val(countrow);
                    $(row).after(html);
                    $('.TextGridnumonly').keypress(function (event) {

                        return isNumber(event, this)

                    });
                    return false;
                }
            } else 
            {
              swal("Please fill Product!", "There is Product Blank?")
            }
        }



 



function DeleteRowfromtablemain(roww, rownum) {
     var delete_url="<?php echo base_url('production/f_result');?>";
    var row = roww.parentNode.parentNode;
    var rowIndex = row.rowIndex;
    var rowcount = $("#tbl_workorder tr").length;
    // alert(rowcount);
    if (rowcount > 2) {
        var app = $("input[type='hidden'][name='app_Approved\\[" + rownum + "\\]']").val();
        var jobno = $("input[type='text'][name='txt_JobNo\\[" + rownum + "\\]']").val();
        if (app == 0) {
            var agree = confirm("Do You Really Want To Delete This Item ?");
            if (agree == false) {
                return false;
            } else {
                if(jobno !='' && app == 0){
                    $.ajax({
                        type:"post",
                        url: delete_url,
                        data:{BtnJobno: 'btnjobno',jobno:jobno}
                    }).done(function(msg){
                        // alert(rowIndex);
                        alert(msg);
                        document.getElementById("tbl_workorder").deleteRow(rowIndex);
                    });
                }else if(jobno== ''){
                document.getElementById("tbl_workorder").deleteRow(rowIndex);
                }
            }
        } else {
            alert('Item approved cant delete!');
        }
    } else {
        alert('Pls At least One Row in table');
    }
}
    



function EstClick(Row_Num_main) 
   {
    //alert(Row_Num_main); 
    var est_url="<?php echo base_url('production/f_result');?>";
    var clientname = $("#drp_clientname").val();
    // alert(clientname);
    if (clientname != 0) {
        var app = $("input[type='hidden'][name='app_Approved\\[" + Row_Num_main + "\\]']").val();
        //alert(app+"nn"+Row_Num_main);
        if (app == 0) {
            $("#hdn_row_num_main").val(Row_Num_main);
            $('#rdo_Clientwise_est').prop('checked', true);
            var Companyid = $("#drp_clientname").val();
            // alert(clientname);
            $.ajax({
                type: "POST",
                url: est_url,
                data: {Btn: "Seelct_Data_est", Companyid: Companyid}
            }).done(function (msg) {
               // alert(msg);
                console.log(msg);
                // swal(msg, "Data Found");
                $("#tbl_F10_tbody1").html(msg);
            });

            $("#txt_search_F10").val('');
           // $("#div_est").dialog("open");
             $('#div_est').modal({backdrop: 'static', keyboard: false}); 
        } 
        else {
            swal("Approved!", "This iten is approved!","success");
        }
    } 
    else {
        swal("Please Select Client Name!", "There is Client Name Blank?");
    }
}



function FillItem_est(numrow)
 {
    
    var main_grid_rownum = $("#hdn_row_num_main").val();
    var itemid = $("#hdn_fpid" + numrow).val();
    var recordid = $("#hdn_recordID" + numrow).val();
    // alert(itemid);
    var Description = $("#hdn_Description" + numrow).val();
    var clientcode = $("#hdn_IPrefix" + numrow).val();
    var miscode = $("#hdn_acccode" + numrow).val();
    var estno = $("#hdn_estid" + numrow).val();
    var qty = $('#hdn_qty'+ numrow).val();
    var fqty = $('#hdn_finalqrate'+ numrow).val();
    var fquint = $('#hdn_qtyrate'+ numrow).val();
    if(fquint == 'Rate Per Thousand')
    {        
        var rateval = parseFloat(qty) *(parseFloat(fqty)/1000);
        var amoutn = rateval.toFixed(2);
        var rateacc = (parseFloat(fqty)/1000);
        var rate = rateacc.toFixed(2);
        var rateunit = 'Rate Per Unit';
    }
    else if(fquint == 'PER ITEM')
    {
        var rateval = parseFloat(fqty) * parseFloat(qty);
        var amoutn = rateval.toFixed(2);
        var rateunit = 'Rate Per Unit';
        var rate = parseFloat(fqty)
    }

    else
    {
        var rate= fqty/qty;
        var rateunit = 'Rate PER LOT';
        var amoutn= fqty;
    }

    // alert(estno);    
    // alert(UnitName);
    $("input[type='hidden'][name='hdn_item_id\\[" + main_grid_rownum + "\\]']").val(itemid);
    $("input[type='text'][name='txt_ProductName\\[" + main_grid_rownum + "\\]']").val(Description);
    $("input[type='text'][name='txt_ProductCodeNo\\[" + main_grid_rownum + "\\]']").val(clientcode);
    $("input[type='hidden'][name='hdn_recordid\\[" + main_grid_rownum + "\\]']").val(recordid);
    $("input[type='text'][name='txt_Quantity\\[" + main_grid_rownum + "\\]']").val(qty);
    $("input[type='text'][name='txt_Rate\\[" + main_grid_rownum + "\\]']").val(rate);
    $("input[type='text'][name='txt_Amount\\[" + main_grid_rownum + "\\]']").val(amoutn);
    $("select[name='txt_RateUnit\\[" + main_grid_rownum + "\\]']").val(rateunit);
    $("input[type='text'][name='txt_estno\\[" + main_grid_rownum + "\\]']").val(estno);
    // $("input[type='text'][name='txt_Unit\\[" + main_grid_rownum + "\\]']").val(UnitName); 
    // $("#div_est").dialog("close");
    $('#div_est').modal('hide') 
}



  function FillItem_name(numrow) {
    var main_grid_rownum = $("#hdn_row_num_main").val();
    var itemid = $("#hdn_ItemID" + numrow).val();
    // alert(itemid);
    var Description = $("#hdn_Description" + numrow).val();
    var clientcode = $("#hdn_IPrefix" + numrow).val();
    // alert(clientcode);
    var UnitName = $("#hdn_UnitName" + numrow).val();
// alert(UnitName);
    $("input[type='hidden'][name='hdn_item_id\\[" + main_grid_rownum + "\\]']").val(itemid);
    $("input[type='text'][name='txt_ProductName\\[" + main_grid_rownum + "\\]']").val(Description);
    $("input[type='text'][name='txt_ProductCodeNo\\[" + main_grid_rownum + "\\]']").val(clientcode);
    $("input[type='text'][name='txt_Unit\\[" + main_grid_rownum + "\\]']").val(UnitName);
   document.getElementById("drp_clientname").disabled=true;
    
   // $("#div_F10").dialog("close");
    $('#thankyouModal').modal('hide'); 

}  

        function F10Click(Row_Num_main) {
    // alert(Row_Num_main); 
    var clientname = $("#drp_clientname").val();
    if (clientname != 0)
     {

        var f_url="<?php echo base_url('production/f_result');?>";
        var app = $("input[type='hidden'][name='app_Approved\\[" + Row_Num_main + "\\]']").val();
        //alert(app+"nn"+Row_Num_main);
        if (app == 0)
         {
            $("#hdn_row_num_main").val(Row_Num_main);
            $('#rdo_Clientwise').prop('checked', true);
            var Companyid = $("#drp_clientname").val(); 
            $.ajax({
            url: f_url,
            method:"post", 
            data: {Btn: "Seelct_Data_F10", Companyid: Companyid},
            success: function(response)
            {     
             // swal("response",response);
             $("#tbl_F10_tbody").html(response);
             $("#txt_search_F10").val('');
             $('#thankyouModal').modal({backdrop: 'static', keyboard: false}); 
            },    
            error:function(response){
              console.log(response.responseText)
            }
            })       
          } 
        else {
            swal("Approved!", "This iten is approved!","success");
             }
            }  
            else {
               swal("Please Select Client Name!", "There is Client Name Blank?");
            }

}






    function F11Click(row) {
    var f11_url="<?php echo base_url('production/f_result');?>";
    var clientname = $("#drp_clientname").val();
    if (clientname != 0) {
        var app = $("input[type='hidden'][name='app_Approved\\[" + row + "\\]']").val();
        if (app == 0) {
            var companyid = $("#drp_clientname").val();
            //   alert(companyid);
            $.ajax({
                type: "POST",
                url:f11_url,
                data: {Btn: "Select_Data_F11", CompnyID: companyid}
            }).done(function (msg) {
                $("#div_F11_body").html(msg);
            });

             $('#div_F11').modal({backdrop: 'static', keyboard: false});
           // $("#div_F11").dialog("open");
        } else

         {
             swal("Approved!", "This iten is approved!","success");
        }
    }

     else
    {
        swal("Please Select Client Name!", "There is Client Name Blank?");
    }
}




 function Item_master_save() {
            var Item_master="<?php echo base_url('production/f_result');?>";
            var strr = '';
            var strr1 = '';
            var varpop_Disciption = $("#pop_Disciption").val();
            if (varpop_Disciption != '') {

                var pop_Disciption = $('#pop_Disciption').val();
                var companyid = $("#drp_clientname").val();
                var comptext = $("#drp_clientname").text();
                var vardrp_pop_Unit = $("#drp_pop_Unit").val();
                var varpop_ClientCodeNo = $("#pop_ClientCodeNo").val();
                var vardrp_pop_ProductClass = $("#drp_pop_ProductClass").val();
                var varpop_OurCodeNo = $("#pop_OurCodeNo").val();
                var varpop_Product_Kind = $("#pop_Product_Kind").val();
                var groupcomid = '00008';
                var icomid = '<?php echo $icomid ?>';
                var main_grid_rownum = $("#hdn_row_num_main").val();
                strr = "'" + groupcomid + "','" + varpop_Disciption + "','" + companyid + "', '00011',  '" + 1 + "' ,'F','" + icomid + "','" + varpop_Product_Kind + "'\n\
                       ,'00006','" + varpop_ClientCodeNo + "','" + varpop_OurCodeNo + "','00001','XX','XX'";
                 alert(icomid);
                $.ajax({
                    type: "POST",
                    url: Item_master,
                    data: {Btn: "Save_Item_Master", Query_Item: strr, pop_Disciption: pop_Disciption, varpop_ClientCodeNo: varpop_ClientCodeNo, icomid: icomid}
                }).done(function (msg) {
                  //  alert(msg);
                      swal(msg, "Result");
                  //  $("#div_F11").dialog("close");
                     $('#div_F11').modal('hide'); 
                });
            } else 

            {
                swal("Please enter Description!", "Description Blank?");
            }
        }
