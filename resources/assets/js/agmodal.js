/**
 * Created by AVGorbunov on 31.10.2016.
 */

function randN(n) {  // [ 1 ] random numbers
    return (Math.random() + '').slice(2, 2 + Math.max(1, Math.min(n, 15)));
}

function showModal(header, body, buttons) {
    var dlgID = 'agDlgConfirmLogout' + randN(100);
    var labelledby = 'agModalLabelConfLogout' + dlgID;

    var dlgDiv = $('<div/>', {
        id: dlgID,
        class: 'modal fade',
        tabindex: "-1",
        role: 'dialog',
        'aria-labelledby': labelledby
    });

    var dlgDivDialog = $('<div/>', {
        class: 'modal-dialog modal-sm',
        role: 'document'
    });
    dlgDiv.append(dlgDivDialog);
    var dlgDivDialogModalContent = $('<div/>', {
        class: 'modal-content'
    });
    dlgDivDialog.append(dlgDivDialogModalContent);
    // <div class="modal-header">
    var dlgDivDialogModalContentHeader = $('<div/>', {
        class: 'modal-header'
    });
    var dlgDivDialogModalContentHeaderCls = $('<button/>', {
        type: "button",
        class: "close",
        'data-dismiss': "modal",
        'aria-label': "Закрыть"
    });
    $('<i/>', {'class': "fa fa-times", 'aria-hidden': "true"}).appendTo(dlgDivDialogModalContentHeaderCls);
    dlgDivDialogModalContentHeader.append(dlgDivDialogModalContentHeaderCls);
    $('<h4/>', {'class': "modal-title", 'id': labelledby, text: header}).appendTo(dlgDivDialogModalContentHeader);

    //modal-body
    var dlgDivDialogModalContentBody = '';
    if (typeof (body) === 'string') {
        dlgDivDialogModalContentBody = $('<div/>', {
            class: 'modal-body'
            , text: body
        });
    } else {
        dlgDivDialogModalContentBody = $('<div/>', {
            class: 'modal-body'
        });
        dlgDivDialogModalContentBody.append(body);
    }
    // modal-footer
    var dlgDivDialogModalContentFooter = $('<div/>', {
        class: 'modal-footer'
    });
    $('<button/>', {
        'class': "btn btn-default",
        'type': "button",
        'data-dismiss': "modal",
        text: 'Отмена'
    }).appendTo(dlgDivDialogModalContentFooter);
    dlgDivDialogModalContent.append(dlgDivDialogModalContentHeader);
    dlgDivDialogModalContent.append(dlgDivDialogModalContentBody);
    dlgDivDialogModalContent.append(dlgDivDialogModalContentFooter);

    buttons.forEach(function (item, i, arr) {
        //alert( i + ": " + item + " (массив:" + arr + ")" );
        $('<button/>', {
            'class': "btn btn-primary", 'data-dismiss': "modal", 'type': "button", text: item['text'],
            on: {
                click: function (event) {
                    item['action']();
                }
            }
        }).appendTo(dlgDivDialogModalContentFooter);
    });

    $("body").append(dlgDiv);
    dlgDiv.modal({});
}

