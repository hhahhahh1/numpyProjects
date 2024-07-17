<?php
require_once 'shared/header.php';
?>

<main class="flex-shrink-0">
    <div class="container py-5 px-5 mt-5">
        <h2 class="border-1 border-bottom border-dark">The Code for AvdragsBerserk.</h2>
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col-lg-8">
                <pre class="line-numbers"><code class="language-javascript">
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
                </code>
                </pre>
            </div>
            <div class="col-lg-4">
                <p>The code is structed in three functions. The controller function, the logic function and the view or display function</p>
                <h5>The Controller</h5>
                <p>The controller function, getValues, fetches the user input from UI and sets them as property values in the userInput object. The object is then passed as a parameter to the logic function. The array returned from the logic function is passed as a parameter to the display function.</p>
                <h5>The Logic</h5>
                <p>The logic function, calculateValues, takes in the object passed as a parameter by the controller function. The values stored in the objects properties are then used to calculate the results running through a for loop. The looping calculations generate values for a table row, and store them in a new object which is then pushed into a return array. This happens once every run. The array is then returned to the controller function.</p>
                <h5>The View</h5>
                <p>The view or display function, displayResults, takes in an array containing several objects holding the values calculated by the logic function. Theese are then inserted into a table template, row by row, and appended to the table body for display in UI.</p>
            </div>
        </div>
    </div>
</main>

<?php
require_once 'shared/footer.php';
?>