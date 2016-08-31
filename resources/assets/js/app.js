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
    $("button.btn-ag-edit").prop( "disabled", false );
    $("button.btn-ag-remove").prop( "disabled", false );
}

function agEditPplgroup(groupID) {
    trid="ag-pplgroups-tr-id-"+groupID;
    tridedit="ag-pplgroups-tr-id-"+groupID+"-edit";
    //
    $("button.btn-ag-edit").prop( "disabled", true );
    $("button.btn-ag-remove").prop( "disabled", true );

    $("tr#"+trid).prop( "disabled", true );
    $("tr#"+trid).hide();
    $("tr#"+tridedit).show();
}

function agRemovePplgroup(groupID) {

}

$(document).ready(function () {
    $("tr.ag-pplgroups-tr-edit").hide();
    $("tr.ag-pplgroups-tr-create").hide();
    //
});
