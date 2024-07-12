//Get values from user input
function getValues() {
    //Define object and set it`s property values
    let userInputs = {};

    userInputs.amount = document.querySelector('#amount').value;
    userInputs.term = document.querySelector('#term').value;
    userInputs.rate = document.querySelector('#rate').value;

    userInputs.amount = parseInt(userInputs.amount);
    userInputs.term = parseInt(userInputs.term);
    userInputs.rate = parseInt(userInputs.rate);

    //Call calculateValues and get return values
    let calculatedValues = calculateValues(userInputs);

    //Call displayResults
    displayResults(calculatedValues);
}

//Calculate payments, interest etc.
function calculateValues(uInputs) {
    let returnArray = [];
    let total = {};
    let balance = uInputs.amount;
    let monthlyPayment = (uInputs.amount) * (uInputs.rate / 1200) / (1 - Math.pow((1 + uInputs.rate / 1200), -uInputs.term));
    let interest = 0;

    //Calculate the values for each month
    for (let i = 0; i < uInputs.term; i++) {
        let month = {};

        month.number = i + 1;
        month.payment = monthlyPayment;
        month.interest = balance * uInputs.rate / 1200;
        month.principal = monthlyPayment - month.interest;
        month.balance = balance - month.principal;


        interest += month.interest;
        balance = month.balance;

        month.totalInterest = interest;

        returnArray.push(month);
    }

    total.principal = uInputs.amount;
    total.interest = interest;
    total.cost = uInputs.amount + interest;
    total.payment = monthlyPayment;

    returnArray.push(total);

    //Return the calculated values
    return returnArray;
}

//Display results in UI
function displayResults(cResults) {
    //Instantiate number formatter to format numbers as currency
    const formatter = new Intl.NumberFormat('no-NO', {
        style: 'currency',
        currency: 'NOK',
        minimumFractionDigits: 2
    });

    //Get HTML elements to display result table
    let tableBody = document.querySelector('#resultTable');
    let templateRow = document.querySelector('#tableTemplate');

    tableBody.innerHTML = "";

    //Insert values into table rows using loop
    for (let i = 0; i < cResults.length - 1; i++) {
        const tableRow = document.importNode(templateRow.content, true);
        let rowCols = tableRow.querySelectorAll('td');

        rowCols[0].textContent = cResults[i].number;
        rowCols[1].textContent = formatter.format(cResults[i].payment);
        rowCols[2].textContent = formatter.format(cResults[i].principal);
        rowCols[3].textContent = formatter.format(cResults[i].interest);
        rowCols[4].textContent = formatter.format(cResults[i].totalInterest);
        rowCols[5].textContent = formatter.format(cResults[i].balance);

        tableBody.appendChild(tableRow);
    }

    //Display monthly payment and totals in upper right elements
    document.querySelector('#monthlyPayment').innerHTML = formatter.format(cResults[cResults.length - 1].payment);
    document.querySelector('#totalPrincipal').innerHTML = formatter.format(cResults[cResults.length - 1].principal);
    document.querySelector('#totalInterest').innerHTML = formatter.format(cResults[cResults.length - 1].interest);
    document.querySelector('#totalCost').innerHTML = formatter.format(cResults[cResults.length - 1].cost);
}