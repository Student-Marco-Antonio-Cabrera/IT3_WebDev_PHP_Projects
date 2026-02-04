<?php
/**
 * TICKET #002: THE LOGIC ENGINE
 * Assignee: Junior Software Engineer
 * * 📝 INSTRUCTIONS:
 * 1. Enable Strict Typing first.
 * 2. Declare your Constants and Variables.
 * 3. Perform all financial calculations.
 * * TIP FOR STUDENTS: 
 * To display a float as money (e.g., ₱35,000.50), 
 * use number_format($variable, 2).
 * example: echo "₱" . number_format($variable, 2); 
 */

// START YOUR PHP LOGIC HERE
    declare(strict_types=1); 

const TAX_RATE = 0.12;
const PROCESSING_FEE = 500;


$monthly_salary = 2000.00;
$loan_amount = 1000.00;   
$years_to_pay = 2;

$interest_per_year = 0.05;
$interest_total = $loan_amount * $interest_per_year * $years_to_pay;
$gross_loan = $loan_amount + $interest_total + PROCESSING_FEE;

$total_months = $years_to_pay * 12;
$amortization = ($total_months > 0) ? ($gross_loan / $total_months) : 0;

$tax_deduction = $monthly_salary * TAX_RATE;
$net_take_home = $monthly_salary - $tax_deduction - $amortization;

$threshold = $monthly_salary * 0.30;
$spaceship_result = $amortization <=> $threshold;

$identity_check = (1000 === "1000") ? "MATCH" : "MISMATCH";
// END YOUR PHP LOGIC HERE
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate FinTech Dashboard - Ticket #002</title>
    <style>
        :root { 
            --navy: #1e3799; 
            --accent: #4a69bd; 
            --success: #079992; 
            --error: #eb2f06;
            --bg: #f1f2f6; 
        }

        body { 
            font-family: 'Inter', -apple-system, sans-serif; 
            background: var(--bg); 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            min-height: 100vh; 
            margin: 0; 
        }

        .dashboard-container { 
            background: #ffffff; 
            padding: 40px; 
            border-radius: 24px; 
            box-shadow: 0 20px 40px rgba(30, 55, 153, 0.1); 
            width: 100%; 
            max-width: 480px; 
            position: relative;
            overflow: hidden;
        }

        .dashboard-container::before {
            content: "";
            position: absolute;
            top: 0; left: 0; width: 100%; height: 8px;
            background: linear-gradient(90deg, var(--navy), var(--accent));
        }

        .header { 
            text-align: left;
            margin-bottom: 30px; 
        }

        .header h2 { 
            margin: 0; 
            color: var(--navy); 
            font-size: 1.6em;
            text-transform: uppercase;
            letter-spacing: -0.5px;
        }

        .status-badge {
            display: inline-block;
            background: rgba(7, 153, 146, 0.1);
            color: var(--success);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75em;
            font-weight: 700;
            margin-top: 8px;
        }

        .info-grid {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .data-card {
            background: #f8f9fa;
            padding: 16px;
            border-radius: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid #edf2f7;
        }

        .label { 
            font-size: 0.85em;
            color: #718096;
            font-weight: 600;
            text-transform: uppercase;
        }

        .value { 
            font-weight: 800; 
            color: var(--navy); 
            font-family: 'JetBrains Mono', monospace;
        }

        .summary-box {
            margin-top: 25px;
            background: var(--navy);
            padding: 24px;
            border-radius: 16px;
            color: white;
            box-shadow: 0 10px 20px rgba(30, 55, 153, 0.2);
        }

        .summary-label {
            font-size: 0.8em;
            opacity: 0.8;
            display: block;
            margin-bottom: 4px;
        }

        .summary-value {
            font-size: 2em;
            font-weight: 900;
            display: block;
        }

        .audit-panel { 
            background: #1a1a1a; 
            color: #d1d8e0; 
            padding: 20px; 
            border-radius: 12px; 
            margin-top: 30px; 
            font-family: 'Fira Code', monospace; 
            font-size: 0.8em;
        }

        .audit-line { margin-bottom: 8px; border-left: 2px solid var(--accent); padding-left: 10px; }
        .audit-key { color: var(--accent); font-weight: bold; }
    </style>
</head>
<body>

    <div class="dashboard-container">
        <div class="header">
            <h2>Financial Engine</h2>
            <span class="status-badge">● SYSTEM_CORE_ACTIVE</span>
        </div>
        
        <div class="info-grid">
            <div class="data-card">
                <span class="label">Monthly Salary</span>
                <span class="value">
                    <!-- Display Value Here -->
                     <?php echo "₱" . number_format($monthly_salary, 2); ?>
                </span>
            </div>

            <div class="data-card">
                <span class="label">Gross Loan</span>
                <span class="value">
                   <!-- Display Value Here -->
                   <?php echo "₱" . number_format($gross_loan, 2); ?>
                </span>
            </div>

            <div class="data-card">
                <span class="label">Amortization</span>
                <span class="value" style="color: var(--error);">
                    <!-- Display Value Here -->
                    <?php echo "₱" . number_format($amortization, 2); ?>
                </span>
            </div>
        </div>

        <div class="summary-box">
            <span class="summary-label">Estimated Net Take-Home</span>
            <div class="summary-value">
               <!-- Display Value Here -->
                <?php echo "₱" . number_format($net_take_home, 2); ?>
            </div>
        </div>

        <div class="audit-panel">
            <div class="audit-line">
                <span class="audit-key">SPACESHIP_OP:</span> <!-- Display Value Here -->
                <?php echo $spaceship_result; ?>
            </div>
            <div class="audit-line">
                <span class="audit-key">IDENTITY_VALIDATION:</span><!-- Display Value Here -->
                <?php echo $identity_check; ?>
            </div>
            <div style="color: #4b6584; margin-top: 10px; font-size: 0.9em;">// SESSION_LOG_TERMINATED</div>
        </div>
    </div>

</body>
</html>