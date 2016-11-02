/**
 * Created by AVGorbunov on 26.08.2016.
 */



function agEditPplgroupSave(groupID) {

}

function agEditPplgroupCancel(groupID) {
    trid="ag-pplgroups-tr-id-"+groupID;
    tridedit="ag-pplgroups-tr-id-"+groupID+"-edit";
    $("tr#"+trid).show();
    $("tr#"+tridedit).hide();
    agEnableEditBtns();
}

function agEnableEditBtns() {
    /*
    $("button.btn-ag-create").prop( "disabled", false );
    $("button.btn-ag-edit").prop( "disabled", false );
    $("button.btn-ag-remove").prop( "disabled", false );
    */
    $("button.btn-ag-dsbl-on-edit").prop( "disabled", false );
}

function agDisableEditBtns() {
    /*
    $("button.btn-ag-create").prop( "disabled", true );
    $("button.btn-ag-edit").prop( "disabled", true );
    $("button.btn-ag-remove").prop( "disabled", true );
    */
    $("button.btn-ag-dsbl-on-edit").prop( "disabled", true );
}


function agRemovePplgroup(groupID) {

}

$(document).ready(function () {
    $("tr.ag-pplgroups-tr-edit").hide();
    $("tr.ag-pplgroups-tr-create").hide();
    //
});
