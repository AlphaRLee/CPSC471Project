$(function() {

});

function showExpenseSummaries() {
    // getExpensesSummary();

    var testData = {
        "expenses": [
            {
                "id": "0",
                "content": "hi"
            },
            {
                "id": "1",
                "content": "hello"
            }
        ]
    };
    x(JSON.stringify(testData), "success");
}

var x = function(data, status) {
    if (status == "error") {
        console.log(data); // TODO add more descriptive error
        return;
    }

    var dataObj = JSON.parse(data);

    var expenses = dataObj.expenses;

    expenses.forEach(function(expense) {
        var expenseSummary = $(document.createElement("div"))
            .addClass("expense-summary")
            .append("<p>" + expense.id + "</p>")
            .append("<p>" + expense.content);
        $("#content").append(expenseSummary);
    });
}
