<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>

        <?php
        echo "CALCULATORS";
        ?>

        <h5>NET PROCEEDS</h5>

        <input type="number" id="sale_price1" placeholder="Enter sale price"> </input>
        <input type="number" id="total_cost" placeholder="Enter total cost"> </input>
        <button type="submit" onClick="net_proceeds()"> Calculate </button>
        <p id="Net_proceed_result"></p>

        <script>
            function net_proceeds()
            {
                sale_price1 = document.getElementById("sale_price1").value;
                total_cost = document.getElementById("total_cost").value;
                if(sale_price1 < 0)
                {
                    document.getElementById("Net_proceed_result").innerHTML = "Sale price cannot be negative";
                }
                else if(total_cost < 0)
                {
                    document.getElementById("Net_proceed_result").innerHTML = "Total cost cannot be negative";
                }
                else
                {
                    net_proceed =  sale_price1 - total_cost;
                    document.getElementById("Net_proceed_result").innerHTML = "Net Proceeds: " + net_proceed;
                    if (sale_price1 < total_cost)
                    {
                        document.getElementById("Net_proceed_result").innerHTML = "Net Proceeds: " + net_proceed + " <br>This would result in a loss!";
                    }
                }
                
                // console.log(net_proceeds);
                document.getElementById("sale_price1").value = '';
                document.getElementById("total_cost").value = '';
            }
        </script>



        <!-- New Net Proceeds -->

        <p id="net_proceeds_result"></p>

        <label> Estimated Closing Date:  </label>
        <input type="date" id="closing_date" placeholder="Closing Date"> 
        <p id="cd"></p>
        <label> Sale Price: $</label>
        <input type="number" id="sale_price" placeholder="Sale Price"> 
        <p id="sp"></p> <br>

        <label> MORTGAGE: </label> <br>
        <label> Mortgage Balance: $</label>
        <input type="number" id="mortgage_balance" placeholder="Mortgage Balance"> 
        <p id="mb"></p>
        <label> Mortgage Interest Rate: </label>
        <input type="number" id="interest_rate" placeholder="Mortgage Interest Rate"> 
        <p id="intr"></p>
        <label> Day Payment is Due: </label>
        <input type="date" id="day_payment_due" placeholder="Day Payment is Due"> 
        <p id="dued"></p>
        <label> Pre-payment Penalty: $</label>
        <input type="number" id="pre_payment_penalty" placeholder="Pre-payment Penalty"> 
        <p id="prep"></p>
        <label id="accured_interest_mortgage"> </label> <br> <br>

        <label> ESCROW </label> <br>
        <label> Annual Property Tax: $</label>
        <input type="number" id="annual_property_tax" placeholder="Annual Property Tax"> 
        <p id="prop_tax"></p>
        <label> Property Tax Paid Through: </label> 
        <input type="date" id="property_tax_paid_through" placeholder="Property Tax Paid Through"> 
        <p id="tax_paid_through"></p>
        <!-- <label> Annual Homeowners Insurance: $</label> 
        <input type="number" id="annual_homeowner_insurance" placeholder="Annual Homeowner Insurance"> <br>
        <label> Insurance Paid Through: </label> 
        <input type="date" id="insurance_paid_through" placeholder="Insurance Paid Through"> <br> -->
        <label id="accured_interest_escrow"> </label> <br> <br>

        <label> REAL-ESTATE FEES <label> <br>
        <label> Other: </label>
        <input type="number" id="other1" placeholder="Other Percentage" >  
        <p id="oth1"></p>
        <label> Other: </label>
        <input type="number" id="other2" placeholder="Other Percentage" >  
        <p id="oth2"></p>
        <label> Transfer Tax: </label>
        <input type="number" id="transfer_tax" placeholder="Transfer Tax Percentage" >  
        <p id="tran"></p>
        <label id="accured_interest_estate_fees"> </label> <br> <br>

        <label> MISCELLANEOUS </label> <br>

        <label> Closing Fees: $</label>
        <input type="number" id="closing_fees" placeholder="Closing Fees" > 
        <p id="cf"></p> 
        <label> Revenue Stamp: $</label>
        <input type="number" id="revenue_stamp" placeholder="Revenue Stamp" > 
        <p id="rs"></p>
        <label> Title Policy: $</label>
        <input type="number" id="title_policy" placeholder="Title Policy" > 
        <p id="tp"></p>
        <label> Attorney Fees: $</label>
        <input type="number" id="attorney_fees" placeholder="Attorney Fees" > 
        <p id="af"></p>
        <label> Recording Fees: $</label>
        <input type="number" id="recording_fees" placeholder="Recording Fees" > 
        <p id="rf"> </p>
        <label> Repair Allowance: $</label>
        <input type="number" id="repair_allowance" placeholder="Repair Allowance" > 
        <p id="ra"> </p>
        <label> Home Warranty: $</label>
        <input type="number" id="home_warranty" placeholder="Home Warranty" > 
        <p id="hw"></p>
        <label> Survey Fees: $</label>
        <input type="number" id="survey_fees" placeholder="Survey Fees" > 
        <p id="sf"></p>
        <label> Appraisal Fees: $</label>
        <input type="number" id="appraisal_fee" placeholder="Appraisal Fees" > 
        <p id="apf"></p>
        <label> Termite Inspection: $</label>
        <input type="number" id="termite_inspection" placeholder="Termite Inspection" > 
        <p id="ti"></p>
        <label> Other: $</label>
        <input type="number" id="other3" placeholder="Other Percentage" >  
        <p id="o3"></p>
        <label> Other: $</label>
        <input type="number" id="other4" placeholder="Other Percentage" >  
        <p id="o4"></p>
        <label> Other: $</label>
        <input type="number" id="other5" placeholder="Other Percentage" >  
        <p id="o5"></p>
        <label id="accured_interest_misc"> </label> <br> <br>

        <button type="submit" onclick="calculate_net_proceeds()"> Calculate </button>



        <script> 
            function calculate_net_proceeds() 
            {
                
                const today = new Date();
                today.setHours(0,0,0,0);

                document.getElementById("sale_price").defaultValue = 0;
                selling_price =  document.getElementById("sale_price").value;
                if(selling_price < 0)
                {
                    document.getElementById("sp").innerHTML = "Error:  Sale Price cannot be negative";
                }
                if(selling_price >= 0)
                {
                    document.getElementById("sp").innerHTML = "";
                }
                document.getElementById("closing_date").defaultValue = today;
                closing  = document.getElementById("closing_date").value;
                const closing_date =  new Date(closing);
                if(closing_date < today)
                {
                    document.getElementById("cd").innerHTML = "Error:  Closing Date cannot be in the past";
                }
                if(closing_date >= today)
                {
                    document.getElementById("cd").innerHTML = "";
                }

                // MORTGAGE PART:
                document.getElementById("mortgage_balance").defaultValue = 0;
                document.getElementById("interest_rate").defaultValue = 0;
                document.getElementById("day_payment_due").defaultValue = "2000-01-01";
                document.getElementById("pre_payment_penalty").defaultValue = 0;
                flag = true;

                mortgage_balance =  parseFloat(document.getElementById("mortgage_balance").value);
                if(mortgage_balance < 0)
                {
                    document.getElementById("mb").innerHTML = "Error:  Mortgage Balance cannot be negative";
                    flag = false;
                }
                if(mortgage_balance >= 0)
                {
                    document.getElementById("mb").innerHTML = "";
                    flag = true;
                }
                interest_rate = parseFloat(document.getElementById("interest_rate").value);
                if(interest_rate < 0)
                {
                    document.getElementById("intr").innerHTML = "Error:  Interest Rate cannot be negative";
                    flag = false;
                }
                if(interest_rate >= 0)
                {
                    document.getElementById("intr").innerHTML = "";
                    flag = true;
                }
                day_due_date =  document.getElementById("day_payment_due").value;
                const selected_date = new Date(day_due_date);
                if (selected_date < today)
                {
                    document.getElementById("dued").innerHTML = "Error: Selected Date is in the past";
                    flag = false;
                }
                if (selected_date >= today)
                {
                    document.getElementById("dued").innerHTML = "";
                    flag = true;
                }
                pre_payment_penalty = parseFloat(document.getElementById("pre_payment_penalty").value);
                if(pre_payment_penalty < 0)
                {
                    document.getElementById("prep").innerHTML = "Error:  Pre-Payment Penalty cannot be negative";
                    flag = false;
                }
                if(pre_payment_penalty >= 0)
                {
                    document.getElementById("mb").innerHTML = "";
                    flag = true;
                }
                number_of_days = (closing_date - selected_date)/ (1000 * 60 * 60 * 24);
                // console.log(closing_date);
                // console.log(selected_date);
                // console.log(number_of_days);
                // const today = new Date();
                // today.setHours(0,0,0,0);
                // const selected_date = new Date(day_due_date);
                // console.log(selected_date);
                // console.log(today);
                // console.log(number_of_days);
                interest_per_year = (mortgage_balance *  interest_rate/100);
                interest_per_day = interest_per_year/365;
                total_interest = pre_payment_penalty + (interest_per_day * number_of_days);
                
                
                if (flag == true)
                {
                    document.getElementById("accured_interest_mortgage").innerHTML = "Total MORTGAGE INTEREST = $" + total_interest.toFixed(2);
                }
                if(flag == false)
                {
                    document.getElementById("accured_interest_mortgage").innerHTML = "";
                }


                // ESCROW PART:
                document.getElementById("annual_property_tax").defaultValue = 0;
                document.getElementById("property_tax_paid_through").defaultValue = "2000-01-01";
                flag = true;
                annual_property_tax = parseFloat(document.getElementById("annual_property_tax").value);
                if(annual_property_tax < 0)
                {
                    document.getElementById("prop_tax").innerHTML = "Error:  Annual Property Tax cannot be negative";
                    flag = false;
                }
                if(annual_property_tax >= 0)
                {
                    document.getElementById("prop_tax").innerHTML = "";
                    flag = true;
                }
                property_tax_paid_through = new Date(document.getElementById("property_tax_paid_through").value);
                // if(property_tax_paid_through > today)
                number_days = today - property_tax_paid_through;
                number_days = number_days / (1000 * 60 * 60 * 24);
                total_tax = (annual_property_tax/365) *  number_days;
                if(flag == true)
                {
                    document.getElementById("accured_interest_escrow").innerHTML = "Total ESCROW INTEREST = $" + total_tax.toFixed(2);
                }
                if(flag == false)
                {
                    document.getElementById("accured_interest_escrow").innerHTML = "";
                }



                // REAL_ESTATE FEE:
                document.getElementById("other1").defaultValue = 0;
                document.getElementById("other2").defaultValue = 0;
                document.getElementById("transfer_tax").defaultValue = 0;
                flag = true;

                other1 =  parseFloat(document.getElementById("other1").value);
                if(other1 < 0)
                {
                    document.getElementById("oth1").innerHTML = "Error:  Other1 cannot be negative";
                    flag = false;
                }
                if(other1 >= 0)
                {
                    document.getElementById("oth1").innerHTML = "";
                    flag = true;
                }
                other2 = parseFloat(document.getElementById("other2").value);
                if(other2 < 0)
                {
                    document.getElementById("oth2").innerHTML = "Error:  Other2 cannot be negative";
                    flag = false;
                }
                if(other2 >= 0)
                {
                    document.getElementById("oth2").innerHTML = "";
                    flag = true;
                }
                transfer_tax = parseFloat(document.getElementById("transfer_tax").value);
                if(transfer_tax < 0)
                {
                    document.getElementById("tran").innerHTML = "Error:  Transfer Tax cannot be negative";
                    flag = false;
                }
                if(transfer_tax >= 0)
                {
                    document.getElementById("tran").innerHTML = "";
                    flag = true;
                }
                total_estate_fees = other1 + other2 +  transfer_tax;
                if(flag == true)
                {
                    document.getElementById("accured_interest_estate_fees").innerHTML = "Total REAL- ESTATE FEES: $" +  total_estate_fees.toFixed(2);
                }
                if (flag == false)
                {
                    document.getElementById("accured_interest_estate_fees").innerHTML = "";
                }
                



                // MISC PART:
                document.getElementById("closing_fees").defaultValue = 0;
                document.getElementById("revenue_stamp").defaultValue = 0;
                document.getElementById("title_policy").defaultValue = 0;
                document.getElementById("attorney_fees").defaultValue = 0;
                document.getElementById("recording_fees").defaultValue = 0;
                document.getElementById("repair_allowance").defaultValue = 0;
                document.getElementById("home_warranty").defaultValue = 0;
                document.getElementById("survey_fees").defaultValue = 0;
                document.getElementById("appraisal_fee").defaultValue = 0;
                document.getElementById("termite_inspection").defaultValue = 0;
                document.getElementById("other3").defaultValue = 0;
                document.getElementById("other4").defaultValue = 0;
                document.getElementById("other5").defaultValue = 0;
                flag = true;

                closing_fees = parseFloat(document.getElementById("closing_fees").value);
                if (closing_fees < 0)
                {
                    document.getElementById("cf").innerHTML = "Error: Closing Fees cannot be negative";
                    flag = false;
                }
                if  (closing_fees >= 0)
                {
                    document.getElementById("cf").innerHTML = "";
                    flag = true;
                }

                revenue_stamp = parseFloat(document.getElementById("revenue_stamp").value);
                if (revenue_stamp < 0)
                {
                    document.getElementById("rs").innerHTML = "Error: Revenue Stamp cannot be negative";
                    flag = false;
                }
                if (revenue_stamp >= 0)
                {
                    document.getElementById("rs").innerHTML = "";
                    flag = true;
                }

                title_policy = parseFloat(document.getElementById("title_policy").value);
                if (title_policy < 0)
                {
                    document.getElementById("tp").innerHTML = "Error: Title Policy cannot be negative";
                    flag = false;
                }
                if (title_policy >= 0)
                {
                    document.getElementById("tp").innerHTML = "";
                    flag = true;
                }

                attorney_fees = parseFloat(document.getElementById("attorney_fees").value);
                if (attorney_fees < 0)
                {
                    document.getElementById("af").innerHTML = "Error: Attorney Fees cannot be negative";
                    flag = false;
                }
                if (attorney_fees >= 0)
                {
                    document.getElementById("af").innerHTML = "";
                    flag = true;
                }

                recording_fees = parseFloat(document.getElementById("recording_fees").value);
                if (recording_fees < 0)
                {
                    document.getElementById("rf").innerHTML = "Error: Recording Fees cannot be negative";
                    flag = false;
                }
                if (recording_fees >= 0)
                {
                    document.getElementById("rf").innerHTML = "";
                    flag = true;
                }

                repair_allowance = parseFloat(document.getElementById("repair_allowance").value);
                if (repair_allowance < 0)
                {
                    document.getElementById("ra").innerHTML = "Error: Repair Allowance cannot be negative";
                    flag = false;
                }
                if (repair_allowance >= 0)
                {
                    document.getElementById("ra").innerHTML = "";
                }

                home_warranty = parseFloat(document.getElementById("home_warranty").value);
                if (home_warranty < 0)
                {
                    document.getElementById("hw").innerHTML = "Error: Home Warranty cannot be negative";
                    flag = false;
                }
                if (home_warranty >= 0)
                {
                    document.getElementById("hw").innerHTML = "";
                    flag = true;
                }

                survey_fees = parseFloat(document.getElementById("survey_fees").value);
                if (survey_fees < 0)
                {
                    document.getElementById("sf").innerHTML = "Error: Survey Fees cannot be negative";
                    flag = false;
                }
                if (survey_fees >= 0)
                {
                    document.getElementById("sf").innerHTML = "";
                    flag = true;
                }
 
                appraisal_fee = parseFloat(document.getElementById("appraisal_fee").value);
                if (appraisal_fee < 0)
                {
                    document.getElementById("apf").innerHTML = "Error: Appraisal Fee cannot be negative";
                    flag = false;
                }
                if (appraisal_fee >= 0)
                {
                    document.getElementById("apf").innerHTML = "";
                    flag = true;
                }

                termite_inspection = parseFloat(document.getElementById("termite_inspection").value);
                if (termite_inspection < 0)
                {
                    document.getElementById("ti").innerHTML = "Error: Termite Inspection cannot be negative";
                    flag = false;
                }
                if (termite_inspection >= 0)
                {
                    document.getElementById("ti").innerHTML = "";
                    flag = true;
                }

                other1 = parseFloat(document.getElementById("other3").value);
                if (other1 < 0)
                {
                    document.getElementById("o3").innerHTML = "Error: Other cannot be negative";
                    flag = false;
                }
                if (other1 >= 0)
                {
                    document.getElementById("o3").innerHTML = "";
                    flag = true;
                }

                other2 = parseFloat(document.getElementById("other4").value);
                if (other2 < 0)
                {
                    document.getElementById("o4").innerHTML = "Error: Other cannot be negative";
                    flag = false;
                }
                if (other2 >= 0)
                {
                    document.getElementById("o4").innerHTML = "";
                    flag = true;
                }

                other3 = parseFloat(document.getElementById("other5").value);
                if (other3 < 0)
                {
                    document.getElementById("o5").innerHTML = "Error: Other cannot be negative";
                    flag = false;
                }
                if (other3 >= 0)
                {
                    document.getElementById("o5").innerHTML = "";
                    flag = true;
                }


                misc_total = closing_fees +  
                            revenue_stamp + 
                            title_policy + 
                            attorney_fees + 
                            recording_fees + 
                            repair_allowance + 
                            home_warranty + 
                            survey_fees + 
                            appraisal_fee + 
                            termite_inspection +
                            other1 +
                            other2 +
                            other3;

                if (flag === true)
                {
                    document.getElementById("accured_interest_misc").innerHTML = "Total MISCELLANEOUS = $" + misc_total.toFixed(2);
                }
                flag = true;


                final_cost = selling_price - total_interest + total_tax - total_estate_fees - misc_total;
                document.getElementById("net_proceeds_result").innerHTML = "FINAL COST = $" + final_cost.toFixed(2);
                
            }
        </script>


        



























        <br> <br> <br> <br>
        <h2> RENT vs BUY</h2>
        <br>
        <label> Purchase Price : $ </label>
        <input type="number" id="purchase_price" placeholder="Purchase Price">
        <p></p>
        <label> Interest Rate (%): </label>
        <input type="number" id="buy_interest_rate" placeholder="Interest Rate (%)">
        <p></p>
        <label> Term in Years:  </label>
        <input type="number" id="term_years" placeholder="Term in Years">
        <p></p>
        <label> Downpayment : $ </label>
        <input type="number" id="down" placeholder="Down Payment">
        <p></p>
        <label id="loan_amount">  </label>
        <p ></p> 
        <label id="pmi">  </label>
        <!-- <input type="number" id="pmi" placeholder="Monthly PMI"> -->
        <p></p> <br>

        <h4> <b> Monthly Payment (PI) :</b> </h4>
        <p></p>
        <label> Property Tax Rate (%) : </label>
        <input type="number" id="tax_rate" placeholder="Property Tax Rate">
        <p></p>
        <label> Home Insurance (%) : </label>
        <input type="number" id="insurance_rate" placeholder="Home Insurance Rate">
        <p></p>
        <label> Maintainance Fee : $ </label>
        <input type="number" id="maintainance_fee" placeholder="Maintainance Fee">
        <p></p>
        <label> Report Amortization : </label>
        <input type="radio" id="Annually" name="a">
        <label for="Annually"> Annually</label>
        <input type="radio" id="Monthly" name="a">
        <label for="Monthly"> Monthly</label>
        <p></p>
        <label id="piti">  </label>
        <p></p> <br>

        <h4> Down Payments and  Closing Costs : </h4>
        <label> Cash on Hand : $ </label>
        <input type="number" id="cash_on_hand" placeholder="Cash on Hand">
        <p></p>
        <label> Loan Origination (%) :  </label>
        <input type="number" id="loan_origination" placeholder="Loan Origination (%)">
        <p></p>
        <label> Points Paid : </label>
        <input type="number" id="points_paid" placeholder="Points Paid">
        <p></p>
        <label> Other Closing Costs : $ </label>
        <input type="number" id="other_closing_costs" placeholder="Other Closing Costs">
        <p></p>
        <label id="cash_to_close" >  </label>
        <p></p> <br>

        <h4> Rent, Taxes, and Inflation : </h4>
        <label> Monthly Rent Payment : $ </label>
        <input type="number" id="rent_payment" placeholder="Monthly Rent Payment">
        <p></p>
        <label> After-tax Investment Return (%) : </label>
        <input type="number" id="investment_return" placeholder="After-tax Investment Return">
        <p></p>
        <!-- <label> Income Tax Rate (%) : </label>
        <input type="number" id="tax_rate_investment" placeholder="Income Tax Rate (%)">
        <p></p> -->
        <label>  Inflation Rate (%) : </label>
        <input type="number" id="inflation_rate" placeholder="Inflation Rate (%)">
        <p></p>
        <label> Home Appreciates at (%) : </label>
        <input type="number" id="home_appreciation" placeholder="Home Appreciates at %">
        <p></p>
        <!-- <label> Other (%) : </label>
        <input type="number" id="other_investment" placeholder="Other (%)">
        <p></p> -->

        <button type="submit" onclick="buy_rent_calculator()"> Calculate </button>


        <!-- <canvas id="myChart" width="400" height="400"></canvas> -->
        <canvas id="myChart" width="800" height="300" style="display: block; margin: 0 auto;"></canvas>






        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script> 
            let myChart = null;
            function buy_rent_calculator() 
            {
                (document.getElementById("purchase_price").defaultValue = 0);
                (document.getElementById("buy_interest_rate").defaultValue = 0);
                (document.getElementById("term_years").defaultValue = 0);
                // (document.getElementById("pmi").defaultValue = 0);
                (document.getElementById("down").defaultValue = 0);
                (document.getElementById("tax_rate").defaultValue = 0);
                (document.getElementById("insurance_rate").defaultValue = 0);
                (document.getElementById("maintainance_fee").defaultValue = 0);
                amortization = "choose term";
                if (document.getElementById("Monthly").checked)
                {
                    amortization = "monthly";
                }
                else if (document.getElementById("Annually").checked)
                {
                    amortization = "annually";
                }
                (document.getElementById("cash_on_hand").defaultValue = 0);
                (document.getElementById("loan_origination").defaultValue = 0);
                (document.getElementById("points_paid").defaultValue = 0);
                (document.getElementById("other_closing_costs").defaultValue = 0);
                (document.getElementById("rent_payment").defaultValue = 0);
                (document.getElementById("investment_return").defaultValue = 0);
                // (document.getElementById("tax_rate_investment").defaultValue = 0);
                (document.getElementById("inflation_rate").defaultValue = 0);
                (document.getElementById("home_appreciation").defaultValue = 0);
                // (document.getElementById("other_investment").defaultValue = 0);



                purchase_price = parseFloat(document.getElementById("purchase_price").value);
                interest_rate =  parseFloat(document.getElementById("buy_interest_rate").value);
                term_years =  parseFloat(document.getElementById("term_years").value);
                // monthly_pmi = parseFloat(document.getElementById("pmi").value);
                down_payment =  parseFloat(document.getElementById("down").value);
                property_tax_rate = parseFloat(document.getElementById("tax_rate").value);
                home_insurance =  parseFloat(document.getElementById("insurance_rate").value);
                maintainance_fee = parseFloat(document.getElementById("maintainance_fee").value);
                amortization = "choose term";
                if (document.getElementById("Monthly").checked)
                {
                    amortization = "monthly";
                }
                else if (document.getElementById("Annually").checked)
                {
                    amortization = "annually";
                }
                cash_on_hand =  parseFloat(document.getElementById("cash_on_hand").value);
                loan_origination =  parseFloat(document.getElementById("loan_origination").value);
                points_paid =   parseFloat(document.getElementById("points_paid").value);
                other_closing_costs =  parseFloat(document.getElementById("other_closing_costs").value);
                monthly_rent =  parseFloat(document.getElementById("rent_payment").value);
                investment_return = parseFloat(document.getElementById("investment_return").value);
                // income_tax =  parseFloat(document.getElementById("tax_rate_investment").value);
                inflation_rate =  parseFloat(document.getElementById("inflation_rate").value);
                home_appreciation =  parseFloat(document.getElementById("home_appreciation").value);
                // other_investment =  parseFloat(document.getElementById("other_investment").value);

                // console.log(purchase_price);
                // console.log(interest_rate);
                // console.log(term_years);
                // // console.log(monthly_pmi);
                // console.log(down_payment);
                // console.log(property_tax_rate);
                // console.log(home_insurance);
                // console.log(maintainance_fee);
                // console.log(amortization);
                // console.log(cash_on_hand);
                // console.log(loan_origination);
                // console.log(points_paid);
                // console.log(other_closing_costs);
                // console.log(monthly_rent);
                // console.log(investment_return);
                // // console.log(income_tax);
                // console.log(inflation_rate);
                // console.log(home_appreciation);
                // // console.log(other_investment);

                loan_amount = (purchase_price - down_payment);
                document.getElementById("loan_amount").innerHTML = "<b> Loan Amount : $ </b>" + loan_amount;
                // console.log(Math.pow(2,3));

                pmi = loan_amount * (((interest_rate/100) * (Math.pow(1 + (interest_rate/100), term_years)) / ((Math.pow(1 + (interest_rate/100), term_years)) - 1 )));
                document.getElementById("pmi").innerHTML = "<b> Monthly PMI : $ </b>" + pmi;

                cash_to_close = down_payment + cash_on_hand + ((loan_origination/100) * loan_amount) + points_paid + other_closing_costs;
                document.getElementById("cash_to_close").innerHTML = "<b> Cash to Close : $ </b>" +  cash_to_close;

                piti = pmi + (((property_tax_rate/100) * purchase_price)/12) + (((home_insurance/100) * purchase_price)/12) + maintainance_fee;
                document.getElementById("piti").innerHTML = "<b> PITI : $ </b>" + piti;


                // monthly_payment_PI = (property_tax_rate/100 * purchase_price) + (home_insurance/100 * purchase_price) + maintainance_fee;
                // down_payment = cash_on_hand + (loan_origination/100 *  purchase_price) + points_paid + other_closing_costs;
                // rent_tax_inflation = monthly_rent + investment_return + (income_tax/100 * monthly_rent) + (inflation_rate/100 *  monthly_rent) + 
                //                     (home_appreciation/100 * monthly_rent) + (other_investment/100 * monthly_rent);
                

                rent_over_time = [];
                home_over_time = [];

                for(let i = 0; i < 10; i++)
                {
                    rent_over_time[i] = monthly_rent * Math.pow((1 + inflation_rate/100), i);
                    home_over_time[i] = purchase_price * Math.pow((1 + home_appreciation/100), i);
                }


                // RENT
                total_expense_rent = [];

                for(let i = 0; i <  10; i++)
                {
                    total_expense_rent[i] = -((monthly_rent * Math.pow((1 + inflation_rate/100), i)) * 12) + (investment_return/100 * down_payment);
                }

                net_worth_rent = [];
                for(let i = 0; i < 10; i++)
                {
                    net_worth_rent[i] =  down_payment + (total_expense_rent[i]);
                }





                // BUY:
                total_expense_buy = [];
                purchase = purchase_price;

                for(let j = 0; j < 10; j++)
                {
                    total_expense_buy[j] = (home_appreciation/100 * purchase) - (interest_rate/100 * (purchase - down_payment)) - (property_tax_rate/100 * purchase) - (home_insurance/100 * purchase) -  maintainance_fee;
                    purchase =  purchase * Math.pow((1 + home_appreciation/100), j);
                }

                net_worth_buy = [];
                for(let j = 0; j < 10; j++)
                {
                    net_worth_buy[j] =  down_payment + (total_expense_buy[j]);
                }

                
                console.log(net_worth_buy);
                console.log(net_worth_rent);












                // console.log(rent_over_time);
                // console.log(home_over_time);
                

                if (myChart) {
                    myChart.destroy();
                }



                // Setup labels for the X-axis (years)
                const labels = Array.from({length: 10}, (_, i) => `Year ${i + 1}`);

                // Create the chart
                const ctx = document.getElementById('myChart').getContext('2d');
                myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [
                            {
                                label: 'Networth - Rent',
                                data: net_worth_rent,
                                borderColor: 'rgba(75, 192, 192, 1)',
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                fill: false,
                                tension: 0.1
                            },
                            {
                                label: 'Networth - Buy',
                                data: net_worth_buy,
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
                                    text: 'Networth Amount ($)'
                                },
                                beginAtZero: true
                            }
                        }
                    }
                });
            }
        </script>







        





        <br> <br> <br> <br>
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









        <br>
        <br>




    </body>
</html>