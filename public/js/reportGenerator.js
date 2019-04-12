var cardLinks = {};
var originalBackgroundColor;

var selectedCards = [];


/*
    Disable link opening and instead enable multi-select
 */
function enableSelectMode() {
    $(".card").each(function() {
        removeLink($(this));

        $(this).click(selectCard);
    });

    $("#cancelReportBtn").css('display', 'initial');
    $("#submitReportBtn").attr('disabled', true);
    $("#submitReportBtn").css('display', 'initial');
    $("#createReportBtn").css('display', 'none');

    var main = $("#main");
    originalBackgroundColor = main.css('background-color');
    main.css('background-color', '#888');
}

function disableSelectMode() {
    $(".card").each(function() {
        restoreLink($(this));
        $(this).prop('onclick', null).off('click');
        $(this).css('background-color', 'white');
    });

    selectedCards.length = 0;

    $("#cancelReportBtn").css('display', 'none');
    $("#submitReportBtn").attr('disabled', true);
    $("#submitReportBtn").css('display', 'none');
    $("#createReportBtn").css('display', 'initial');

    $("main").css('background-color', originalBackgroundColor);
}

function removeLink(card) {
    var link = card.children("a");
    var content = link.children();

    cardLinks[card.attr('id')] = link.attr('href');

    card.empty();
    card.append(content);
}

function restoreLink(card) {
    var content = card.children();
    card.empty();

    card.append("<a href=" + cardLinks[card.attr('id')] + "></a>");
    card.children("a").append(content);
}

function selectCard() {
    var cardId = $(this).attr('id');

    var index = selectedCards.findIndex(card => (card != null && card.id === cardId));
    if (index == -1) {
        selectedCards.push({
            id: cardId,
            expenseId: cardId.split("-")[1],
        });
        $(this).css('background-color', 'lightgreen');
        $("#submitReportBtn").attr('disabled', false);
    } else {
        selectedCards.splice(index, 1);
        $(this).css('background-color', 'white');

        if (selectedCards.length == 0) {
            $("#submitReportBtn").attr('disabled', true);
        }
    }
}

function submitReport(url, ssn) {
    const expenses = selectedCards.map(card => parseInt(card.expenseId));

    $.post(url, {
        '_token': $('meta[name=csrf-token]').attr('content'),
        managerSsn: ssn,
        expenses: expenses,
    }, function(response) {
        location.reload();
    });

    disableSelectMode();
}
