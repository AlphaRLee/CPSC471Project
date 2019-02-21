const URL = "ajaxHandler.js";

/**
 * Get all expense summaries (up to the limit)
 * from the server as an array of JSON objects
 * Executes callback when finished.
 */
function getExpenseSummaries(callback) {
    $.get(URL, {
        requestName: "getExpenseSummaries"
        //, limit: 50  TODO add query limit
    }, callback);
}
