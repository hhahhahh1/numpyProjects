<?php
require_once 'shared/header.php';
?>

<main class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-2">AvdragsBerserk</h1>
        <!-- Top Row -->
        <div class="row">
            <form class="col p-2 calcForm">
                <label for="amount">Loan Amount</label>
                <input type="number" id="amount" name="amount" class="form-control mb-2" aria-label="Loan Amount" value="150000">
                <label for="term">Payments</label>
                <input type="number" id="term" name="term" class="form-control mb-2" aria-label="Payments" value="60">
                <label for="rate">Rate</label>
                <input type="number" id="rate" name="rate" class="form-control mb-2" aria-label="Rate" value="10">
                <div class="d-flex justify-content-end">
                    <button type="button" id="submit" class="btn btn-outline-dark">Calculate</button>
                </div>
            </form>
            <div class="col">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <p class="h5"><em>Your Monthly Payments</em></p>
                        <p class="h1" id="monthlyPayment"></p>
                    </div>
                    <div class="col">
                        <p class="mb-0">Total Principal</p>
                        <p class="mb-0">Total Interest</p>
                        <p class="mb-0">Total Cost</p>
                    </div>
                    <div class="col">
                        <p class="mb-0" id="totalPrincipal"></p>
                        <p class="mb-0" id="totalInterest"></p>
                        <p class="mb-0" id="totalCost"></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Result Table -->
        <div class="row mt-3">
            <div class="col-12 px-0">
                <template id="tableTemplate">
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </template>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="tableHeader">
                            <th>Month</th>
                            <th>Payment</th>
                            <th>Principal</th>
                            <th>Interest</th>
                            <th>Total Interest</th>
                            <th>Balance</th>
                        </thead>
                        <tbody id="resultTable">
                            <!-- Results -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="js/site.js"></script>
<script>
    document.querySelector('#submit').addEventListener('click', getValues);
</script>
<?php
require_once 'shared/footer.php';
?>