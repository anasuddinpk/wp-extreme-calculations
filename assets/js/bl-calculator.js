/**
 * Script for Business Loan Calculator.
 *
 * @package wp-extreme-calculations
 */

function calculate() {
    let P = 0;
    let r = 0; // rate %
    let n = 0; // the number of compound periods per year
    let p = 0; // the number of  payment periods per year 
    let t = 0; // the time in years

    // getting the varibles ready
    let organizationFee = 0, documentationFee = 0, otherFees = 0, numberOfYears = 0, numberOfMonths = 0;

    let select = document.getElementById('blcompound');
    let selectedCompound = select.options[select.selectedIndex].value;

    switch (selectedCompound) {
        case 'annually':
            n = 1;
            break;
        case 'semi-annually':
            n = 2;
            break;
        case 'quarterly':
            n = 4;
            break;
        case 'monthly':
            n = 12;
            break;
        case 'semi-monthly':
            n = 24;
            break;
        case 'bi-weekly':
            n = 26;
            break;
        case 'weekly':
            n = 52;
            break;
        case 'daily':
            n = 365;
            break;
        case 'continuously':
            n = -1;
            break;
        default:
    }

    P = parseInt(document.getElementById("blloanamount").value);
    r = parseInt(document.getElementById("blinterestrate").value) / 100;

    select = document.getElementById('blpayback');
    let selectedPayback = select.options[select.selectedIndex].value;

    switch (selectedPayback) {
        case 'everyday':
            p = 365;
            break;
        case 'everyweek':
            p = 52;
            break;
        case 'every2weeks':
            p = 26;
            break;
        case 'everyhalfmonth':
            p = 24;
            break;
        case 'everymonth':
            p = 12;
            break;
        case 'everyquarter':
            p = 4;
            break;
        case 'every6months':
            p = 2;
            break;
        case 'everyyear':
            p = 1;
            break;
        case 'interestonly':
            p = -1;
            break;
        case 'intheend':
            p = 0;
            break;
        default:
    }

    t = parseInt(document.getElementById("blyears").value) + parseInt(document.getElementById("blmonths").value) / 12.0;

    organizationFee = parseInt(document.getElementById("bloriginationfee").value)
    documentationFee = parseInt(document.getElementById("bldocumentationfee").value)
    otherFees = parseInt(document.getElementById("blotherfees").value)

    // calculation
    let rate = Math.pow((1 + r / n), n / p) - 1;
    let nper = p * t;
    let A, totalPayment, interest, interestAndFee, nominalRate

    if (n == -1) {
        if (p == 0) {
            A = P * Math.pow(Math.E, r * t);
            totalPayment = A;
            interest = totalPayment - P;
            interestAndFee = interest + documentationFee + otherFees + P * organizationFee / 100;
        }
    }
    else if (p == -1) {

    }
    else {
        if (p == 0) {
            A = (P * Math.pow((1 + r / n), (n * t)));
            totalPayment = A;
        }
        else {
            A = (P * Math.pow((1 + rate), nper)) / ((Math.pow((1 + rate), nper) - 1) / rate);
            totalPayment = A * p * t;
        }
        nominalRate = Math.pow((1 + r / n), n) - 1;
        interest = totalPayment - P;
        interestAndFee = interest + documentationFee + otherFees + P * organizationFee / 100;
    }
    let real = (totalPayment - P) / P * 100;

    // showing calculation on ui
    document.getElementById('business-loan-amount').innerHTML = getDollarString(A);
    document.getElementById('total-loan-payment').innerHTML = getDollarString(totalPayment);
    document.getElementById('interest').innerHTML = getDollarString(interest);
    document.getElementById('interest+fee').innerHTML = getDollarString(interestAndFee);
    document.getElementById('nominal-rate').innerHTML = getPercentageString(nominalRate);

}

function getDollarString(number) {
    return "$" + parseFloat(number).toFixed(2).toString();
}
function getPercentageString(number) {
    return parseFloat(number).toFixed(2).toString() + "%";
}
