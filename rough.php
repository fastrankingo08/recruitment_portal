<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="update-interview-status.php" method="post">
        <div class="row p-3">
            <input type="hidden" class="form-control" name="candidate_id" value="<?php echo $userId; ?>">
            <div class="col-md-6">
                <label class="form-label">Conducted Date<span class="error_msg">*</span></label>
                <input type="date" class="form-control" name="round2_conducted_date" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Conducted By<span class="error_msg">*</span></label>
                <input type="text" class="form-control" name="round2_conducted_by" required>
            </div>

            <label class="form-label mt-3">Round 3 Result<span class="error_msg">*</span></label>

            <select class="form-select" name="round2_result" id="round2_result" required>
                <option value="On Hold">Hold</option>
                <option value="Passed to Round IV">Passed to Round IV</option>
                <option value="fail">Failed</option>
                <option value="On Hold">Hold</option>
                <option value="Offered">Offered</option>
            </select>

            <!-- Additional fields for the next round -->
            <div class="hidden-fields" style="display: none;">
                <label class="form-label mt-3">Next Round Date<span class="error_msg">*</span></label>
                <input type="date" class="form-control" name="next_round_date" >

                <label class="form-label mt-3">Next Round Time<span class="error_msg">*</span></label>
                <input type="time" class="form-control" name="next_round_time" >

                <label class="form-label mt-3">Next Round Interviewer<span class="error_msg">*</span></label>
                <input type="text" class="form-control" name="next_round_interviewer" > 
            </div>

            <label class="form-label mt-3">Add Comment<span class="error_msg">*</span></label>
            <input type="text" class="form-control" name="round2_comment" required>
            <button class="text-center mx-auto mt-5 button btn-dark px-5 py-2 radius-10" style="height: auto; width:auto; font-size:18px">SUBMIT</button>
        </div>
    </form>

    <script>
    document.getElementById('round2_result').addEventListener('change', function () {
        var hiddenFields = document.querySelector('.hidden-fields');
        var nextRoundDate = document.querySelector('[name="next_round_date"]');
        var nextRoundTime = document.querySelector('[name="next_round_time"]');
        var nextRoundInterviewer = document.querySelector('[name="next_round_interviewer"]');

        if (this.value === 'Passed to Round IV') {
            hiddenFields.style.display = 'block';
            nextRoundDate.setAttribute('required', true);
            nextRoundTime.setAttribute('required', true);
            nextRoundInterviewer.setAttribute('required', true);
        } else {
            hiddenFields.style.display = 'none';
            nextRoundDate.removeAttribute('required');
            nextRoundTime.removeAttribute('required');
            nextRoundInterviewer.removeAttribute('required');
        }
    });
</script>

</body>

</html>