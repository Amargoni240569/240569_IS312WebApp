/*
    Author: Abel Margoni WAMANIMBO
    Student ID: 240569
    Description:
    Controls dynamic dashboard content display.
*/

function showAccounts() {
    document.getElementById("dashboardTitle").innerHTML = "Accounts Overview";

    document.getElementById("dashboardContent").innerHTML =
        "<p>Your Savings Account balance is K 0.00.</p>" +
        "<p>Your Checking Account balance is K 0.00.</p>" +
        "<p>Recent transactions include salary deposit, utility payment, and online purchases.</p>";
}

function showTransfer() {
    document.getElementById("dashboardTitle").innerHTML = "Transfer Between Accounts";

    document.getElementById("dashboardContent").innerHTML =
        "<p>You can move funds between your Savings and Checking accounts instantly.</p>" +
        "<p>Please enter the amount you wish to transfer and confirm the transaction securely.</p>" +
        "<p>Daily transfer limit: K 0.00</p>";
}

function showThirdParty() {
    document.getElementById("dashboardTitle").innerHTML = "Third Party Transfers";

    document.getElementById("dashboardContent").innerHTML =
        "<p>Send money to registered beneficiaries outside your account.</p>" +
        "<p>Ensure the recipient details are correct before confirming.</p>" +
        "<p>Processing time: 1–2 business days.</p>";
}
