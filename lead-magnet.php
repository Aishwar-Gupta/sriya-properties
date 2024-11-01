<!DOCTYPE html>
<html>
    <head>
        <title>Lead Magnet</title>
    </head>

    <body>

        <h2> LEAD MAGNETS</h2>
            <p> <b>Equity vs Debt Investments</b></p>
            <label> Amount Invested: $</label>
            <input type="number" id="amount_invested" placeholder="Amount Invested">
            <p></p>
            <label>Number of Years of Investment :</label>
            <input type="number" id="years_invested" placeholder="Years Invested">
            <p></p>
            <label> Expected Returns (Interest Rate) : </label>
            <input type="number" id="expected_returns" placeholder="Expected Returns">
            <p></p>
            <button type="submit" onclick="calculateLeadMagnet()">Calculate</button>

            <canvas id="myChart2" width="800" height="300" style="display: block; margin: 0 auto;"></canvas>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                let myChart2 = null;
                function calculateLeadMagnet()
                {
                    document.getElementById("amount_invested").defaultValue=0;
                    document.getElementById("years_invested").defaultValue=0;
                    document.getElementById("expected_returns").defaultValue=0;

                    P =  parseFloat(document.getElementById("amount_invested").value);
                    r =  parseFloat(document.getElementById("expected_returns").value);
                    t =  parseFloat(document.getElementById("years_invested").value);
                    n = 12;
                    A = P * (Math.pow((1 + r/n), (n*t)));
                    // console.log(P);
                    // console.log(r);
                    // console.log(t);
                    // console.log(n);
                    // console.log(A);

                    equity_interest = [];
                    debt_interest = [];
                    prev = P;
                    equity_amt = 0;
                    debt_amt = 0;
                    total_int = 0;

                    for(let i = 0; i < t; i++)
                    {
                        int_gain = 0;
                        for(let j = 0; j < 12; j++)
                        {
                            // int_gain = (prev * (Math.pow((1 + r/(n*100)), (j + 1))));
                            int_gain = (prev * r)/(100*12);
                            amt = int_gain + prev;
                            prev = amt;
                            total_int += int_gain;
                            // console.log(amt);
                        }
                        // console.log(total_int);
                        debt_interest[i] = total_int;
                        debt_amt =  debt_interest[i];


                        equity_interest[i] = (equity_amt + ((P * r)/(100)));
                        equity_amt =  equity_interest[i];
                    }
                    // console.log(debt_interest);
                    // console.log(equity_interest);


                    // CHART

                    if (myChart2) {
                        myChart2.destroy();
                    }

                    // Setup labels for the X-axis (years)
                    const labels = Array.from({length: t}, (_, i) => `Year ${i + 1}`);

                    // Create the chart
                    const ctx = document.getElementById('myChart2').getContext('2d');
                    myChart2 = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [
                                {
                                    label: 'Debt Investment',
                                    data: debt_interest,
                                    borderColor: 'rgba(75, 192, 192, 1)',
                                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                    fill: false,
                                    tension: 0.1
                                },
                                {
                                    label: 'Equity Investment',
                                    data: equity_interest,
                                    borderColor: 'rgba(153, 102, 255, 1)',
                                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                                    fill: false,
                                    tension: 0.1
                                }
                            ]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                x: {
                                    title: {
                                        display: true,
                                        text: 'Year'
                                    }
                                },
                                y: {
                                    title: {
                                        display: true,
                                        text: 'Amount ($)'
                                    },
                                    beginAtZero: true
                                }
                            }
                        }
                    });

                }

            </script>

    </body>
</html>
