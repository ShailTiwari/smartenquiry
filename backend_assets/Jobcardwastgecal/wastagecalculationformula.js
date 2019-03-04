function boardcalculation() {
    var sheets = $('#txt_wassheet').val();
    if (sheets == 0) {
        sheets = 0.0001;
    }
    // alert(sheets);
    var i = '';
    var Cut_Sheets_BeforeWastage = 0;
    var Cut_Sheets_AfterWastage = 0;
    var Full_Sheets_BeforeWastage = 0;
    var Full_Sheets_AfterWastage = 0;
    var Wastage_IN_Sheets = 0;
    var Wastage_IN_Percent = '';
    var TotalCartonQty = 0;
    var TotalOrderQty = 0;
    var UpsForCalculation = '';
    var CutSheetUps = '';
    var CutDimEntered = '';
    var TotalCuts = 0;
    var TotalUps_FullSheets = '';
    var MixJobCard = 0;
    var MultiBoard = 0;
    var FinalPrintQty = 0;
    var X = 0;

    // find out jobcar is mix or single jobcard
    var maingrid = $('#tbodygeneral tr').length;
    /* If value is one then mix job card is false  MixJobCard val 0*/
    var board = $('#padperdetail tr').length;
    /* If value is one then mix board is false  MultiBoard val 0*/
    var tbl_cuts = $('#detailoptimize tr').length;
    var shreqval = '';
    if (maingrid == '1') {
        MixJobCard = 0;
        var txt_orderqty = $('input[type="hidden"][name="txt_orderqty[' + maingrid + '\\]"]').val();
        var txt_printqty = $("input[type='text'][name='txt_printqty[" + maingrid + "\\]']").val();
        var paperdivfc = $("input[type='hidden'][name='hdn_mmval[1]']").val();

        if (txt_printqty != '' && txt_printqty != 0) {
            var ups = $("input[name='hdn_ups[1]']").val();
            var shreq1 = parseFloat(txt_printqty) / parseFloat(ups);
            var totalsheets1 = parseFloat(shreq1) + parseFloat(sheets);

            var totalsheets = totalsheets1.toFixed(0);
            var shreq = shreq1.toFixed(0);
            $('#td_wastage1').text(sheets);
            shreqval = shreq;
            $("input[type='text'][name='hdn_shreq[1]']").val(shreq);
            $('#td_shreq1').text(shreq);
            $('#td_totalsh1').text(totalsheets);
            $('input[type="text"][name="hdn_totalsh[1]"]').val(totalsheets);
            $('#td_kgqty1').text('');
            var dackele = $('#td_dackle1').text();
            var grain = $('#td_grain1').text();
            var gsm1 = $('#td_gsm1').text();
            var totalsheets = $('#td_totalsh1').text();
            var sheetwithoutws = $('#td_shreq1').text();
            var sheetwithoutws = $("input[type='text'][name='hdn_shreq[1]']").val();
            var dackele = parseFloat(dackele) / 100;
            var grain = parseFloat(grain) / 100;
            var gsm = parseFloat(gsm1) / 100; //100
            var total = totalsheets * (dackele * grain * gsm * paperdivfc * paperdivfc);
            var kg = parseFloat(total) / 1000; //1000
            var kgfi = kg.toFixed(2);
            // alert(parseFloat(kg));
            $('#td_kgqty1').text(kgfi);
            $('input[type="text"][name="hdn_kgqty[1]"]').val(kgfi);
            var wastagper = (parseInt(sheets) * 100) / sheetwithoutws;
            var wastagperto = wastagper.toFixed(2);
            // $('#txt_wsagreamrksper').val(wastagperto);

        } else {
            var ups = $("input[name='hdn_ups[1]']").val();
            var shreq = parseFloat(txt_orderqty) / parseFloat(ups);
            var totalsheets = parseFloat(shreq) + parseFloat(sheets);
            var shreqval = shreq.toFixed(0);
            var totalsheetsval = totalsheets.toFixed(0);

            $('#td_wastage1').text(sheets);
            $('#td_shreq1').text(shreqval);
            $('input[type="text"][name="hdn_shreq[1]"]').val(shreqval);
            // shreqval = shreq;
            $('#td_totalsh1').text(totalsheetsval);
            $('input[type="text"][name="hdn_totalsh[1]"]').val(totalsheetsval);
            /*Kg calculation */
            $('#td_kgqty1').text('');
            var dackele = $('#td_dackle1').text();
            var grain = $('#td_grain1').text();
            var gsm1 = $('#td_gsm1').text();
            var totalsheets = $('#td_totalsh1').text();
            var sheetwithoutws = $('#td_shreq1').text();
            var sheetwithoutws = $("input[type='text'][name='hdn_shreq[1]']").val();
            var dackele = parseFloat(dackele) / 100;
            var grain = parseFloat(grain) / 100;
            var gsm = parseFloat(gsm1) / 100; //100
            var total = totalsheets * (dackele * grain * gsm * paperdivfc * paperdivfc);
            var kg = parseFloat(total) / 1000; // 1000
            var kgfi = kg.toFixed(2);
            // alert(parseFloat(kg));
            $('#td_kgqty1').text(kgfi);
            $('input[type="text"][name="hdn_kgqty[1]"]').val(kgfi);

            var wastagper = (parseInt(sheets) * 100) / sheetwithoutws;
            var wastagperto = wastagper.toFixed(2);
            // $('#txt_wsagreamrksper').val(wastagperto);
        }

    }
    /* Mix Job*/
    else {
        var totalqty = 0;
        $('#txt_totalqty').val('');
		var paperdivfc = $("input[type='hidden'][name='hdn_mmval[1]']").val();
        for (var i = 1; i <= maingrid; i++) {
            var txt_orderqty = $('input[type="hidden"][name="txt_orderqty[' + i + '\\]"]').val();
            var txt_printqty = $("input[type='text'][name='txt_printqty[" + i + "\\]']").val();
            if (txt_printqty == ''|| txt_printqty == 0) {
                $("input[type='text'][name='txt_printqty[" + i + "\\]']").val(txt_orderqty);
            }
        }
        for (var i = 1; i <= maingrid; i++) {
            var txt_printqty = $("input[type='text'][name='txt_printqty[" + i + "\\]']").val();
            totalqty = parseInt(totalqty) + parseInt(txt_printqty);
            $('#txt_totalqty').val(totalqty);
        }
        var totqtyadd = $('#txt_totalqty').val();
        var ups = $("input[name='hdn_ups[1]']").val();
        var shreq = parseFloat(totqtyadd) / parseFloat(ups);
        var totalsheets = parseFloat(shreq) + parseFloat(sheets);
        var shreqval = shreq.toFixed(3);
        var totalsheetsval = totalsheets.toFixed(3);
        $('#td_wastage1').text(sheets);

        $('#td_shreq1').text(shreqval);
        $('input[type="text"][name="hdn_shreq[1]"]').val(shreqval);
        shreqval = shreq;
        $('#td_totalsh1').text(totalsheetsval);
        $('input[type="text"][name="hdn_totalsh[1]"]').val(totalsheetsval);
        /*Kg calculation */
        $('#td_kgqty1').text('');
        var dackele = $('#td_dackle1').text();
        var grain = $('#td_grain1').text();
        var gsm1 = $('#td_gsm1').text();
        var totalsheets = $('#td_totalsh1').text();
        var dackele = parseFloat(dackele) / 100;
        var grain = parseFloat(grain) / 100;
        var gsm = parseFloat(gsm1) / 100; // 100
        var total = totalsheets * (dackele * grain * gsm * paperdivfc * paperdivfc);
        var kg = parseFloat(total) / 1000; // 1000

        var kgfi = kg.toFixed(2);
        $('#td_kgqty1').text(kgfi);
        $('input[type="text"][name="hdn_kgqty[1]"]').val(kgfi);
    }


    /* Cutsheet calculation formula full sheet before wastage * nooof cuts */

    if (shreqval != '') {
        for (var j = 1; j <= board; j++) {
            var hdn_mothrrow = $("input[type='hidden'][name='hdn_mothrrow[" + j + "\\]']").val();
            var shreqty = $('#td_shreq' + j).text();
            var shreqty = $("input[type='text'][name='hdn_shreq[" + j + "\\]']").val();
            for (var i = 1; i <= tbl_cuts; i++) {
                var hdn_mothrrowval = $("input[type='hidden'][name='hdn_mothrrowval[" + i + "\\]']").val();
                if (hdn_mothrrow == hdn_mothrrowval) {
                    var cuts = $("input[type='text'][name='txt_n[" + i + "\\]']").val();
                    var totalsh = parseFloat(shreqty) * parseFloat(cuts);
                    $("input[type='text'][name='txt_cutsh[" + i + "\\]']").val(totalsh);
                }
            }
        }
    }
    else {
        MixJobCard = 1;
    }


    if (board == 1) {
        MultiBoard = 0;
    } else {
        MultiBoard = 1;
    }
}


//  Cutt sheet formula 
function Rmcalculate() {
    // 
        var pridArray = [];
        var processtypeArray = [];
        var raw1_itemidArray = [];
        var info3_AddlInfo1 = [];
        var info9_AddlInfo1 = [];
        var wpinfo1_AddlInfo1 = [];
        var wpinfo2_AddlInfo2 = [];
        var wpint_Info1 = [];
        var coragationval = [];
        var txt_ppfluteidCorrPly = [];
        var txt_ppitemidpCorrPly = [];
        var inkid = [];
		var raw_id2_ItemID = [];

    var palydetail = $('#palydetail tr').length;
    var tblboard = $('#padperdetail tr').length;
    var machinedetail = $('#machinedetail tr').length;
    var inkPrleng = $('#tbody_ink tr').length;
    for (var i = 1; i <= machinedetail; i++) {
        var prid = $("input[type='hidden'][name='hdn_baseprid[" + i + "\\]']").val();
        var ProcessTypeID = $("input[type='hidden'][name='hdn_var_id_info1[" + i + "\\]']").val();
        var int_Info1 = $("input[type='hidden'][name='hdn_int_id_info1[" + i + "\\]']").val();
        // alert(ProcessTypeID);
        var hdn_raw_id1_ItemID = $("input[type='hidden'][name='hdn_raw_id1[" + i + "\\]']").val();
		
		var hdn_raw_id2_ItemID = $("input[type='hidden'][name='hdn_raw_id2[" + i + "\\]']").val();
		
        var hdn_var_id_info3_AddlInfo1 = $("input[type='hidden'][name='hdn_var_id_info3[" + i + "\\]']").val();
        // mat lem
        var hdn_dob_info9_AddlInfo1 = $("input[type='hidden'][name='hdn_dob_info9[" + i + "\\]']").val(); // mat lem
        // Win Patch
        var hdn_dob_info1_AddlInfo1 = $("input[type='hidden'][name='hdn_dob_info1[" + i + "\\]']").val();
        var hdn_dob_info2_AddlInfo1 = $("input[type='hidden'][name='hdn_dob_info2[" + i + "\\]']").val();
        pridArray.push(prid);
        processtypeArray.push(ProcessTypeID);
        raw1_itemidArray.push(hdn_raw_id1_ItemID);
        info3_AddlInfo1.push(hdn_var_id_info3_AddlInfo1);
        info9_AddlInfo1.push(hdn_dob_info9_AddlInfo1);
        wpinfo1_AddlInfo1.push(hdn_dob_info1_AddlInfo1);
        wpinfo2_AddlInfo2.push(hdn_dob_info2_AddlInfo1);
        wpint_Info1.push(int_Info1);
		raw_id2_ItemID.push(hdn_raw_id2_ItemID);
    }
    // Print detail
    for(var j=1; j<= inkPrleng; j++){
        var hdn_inkid = $("input[type='hidden'][name='hdn_inkid[" + j + "\\]']").val();
        inkid.push(hdn_inkid);
    }

    // Corrugation Ply
    if(palydetail > 0){
    for(var i=1; i<= palydetail; i++){
        // ProcessTypeID
        var txt_ppfluteid = $("input[type='hidden'][name='txt_ppfluteid[" + i + "\\]']").val();
        //CorrPaperID
        var txt_ppitemidp = $("input[type='hidden'][name='txt_ppitemidp[" + i + "\\]']").val();
        txt_ppfluteidCorrPly.push(txt_ppfluteid);
        txt_ppitemidpCorrPly.push(txt_ppitemidp);        
    }
}else{
    txt_ppfluteidCorrPly= [];
    txt_ppitemidpCorrPly = [];
}


var boardetail = $('#padperdetail tr').length;
var cuttable = $('#detailoptimize tr').length;
        var mothrrowArray = [];
        var dackleArray = [];
        var grainArray = [];
        var totalshArray = [];
        var upsArray = [];
        var kgqtyArray = [];
        var packetsArray = [];
        var mmvalArray = [];
        var boardid = [];
for(var i=1; i<= boardetail; i++){
    var hdn_mothrrow = $("input[type='hidden'][name='hdn_mothrrow[" + i + "\\]']").val();
    var hdn_dackle= $("input[type='hidden'][name='hdn_dackle[" + i + "\\]']").val();
    var hdn_grain= $("input[type='hidden'][name='hdn_grain[" + i + "\\]']").val();
    var hdn_totalsh = $("input[type='text'][name='hdn_totalsh[" + i + "\\]']").val();
    var hdn_ups = $("input[type='text'][name='hdn_ups[" + i + "\\]']").val();
    var hdn_kgqty = $("input[type='text'][name='hdn_kgqty[" + i + "\\]']").val();
    var hdn_packets = $("input[type='hidden'][name='hdn_packets[" + i + "\\]']").val();
    var hdn_mmval = $("input[type='hidden'][name='hdn_mmval[" + i + "\\]']").val();
    var hdn_paperid = $("input[type='hidden'][name='hdn_paperid[" + i + "\\]']").val();
    boardid.push(hdn_paperid);
    mothrrowArray.push(hdn_mothrrow);
    dackleArray.push(hdn_dackle);
    grainArray.push(hdn_grain);
    totalshArray.push(hdn_totalsh);
    upsArray.push(hdn_ups);
    kgqtyArray.push(hdn_kgqty);
    packetsArray.push(hdn_packets);
    mmvalArray.push(hdn_mmval);

}
        var mothrrowvalArray = [];
        var breArraycut = [];
        var lenArray = [];
        var wastageArray = [];
        var upsArraycut = [];
        var mmvalcutArray = [];

for(var i=1; i<= cuttable; i++){
    var hdn_mothrrowval = $("input[type='hidden'][name='hdn_mothrrowval[" + i + "\\]']").val();
    var txt_bre= $("input[type='text'][name='txt_bre[" + i + "\\]']").val();
    var txt_len= $("input[type='text'][name='txt_len[" + i + "\\]']").val();
    var txt_wastage = $("input[type='text'][name='txt_wastage[" + i + "\\]']").val();
    var txt_ups = $("input[type='text'][name='txt_ups[" + i + "\\]']").val();
    var hdn_mmvalcut = $("input[type='hidden'][name='hdn_mmvalcut[" + i + "\\]']").val();
    mothrrowvalArray.push(hdn_mothrrowval);
    breArraycut.push(txt_bre);
    lenArray.push(txt_len);
    wastageArray.push(txt_wastage);
    upsArraycut.push(txt_ups);
    mmvalcutArray.push(hdn_mmvalcut);
}
    $('#tbl_rawmaterial').html('');


        startSpinner();
            $.ajax({
                type: "POST",
                url: "Jobcard/RMCcalculateval",
                data:{pridArray:pridArray,processtypeArray:processtypeArray,raw1_itemidArray:raw1_itemidArray
                    ,info3_AddlInfo1:info3_AddlInfo1,info9_AddlInfo1:info9_AddlInfo1,
                    wpinfo1_AddlInfo1:wpinfo1_AddlInfo1,wpinfo2_AddlInfo1:wpinfo2_AddlInfo2,wpint_Info1:wpint_Info1,
                    txt_ppfluteidCorrPly:txt_ppfluteidCorrPly,txt_ppitemidpCorrPly:txt_ppitemidpCorrPly,
                    inkid:inkid,mothrrowArray:mothrrowArray,dackleArray:dackleArray,grainArray:grainArray,
                    totalshArray:totalshArray,upsArray:upsArray,kgqtyArray:kgqtyArray,packetsArray:packetsArray,
                mmvalArray:mmvalArray,mothrrowvalArray:mothrrowvalArray,breArraycut:breArraycut,lenArray:lenArray,
                wastageArray:wastageArray,upsArraycut:upsArraycut,mmvalcutArray:mmvalcutArray,boardid:boardid,raw_id2_ItemID:raw_id2_ItemID}
            }).done(function (msg) 
            {
                stopSpinner();
                var main = jQuery.parseJSON(msg);
                var len = $('#tbl_rawmaterial tr').length;
                
                var j =parseInt(len) + 1;
                for(var i =0; i< main.length; i++){
                    $('#tbl_rawmaterial').append("<tr>\n\
                                <td><input type='text' name='txt_rawmaterial["+j+"]' id='txt_rawmaterial["+j+"]' value='"+main[i].ItemName+"' style='background-color: pink;'></td>\n\
                                <td hidden><input type='text' name='txt_Details["+j+"]' id='txt_Details["+j+"]'></td>\n\
                                <td><input type='text' name='txt_apprx["+j+"]' id='txt_apprx["+j+"]' value='"+main[i].ReqQty+"'></td>\n\
/                                <td><input type='text' name='txt_otherdetail["+j+"]' id='txt_otherdetail["+j+"]' value='"+ main[i].OtherDetail +"'></td>\n\
                                <td><input type='text' name='txt_unit["+j+"]' id='txt_unit["+j+"]' value='"+main[i].CharInfo1+"'></td>\n\
                                <td><input type='checkbox' name='txt_requestocc["+j+"]' id='txt_requestocc["+j+"]'></td>\n\
                                <td><input type='hidden' name='txt_materialsta["+j+"]' id='txt_materialsta["+j+"]' value='"+main[i].AddlInfo2+"'>\n\
                                <input type='text' name='txt_materialsta_desc[" + j + "]' id='txt_materialsta_desc[" + j + "]'></td>\n\
                                <td><input type='text' name='txt_qtyall["+j+"]' id='txt_qtyall["+j+"]'></td>\n\
                                <td hidden><input type='text' name='txt_imr["+j+"]' id='txt_imr["+j+"]'></td>\n\
                                <td hidden><input type='text' name='txt_olditemid["+j+"]' id='txt_olditemid["+j+"]' value='"+main[i].ItemID+"'></td>\n\
                                <td hidden><input type='text' name='txt_oldmatrial["+j+"]' id='txt_oldmatrial["+j+"]'></td>\n\
                                <td hidden><input type='text' name='txt_recordid["+j+"]' id='txt_recordid["+j+"]'></td>\n\
                                <td hidden><input type='text' name='txt_allcatidid["+j+"]' id='txt_allcatidid["+j+"]'></td>\n\
                                <td><input type='text' name='txt_allocatmater["+j+"]' id='txt_allocatmater["+j+"]'></td>\n\
                                <td hidden><input type='text' name='txt_Prid["+j+"]' id='txt_Prid["+j+"]' value='"+main[i].PrID+"'></td>\n\
                                <td hidden><input type='text' name='txt_processta["+j+"]' id='txt_processta["+j+"]'></td>\n\
                                <td hidden><input type='text' name='txt_Jobno["+j+"]' id='txt_Jobno["+j+"]'></td>\n\
                                <td hidden><input type='text' name='txt_codeno["+j+"]' id='txt_codeno["+j+"]'></td>\n\
                                <td hidden><input type='text' name='txt_gname["+j+"]' id='txt_gname["+j+"]' value='"+ main[i].GroupID+"'></td>\n\
                                <td hidden><input type='text' name='txt_' id='txt_'></td>\n\
                                <td hidden><input type='text' name='txt_' id='txt_'></td>\n\
                                <td hidden><input type='text' name='txt_' id='txt_'></td>\n\
                                <td hidden><input type='text' name='txt_' id='txt_'></td>\n\
                                <td hidden><input type='text' name='txt_' id='txt_'></td>\n\
                                <td hidden><input type='text' name='txt_' id='txt_'></td>\n\
                                <td hidden><input type='text' name='txt_' id='txt_'></td>\n\
                                <td hidden><input type='text' name='txt_' id='txt_'></td>\n\
                            </tr>");
                    j++;
                }
            });


    var tbllen = $('#detailoptimize tr').length;
    var totalarea = 0;
    var multiply = '';
    for (var i = 1; i <= tbllen; i++) {
        var bre = $("input[type='text'][name='txt_bre[" + i + "\\]']").val();
        var len = $("input[type='text'][name='txt_len[" + i + "\\]']").val();
        var txt_wastage = $("input[type='text'][name='txt_wastage[" + i + "\\]']").val();
        var multiply = parseFloat(bre) * parseFloat(len);
        var afterwast = parseFloat(txt_wastage) * parseFloat(multiply);
        totalarea = parseFloat(totalarea) + parseFloat(afterwast);
        var areatotal = totalarea.toFixed(0);
        $('#hdn_totalareacutsheets').val(areatotal);
    }
} /* Function end*/

function cutchange(lnk) {
    var hdn_mothrrowval = $("input[type='hidden'][name='hdn_mothrrowval[" + lnk + "\\]']").val();
    var txt_cutsh = $("input[type='text'][name='txt_n[" + lnk + "\\]']").val();
    var wastasheet = $('#txt_wassheet').val();
    var padperdetail = $('#padperdetail tr').length;
    for (var i = 1; i <= padperdetail; i++) {
        var hdn_mothrrow = $("input[type='hidden'][name='hdn_mothrrow[" + i + "\\]']").val();
        var shreqty = $('#td_shreq' + i).text();
        var shreqty = $("input[type='text'][name='hdn_shreq[" + i + "\\]']").val();
        if (hdn_mothrrowval == hdn_mothrrow) {
            var totalshws = $('#td_totalsh' + lnk).text();
            var totalcut = parseFloat(shreqty) * parseFloat(txt_cutsh);
            var totalcutv = totalcut.toFixed(0);
            var totalwastage = parseFloat(totalshws) * parseFloat(txt_cutsh);
            var totalcutv = totalcut.toFixed(0);
            var wastage = totalwastage.toFixed(0);
            var beforewastcut = parseFloat(wastage) - parseFloat(wastasheet);
            var beforewastcutval = beforewastcut.toFixed(0);

            $("input[type='text'][name='txt_cutsh[" + lnk + "\\]']").val(totalcutv);
            $("input[type='text'][name='txt_wastage[" + lnk + "\\]']").val(wastage);
            $("input[type='text'][name='txt_c_shbeforews[" + lnk + "\\]']").val(beforewastcutval);
        }
    }
}

function upschange(lnk) {
    var detailoptimize = $('#detailoptimize tr').length;
    var upsval = $("input[type='text'][name='hdn_ups[" + lnk + "\\]']").val();
    // var sheetreq = $('#td_shreq'+lnk).text();
    var sheetreq = $('#txt_totalqty').val();
    // alert(sheetreq);
    var totalsheet = parseFloat(sheetreq) / parseFloat(upsval);
    var totalsheetv = totalsheet.toFixed(0);
    var wastage = $('#td_wastage' + lnk).text();
    var totalwas = parseFloat(totalsheetv) + parseFloat(wastage);
    var totalwasval = totalwas.toFixed(0);
    var hdn_mothrrow = $("input[type='hidden'][name='hdn_mothrrow[" + lnk + "\\]']").val();
    $('#td_totalsh' + lnk).text(totalwasval);
    // alert(detailoptimize);
    for (var i = 1; i <= detailoptimize; i++) {
        var hdn_mothrrowval = $("input[type='hidden'][name='hdn_mothrrowval[" + lnk + "\\]']").val();
        if (hdn_mothrrow == hdn_mothrrowval) {
            var cuts = $("input[type='text'][name='txt_n[" + i + "\\]']").val();
            var totalsheetv_v = parseFloat(totalsheetv) * parseFloat(cuts);
            var totalafterws = parseFloat(totalwasval) * parseFloat(cuts);
            $("input[type='text'][name='txt_cutsh[" + i + "\\]']").val(totalsheetv_v);
            $("input[type='text'][name='txt_wastage[" + i + "\\]']").val(totalafterws);
        }
    }

    $('#td_shreq' + lnk).text(totalsheetv);
    $("input[type='text'][name='hdn_shreq[" + lnk + "\\]']").val(totalsheetv);
    $("input[type='text'][name='hdn_totalsh[" + lnk + "\\]']").val(totalafterws);
}

function totalsheet(lnk) {
    var afterwsval = $("input[type='text'][name='hdn_totalsh[" + lnk + "\\]']").val();
    var paperdivfacter = $("input[type='hidden'][name='hdn_mmval[" + lnk + "\\]']").val();
    var dackle = $("input[type='hidden'][name='hdn_dackle[" + lnk + "\\]']").val();
    var hdn_grain = $("input[type='hidden'][name='hdn_grain[" + lnk + "\\]']").val();
    var hdn_gsm = $("input[type='hidden'][name='hdn_gsm[" + lnk + "\\]']").val();
    var total = (parseFloat(afterwsval) * (parseFloat((parseFloat(dackle) * parseFloat(paperdivfacter)) / 100) * parseFloat((parseFloat(parseFloat(hdn_grain) * parseFloat(paperdivfacter)) / 100)) * parseFloat(parseFloat(hdn_gsm) / 100)));
    var kg = parseFloat(total) / 1000;
    var kgfi = kg.toFixed(2);
    $('#td_kgqty' + lnk).text(kgfi);
    $("input[type='text'][name='hdn_kgqty[" + lnk + "\\]']").val(kgfi);

}

function calculateval() {
    $('#btn_rawcalculate').prop('disabled', false);
    $('#btn_save').prop('disabled', false);

    

    var boardcal = $('#padperdetail tr').length;
    var detailoptim = $('#detailoptimize tr').length;
    var cuttable = $('#detailoptimize tr').length;

    var wastasheet = $('#txt_wassheet').val();
    var wastageper = $('#txt_wsagreamrksper').val();
    var tbodygeneral = $('#tbodygeneral tr').length;
	var maintbl = $('#tbodygeneral tr').length;
	var wastageperval = parseFloat(wastageper) / 100;
	//alert(wastageperval);
	var sumqty = 0;
        for (var i = 1; i <= maintbl; i++) {
            var printqty = $("input[type='text'][name='txt_printqty[" + i + "\\]']").val();
            if (printqty == '' || printqty == 0) {
                var printqty = $("input[type='hidden'][name='txt_orderqty[" + i + "\\]']").val();
                $("input[type='text'][name='txt_printqty[" + i + "\\]']").val(printqty);

            }
            sumqty = parseInt(sumqty) + parseInt(printqty);
        } /* For Main tbl loop close*/
		
		
		if (boardcal == 1) {
            for (var i = 1; i <= boardcal; i++) {
                var ups = $("input[type='text'][name='hdn_ups[" + i + "\\]']").val();
                var totalsh = sumqty;

                var upstola = parseFloat(totalsh) / parseFloat(ups);
                var wastegesheet = parseFloat(wastageperval) * parseFloat(upstola);
				//alert(wastegesheet);
				var wastegesheetval = wastegesheet.toFixed(0);
				// alert(wastegesheetval);
				$('#txt_wassheet').val(wastegesheetval);
			}
		}
			boardcalculation();

    if (tbodygeneral > 1) {
        for (var i = 1; i <= tbodygeneral; i++) {
            var ups = $("input[type='text'][name='txt_upsvalmain[" + i + "\\]']").val();
            if (ups == '') {
                alert('Please insert Ups');
                $("input[type='text'][name='txt_upsvalmain[" + i + "\\]']").focus();
                return false;
            }
        }
    }

	if (boardcal > 1) {
        for (var i = 1; i <= boardcal; i++) {
            var grain = $("input[type='text'][name='txt_grain[" + i + "\\]']").val();
            if (grain == '' || grain == '0') {
                alert('Please insert grain');
                $("input[type='text'][name='txt_grain[" + i + "\\]']").focus();
                return false;
            }
        }
    }
	
    if (boardcal > 1) {
        for (var i = 1; i <= boardcal; i++) {
            var ups = $("input[type='text'][name='hdn_ups[" + i + "\\]']").val();
            if (ups == '') {
                alert('Put the data Manualy');
                $("input[type='text'][name='hdn_ups[" + i + "\\]']").focus();
                return false;
            }
        }
    }


    if (wastageper != 0 && wastasheet != '' && wastasheet != 0 && wastageper != '') {
        var total = 0;
        var totalwastage = 0;
        if (boardcal == 1) {
            for (var i = 1; i <= boardcal; i++) {
                var ups = $("input[type='text'][name='hdn_ups[" + i + "\\]']").val();
                var hdn_totalshval = $("input[type='text'][name='hdn_totalshval[" + i + "\\]']").val();
                var shreq = $("input[type='text'][name='hdn_shreq[" + i + "]']").val();
                // var shreq = $('#td_shreq'+i).text();
                var totalsh = $('#td_totalsh' + i).text();
                var upstola = parseFloat(ups) * parseFloat(shreq);
                total = parseFloat(total) + parseFloat(upstola);
                var total1 = total.toFixed(0);
                var wastage = parseFloat(ups) * parseFloat(totalsh);
                // parseFloat(totalwastage)+parseFloat(ups);
                totalwastage = parseFloat(totalwastage) + parseFloat(wastage);
                var totalwastage1 = totalwastage.toFixed(0);
                var fqtyval = parseFloat(totalwastage1) * parseFloat(ups);
                var fqtyval1 = fqtyval.toFixed(0);
                $("input[type='text'][name='txt_fqty[1]").val(fqtyval1);
            } /* End For loop for board cal*/
            var totalwstage = $('#td_totalsh1').text();
            var cuttable = $('#detailoptimize tr').length;
            for (var i = 1; i <= cuttable; i++) {
                var cutsval = $("input[type='text'][name='txt_n[" + i + "\\]']").val();
                var totalcal = parseFloat(totalwstage) * parseFloat(cutsval);
                var totaltoo = totalcal.toFixed(0);
                var beforewastcut = parseFloat(totaltoo) - parseFloat(wastasheet);
                var beforewastcutval = beforewastcut.toFixed(0);
                $("input[type='text'][name='txt_wastage[" + i + "\\]']").val(totaltoo);
                $("input[type='text'][name='txt_c_shbeforews[" + i + "\\]']").val(beforewastcutval);
            }/*End for loop cut */

            var lenmaingrid = $('#tbodygeneral tr').length;
            if (lenmaingrid < 1) {
                $("input[type='text'][name='txt_printqty[1]']").val(total1);
            }
            $("input[type='text'][name='txt_fqty[1]']").val(totalwastage1);
        } /*If close board is greater then one */
    } /*Wastage zero 0*/




    else {
        var wastageperval = parseFloat(wastageper) / 100;

        var maintbl = $('#tbodygeneral tr').length;
        var sumqty = 0;
        for (var i = 1; i <= maintbl; i++) {
            var printqty = $("input[type='text'][name='txt_printqty[" + i + "\\]']").val();
            if (printqty == '' || printqty == 0) {
                var printqty = $("input[type='hidden'][name='txt_orderqty[" + i + "\\]']").val();
                $("input[type='text'][name='txt_printqty[" + i + "\\]']").val(printqty);

            }
            sumqty = parseInt(sumqty) + parseInt(printqty);
        } /* For Main tbl loop close*/



        if (boardcal == 1) {
            for (var i = 1; i <= boardcal; i++) {
                var ups = $("input[type='text'][name='hdn_ups[" + i + "\\]']").val();
                var totalsh = sumqty;

                var upstola = parseFloat(totalsh) / parseFloat(ups);
                var wastegesheet = parseFloat(wastageperval) * parseFloat(upstola);
                var totalwastage1 = upstola.toFixed(0);
                var wastegesheetval = wastegesheet.toFixed(0);
                var afterws = parseFloat(totalwastage1) + parseFloat(wastegesheetval);
                var afterwsval = afterws.toFixed(0);
                $("input[type='text'][name='hdn_shreq[" + i + "\\]']").val(totalwastage1);
                $('#txt_wassheet').val(wastegesheetval);
                $("input[type='text'][name='hdn_shreq[" + i + "\\]']").val(totalwastage1);
                $('#td_shreq' + i).text(totalwastage1);
                $("input[type='hidden'][name='hdn_shreq[" + i + "\\]']").val(totalwastage1);

                $("input[type='text'][name='hdn_totalsh[" + i + "\\]']").val(afterwsval);
                $('#td_totalsh' + i).text(afterwsval);
                var fqtyval = parseFloat(afterwsval) * parseFloat(ups);
                var fqtyval1 = fqtyval.toFixed(0);
                $("input[type='text'][name='txt_fqty[1]").val(fqtyval1);
                var paperdivfacter = $("input[type='hidden'][name='hdn_mmval[" + i + "\\]']").val();
                var dackle = $("input[type='hidden'][name='hdn_dackle[" + i + "\\]']").val();
                var hdn_grain = $("input[type='hidden'][name='hdn_grain[" + i + "\\]']").val();
                var hdn_gsm = $("input[type='hidden'][name='hdn_gsm[" + i + "\\]']").val();
                var total = (parseFloat(afterwsval) * (parseFloat((parseFloat(dackle) * parseFloat(paperdivfacter)) / 100) * parseFloat((parseFloat(parseFloat(hdn_grain) * parseFloat(paperdivfacter)) / 100)) * parseFloat(parseFloat(hdn_gsm) / 100)));
                var kg = parseFloat(total) / 1000;
                var kgfi = kg.toFixed(2);
                $('#td_kgqty' + i).text(kgfi);
                $("input[type='text'][name='hdn_kgqty[" + i + "]']").val(kgfi);


            } /*For loop for board detail*/


            var totalwstage = $('#td_totalsh1').text();
            var td_shreq1 = $('#td_shreq1').text();
            var td_shreq1 = $("input[type='text'][name='hdn_shreq[1]']").val();

            for (var i = 1; i <= cuttable; i++) {
                var cutsval = $("input[type='text'][name='txt_n[" + i + "\\]']").val();
                var totalcal = parseFloat(totalwstage) * parseFloat(cutsval);
                var totaltoo = totalcal.toFixed(0);

                var beforewastcut = parseFloat(cutsval) * parseFloat(totalwastage1) * parseFloat(wastageperval);
                var beforewastcut1 = parseFloat(beforewastcut) + parseFloat(cutsval) * parseFloat(totalwastage1)
                var beforewastcutval = beforewastcut1.toFixed(4);
                var beforewastcutval1 = parseFloat(cutsval) * parseFloat(td_shreq1);
                var beforewastcutval = beforewastcutval1.toFixed(0);
                
                $("input[type='text'][name='txt_wastage[" + i + "\\]']").val(totaltoo);
                $("input[type='text'][name='txt_c_shbeforews[" + i + "\\]']").val(beforewastcutval);
            } /*For loop cut table*/

            if (cuttable > 1) {

                /*var	txt_printqty = $("input[type='text'][name='txt_printqty[1]']").val();
                 var totalsh = parseFloat(parseFloat(txt_printqty)*10)/100;
                 var total1 = parseFloat(totalsh);
                 var totalval =total1.toFixed(0);
                 
                 $('#txt_wassheet').val(total1); */
                if (boardcal == 1) {
                    var totalups = 0;
                    for (var i = 1; i <= cuttable; i++) {
                        var tcutups = $("input[type='text'][name='txt_ups[" + i + "\\]']").val();
                        totalups = parseInt(totalups) + parseInt(tcutups);
                    }
                    $("input[type='text'][name='txt_upsvalmain[1]']").val(totalups);
                }
            }

        }

    } /* Else close for per */






    /*For single board with multiple job*/
    if (tbodygeneral > 1) {
        // $("input[type='hidden'][name='hdn_totalsh[1]']").val();
        var afterwsgr = $("input[type='text'][name='txt_wastage[1]']").val();
        for (var i = 1; i <= tbodygeneral; i++) {
            var ups = $("input[type='text'][name='txt_upsvalmain[" + i + "\\]']").val();
            var afterwsgrsingl = parseFloat(afterwsgr) * parseFloat(ups);
            var afterwsgrsingl1 = afterwsgrsingl.toFixed(0);
            $("input[type='text'][name='txt_fqty[" + i + "\\]']").val(afterwsgrsingl1);
        }
    } /*If close for single board with multiple job*/



    if (boardcal > 1) {
        var wastageperval = parseFloat(wastageper) / 100;
        var maintbl = $('#tbodygeneral tr').length;
        var sumqty = 0;
        for (var i = 1; i <= maintbl; i++) {
            var printqty = $("input[type='text'][name='txt_printqty[" + i + "\\]']").val();
            if (printqty == '' || printqty == 0) {
                var printqty = $("input[type='hidden'][name='txt_orderqty[" + i + "\\]']").val();
            }
            sumqty = parseInt(sumqty) + parseInt(printqty);
        }

        for (var i = 1; i <= boardcal; i++) {
            var ups = $("input[type='text'][name='hdn_ups[" + i + "\\]']").val();
            var totalsh = sumqty;
            var upstola = parseFloat(totalsh) / parseFloat(ups);
            var wastegesheet = parseFloat(wastageperval) * parseFloat(upstola);

            var totalwastage1 = upstola.toFixed(3);
            var wastegesheetval = wastegesheet.toFixed(0);
            var afterws = parseFloat(totalwastage1) + parseFloat(wastegesheetval);
            var afterwsval = afterws.toFixed(0);
            $("input[type='text'][name='hdn_shreq[" + i + "\\]']").val(totalwastage1);
            $('#td_totalsh' + i).text(afterwsval);
            $('#td_shreq' + i).text(totalwastage1);
            $("input[type='text'][name='hdn_shreq[" + i + "\\]']").val(totalwastage1);
            $("input[type='text'][name='hdn_totalsh[" + i + "\\]']").val(afterwsval);
            var paperdivfacter = $("input[type='hidden'][name='hdn_mmval[" + i + "\\]']").val();
            var dackle = $("input[type='hidden'][name='hdn_dackle[" + i + "\\]']").val();
            var hdn_grain = $("input[type='hidden'][name='hdn_grain[" + i + "\\]']").val();
            var hdn_gsm = $("input[type='hidden'][name='hdn_gsm[" + i + "\\]']").val();
            var total = (parseFloat(afterwsval) * (parseFloat((parseFloat(dackle) * parseFloat(paperdivfacter)) / 100) * parseFloat((parseFloat(parseFloat(hdn_grain) * parseFloat(paperdivfacter)) / 100)) * parseFloat(parseFloat(hdn_gsm) / 100)));
            var kg = parseFloat(total) / 1000;
            var kgfi = kg.toFixed(2);
            $('#td_kgqty' + i).text(kgfi);
            $("input[type='text'][name='hdn_kgqty[" + i + "]']").val(kgfi);




        }/*For loop close for multiple board end*/




    } /*If for multipa board end*/

    if (tbodygeneral == 1 && boardcal == 1 && cuttable == 1) {
        var upscut = $("input[type='text'][name='txt_ups[1]']").val();
        $("input[type='text'][name='txt_upsvalmain[1]']").val(upscut);
    }










    if (boardcal == 1) {
        for (var i = 1; i <= boardcal; i++) {
            var l = $("input[type='hidden'][name='hdn_dackle[" + i + "\\]']").val();
            var b = $("input[type='hidden'][name='hdn_grain[" + i + "\\]']").val();
        }
        var psheet = $("input[type='text'][name='txt_wastage[1]").val();

        var corruglen = $('#palydetail tr').length;

        for (var i = 1; i <= corruglen; i++) {
            var pgsm = $("input[type='text'][name='txt_ppgsm[" + i + "\\]']").val();
            var cfact = $("input[type='text'][name='txt_ppfact[" + i + "\\]']").val();
            var pextracorr = $("input[type='text'][name='txt_pextracons[" + i + "\\]']").val();
            if (pgsm != '' && cfact != '' && pextracorr != '') {
                if (pgsm == 0) {
                    pgsm = 1;
                }
                if (cfact == 0) {
                    cfact = 1;
                }
                if (pextracorr == 0) {
                    pextracorr = 1;
                }
                var calcu = (((parseFloat(l) * parseFloat(b)) * (parseFloat(pgsm) / 100000) / 100) * parseFloat(cfact) * parseFloat(psheet));
                var kgfucorru = calcu.toFixed(0);
                $("input[type='text'][name='txt_pkgreq[" + i + "\\]']").val(kgfucorru);
            }
        }
    }






}

function raw_material_FC(j, ProcessName, var1, var2, var3, var4, var5, var6, var7, var8, var9, var10) {
    $('#tbl_rawmaterial').append("<tr>\n\
                          <td><input type='text' name='txt_rawmaterial[" + j + "]' id='txt_rawmaterial[" + j + "]'  value='" + ProcessName + " -" + var1 + "'></td>\n\
                                <td hidden><input type='text' name='txt_Details[" + j + "]' id='txt_Details[" + j + "]'></td>\n\
                                <td><input type='text' name='txt_apprx[" + j + "]' id='txt_apprx[" + j + "]' value= " + var2 + "></td>\n\
                                <td><input type='text' name='txt_otherdetail[" + j + "]' id='txt_otherdetail[" + j + "]'></td>\n\
                                <td><input type='text' name='txt_unit[" + j + "]' id='txt_unit[" + j + "]' value='Kg'></td>\n\
                                <td><input type='checkbox' name='txt_requestocc[" + j + "]' id='txt_requestocc[" + j + "]'></td>\n\
                                <td><input type='hidden' name='txt_materialsta[" + j + "]' id='txt_materialsta[" + j + "]'>\n\
                                <input type='text' name='txt_materialsta_desc[" + j + "]' id='txt_materialsta_desc[" + j + "]'></td>\n\
                                <td><input type='text' name='txt_qtyall[" + j + "]' id='txt_qtyall[" + j + "]'></td>\n\
                                <td hidden><input type='text' name='txt_imr[" + j + "]' id='txt_imr[" + j + "]'></td>\n\
                                <td hidden><input type='text' name='txt_olditemid[" + j + "]' id='txt_olditemid[" + j + "]' value='" + var4 + "'></td>\n\
                                <td hidden><input type='text' name='txt_oldmatrial[" + j + "]' id='txt_oldmatrial[" + j + "]'></td>\n\
                                <td hidden><input type='text' name='txt_recordid[" + j + "]' id='txt_recordid[" + j + "]'></td>\n\
                                <td hidden><input type='text' name='txt_allcatidid[" + j + "]' id='txt_allcatidid[" + j + "]'  value='" + var4 + "'></td>\n\
                                <td><input type='text' name='txt_allocatmater[" + j + "]' id='txt_allocatmater[" + j + "]'></td>\n\
                                <td hidden><input type='text' name='txt_Prid[" + j + "]' id='txt_Prid[" + j + "]' value=" + var3 + "></td>\n\
                                <td><input type='text' name='txt_processta[" + j + "]' id='txt_processta[" + j + "]'></td>\n\
                                <td hidden><input type='text' name='txt_Jobno[" + j + "]' id='txt_Jobno[" + j + "]'></td>\n\
                                <td hidden><input type='text' name='txt_codeno[" + j + "]' id='txt_codeno[" + j + "]'></td>\n\
                                <td hidden><input type='text' name='txt_gname[" + j + "]' id='txt_gname[" + j + "]'></td>\n\
                                <td hidden><input type='text' name='txt_' id='txt_'></td>\n\
                                <td hidden><input type='text' name='txt_' id='txt_'></td>\n\
                                <td hidden><input type='text' name='txt_' id='txt_'></td>\n\
                                <td hidden><input type='text' name='txt_' id='txt_'></td>\n\
                                <td hidden><input type='text' name='txt_' id='txt_'></td>\n\
                                <td hidden><input type='text' name='txt_' id='txt_'></td>\n\
                                <td hidden><input type='text' name='txt_' id='txt_'></td>\n\
                                <td hidden><input type='text' name='txt_' id='txt_'></td>\n\
                            </tr>");
}